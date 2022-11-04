<?php
include ('includes/header.php'); include('backend/ligas.php');
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
                    <h3 class="page-title"> Ligas </h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?=$base?>">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Ligas</li>
                        </ol>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <button class="nav-link btn btn-success create-new-button" data-toggle="modal" data-target="#modalAgregar">
                                    + Agregar Liga
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
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $ligas=mysqli_query($conn,"select * from ligas");
                        $cnt=1;
                        while($lig=mysqli_fetch_array($ligas))
                        {
                        ?>
                        <tr>
                            <td><?=$cnt?></td>
                            <td><?=$lig['ligaName']?></td>
                            <td>
                            <button type="button" class="btn btn-sm btn-outline-primary btn-icon-text" data-toggle="modal" data-target="#modal<?=$lig['ligaId'];?>">
                            <i class="mdi mdi-tooltip-edit btn-icon-prepend"></i>Editar</button>

                            <a href="?lid=<?=$lig['ligaId']?>" type="button" class="btn btn-sm btn-outline-danger">
                            <i class="mdi mdi-delete btn-icon-prepend"></i>Borrar</a>
                            </td>
                        </tr>
                        <!-- Modal -->
                        <div class="modal fade" id="modal<?=$lig['ligaId']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Editar <?=$lig['ligaName']?></h5>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" class="forms-sample">
                                            <div class="form-group">
                                                <label for="ligaName">Nombre</label>
                                                <input readonly style="visibility: hidden" type="text" class="form-control" id="ligaId" name="ligaId" value="<?php echo $lig['ligaId'] ?>"/>
                                                <input type="text" class="form-control" id="ligaName" name="ligaName" value="<?php echo $lig['ligaName'] ?>"/>
                                            </div>
                                            <div class="form-group">
                                                <label for="ligaImg">Imagen</label>
                                                <input type="text" class="form-control" id="ligaImg" name="ligaImg" value="<?php echo $lig['ligaImg'] ?>"/>
                                            </div>
                                            <div class="form-group">
                                            <label for="scraper">Scraper</label>
                                                <select class="form-control" name="scraper" id="scraper">
                                                    <?php
                                                    $scraper=mysqli_query($conn,"select * from scraper");
                                                    while($scr=mysqli_fetch_array($scraper))
                                                    {
                                                    ?>
                                                    <option <?if($lig['scraper'] == $scr['scraperId']) {echo "selected";} ?> value="<?=$scr['scraperId']?>"><?=$scr['scraperName']?></option>
                                                    <? }?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="url">URL</label>
                                                <input type="text" class="form-control" id="url" name="url" value="<?php echo $lig['url'] ?>"/>
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
                                        <h5 class="modal-title" id="exampleModalLabel">Agregar Liga</h5>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" class="forms-sample">
                                            <div class="form-group">
                                                <label for="ligaName">Nombre</label>
                                                <input type="text" class="form-control" id="ligaName" name="ligaName"/>
                                            </div>
                                            <div class="form-group">
                                                <label for="ligaImg">Imagen</label>
                                                <input type="text" class="form-control" id="ligaImg" name="ligaImg"/>
                                            </div>
                                            <div class="form-group">
                                            <label for="scraper">Scraper</label>
                                                <select class="form-control" name="scraper" id="scraper">
                                                    <?php
                                                    $scraper=mysqli_query($conn,"select * from scraper");
                                                    while($scr=mysqli_fetch_array($scraper))
                                                    {
                                                    ?>
                                                    <option value="<?=$scr['scraperId']?>"><?=$scr['scraperName']?></option>
                                                    <? }?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="url">URL</label>
                                                <input type="text" class="form-control" id="url" name="url"/>
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