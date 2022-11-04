<?php
include ('includes/header.php'); include('backend/usuarios.php');
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
                    <h3 class="page-title"> Usuarios </h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?=$base?>">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Usuarios</li>
                        </ol>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <button class="nav-link btn btn-success create-new-button" data-toggle="modal" data-target="#modalAgregar">
                                    + Agregar Usuario
                                </button>
                            </li>
                        </ol>
                    </nav>
                </div>

                <table id="dTable" class="table table-dark">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Usuario</th>
                            <th>Vencimiento</th>
                            <th>Estado</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $usuarios=mysqli_query($conn,"select * from user");
                        $cnt=1;
                        while($usu=mysqli_fetch_array($usuarios))
                        {
                        // CALC SUBSCRIPTION
                        $futuro = strtotime($usu['fecha']);
                        $presente = time();
                        $left = $futuro - $presente;
                        $daysleft = round((($left/24)/60)/60);
                        if($daysleft > 0){
                            $userStatus = "success";
                            $userText = "Activo <br> $daysleft D";
                        } else {
                            $userStatus = "danger";
                            $userText = "Vencido";
                        }
                        ?>
                        <tr>
                            <td><?=$cnt?></td>
                            <td><?=$usu['fullname']?></td>
                            <td><?=$usu['username']?></td>
                            <td><?=$usu['fecha']?></td>
                            <td>
                                <label class="badge badge-<?=$userStatus?>">
                                    <?=$userText?></label>
                            </td>
                            <td>
                            <button type="button" class="btn btn-sm btn-outline-primary btn-icon-text" data-toggle="modal" data-target="#modal<?=$usu['userid'];?>">
                            <i class="mdi mdi-tooltip-edit btn-icon-prepend"></i>Editar</button>

                            <a href="?uid=<?=$usu['userid']?>" type="button" class="btn btn-sm btn-outline-danger">
                            <i class="mdi mdi-delete btn-icon-prepend"></i>Borrar</a>
                            </td>
                        </tr>
                        <!-- Modal -->
                        <div class="modal fade" id="modal<?=$usu['userid']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Editar <?=$usu['username']?></h5>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" class="forms-sample">
                                            <div class="form-group">
                                            <input style="visibility: hidden" type="text" class="form-control text-light" id="userid" name="userid" value="<?=$usu['userid']?>" />
                                                <label for="fullname">Nombre</label>
                                                <input type="text" class="form-control" id="fullname" name="fullname" value="<?=$usu['fullname']?>" />
                                            </div>
                                            <div class="form-group">
                                                <label for="username">Usuario</label>
                                                <input type="text" class="form-control text-light" id="username" name="username" value="<?=$usu['username']?>" />
                                            </div>
                                            <div class="form-group">
                                                <label for="password">Contraseña</label>
                                                <input type="text" class="form-control text-light" id="password" name="password" value="<?=$usu['password']?>" />
                                            </div>
                                            <div class="form-group">
                                                <label for="fecha">Fecha</label>
                                                <input type="date" class="form-control text-light" id="fecha" name="fecha" value="<?=$usu['fecha']?>" />
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
                                        <h5 class="modal-title" id="exampleModalLabel">Editar <?=$usu['username']?></h5>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" class="forms-sample">
                                            <div class="form-group">
                                                <label for="fullname">Nombre</label>
                                                <input type="text" class="form-control text-light" id="fullname" name="fullname"/>
                                            </div>
                                            <div class="form-group">
                                                <label for="username">Usuario</label>
                                                <input type="text" class="form-control text-light" id="username" name="username" />
                                            </div>
                                            <div class="form-group">
                                                <label for="password">Contraseña</label>
                                                <input type="password" class="form-control text-light" id="password" name="password" />
                                            </div>
                                            <div class="form-group">
                                                <label for="fecha">Fecha</label>
                                                <input type="date" class="form-control text-light" id="fecha" name="fecha" />
                                            </div>
                                            <button type="submit" id="agregar" name="agregar" class="btn btn-primary me-2">Guardar</button>
                                            <button class="btn btn-dark" data-dismiss="modal">Cancelar</button>
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