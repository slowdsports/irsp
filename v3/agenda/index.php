<?php
$_SESSION['referer'] = "//" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
session_start();
if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')) {
    header("location: ../login.php");
} else
include('../inc/header.php'); include('../conn.php');
$query=mysqli_query($conn,"select * from user where userid='".$_SESSION['id']."'");
$row=mysqli_fetch_assoc($query);
?>

<!-- App Capsule -->
<div id="appCapsule" class="container">

<?php
if (isset($_SESSION['message']) ){
    echo '
    <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
        '.$_SESSION['message'].'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    ';
    unset($_SESSION['message']);
}
?>

    <!-- welcome notification  --
    <div id="notification-welcome" class="notification-box">
        <div class="notification-dialog android-style">
            <div class="notification-header">
                <div class="in">
                    <img src="assets/img/icon/72x72.png" alt="image" class="imaged w24">
                    <strong>PROMEDIA</strong>
                </div>
                <a href="#" class="close-button">
                    <ion-icon name="close"></ion-icon>
                </a>
            </div>
            <div class="notification-content">
                <div class="in">
                    <h3 class="subtitle">¡Agosto gratis!</h3>
                    <div class="text">
                        Recuerda que durante el mes de agosto tendrás acceso gratuito a todo el contenido.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- * welcome notification -->

<div class="header-large-title">
    <h1 class="title"><?=ucfirst($row['fullname'])?>,</h1>
    <h4 class="subtitle">Elige lo que quieres ver</h4>
</div>

<!-- Carousel --
<div class="section full mt-3 mb-3">
    <div class="carousel-multiple owl-carousel owl-theme">
        <a href="#first">
            <div class="item">
                <div class="card">
                    <img src="<?=$app?>assets/img/sample/photo/d2.jpg" class="card-img-top" alt="image">
                    <div class="card-body pt-2">
                        <h4 class="mb-0">Fútbol</h4>
                    </div>
                </div>
            </div>
        </a>
        <a href="#first">
            <div class="item">
                <div class="card">
                    <img src="<?=$app?>assets/img/sample/photo/d2.jpg" class="card-img-top" alt="image">
                    <div class="card-body pt-2">
                        <h4 class="mb-0">Basket</h4>
                    </div>
                </div>
            </div>
        </a>

        <div class="item">
            <div class="card">
                <img src="<?=$app?>assets/img/sample/photo/d4.jpg" class="card-img-top" alt="image">
                <div class="card-body pt-2">
                    <h4 class="mb-0">Promociones</h4>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- End Carousel -->

<div class="section mt-2">
    <div class="row">
        <?php
        $ligas = mysqli_query($conn, "select * from ligas ");
        while($result=mysqli_fetch_array($ligas)){
            // Cantidad de Juegos
            $index = $i++;
            $queryQty=mysqli_query($conn,"select * from agenda where liga = $index");
            $totalGames=mysqli_num_rows($queryQty);
            if ($totalGames == 0){
                $ligaStatus = "hidden";
            } elseif ($totalGames >= 1){
                $ligaStatus = "show";
            }
        ?>
        <div class="col-6 col-sm-4 <?=$ligaStatus?>">
            <div class="card product-card">
                <a href="liga?id=<?=$result['ligaId']?>">
                    <div class="card-body">
                        <img src="<?=$app?>assets/img/sample/photo/d1.jpg" class="image" alt="product image">
                        <h2 class="title"><?=$result['ligaName']?></h2>
                        <p class="text"><?=$totalGames; if($totalGames==1){echo " juego";} else{echo " juegos";}  ?></p>
                    </div>
                </a>
            </div>
        </div>
        <?php }; ?>
    </div>
</div>

<?php
include('../inc/navbar.php');
?>