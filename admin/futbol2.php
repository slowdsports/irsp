<?php
include ('includes/header.php'); include('backend/futbol.php');
$getLiga = $_GET['seleccionarLiga'];
$queryScrap=mysqli_query($con,"select * from ligas
INNER JOIN scraper ON ligas.scraper = scraper.scraperId
where ligaId='$liga'");
$scrap=mysqli_fetch_array($queryScrap);
$scraper = str_replace(" ", "", $scrap['scraperName']) ;
$base = str_replace(" ", "", $scrap['url']);
if(!isset($scraper)){
    $scraper = "movistar";
}
?>
<!-- Plugin css for this page -->
<link rel="stylesheet" href="<?=$base?>assets/vendors/select2/select2.min.css">
<link rel="stylesheet" href="<?=$base?>assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
<!-- End plugin css for this page -->
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <!-- Alerta por Sentencia SQL -->
        <?php
        if ($_SESSION['message']){
            echo '
            <center>
                <div id="success-alert" class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="fa fa-info-circle"></i>'.$_SESSION['message'].'
                </div>
            </center>';
        }
        unset($_SESSION['message']);
        ?>
        <div class="table-responsive">
            <div class="page-header">
                    <h3 class="page-title"> Fútbol </h3>
                    <!-- Seleccionar Liga -->
                    <form method="get">
                        <label for="seleccionarLiga">Seleccionar Liga</label>
                        <select name="seleccionarLiga" id="SeleccionarLiga">
                            <option value="">Todas</option>
                            <?php
                            $ligas=mysqli_query($conn,"select * from ligas");
                            while($lig=mysqli_fetch_array($ligas))
                            {
                            ?>
                            <option <?php if($lig['ligaId'] == $_GET['seleccionarLiga']){echo "selected";} ?> value="<?=$lig['ligaId']?>"><?=$lig['ligaName']?></option>
                            <? }?>
                        </select>
                        <button class="btn btn-sm btn-primary" type="submit">
                            <i class="mdi mdi-check"></i>
                        </button>
                    </form>
                    <!-- Acciones -->
                    <form method="post">
                        <button type="submit" class="btn btn-primary btn-block" name="create"><i class="mdi mdi-database-plus"></i> Actualizar Partidos</button>
                        <button type="submit" class="btn btn-warning btn-block" name="delete"><i class="mdi mdi-delete-variant"></i> Borrar Partidos</button>
                        <button type="submit" class="btn btn-danger btn-block" name="truncate"><i class="mdi mdi-database-minus"></i> Limpiar</button>
                        <button type="submit" class="btn btn-primary btn-block" name="clean"><i class="mdi mdi-file-outline"></i> Eliminar Espacios</button>
                    </form>

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?=$base?>">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Fútbol</li>
                        </ol>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <button class="nav-link btn btn-success create-new-button" data-toggle="modal" data-target="#modalAgregar">
                                    + Agregar Partido
                                </button>
                            </li>
                        </ol>
                    </nav>
                </div>

                <table id="dTable" class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Local</th>
                            <th>Visita</th>
                            <th>Canal</th>
                            <th>Canal 2</th>
                            <th>Fecha</th>
                            <th>Liga</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($getLiga == ""){
                            $agenda=mysqli_query($conn,"select * from agenda
                            INNER JOIN ligas ON agenda.liga = ligas.ligaId");
                        }
                        elseif ($getLiga){
                            $agenda=mysqli_query($conn,"select * from agenda
                            INNER JOIN ligas ON agenda.liga = ligas.ligaId where liga = '$getLiga'");
                        } else {
                            $agenda=mysqli_query($conn,"select * from agenda
                            INNER JOIN ligas ON agenda.liga = ligas.ligaId");
                        }
                        $cnt=1;
                        while($age=mysqli_fetch_array($agenda))
                        {
                        ?>
                        <tr>
                            <td><?=$cnt?></td>
                            <td><?=$age['local']?></td>
                            <td><?=$age['visita']?></td>
                            <td><?=$age['canal']?></td>
                            <td><?=$age['canal2']?></td>
                            <td><?=$age['fecha']?></td>
                            <td><?=$age['ligaName']?></td>
                            <td>
                            <button type="button" class="btn btn-sm btn-outline-primary btn-icon-text" data-toggle="modal" data-target="#modal<?=$age['id'];?>">
                            <i class="mdi mdi-tooltip-edit btn-icon-prepend"></i>Editar</button>

                            <a href="?id=<?=$age['id']?>" type="button" class="btn btn-sm btn-outline-danger">
                            <i class="mdi mdi-delete btn-icon-prepend"></i>Borrar</a>
                            </td>
                        </tr>
                        <!-- Modal -->
                        <div class="modal fade" id="modal<?=$age['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Editar <?=$age['local']?> vs <?=$age['visita']?></h5>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" class="forms-sample">
                                            <div class="form-group">
                                            <input style="visibility: hidden" type="text" class="form-control text-light" id="id" name="id" value="<?=$age['id']?>" />
                                                <label for="local">Local</label>
                                                <input type="text" class="form-control" id="local" name="local" value="<?=$age['local']?>" />
                                            </div>
                                            <div class="form-group">
                                                <label for="logoL">Escudo Local</label>
                                                <input type="text" class="form-control" id="logoL" name="logoL" value="<?=$age['logoL']?>" />
                                            </div>
                                            <div class="form-group">
                                                <label for="visita">Visita</label>
                                                <input type="text" class="form-control text-light" id="visita" name="visita" value="<?=$age['visita']?>" />
                                            </div>
                                            <div class="form-group">
                                                <label for="logoV">Escudo Visita</label>
                                                <input type="text" class="form-control" id="logoV" name="logoV" value="<?=$age['logoV']?>" />
                                            </div>
                                            <div class="form-group">
                                                <label for="canal">Canal</label>
                                                <input type="text" class="form-control text-light" id="canal" name="canal" value="<?=$age['canal']?>" />
                                            </div>
                                            <div class="form-group">
                                                <label for="canal2">Canal 2</label>
                                                <input type="text" class="form-control text-light" id="canal2" name="canal2" value="<?=$age['canal2']?>" />
                                            </div>
                                            <div class="form-group">
                                            <label for="canal3">Canal 3</label>
                                                <select name="canal3" id="canal3">
                                                    <option value="">Ninguno</option>
                                                    <?php
                                                    $canales=mysqli_query($conn,"select * from channels");
                                                    while($cha=mysqli_fetch_array($canales))
                                                    {
                                                    ?>
                                                    <option <?php if($cha['channelId'] == $age['canal3']){echo "selected";} ?> value="<?=$cha['channelId']?>"><?=$cha['channelName']?></option>
                                                    <? }?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                            <label for="canal4">Canal 4</label>
                                                <select name="canal4" id="canal4">
                                                    <option value="">Ninguno</option>
                                                    <?php
                                                    $canales=mysqli_query($conn,"select * from channels");
                                                    while($cha=mysqli_fetch_array($canales))
                                                    {
                                                    ?>
                                                    <option <?php if($cha['channelId'] == $age['canal4']){echo "selected";} ?> value="<?=$cha['channelId']?>"><?=$cha['channelName']?></option>
                                                    <? }?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                            <label for="canal5">Canal 5</label>
                                                <select name="canal5" id="canal5">
                                                    <option value="">Ninguno</option>
                                                    <?php
                                                    $canales=mysqli_query($conn,"select * from channels");
                                                    while($cha=mysqli_fetch_array($canales))
                                                    {
                                                    ?>
                                                    <option <?php if($cha['channelId'] == $age['canal5']){echo "selected";} ?> value="<?=$cha['channelId']?>"><?=$cha['channelName']?></option>
                                                    <? }?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                            <label for="canal6">Canal 6</label>
                                                <select name="canal6" id="canal6">
                                                    <option value="">Ninguno</option>
                                                    <?php
                                                    $canales=mysqli_query($conn,"select * from channels");
                                                    while($cha=mysqli_fetch_array($canales))
                                                    {
                                                    ?>
                                                    <option <?php if($cha['channelId'] == $age['canal6']){echo "selected";} ?> value="<?=$cha['channelId']?>"><?=$cha['channelName']?></option>
                                                    <? }?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="fecha">Fecha: <br>
                                                <?=$age['fecha']?>
                                                </label>
                                                <input type="datetime-local" class="form-control text-light" id="fecha" name="fecha" value="<?=$age['fecha']?>" />
                                            </div>
                                            <div class="form-group">
                                            <label for="liga">Liga</label>
                                                <select name="liga" id="liga">
                                                    <?php
                                                    $ligas=mysqli_query($conn,"select * from ligas");
                                                    while($lig=mysqli_fetch_array($ligas))
                                                    {
                                                    ?>
                                                    <option <?php if($lig['ligaId'] == $age['liga']){echo "selected";} ?> value="<?=$lig['ligaId']?>"><?=$lig['ligaName']?></option>
                                                    <? }?>
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

                        <!-- Modal para Agregar -->
                        <div class="modal fade" id="modalAgregar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Agregar Partido</h5>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" class="forms-sample">
                                            <div class="form-group">
                                                <label for="local">Local</label>
                                                <input type="text" class="form-control text-light" id="local" name="local"/>
                                            </div>
                                            <div class="form-group">
                                                <label for="visita">Visita</label>
                                                <input type="text" class="form-control text-light" id="visita" name="visita" />
                                            </div>
                                            <div class="form-group">
                                                <label for="logoL">Escudo Local</label>
                                                <input type="text" class="form-control text-light" id="logoL" name="logoL"/>
                                            </div>
                                            <div class="form-group">
                                                <label for="logoV">Escudo Visita</label>
                                                <input type="text" class="form-control text-light" id="logoV" name="logoV" />
                                            </div>
                                            <div class="form-group">
                                                <label for="canal">Canal</label>
                                                <input type="text" class="form-control text-light" id="canal" name="canal" />
                                            </div>
                                            <div class="form-group">
                                                <label for="canal2">Canal 2</label>
                                                <input type="text" class="form-control text-light" id="canal2" name="canal2" />
                                            </div>
                                            <div class="form-group">
                                            <label for="canal3">Canal 3</label>
                                                <select name="canal3" id="canal3">
                                                    <option value="">Ninguno</option>
                                                    <?php
                                                    $canales=mysqli_query($conn,"select * from channels");
                                                    while($cha=mysqli_fetch_array($canales))
                                                    {
                                                    ?>
                                                    <option value="<?=$cha['channelId']?>"><?=$cha['channelName']?></option>
                                                    <? }?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                            <label for="canal4">Canal 4</label>
                                                <select name="canal4" id="canal4">
                                                    <option value="">Ninguno</option>
                                                    <?php
                                                    $canales=mysqli_query($conn,"select * from channels");
                                                    while($cha=mysqli_fetch_array($canales))
                                                    {
                                                    ?>
                                                    <option value="<?=$cha['channelId']?>"><?=$cha['channelName']?></option>
                                                    <? }?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                            <label for="canal5">Canal 5</label>
                                                <select name="canal5" id="canal5">
                                                    <option value="">Ninguno</option>
                                                    <?php
                                                    $canales=mysqli_query($conn,"select * from channels");
                                                    while($cha=mysqli_fetch_array($canales))
                                                    {
                                                    ?>
                                                    <option value="<?=$cha['channelId']?>"><?=$cha['channelName']?></option>
                                                    <? }?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                            <label for="canal6">Canal 6</label>
                                                <select name="canal6" id="canal6">
                                                    <option value="">Ninguno</option>
                                                    <?php
                                                    $canales=mysqli_query($conn,"select * from channels");
                                                    while($cha=mysqli_fetch_array($canales))
                                                    {
                                                    ?>
                                                    <option value="<?=$cha['channelId']?>"><?=$cha['channelName']?></option>
                                                    <? }?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="fecha">Fecha</label>
                                                <input type="date" class="form-control text-light" id="fecha" name="fecha" />
                                            </div>
                                            <div class="form-group">
                                            <label for="liga">Liga</label>
                                                <select name="liga" id="liga">
                                                    <?php
                                                    $ligas=mysqli_query($conn,"select * from ligas");
                                                    while($lig=mysqli_fetch_array($ligas))
                                                    {
                                                    ?>
                                                    <option value="<?=$lig['ligaId']?>"><?=$lig['ligaName']?></option>
                                                    <? }?>
                                                </select>
                                            </div>
                                            <button type="submit" id="agregar" name="agregar" class="btn btn-primary me-2">Guardar</button>
                                            <button class="btn btn-primary" data-dismiss="modal">Cancelar</button>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php $cnt=$cnt+1; }?>
                        <!-- <tr>
                            <td>Messsy</td>
                            <td>53275532</td>
                            <td>15 May 2017</td>
                            <td><label class="badge badge-warning">In progress</label></td>
                        </tr>
                        <tr>
                            <td>John</td>
                            <td>53275533</td>
                            <td>14 May 2017</td>
                            <td><label class="badge badge-info">Fixed</label></td>
                        </tr>
                        <tr>
                            <td>Peter</td>
                            <td>53275534</td>
                            <td>16 May 2017</td>
                            <td><label class="badge badge-success">Completed</label></td>
                        </tr>
                        <tr>
                            <td>Dave</td>
                            <td>53275535</td>
                            <td>20 May 2017</td>
                            <td><label class="badge badge-warning">In progress</label></td>
                        </tr> -->
                    </tbody>
                </table>

        </div>

    </div>
<?php
include ('includes/footer.php');
?>
<!-- Datatables -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
<script src="<?=$base?>assets/js/datatables.js"></script>

<!-- Plugin js for this page -->
<script src="<?=$base?>assets/vendors/select2/select2.min.js"></script>
<script src="<?=$base?>assets/vendors/typeahead.js/typeahead.bundle.min.js"></script>
<script src="<?=$base?>assets/js/file-upload.js"></script>
<script src="<?=$base?>assets/js/typeahead.js"></script>
<script src="<?=$base?>assets/js/select2.js"></script>
<!-- End plugin js for this page -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
<script>
$(".alert").delay(4000).slideUp(200, function() {
    $(this).alert("close");
});
</script>