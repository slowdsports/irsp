<?php
//$baseUrl = "https://www.movistarplus.es/liga-santander/calendario-liga-santander";
$file = $baseUrl;
$file = file_get_contents($baseUrl);
// REGEX
preg_match_all('(fecha-calendar[\w\W]*?day">(.*?)<[\w\W]*?week">(.*?)<[\w\W]*?hour">(.*?)<[\w\W]*?src="(.*?)"[\w\W]*?alt="Escudo(.*?)"[\w\W]*?src="(.*?)"[\w\W]*?alt="Escudo(.*?)"[\w\W]*?class="channels"([\w\W]*?)<\/ul>)', $file, $datos, PREG_SET_ORDER);

foreach ($datos as $dato) {
    // CONDITIONS
    $dia = $dato[1];
    $dia = str_replace(' ', '', $dia);
    $dia = ucfirst($dia);
    $fecha = str_replace("/", "-", $dato[2]);
    $dd = substr($fecha, 3, 2);
    $mm = substr($fecha, 0, 2);
    $hora = str_replace("h", "", $dato[3]);
    $hora = $hora - 8;
    // Formato
    //2022-04-18 00:00:00
    $fecha = date("Y") . "-" . $dd . "-" . $mm . " " . $hora . ":00";
    $logoL = $dato[4];
    $LogoL = str_replace(' ', '', $LogoL);
    $local = $dato[5];
    $local = strtolower($local);
    $local = str_replace(' ', '', $local);
    $LogoV = $dato[6];
    $LogoV = str_replace(' ', '', $LogoV);
    $visita = $dato[7];
    $visita = strtolower($visita);
    $visita = str_replace(' ', '', $visita);
    // Canales
    preg_match_all('(alt="(.*?)")', $dato[8], $canales);
    $canal = $canales[1][0];
    $canal2 = $canales[1][1];

    //Limpiar entradas con caracteres desconocidosS
    $encoding = mb_detect_encoding($local);
    if ($encoding !== 'ASCII') {
        $enc = mb_detect_encoding($local);
        $local = iconv('UTF-8', 'ASCII//IGNORE', $local);
    }
    $encoding2 = mb_detect_encoding($visita);
    if ($encoding2 !== 'ASCII') {
        $enc2 = mb_detect_encoding($visita);
        $visita = iconv('UTF-8', 'ASCII//IGNORE', $visita);
    }
    //echo $local . " vs " . $visita . " -- " . $fecha . "<br>";

    // Equipos & Canales Custom
    // include('teams.php');
    // include('channels.php');

    // Agregamos los campos a la DB
    if (isset($_POST['create'])) {
        $msg = mysqli_query($conn, "INSERT INTO agenda(local,visita,logoL,logoV,canal,canal2,fecha,liga,status) VALUES('" . $local . "','" . $visita . "','" . $logoL . "','" . $LogoV . "','" . $canal . "','" . $canal2 . "','" . $fecha . "','$liga','1')");
        if ($msg) {
            $_SESSION['message'] = "¡Se han agregado los partidos!";
        }
    }
}
// Obtenemos los campos agregados según liga seleccionada
if ($liga == "" || !isset($liga)) {
    $rownda = mysqli_query($conn, "select * from agenda
    INNER JOIN ligas ON agenda.liga = ligas.ligaId where status = '1'");
} elseif ($liga) {
    $rownda = mysqli_query($conn, "select * from agenda
    INNER JOIN ligas ON agenda.liga = ligas.ligaId where liga = '$liga'");
} else {
    $rownda = mysqli_query($conn, "select * from agenda
    INNER JOIN ligas ON agenda.liga = ligas.ligaId where status = '1'");
}
$cnt = 1;
while ($row = mysqli_fetch_array($rownda)) {
?>
    <!-- HTML PRINT -->
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td>
            <img width="50px" src="<?php echo $row['logoL']; ?>" alt="">
            <?php echo $row['local']; ?>
        </td>
        <td>
            <img width="50px" src="<?php echo $row['logoV']; ?>" alt="">
            <?php echo $row['visita']; ?>
        </td>
        <td><?php echo $row['fecha']; ?></td>
        <td><?php echo $row['canal']; ?></td>
        <td><?php echo $row['canal2']; ?></td>
        <td>
            <button type="button" class="btn btn-sm btn-outline-primary btn-icon-text" data-toggle="modal" data-target="#modal<?= $row['id']; ?>">
                <i class="mdi mdi-tooltip-edit btn-icon-prepend"></i>
            </button>
            <a href="?id=<?= $row['id'] ?>" type="button" class="btn btn-sm btn-outline-danger">
                <i class="mdi mdi-delete btn-icon-prepend"></i>
            </a>
        </td>
    </tr>

    <!-- Modal -->
    <div class="modal fade" id="modal<?= $row['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editar <?= $row['local'] ?> vs <?= $row['visita'] ?></h5>
                </div>
                <div class="modal-body">
                    <form method="post" class="forms-sample">
                        <div class="form-group">
                            <input style="visibility: hidden" type="text" class="form-control text-light" id="id" name="id" value="<?= $row['id'] ?>" />
                            <label for="local">Local</label>
                            <input type="text" class="form-control text-light" id="local" name="local" value="<?= $row['local'] ?>" />
                        </div>
                        <div class="form-group">
                            <label for="logoL">Escudo Local</label>
                            <input type="text" class="form-control text-light" id="logoL" name="logoL" value="<?= $row['logoL'] ?>" />
                        </div>
                        <div class="form-group">
                            <label for="visita">Visita</label>
                            <input type="text" class="form-control text-light" id="visita" name="visita" value="<?= $row['visita'] ?>" />
                        </div>
                        <div class="form-group">
                            <label for="logoV">Escudo Visita</label>
                            <input type="text" class="form-control text-light" id="logoV" name="logoV" value="<?= $row['logoV'] ?>" />
                        </div>
                        <div class="form-group">
                            <label for="canal">Canal</label>
                            <input type="text" class="form-control text-light" id="canal" name="canal" value="<?= $row['canal'] ?>" />
                        </div>
                        <div class="form-group">
                            <label for="canal2">Canal 2</label>
                            <input type="text" class="form-control text-light" id="canal2" name="canal2" value="<?= $row['canal2'] ?>" />
                        </div>
                        <div class="form-group">
                            <label for="canal3">Canal 3</label>
                            <input type="text" class="form-control text-light" id="canal3" name="canal3" value="<?= $row['canal3'] ?>" />
                        </div>
                        <div class="form-group">
                            <label for="canal4">Canal 4</label>
                            <select name="canal4" id="canal4">
                                <option value="">Ninguno</option>
                                <?php
                                $canales = mysqli_query($conn, "select * from channels");
                                while ($cha = mysqli_fetch_array($canales)) {
                                ?>
                                    <option <?php if ($cha['channelId'] == $row['canal4']) {
                                                echo "selected";
                                            } ?> value="<?= $cha['channelId'] ?>"><?= $cha['channelName'] ?></option>
                                <? } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="canal5">Canal 5</label>
                            <select name="canal5" id="canal5">
                                <option value="">Ninguno</option>
                                <?php
                                $canales = mysqli_query($conn, "select * from channels");
                                while ($cha = mysqli_fetch_array($canales)) {
                                ?>
                                    <option <?php if ($cha['channelId'] == $row['canal5']) {
                                                echo "selected";
                                            } ?> value="<?= $cha['channelId'] ?>"><?= $cha['channelName'] ?></option>
                                <? } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="canal6">Canal 6</label>
                            <select name="canal6" id="canal6">
                                <option value="">Ninguno</option>
                                <?php
                                $canales = mysqli_query($conn, "select * from channels");
                                while ($cha = mysqli_fetch_array($canales)) {
                                ?>
                                    <option <?php if ($cha['channelId'] == $row['canal6']) {
                                                echo "selected";
                                            } ?> value="<?= $cha['channelId'] ?>"><?= $cha['channelName'] ?></option>
                                <? } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="fecha">Fecha: <br>
                                <?= $row['fecha'] ?>
                            </label>
                            <input type="datetime-local" class="form-control text-light" id="fecha" name="fecha" value="<?= $row['fecha'] ?>" />
                        </div>
                        <div class="form-group">
                            <label for="liga">Liga</label>
                            <select name="liga" id="liga">
                                <?php
                                $ligas = mysqli_query($conn, "select * from ligas");
                                while ($lig = mysqli_fetch_array($ligas)) {
                                ?>
                                    <option <?php if ($lig['ligaId'] == $row['liga']) {
                                                echo "selected";
                                            } ?> value="<?= $lig['ligaId'] ?>"><?= $lig['ligaName'] ?></option>
                                <? } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="status">Estado</label>
                            <select name="status" id="status">
                                <option value="1">Activo</option>
                                <option value="2">Inactivo</option>
                            </select>
                        </div>
                        <button type="submit" id="guardar" name="guardar" class="btn btn-primary me-2">Guardar</button>
                        <button class="btn btn-primary" data-dismiss="modal">Cancelar</button>
                    </form>

                </div>
            </div>
        </div>
    </div>

<?php $cnt = $cnt + 1;
}
?>