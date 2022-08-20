<?php
session_start();
if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')) {
    header("location: ../../login.php");
} else
include('../../inc/header.php'); include('../../conn.php');
$query=mysqli_query($conn,"select * from user where userid='".$_SESSION['id']."'");
$row=mysqli_fetch_assoc($query);
?>

<!-- App Capsule -->
<div id="appCapsule">

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

<div class="header-large-title">
    <h1 class="title"><?=ucfirst($row['fullname'])?>,</h1>
    <h4 class="subtitle">¿Qué quieres ver hoy?</h4>
</div>

<!-- Categorías -->
    <div class="section mt-2">
        <div class="row">

            <!-- Elemento -->
            <div class="col-6 col-sm-4 col-md-3 mycard <?=$ligaStatus?>">
                <a href="liga?id=acb">
                    <div class="card product-card liga-card">
                        <div class="card-body">
                            <center>
                            <img src="<?=$app?>assets/img/acb.png" class="image" alt="product image">
                            <h2 class="title text-center">ACB</h2>
                            </center>
                        </div>
                    </div>
                </a>
            </div>
            <!-- End Elemento -->

            <!-- Elemento -->
            <div class="col-6 col-sm-4 col-md-3 mycard <?=$ligaStatus?>">
                <a href="liga?id=euroliga">
                    <div class="card product-card liga-card">
                        <div class="card-body">
                            <center>
                            <img src="<?=$app?>assets/img/euroliga.png" class="image" alt="product image">
                            <h2 class="title text-center">Euroliga</h2>
                            </center>
                        </div>
                    </div>
                </a>
            </div>
            <!-- End Elemento -->

            <!-- Elemento -->
            <div class="col-6 col-sm-4 col-md-3 mycard <?=$ligaStatus?>">
                <a href="liga?id=nba">
                    <div class="card product-card liga-card">
                        <div class="card-body">
                            <center>
                            <img src="<?=$app?>assets/img/nba.png" class="image" alt="product image">
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