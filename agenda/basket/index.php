<?php
session_start();
$_SESSION['referer'] = "//" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
include('../../inc/header.php'); include('../../conn.php');
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

<div class="header-large-title container">
    <h1 class="title"><?php if(!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')){ $fullname = "Invitado"; } else{ $fullname = ucfirst($row['fullname']); } echo $fullname; ?></h1>
    <h4 class="subtitle">¿Qué quieres ver hoy?</h4>
</div>

<!-- Categorías -->
    <div class="section mt-2">
        <div class="row">

            <!-- Elemento -->
            <div class="col-6 col-sm-4 col-md-3 mycard <?=$ligaStatus?>">
                <a href="liga?id=12">
                    <div class="card product-card liga-card">
                        <div class="card-body">
                            <center>
                            <img src="../../../img/ligas/acb.png" class="image" alt="product image">
                            <h2 class="title text-center">ACB</h2>
                            </center>
                        </div>
                    </div>
                </a>
            </div>
            <!-- End Elemento -->

            <!-- Elemento -->
            <div class="col-6 col-sm-4 col-md-3 mycard <?=$ligaStatus?>">
                <a href="liga?id=13">
                    <div class="card product-card liga-card">
                        <div class="card-body">
                            <center>
                            <img src="../../../img/ligas/euroliga.png" class="image" alt="product image">
                            <h2 class="title text-center">Euroliga</h2>
                            </center>
                        </div>
                    </div>
                </a>
            </div>
            <!-- End Elemento -->

            <!-- Elemento -->
            <div class="col-6 col-sm-4 col-md-3 mycard <?=$ligaStatus?>">
                <a href="nba/">
                    <div class="card product-card liga-card">
                        <div class="card-body">
                            <center>
                            <img src="../../../img/ligas/nba.png" class="image" alt="product image">
                            <h2 class="title text-center">NBA</h2>
                            </center>
                        </div>
                    </div>
                </a>
            </div>
            <!-- End Elemento -->

        </div>
    </div>
<!-- End Categorías -->
<?php
include('../../inc/navbar.php');
?>