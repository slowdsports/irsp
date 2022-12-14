<?php
session_start();
$_SESSION['referer'] = "//" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
//if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')) {
    //header("location: login.php");
    // Dejamos el home abierto al público general
//} else
include('inc/header.php');
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

    <!-- welcome notification  -->
    <div id="notification-welcome" class="notification-box">
        <div class="notification-dialog android-style">
            <div class="notification-header">
                <div class="in">
                    <img src="../img/icon/72x72.png" alt="image" class="imaged w24">
                    <strong>BETA</strong>
                </div>
                <a href="#" class="close-button">
                    <ion-icon name="close"></ion-icon>
                </a>
            </div>
            <div class="notification-content">
                <div class="in">
                    <h3 class="subtitle">¡Bienvenido a iRaffle TV!</h3>
                    <div class="text">
                        Actualmente estás viendo la versión BETA 3 de esta aplicación.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- * welcome notification -->

    <div class="header-large-title container">
        <h1 class="title"><?php if(!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')){ $fullname = "Invitado"; } else{ $fullname = ucfirst($row['fullname']); } echo $fullname; ?></h1>
        <h4 class="subtitle">¡Te damos la bienvenida!</h4>
    </div>

    <!-- Mandar a pagar a los recién registrados -->
    <?php
    if ($row['fecha'] == "" || $row['fecha'] == null){
        if($_GET['premiumRequest']){
            include('inc/registered.php');
        }
    }
    ?>
    <!-- *Mandar a pagar a los recién registrados -->

    <!-- *Slider Live -->
    <?php include('inc/slider_vivo.php'); ?>
    <!-- *Slider Live -->

    <!-- Categorías -->
    <div class="section mt-2">
        <div class="row">
            <!-- Elemento -->
            <div class="col-6 col-sm-4 col-md-3 mycard">
                <a href="agenda/futbol">
                    <div class="card product-card">
                        <div class="card-body">
                            <img width="48px" height="48px" src="../img/futbol.svg" class="image" alt="product image">
                            <h2 class="title text-center">Fútbol</h2>
                            <p class="text text-center">PREMIUM</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- End Elemento -->
            <!-- Elemento -->
            <div class="col-6 col-sm-4 col-md-3 mycard">
                <a href="agenda/basket">
                    <div class="card product-card">
                        <div class="card-body">
                            <img width="48px" height="48px" src="../img/basket.svg" class="image" alt="product image">
                            <h2 class="title text-center">Basket</h2>
                            <p class="text text-center">GRATIS</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- End Elemento -->
            <!-- Elemento -->
            <div class="col-6 col-sm-4 col-md-3 mycard">
                <a href="agenda/nfl">
                    <div class="card product-card">
                        <div class="card-body">
                            <img width="48px" height="48px" src="../img/nfl.svg" class="image" alt="product image">
                            <h2 class="title text-center">NFL</h2>
                            <p class="text text-center">GRATIS</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- End Elemento -->
            <!-- Elemento -->
            <div class="col-6 col-sm-4 col-md-3 mycard">
                <a href="tv">
                    <div class="card product-card">
                        <div class="card-body">
                            <img width="48px" height="48px" src="../img/tv.svg" class="image" alt="product image">
                            <h2 class="title text-center">TV</h2>
                            <p class="text text-center">PREMIUM</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- End Elemento -->
            <!-- Elemento -->
            <div class="col-6 col-sm-4 col-md-3 mycard">
                <a href="agenda/mlb">
                    <div class="card product-card">
                        <div class="card-body">
                            <img width="48px" height="48px" src="../img/mlb.svg" class="image" alt="product image">
                            <h2 class="title text-center">MLB</h2>
                            <p class="text text-center">GRATIS</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- End Elemento -->
            <!-- Elemento -->
            <div class="col-6 col-sm-4 col-md-3 mycard">
                <a href="agenda/ufc">
                    <div class="card product-card">
                        <div class="card-body">
                            <img width="48px" height="48px" src="../img/ufc.svg" class="image" alt="product image">
                            <h2 class="title text-center">UFC</h2>
                            <p class="text text-center">GRATIS</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- End Elemento -->
            <!-- Elemento -->
            <div class="col-6 col-sm-4 col-md-3 mycard">
                <a href="agenda/f1">
                    <div class="card product-card">
                        <div class="card-body">
                            <img width="48px" height="48px" src="../img/formula1.svg" class="image" alt="product image">
                            <h2 class="title text-center">F1</h2>
                            <p class="text text-center">GRATIS</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- End Elemento -->
            <!-- Elemento -->
            <div class="col-6 col-sm-4 col-md-3 mycard">
                <a href="agenda/motogp">
                    <div class="card product-card">
                        <div class="card-body">
                            <img width="48px" height="48px" src="../img/motogp.svg" class="image" alt="product image">
                            <h2 class="title text-center">MotoGP</h2>
                            <p class="text text-center">GRATIS</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- End Elemento -->

            <!-- Elemento -->
            <div class="col-6 col-sm-4 col-md-3 mycard">
                <a href="agenda/tenis">
                    <div class="card product-card">
                        <div class="card-body">
                            <img width="48px" height="48px" src="../img/tenis.svg" class="image" alt="product image">
                            <h2 class="title text-center">Tenis</h2>
                            <p class="text text-center">PREMIUM</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- End Elemento -->

            <!-- Elemento -->
            <div class="col-6 col-sm-4 col-md-3 mycard">
                <a href="agenda/balonmano">
                    <div class="card product-card">
                        <div class="card-body">
                            <img width="48px" height="48px" src="../img/balonmano.svg" class="image" alt="product image">
                            <h2 class="title text-center">Balonmano</h2>
                            <p class="text text-center">GRATIS</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- End Elemento -->

        </div>
    </div>
    <!-- End Categorías -->
    <?php
    include('inc/navbar.php');
    ?>
    <script>
    setTimeout(function(){ location.reload(); }, 180000);
    </script>