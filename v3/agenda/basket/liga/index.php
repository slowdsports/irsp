<?php
session_start();
$_SESSION['referer'] = "//" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
include('../../../inc/header.php'); include('../../../conn.php'); include('../../../inc/scraper.php');

$get = $_GET['id'];
if ($get == "endesa"):
    $liga = "endesa";
elseif ($get == "euroliga"):
    $liga = "euroliga";
endif;

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
    <h4 class="subtitle">¡Disfruta de tu evento!</h4>
</div>

<!-- Categorías -->
    <div class="section mt-2">
        <div class="row">
            <!-- Elemento -->
            <div class="col-12 mycard">
                <a data-toggle="collapse" href="#juego<?=$result['id']?>" role="button" aria-expanded="false" aria-controls="juego<?=$result['id']?>">
                    <div class="card product-card">
                        <div class="card-body">
                            <center>
                                <img width="48px" src="<?=$app?>assets/img/ligas/<?=$result['ligaImg']?>.png" alt="" class="float-left">
                                <img width="48px" src="https://cdn.worldvectorlogo.com/logos/movistar-plus-2.svg" alt="" class="float-right">
                                <div class="row">
                                    <div class="col-6">
                                        <img src="<?=$result['logoL']?>" alt="">
                                        <h4><?=ucfirst($result['local'])?></h4>
                                    </div>
                                    <div class="col-6">
                                        <img src="<?=$result['logoV']?>" alt="">
                                        <h4><?=ucfirst($result['visita'])?></h4>
                                    </div>
                                </div>
                            </center>
                        </div>
                    </div>
                </a>
                <div class="collapse" id="juego<?=$result['id']?>">
                    <div class="card card-body">
                        <ul class="listview link-listview">
                            <li>
                                <a class="justify-content-center" href="../../play/?c=<?=$row['channelId']?>">
                                    <i class="flag <?=$row['countryImg']?>"></i>
                                    <?=$row['channelName']?>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Elemento -->

        </div>
    </div>
<!-- End Categorías -->
<?php
if ($liga == "euroliga"){
    echo '
    <script src="//eduveel19.github.io/app/basket/euroliga/json.js"></script>
    <script src="//eduveel19.github.io/app/basket/euroliga/main.js"></script>
    <script src="//eduveel19.github.io/app/js/basket/euroliga/euroliga.js"></script>
    ';
} elseif ($liga == "endesa"){
    echo '
    <script src="//eduveel19.github.io/app/basket/acb/json.js"></script>
    <script src="//eduveel19.github.io/app/basket/acb/main.js"></script>
    <script src="//eduveel19.github.io/app/js/basket/acb/acb.js"></script>
    ';
}
include('../../../inc/navbar.php');
?>