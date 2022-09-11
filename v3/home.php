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
                    <img src="assets/img/icon/72x72.png" alt="image" class="imaged w24">
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

    <div class="header-large-title">
        <h1 class="title">
            <?php
            if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')) {
                $fullname = "Invitado";
            } else{
                $fullname = ucfirst($row['fullname']);
            }
            echo $fullname;?></h1>
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

<!-- Slider Presentando --
<div class="section full mt-3 mb-3">
    <div class="carousel-multiple owl-carousel owl-theme">
        <?php
        $ligas = mysqli_query($conn, "select * from ligas");
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
        <a href="<?=$app?>agenda/futbol/liga?id=<?=$result['ligaId']?>">
            <div class="item">
                <div class="card">
                    <center>
                        <img src="assets/img/ligas/<?=$result['ligaImg']?>.png" class="image" alt="image">
                        <div class="card-body">
                            <p class="text text-center">
                                <?= $totalGames;
                                if ($totalGames == null || $totalGames == ""){
                                    echo "0 juegos";
                                } elseif ($totalGames == 0){
                                    echo " juegos";
                                } elseif ($totalGames == 1) {
                                    echo " juego";
                                } else {
                                    echo " juegos";
                                }
                                ?>
                            </p>
                        </div>
                    </center>
                </div>
            </div>
        </a>
        <?php }?>

        <div class="item">
            <div class="card">
                <img src="assets/img/sample/photo/d4.jpg" class="card-img-top" alt="image">
                <div class="card-body pt-2">
                    <h4 class="mb-0">Promociones</h4>
                </div>
            </div>
        </div>

    </div>

</div>
<!-- End Slider Presentando -->

<!-- Categorías -->
    <div class="section mt-2">
        <div class="row">
            <!-- Elemento -->
            <div class="col-6 col-sm-4 col-md-3 mycard">
                <a href="<?=$app?>agenda/futbol">
                    <div class="card product-card">
                        <div class="card-body">
                            <img width="48px" height="48px" src="<?=$app?>assets/img/futbol.svg" class="image" alt="product image">
                            <h2 class="title text-center">Fútbol</h2>
                            <p class="text text-center">PREMIUM</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- End Elemento -->
            <!-- Elemento -->
            <div class="col-6 col-sm-4 col-md-3 mycard">
                <a href="<?=$app?>repeticion/">
                    <div class="card product-card">
                        <div class="card-body">
                            <img width="48px" height="48px" src="<?=$app?>assets/img/futbol.svg" class="image" alt="product image">
                            <h2 class="title text-center">Repeticiones</h2>
                            <p class="text text-center">GRATIS</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- End Elemento -->
            <!-- Elemento -->
            <div class="col-6 col-sm-4 col-md-3 mycard">
                <a href="<?=$app?>agenda/basket">
                    <div class="card product-card">
                        <div class="card-body">
                            <img width="48px" height="48px" src="<?=$app?>assets/img/basket.svg" class="image" alt="product image">
                            <h2 class="title text-center">Basket</h2>
                            <p class="text text-center">GRATIS</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- End Elemento -->
            <!-- Elemento -->
            <div class="col-6 col-sm-4 col-md-3 mycard">
                <a href="<?=$app?>agenda/nfl">
                    <div class="card product-card">
                        <div class="card-body">
                            <img width="48px" height="48px" src="<?=$app?>assets/img/nfl.svg" class="image" alt="product image">
                            <h2 class="title text-center">NFL</h2>
                            <p class="text text-center">GRATIS</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- End Elemento -->
            <!-- Elemento -->
            <div class="col-6 col-sm-4 col-md-3 mycard">
                <a href="<?=$app?>tv">
                    <div class="card product-card">
                        <div class="card-body">
                            <img width="48px" height="48px" src="<?=$app?>assets/img/tv.svg" class="image" alt="product image">
                            <h2 class="title text-center">TV</h2>
                            <p class="text text-center">PREMIUM</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- End Elemento -->
            <!-- Elemento -->
            <div class="col-6 col-sm-4 col-md-3 mycard">
                <a href="<?=$app?>agenda/mlb">
                    <div class="card product-card">
                        <div class="card-body">
                            <img width="48px" height="48px" src="<?=$app?>assets/img/mlb.svg" class="image" alt="product image">
                            <h2 class="title text-center">MLB</h2>
                            <p class="text text-center">GRATIS</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- End Elemento -->
            <!-- Elemento -->
            <div class="col-6 col-sm-4 col-md-3 mycard">
                <a href="<?=$app?>agenda/ufc">
                    <div class="card product-card">
                        <div class="card-body">
                            <img width="48px" height="48px" src="<?=$app?>assets/img/ufc.svg" class="image" alt="product image">
                            <h2 class="title text-center">UFC</h2>
                            <p class="text text-center">GRATIS</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- End Elemento -->
            <!-- Elemento -->
            <div class="col-6 col-sm-4 col-md-3 mycard">
                <a href="<?=$app?>agenda/f1">
                    <div class="card product-card">
                        <div class="card-body">
                            <img width="48px" height="48px" src="<?=$app?>assets/img/formula1.svg" class="image" alt="product image">
                            <h2 class="title text-center">F1</h2>
                            <p class="text text-center">GRATIS</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- End Elemento -->
            <!-- Elemento -->
            <div class="col-6 col-sm-4 col-md-3 mycard">
                <a href="<?=$app?>agenda/motogp">
                    <div class="card product-card">
                        <div class="card-body">
                            <img width="48px" height="48px" src="<?=$app?>assets/img/motogp.svg" class="image" alt="product image">
                            <h2 class="title text-center">MotoGP</h2>
                            <p class="text text-center">GRATIS</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- End Elemento -->

            <!-- Elemento -->
            <div class="col-6 col-sm-4 col-md-3 mycard">
                <a href="<?=$app?>agenda/tenis">
                    <div class="card product-card">
                        <div class="card-body">
                            <img width="48px" height="48px" src="<?=$app?>assets/img/tenis.svg" class="image" alt="product image">
                            <h2 class="title text-center">Tenis</h2>
                            <p class="text text-center">PREMIUM</p>
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
