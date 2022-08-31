<?php
include('scraper.php');
// CALL URL CUSTOMIZED
//$base = "https://www.futbolenlatv.es/competicion/premier-league";
// get DOM from URL or file
$html = file_get_html($baseUrl);
// MAIN ELEMENT
$juego = $html ->find ('tr');
$fechas = $html ->find ('tr.cabeceraTabla');
// INDEX
$i = 1;
$i2 = 1;
// REGEX
    // foreach ($fechas as $fecha){
    //     $result = $fecha ->find ('td',0)-> plaintext;
    //     echo $result . "<br>";
    // }

foreach ($juego as $nombre){
    // CONDITIONS
    $cabtabla = $nombre ->find('td',0) -> colspan;
    $local = $nombre ->find ('td.local span',0)-> plaintext;
        $local = strtolower($local);
        $local = str_replace(' ', '', $local);
    $logoL = $nombre ->find ('td.local img',0)-> title;
        $logoL = strtolower($logoL);
        $logoL = str_replace(' ', '', $logoL);

    $visita = $nombre ->find ('td.visitante span',0)-> plaintext;
    $visita = strtolower($visita);
    $logoV = $nombre ->find ('td.visitante img',0)-> title;
        $logoV = strtolower($logoV);
        $logoV = str_replace(' ', '', $logoV);
    $tiempo = $nombre ->find ('div[style]',0)-> plaintext;
    $hora = $nombre ->find ('td.hora',0)-> plaintext;
        if ($hora == null) {$hora = "00";}
        // Formato
        //2022-04-18 00:00:00
        $fecha = date("Y") . "-04-01" . $dd. "". $mm . " " .$hora . ":00";
    $canal = $nombre ->find ('td.canales ul li',0)-> title;
    $canal2 = $nombre ->find ('td.canales ul li',1)-> title;
    $canal3 = $nombre ->find ('td.canales ul li',2)-> title;
    $canal4 = $nombre ->find ('td.canales ul li',5)-> title;

//Limpiar entradas con caracteres desconocidos
$encoding = mb_detect_encoding($local);
if($encoding !== 'ASCII') {
    $enc = mb_detect_encoding($local);
    $local = iconv('UTF-8', 'ASCII//IGNORE', $local);
}
$encoding2 = mb_detect_encoding($visita);
if($encoding2 !== 'ASCII') {
    $enc2 = mb_detect_encoding($visita);
    $visita = iconv('UTF-8', 'ASCII//IGNORE', $visita);
}

// Equipos & Canales Custom
//include('teams.php');
//include('channels.php');

// Agregamos los campos a la DB
if (isset($_POST['create'])){
    $sql = "INSERT INTO agenda(local,visita,logoL,logoV,canal,canal2,canal3,canal4,fecha,liga,status) VALUES('".$local."','".$visita."','".$local."','".$visita."','".$canal."','".$canal2."','".$canal3."','".$canal4."','2022-04-18 00:00:00','$liga','1')";
mysqli_query($conn,$sql);
}
}
// Obtenemos los campos agregados
$ret=mysqli_query($conn,"select * from agenda where liga='$liga'");
$cnt=1;
while($row=mysqli_fetch_array($ret))
{
?>
<!-- HTML PRINT -->
<tr>
<td><?php echo $row['id'];?></td>
<td>
    <img width="50px" src="<?php echo $row['logoL'];?>" alt="">
    <?php echo $row['local'];?></td>
<td>
    <img width="50px" src="<?php echo $row['logoV'];?>" alt="">
    <?php echo $row['visita'];?></td>
<td><?php echo $row['fecha'];?></td>
<td><?php echo $row['canal'];?></td>
<td><?php echo $row['canal2'];?></td>
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
<?php $cnt=$cnt+1; }
?>