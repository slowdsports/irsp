<?php
include ('includes/header.php'); include('backend/equipos.php');
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
                    <h3 class="page-title"> Equipos </h3>
                    <!-- Select -->

                    <form method="get">
                        <div class="input-group form-group">
                            <select class="custom-select js-example-basic-single" id="inputGroupSelect04" name="liga" id="liga">
                                <option selected>Selecciona Liga</option>
                                <?php
                                $liga = $_GET['liga'];
                                $ligaDrop=mysqli_query($conn,"select * from ligas");
                                $cnt=1;
                                while($ligas=mysqli_fetch_array($ligaDrop)){ ?>
                                <option
                                <?php if ($ligas['ligaId'] == $liga ){echo "selected";} ?>
                                value="<?php echo $ligas['ligaId'] ?>"><?php echo $ligas['ligaName'] ?></option>
                                <?php
                                $cnt=$cnt+1; } ?>
                            </select>
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-outline-secondary" name="selectLiga" type="button">Seleccionar</button>
                            </div>
                        </div>
                    </form>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?=$base?>">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Equipos</li>
                        </ol>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <button class="nav-link btn btn-success create-new-button" data-toggle="modal" data-target="#modalAgregar">
                                    + Agregar Equipo
                                </button>
                            </li>
                        </ol>
                    </nav>
                </div>

                <table id="dTable" class="table table-dark">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Equipo</th>
                            <th>Estadio</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($liga){
                            $equipos=mysqli_query($conn,"select * from teams where liga='$liga'");
                        } else {
                            $equipos=mysqli_query($conn,"select * from teams");
                        }
                        $cnt=1;
                        while($equ=mysqli_fetch_array($equipos))
                        {
                        ?>
                        <tr>
                            <td><?=$cnt?></td>
                            <td>
                                <img src="<?=$equ['teamImg']?>" alt="">
                                <?=$equ['teamName']?></td>
                            <td><?=$equ['teamLocation']?></td>
                            <td>
                            <button type="button" class="btn btn-sm btn-outline-primary btn-icon-text" data-toggle="modal" data-target="#modal<?=$equ['teamId'];?>">
                            <i class="mdi mdi-tooltip-edit btn-icon-prepend"></i>Editar</button>

                            <a href="?tid=<?=$equ['teamId']?>" type="button" class="btn btn-sm btn-outline-danger">
                            <i class="mdi mdi-delete btn-icon-prepend"></i>Borrar</a>
                            </td>
                        </tr>
                        <!-- Modal -->
                        <div class="modal fade" id="modal<?=$equ['teamId']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Editar <?=$equ['teamName']?></h5>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" class="forms-sample">
                                            <div class="form-group">
                                                <label for="teamName">Equipo</label>
                                                <input readonly style="visibility: hidden" type="text" class="form-control text-light" id="teamId" name="teamId" value="<?php echo $equ['teamId'] ?>"/>
                                                <input type="text" class="form-control" id="teamName" name="teamName" value="<?php echo $equ['teamName'] ?>"/>
                                            </div>
                                            <div class="form-group">
                                                <label for="teamImg">Imagen</label>
                                                <input type="text" class="form-control text-light" id="teamImg" name="teamImg" value="<?php echo $equ['teamImg'] ?>"/>
                                            </div>
                                            <div class="form-group">
                                                <label for="teamLocation">Estadio</label>
                                                <input type="text" class="form-control text-light" id="teamLocation" name="teamLocation" value="<?php echo $equ['teamLocation'] ?>"/>
                                            </div>
                                            <div class="form-group">
                                            <label for="scraper">Liga</label>
                                                <select class="form-control text-light" name="liga" id="liga">
                                                    <?php
                                                    $ligas=mysqli_query($conn,"select * from ligas");
                                                    while($lig=mysqli_fetch_array($ligas))
                                                    {
                                                    ?>
                                                    <option <?if($equ['liga'] == $lig['ligaId']) {echo "selected";} ?> value="<?=$lig['ligaId']?>"><?=$lig['ligaName']?></option>
                                                    <? }?>
                                                </select>
                                            </div>
                                            <button type="submit" id="guardar" name="guardar" class="btn btn-primary me-2">Guardar</button>
                                            <button class="btn btn-dark" data-dismiss="modal">Cancelar</button>
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
                                        <h5 class="modal-title" id="exampleModalLabel">Agregar Equipo</h5>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" class="forms-sample">
                                            <div class="form-group">
                                                <label for="teamName">Equipo</label>
                                                <input type="text" class="form-control text-light" id="teamName" name="teamName"/>
                                            </div>
                                            <div class="form-group">
                                                <label for="teamImg">Imagen</label>
                                                <input type="text" class="form-control text-light" id="teamImg" name="teamImg"/>
                                            </div>
                                            <div class="form-group">
                                                <label for="teamLocation">Estadio</label>
                                                <input type="text" class="form-control text-light" id="teamLocation" name="teamLocation"/>
                                            </div>
                                            <div class="form-group">
                                            <label for="scraper">Liga</label>
                                                <select class="form-control text-light" name="liga" id="liga">
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
                                            <button class="btn btn-dark" data-dismiss="modal">Cancelar</button>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php $cnt=$cnt+1; }?>
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