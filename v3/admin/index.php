<?php
include('includes/header.php');
// Totales
$users=mysqli_query($conn,"select * from user");
$totalUsuarios=mysqli_num_rows($users);

$users=mysqli_query($conn,"select * from agenda");
$totalJuegos=mysqli_num_rows($users);

$users=mysqli_query($conn,"select * from agenda where liga=14");
$totalNFL=mysqli_num_rows($users);

$users=mysqli_query($conn,"select * from agenda where liga=22");
$totalMLB=mysqli_num_rows($users);

$users=mysqli_query($conn,"select * from tenis");
$totalTenis=mysqli_num_rows($users);

$users=mysqli_query($conn,"select * from ufc");
$totalUFC=mysqli_num_rows($users);

$users=mysqli_query($conn,"select * from channels");
$totalCanales=mysqli_num_rows($users);

$ligas=mysqli_query($conn,"select * from ligas");
$totalLigas=mysqli_num_rows($ligas);

$repeticiones=mysqli_query($conn,"select * from repeticion");
$totalRepeticiones=mysqli_num_rows($repeticiones);

$peticiones=mysqli_query($conn,"select * from peticiones
INNER JOIN user ON peticiones.usuarioSolicitado = user.userid");
$pet=mysqli_fetch_array($peticiones);
?>
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <!-- Banner -->
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card corona-gradient-card">
                    <div class="card-body py-0 px-0 px-sm-3">
                        <div class="row align-items-center">
                            <div class="col-4 col-sm-3 col-xl-2">
                                <img src="assets/images/dashboard/Group126@2x.png" class="gradient-corona-img img-fluid" alt="" />
                            </div>
                            <div class="col-5 col-sm-7 col-xl-8 p-0">
                                <h4 class="mb-1 mb-sm-0"><?=$pet['canalSolicitado']?></h4>
                                <p class="mb-0 font-weight-normal d-none d-sm-block">Solicitado por: <?=$pet['username']?></p>
                            </div>
                            <div class="col-3 col-sm-2 col-xl-2 ps-0 text-center">
                                <span>
                                    <a href="https://www.bootstrapdash.com/product/corona-admin-template/" target="_blank" class="btn btn-outline-light btn-rounded get-started-btn">Ir</a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Métricas -->
        <div class="row">
            <div class="col-sm-4 grid-margin">
                <div class="card">
                    <a href="usuarios.php">
                        <div class="card-body">
                            <i class="icon-md mdi mdi-account text-light ms-auto"></i>
                            <div class="row">
                                <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                    <div class="d-flex d-sm-block d-md-flex align-items-center">
                                        <h2 class="mb-0">Usuarios</h2>
                                        <!-- <p class="text-success ms-2 mb-0 font-weight-medium">+3.5%</p> -->
                                    </div>
                                    <h6 class="text-muted font-weight-normal">Registrados en total</h6>
                                </div>
                                <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                                    <h3><?=$totalUsuarios?></h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-4 grid-margin">
                <div class="card">
                    <a href="futbol.php">
                        <div class="card-body">
                            <i class="icon-md mdi mdi-soccer text-light ms-auto"></i>
                            <div class="row">
                                <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                    <div class="d-flex d-sm-block d-md-flex align-items-center">
                                        <h2 class="mb-0">Juegos</h2>
                                        <!-- <p class="text-success ms-2 mb-0 font-weight-medium">+3.5%</p> -->
                                    </div>
                                    <h6 class="text-muted font-weight-normal">de Fútbol programados</h6>
                                </div>
                                <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                                    <h3><?=$totalJuegos?></h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-4 grid-margin">
                <div class="card">
                    <a href="futbol.php?liga=23&selectLiga=">
                        <div class="card-body">
                            <i class="icon-md mdi mdi-basketball text-light ms-auto"></i>
                            <div class="row">
                                <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                    <div class="d-flex d-sm-block d-md-flex align-items-center">
                                        <h2 class="mb-0">Juegos</h2>
                                        <!-- <p class="text-success ms-2 mb-0 font-weight-medium">+3.5%</p> -->
                                    </div>
                                    <h6 class="text-muted font-weight-normal">de NBA programados</h6>
                                </div>
                                <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                                    <h3><?=$totalJuegos?></h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-4 grid-margin">
                <div class="card">
                    <a href="futbol.php?liga=14&selectLiga=">
                        <div class="card-body">
                            <i class="icon-md mdi mdi-football text-light ms-auto"></i>
                            <div class="row">
                                <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                    <div class="d-flex d-sm-block d-md-flex align-items-center">
                                        <h2 class="mb-0">Juegos</h2>
                                        <!-- <p class="text-success ms-2 mb-0 font-weight-medium">+3.5%</p> -->
                                    </div>
                                    <h6 class="text-muted font-weight-normal">de NFL programados</h6>
                                </div>
                                <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                                    <h3><?=$totalNFL?></h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-4 grid-margin">
                <div class="card">
                    <a href="futbol.php?liga=22&selectLiga=">
                        <div class="card-body">
                            <i class="icon-md mdi mdi-baseball text-light ms-auto"></i>
                            <div class="row">
                                <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                    <div class="d-flex d-sm-block d-md-flex align-items-center">
                                        <h2 class="mb-0">Juegos</h2>
                                        <!-- <p class="text-success ms-2 mb-0 font-weight-medium">+3.5%</p> -->
                                    </div>
                                    <h6 class="text-muted font-weight-normal">de MLB programados</h6>
                                </div>
                                <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                                    <h3><?=$totalMLB?></h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-4 grid-margin">
                <div class="card">
                    <a href="tenis.php">
                        <div class="card-body">
                            <i class="icon-md mdi mdi-tennis text-light ms-auto"></i>
                            <div class="row">
                                <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                    <div class="d-flex d-sm-block d-md-flex align-items-center">
                                        <h2 class="mb-0">Juegos</h2>
                                        <!-- <p class="text-success ms-2 mb-0 font-weight-medium">+3.5%</p> -->
                                    </div>
                                    <h6 class="text-muted font-weight-normal">de tenis programados</h6>
                                </div>
                                <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                                    <h3><?=$totalTenis?></h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-4 grid-margin">
                <div class="card">
                    <a href="ufc.php">
                        <div class="card-body">
                            <i class="icon-md mdi mdi-mixed-martial-arts text-light ms-auto"></i>
                            <div class="row">
                                <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                    <div class="d-flex d-sm-block d-md-flex align-items-center">
                                        <h2 class="mb-0">Peleas</h2>
                                        <!-- <p class="text-success ms-2 mb-0 font-weight-medium">+3.5%</p> -->
                                    </div>
                                    <h6 class="text-muted font-weight-normal">de UFC programadas</h6>
                                </div>
                                <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                                    <h3><?=$totalUFC?></h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-4 grid-margin">
                <div class="card">
                    <a href="balonmano.php">
                        <div class="card-body">
                            <i class="icon-md mdi mdi-handball text-light ms-auto"></i>
                            <div class="row">
                                <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                    <div class="d-flex d-sm-block d-md-flex align-items-center">
                                        <h2 class="mb-0">Juegos</h2>
                                        <!-- <p class="text-success ms-2 mb-0 font-weight-medium">+3.5%</p> -->
                                    </div>
                                    <h6 class="text-muted font-weight-normal">de Balonmano programadas</h6>
                                </div>
                                <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                                    <h3><?=$totalBalonmano?></h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-4 grid-margin">
                <div class="card">
                    <a href="canales.php">
                        <div class="card-body">
                            <i class="icon-md mdi mdi-television-guide text-light ms-auto"></i>
                            <div class="row">
                                <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                    <div class="d-flex d-sm-block d-md-flex align-items-center">
                                        <h2 class="mb-0">Canales</h2>
                                        <!-- <p class="text-success ms-2 mb-0 font-weight-medium">+3.5%</p> -->
                                    </div>
                                    <h6 class="text-muted font-weight-normal">de TV creados</h6>
                                </div>
                                <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                                    <h3><?=$totalCanales?></h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-4 grid-margin">
                <div class="card">
                    <a href="ligas.php">
                        <div class="card-body">
                            <i class="icon-md mdi mdi-television-guide text-light ms-auto"></i>
                            <div class="row">
                                <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                    <div class="d-flex d-sm-block d-md-flex align-items-center">
                                        <h2 class="mb-0">Ligas</h2>
                                        <!-- <p class="text-success ms-2 mb-0 font-weight-medium">+3.5%</p> -->
                                    </div>
                                    <h6 class="text-muted font-weight-normal">de Fútbol en BD</h6>
                                </div>
                                <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                                    <h3><?=$totalLigas?></h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-4 grid-margin">
                <div class="card">
                    <a href="repeticion.php">
                        <div class="card-body">
                            <i class="icon-md mdi mdi-soccer text-light ms-auto"></i>
                            <div class="row">
                                <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                    <div class="d-flex d-sm-block d-md-flex align-items-center">
                                        <h2 class="mb-0">Repeticiones</h2>
                                        <!-- <p class="text-success ms-2 mb-0 font-weight-medium">+3.5%</p> -->
                                    </div>
                                    <h6 class="text-muted font-weight-normal">creadas</h6>
                                </div>
                                <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                                    <h3><?=$totalRepeticiones?></h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Trabajos -->
            <div class="row">
                <div class="col-md-4 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Trabajos Pendientes</h4>
                            <div class="add-items d-flex">
                                <form class="d-flex" method="post">
                                <input type="text" name="trabajoName" id="trabajoName" class="form-control todo-list-input" placeholder="Agregar una tarea.." />
                                <input class="add btn btn-primary " type="submit" name="agregarTrabajo" id="agregarTrabajo" value="Agregar">
                                </form>
                            </div>
                            <div class="list-wrapper">
                                <ul class="d-flex flex-column-reverse text-white todo-list todo-list-custom">
                                    <?php
                                    include('backend/trabajos.php');
                                    $trabajos=mysqli_query($conn,"select * from trabajos");
                                    $cnt=1;
                                    while($tra=mysqli_fetch_array($trabajos))
                                    {
                                    ?>
                                    <li class="<?php if($tra['status'] == 1){echo "completed";} ?>" >
                                        <!-- Completar Trabajo -->
                                        <script>
                                            function completarTrabajo(){
                                                window.location = "?check=<?php
                                                    if ($tra['status'] == 0){echo "1";} else {echo "0";}?>&cid=<?=$tra['trabajoId']?>"
                                                }
                                        </script>
                                        <div class="form-check form-check-primary">
                                            <label class="form-check-label">
                                                <input onclick="completarTrabajo()" class="checkbox" type="checkbox" <?php if($tra['status'] == 1){echo "checked";} ?> />
                                                <?=$tra['trabajoName']?> [<?=$tra['trabajoId']?>]
                                            </label>
                                        </div>
                                        <!-- Borrar Trabajo -->
                                        <script>
                                            function borrarTrabajo(){
                                                window.location = "?tid=<?php echo $tra['trabajoId']; ?>"
                                            }
                                        </script>
                                        <i onclick="borrarTrabajo()" class="remove mdi mdi-close-box"></i>
                                    </li>
                                    <?php }?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-row justify-content-between">
                                <h4 class="card-title mb-1">Peticiones</h4>
                                <p class="text-muted mb-1">iRaffle TV</p>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="preview-list">
                                    <?php
                                        $peticiones=mysqli_query($conn,"select * from peticiones
                                        INNER JOIN user ON peticiones.usuarioSolicitado = user.userid");
                                        $cnt=1;
                                        while($pet=mysqli_fetch_array($peticiones)){
                                        ?>
                                        <div class="preview-item border-bottom">
                                            <div class="preview-thumbnail">
                                                <div class="preview-icon bg-primary">
                                                    <i class="mdi mdi-comment-question-outline"></i>
                                                </div>
                                            </div>
                                            <div class="preview-item-content d-sm-flex flex-grow">
                                                <div class="flex-grow">
                                                    <h6 class="preview-subject">
                                                        <?=$pet['canalSolicitado']?>
                                                    </h6>
                                                    <p class="text-muted mb-0">
                                                        Petición hecha por: <a href="#">
                                                            <?=$pet['username']?>
                                                        </a>
                                                    </p>
                                                </div>
                                                <div class="me-auto text-sm-right pt-2 pt-sm-0">
                                                    <p class="text-muted">Fecha</p>
                                                    <p class="text-muted mb-0">Hora</p>
                                                </div>
                                            </div>
                                        </div>
                                        <?php $cnt=$cnt+1; }?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




        <!-- Métricas -->

    </div>
    <!-- content-wrapper ends -->
<?php include('includes/footer.php');?>
