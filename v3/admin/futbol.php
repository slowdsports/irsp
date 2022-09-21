<?php
include ('includes/header.php'); include('includes/functions.php'); include('backend/futbol.php');
?>
<!-- plugins:css -->
<link rel="stylesheet" href="<?=$base?>assets/vendors/mdi/css/materialdesignicons.min.css">
<link rel="stylesheet" href="<?=$base?>assets/vendors/css/vendor.bundle.base.css">
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
                <h3 class="page-title"> Ligas </h3>
                    <!-- Select -->

                    <form method="get">
                        <div class="input-group form-group">
                            <select class="custom-select js-example-basic-single" id="inputGroupSelect04" name="liga" id="liga">
                                <option selected>Selecciona Liga</option>
                                <?php
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
                            <li class="breadcrumb-item active" aria-current="page">Fútbol</li>
                        </ol>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <button class="nav-link btn btn-success create-new-button" data-toggle="modal" data-target="#modalAgregar">
                                    + Agregar Partido
                                </button>
                                <!-- Acciones -->
                                <form method="post">
                                    <button type="submit" class="btn btn-sm btn-primary btn-block" data-toggle="tooltip" data-placement="top" title="Agregar Partidos" name="create">
                                        <i class="mdi mdi-database-plus"></i>
                                    </button>
                                    <button type="submit" class="btn btn-sm btn-warning btn-block" data-toggle="tooltip" data-placement="top" title="Borrar Partidos" name="delete">
                                        <i class="mdi mdi-delete-variant"></i>
                                    </button>
                                    <button type="submit" class="btn btn-sm btn-danger btn-block" data-toggle="tooltip" data-placement="top" title="Limpiar Tabla" name="truncate">
                                        <i class="mdi mdi-database-minus"></i>
                                    </button>
                                    <button type="submit" class="btn btn-sm btn-primary btn-block" data-toggle="tooltip" data-placement="top" title="Eliminar Espacios en Blanco" name="clean">
                                        <i class="mdi mdi-file-outline"></i>
                                    </button>
                                </form>
                            </li>
                        </ol>
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
                                                <input type="text" class="form-control text-light" id="canal3" name="canal3" />
                                            </div>
                                            <div class="form-group">
                                            <label for="canal4">Canal 4</label>
                                                <select class="" name="canal4" id="canal4">
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
                                                <select class="" name="canal5" id="canal5">
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
                                                <select class="" name="canal6" id="canal6">
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
                                                <input type="datetime-local" class="form-control text-light" id="fecha" name="fecha" />
                                            </div>
                                            <div class="form-group">
                                            <label for="liga">Liga</label>
                                                <select class="" name="liga" id="liga">
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
                    </nav>
                </div>
            <hr />
            <!-- Actualización Masiva -->
            <h3 class="page-title">Actualización Masiva</h3>
            <form method="post" class="forms-sample">
                <div class="input-group form-group">
                    <div style="color:#FFF" class="input-wrapper">
                        <label class="form-label" for="set"></label>
                        <select style="color:#FFF" class="form-control form-select" id="inputGroupSelect04" name="set" id="set">
                            <option selected>Set</option>
                            <option value="fecha">Fecha</option>
                            <option value="liga">Liga</option>
                            <option value="status">Status</option>
                            <option value="canal">Canal</option>
                            <option value="canal2">Canal2</option>
                            <option value="canal3">Canal3</option>
                            <option value="canal4">Canal4</option>
                            <option value="canal5">Canal5</option>
                            <option value="canal6">Canal6</option>
                        </select>
                    </div>
                    <div class="input-wrapper">
                        <label class="form-label" for="valor">Ej: 2022-09-27 12:45:00</label>
                        <input style="color:#FFF" type="text" class="form-control" id="valor" name="valor" placeholder="Valor">
                    </div>
                    <div class="input-wrapper">
                        <label class="form-label" for="param">Ej: 1,2,3,4</label>
                        <input style="color:#FFF" type="text" class="form-control" id="param" name="param" placeholder="Parámetros [,]">
                    </div>
                    <div class="input-wrapper">
                        <button type="submit" class="btn btn-md btn-outline-secondary" id="actuMasiva" name="actuMasiva" type="button">Actualizar</button>
                    </div>
            </form>
            <?php
            // Lógica
            if(isset($_POST['actuMasiva'])){
                $set = $_POST['set'];
                $valor = $_POST['valor'];
                $param = $_POST['param'];
                $msg=mysqli_query($conn,"update agenda set $set='$valor' where id in('$param')");if($msg) {
                    $_SESSION['message'] = "¡Se ha hecho una actualización masiva!";
                }
            }
            ?>
            <!-- *Actualización Masiva -->
            <table class="table table-dark" id="dTable">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Local</th>
                        <th>Visita</th>
                        <th>Fecha</th>
                        <th>Canal</th>
                        <th>Canal 2</th>
                        <th></th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Local</th>
                        <th>Visita</th>
                        <th>Fecha</th>
                        <th>Canal</th>
                        <th>Canal 2</th>
                        <th></th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php
                    $scraper = "scraper/" . $scraper. ".php";
                    include ($scraper);?>
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