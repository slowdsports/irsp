<?php
include ('includes/header.php'); include('backend/ufc.php');
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
                    <h3 class="page-title"> UFC </h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?=$base?>">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">UFC</li>
                        </ol>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <button class="nav-link btn btn-success create-new-button" data-toggle="modal" data-target="#modalAgregar">
                                    + Agregar Pelea
                                </button>
                            </li>
                        </ol>
                    </nav>
                </div>

                <table id="dTable" class="table table-dark">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Peleador 1</th>
                            <th></th>
                            <th>Peleador 2</th>
                            <th></th>
                            <th>Fecha</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $peleas=mysqli_query($conn,"select * from ufc");
                        $cnt=1;
                        while($ufc=mysqli_fetch_array($peleas))
                        {
                        ?>
                        <tr>
                            <td><?=$cnt?></td>
                            <td><?=$ufc['peleador1']?></td>
                            <td><img class="img-fluid" src="<?=$ufc['imagen1']?>" alt=""></td>
                            <td><?=$ufc['peleador2']?></td>
                            <td><img class="img-fluid" src="<?=$ufc['imagen2']?>" alt=""></td>
                            <td><?=$ufc['fecha']?></td>
                            <td>
                            <button type="button" class="btn btn-sm btn-outline-primary btn-icon-text" data-toggle="modal" data-target="#modal<?=$ufc['id'];?>">
                            <i class="mdi mdi-tooltip-edit btn-icon-prepend"></i>Editar</button>

                            <a href="?id=<?=$ufc['id']?>" type="button" class="btn btn-sm btn-outline-danger">
                            <i class="mdi mdi-delete btn-icon-prepend"></i>Borrar</a>
                            </td>
                        </tr>
                        <!-- Modal -->
                        <div class="modal fade" id="modal<?=$ufc['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Editar <?=$ufc['peleador1']?> vs <?=$ufc['peleador2']?></h5>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" class="forms-sample">
                                            <div class="form-group">
                                                <input readonly type="text" class="form-control text-light" id="id" name="id" value="<?=$ufc['id']?>"/>
                                            </div>
                                            <div class="form-group">
                                                <label for="peleador1">Peleador 1</label>
                                                <input type="text" class="form-control text-light" id="peleador1" name="peleador1" value="<?=$ufc['peleador1']?>"/>
                                            </div>
                                            <div class="form-group">
                                                <label for="imagen1">Imagen Peleador 1</label>
                                                <input type="text" class="form-control text-light" id="imagen1" name="imagen1" value="<?=$ufc['imagen1']?>"/>
                                            </div>
                                            <div class="form-group">
                                                <label for="peleador2">Peleador 2</label>
                                                <input type="text" class="form-control text-light" id="peleador2" name="peleador2" value="<?=$ufc['peleador2']?>"/>
                                            </div>
                                            <div class="form-group">
                                                <label for="imagen2">Imagen Peleador 2</label>
                                                <input type="text" class="form-control text-light" id="imagen2" name="imagen2" value="<?=$ufc['imagen2']?>"/>
                                            </div>
                                            <div class="form-group">
                                                <label for="fecha">Fecha</label>
                                                <input type="datetime-local" class="form-control text-light" id="fecha" name="fecha" value="<?=$ufc['fecha']?>"/>
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
                                        <h5 class="modal-title" id="exampleModalLabel">Agregar Pelea</h5>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" class="forms-sample">
                                            <div class="form-group">
                                                <label for="peleador1">Peleador 1</label>
                                                <input type="text" class="form-control text-light" id="peleador1" name="peleador1"/>
                                            </div>
                                            <div class="form-group">
                                                <label for="imagen1">Imagen 1</label>
                                                <input type="text" class="form-control text-light" id="imagen1" name="imagen1"/>
                                            </div>
                                            <div class="form-group">
                                                <label for="peleador2">Peleador 2</label>
                                                <input type="text" class="form-control text-light" id="peleador2" name="peleador2"/>
                                            </div>
                                            <div class="form-group">
                                                <label for="imagen1">Imagen 2</label>
                                                <input type="text" class="form-control text-light" id="imagen2" name="imagen2"/>
                                            </div>
                                            <div class="form-group">
                                                <label for="fecha">Fecha</label>
                                                <input type="datetime-local" class="form-control text-light" id="fecha" name="fecha"/>
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