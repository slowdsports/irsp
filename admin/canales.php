<?php
include('includes/header.php');
include('backend/canales.php');
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
                <h3 class="page-title"> Canales de Televisión </h3>
                <!-- Select -->

                <form method="get">
                    <div class="input-group form-group">
                        <select class="custom-select js-example-basic-single" id="inputGroupSelect04" name="type" id="type">
                            <option selected>Selecciona Tipo</option>
                            <?php
                            $chnType = $_GET['type'];
                            $typeDrop=mysqli_query($conn,"select * from channeltype");
                            $cnt=1;
                            while($types=mysqli_fetch_array($typeDrop)){ ?>
                            <option
                            <?php if ($types['typeId'] == $chnType ){echo "selected";} ?>
                            value="<?php echo $types['typeId'] ?>"><?php echo $types['typeName'] ?></option>
                            <?php
                            $cnt=$cnt+1; } ?>
                        </select>
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-outline-secondary" name="selectType" type="button">Seleccionar</button>
                        </div>
                    </div>
                </form>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?=$base?>">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Canales</li>
                    </ol>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <button class="nav-link btn btn-success create-new-button" data-toggle="modal" data-target="#exampleModal">
                                + Agregar Canal
                            </button>
                        </li>
                    </ol>
                </nav>
            </div>
            <table id="dTable" class="table table-dark">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Canal</th>
                        <th>URL</th>
                        <th>Logo</th>
                        <th>Categoría</th>
                        <th>País</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $channels=mysqli_query($conn,"select * from channels
                    INNER JOIN countries ON channels.country = countries.countryId
                    INNER JOIN categories ON channels.category = categories.categoryId
                    INNER JOIN channeltype ON channels.type = channeltype.typeId
                    WHERE type = $chnType");
                    $cnt=1;
                    while($cha=mysqli_fetch_array($channels)){
                    ?>
                    <tr>
                        <td><?=$cnt?></td>
                        <td><?=$cha['channelName']?></td>
                        <td><?=substr($cha['channelUrl'],0,15)?></td>
                        <td><img width="45px" src="<?=$cha['channelImg']?>" alt="<?=$cha['channelName']?>"></td>
                        <td><?=$cha['categoryName']?></td>
                        <td><i class="flag <?=$cha['countryImg']?>"></i></td>
                        <td>
                            <button type="button" class="btn btn-sm btn-outline-primary btn-icon-text" data-toggle="modal" data-target="#modal<?=$cha['channelId'];?>">
                            <i class="mdi mdi-tooltip-edit btn-icon-prepend"></i>Editar</button>
                            <a href="?cid=<?=$cha['channelId']?>" type="button" class="btn btn-sm btn-outline-danger">
                            <i class="mdi mdi-delete btn-icon-prepend"></i>Borrar</a>
                        </td>
                    </tr>
                    <!-- Modal -->
                    <div class="modal fade" id="modal<?=$cha['channelId'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Editar <?=$cha['channelName'];?></h5>
                                </div>
                                <div class="modal-body">
                                    <!-- Form Modal -->
                                    <div class="card-body">
                                        <form method="post" class="forms-sample">
                                            <div class="form-group">
                                                <input style="visibility: hidden" type="text" class="form-control text-light" id="channelId" name="channelId" value="<?=$cha['channelId'];?>" />
                                            </div>
                                            <div class="form-group">
                                                <label for="channelName">Canal</label>
                                                <input type="text" class="form-control text-light" id="channelName" name="channelName" value="<?=$cha['channelName'];?>" />
                                            </div>
                                            <div class="form-group">
                                                <label for="channelUrl">URL</label>
                                                <input type="text" class="form-control text-light" id="channelUrl" name="channelUrl" value="<?=$cha['channelUrl'];?>" />
                                            </div>
                                            <div class="form-group">
                                                <label for="epg">EPG</label>
                                                <input type="text" class="form-control text-light" id="epg" name="epg" value="<?=$cha['epg'];?>" />
                                            </div>
                                            <div class="form-group">
                                                <label for="channelImg">Imagen </label>
                                                <input type="text" class="form-control text-light" id="channelImg" name="channelImg" value="<?=$cha['channelImg'];?>" />
                                            </div>
                                            <div class="form-group">
                                                <label>Categoría</label>
                                                <select id="category" name="category" class="js-example-basic-single select2-hidden-accessible" style="width:100%" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                                <?php
                                                $categorias=mysqli_query($conn,"select * from categories");
                                                while($cat=mysqli_fetch_array($categorias)){
                                                ?>
                                                <option <?php if($cat['categoryId'] == $cha['category']){echo "selected";} ;?> value="<?=$cat['categoryId'];?>" data-select2-id="3"><?=$cat['categoryName'];?></option> <?php }?>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label>País</label>
                                                <select id="country" name="country" class="js-example-basic-single select2-hidden-accessible" style="width:100%" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                                <?php
                                                $paises=mysqli_query($conn,"select * from countries");
                                                while($pai=mysqli_fetch_array($paises)){
                                                ?>
                                                <option <?php if($pai['countryId'] == $cha['country']){echo "selected";} ;?> value="<?=$pai['countryId'];?>" data-select2-id="3"><?=$pai['countryName'];?></option> <?php }?>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label>Tipo</label>
                                                <select id="type" name="type" class="js-example-basic-single select2-hidden-accessible" style="width:100%" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                                <?php
                                                $tipos=mysqli_query($conn,"select * from channeltype");
                                                while($tip=mysqli_fetch_array($tipos)){
                                                ?>
                                                <option <?php if($tip['typeId'] == $cha['type']){echo "selected";} ;?> value="<?=$tip['typeId'];?>" data-select2-id="3"><?=$tip['typeName'];?></option> <?php }?>
                                                </select>
                                            </div>


                                            <button type="submit" class="btn btn-primary me-2" id="guardar" name="guardar">Guardar</button>
                                            <button class="btn btn-primary" data-dismiss="modal">Cancelar</button>
                                        </form>
                                    </div>
                                    <!-- // Form Modal -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- //Modal -->

                    <!-- Modal para Agregar Nuevo -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Agregar Canal</h5>
                                </div>
                                <div class="modal-body">
                                    <form method="post" class="forms-sample">
                                        <div class="form-group">
                                            <label for="channelName">Canal</label>
                                            <input type="text" class="form-control text-light" id="channelName" name="channelName" />
                                        </div>

                                        <div class="form-group">
                                            <label for="channelUrl">URL</label>
                                            <input type="text" class="form-control text-light" id="channelUrl" name="channelUrl" />
                                        </div>

                                        <div class="form-group">
                                            <label for="epg">EPG</label>
                                            <input type="text" class="form-control text-light" id="epg" name="epg" />
                                        </div>

                                        <div class="form-group">
                                            <label for="channelImg">Imagen</label>
                                            <input type="text" class="form-control text-light" id="channelImg" name="channelImg" />
                                        </div>

                                        <div class="form-group">
                                            <label>Categoría</label>
                                            <select id="category" name="category" class="js-example-basic-single select2-hidden-accessible" style="width:100%" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                                <?php
                                                $categorias=mysqli_query($conn,"select * from categories");
                                                while($cat=mysqli_fetch_array($categorias)){
                                                ?>
                                                <option value="<?=$cat['categoryId'];?>">
                                                <?=$cat['categoryName'];?></option> <?php }?>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>País</label>
                                            <select id="country" name="country" class="js-example-basic-single select2-hidden-accessible" style="width:100%" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                                <?php
                                                $paises=mysqli_query($conn,"select * from countries");
                                                while($pai=mysqli_fetch_array($paises)){
                                                ?>
                                                <option value="<?=$pai['countryId'];?>">
                                                <?=$pai['countryName'];?></option> <?php }?>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Tipo</label>
                                            <select id="type" name="type" class="js-example-basic-single select2-hidden-accessible" style="width:100%" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                                <?php
                                                $tipos=mysqli_query($conn,"select * from channeltype");
                                                while($tip=mysqli_fetch_array($tipos)){
                                                ?>
                                                <option value="<?=$tip['typeId'];?>">
                                                <?=$tip['typeName'];?></option> <?php }?>
                                            </select>
                                        </div>

                                        <button type="submit" class="btn btn-primary me-2" id="agregar" name="agregar">Guardar</button>
                                            <button class="btn btn-primary" data-dismiss="modal">Cancelar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <? $cnt=$cnt+1; }?>
                </tbody>
            </table>
        </div>



    </div>


<?php
include('includes/footer.php');
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