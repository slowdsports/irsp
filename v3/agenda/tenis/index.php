<?php
session_start();
$_SESSION['referer'] = "//" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
include('../../inc/header.php'); include('../../conn.php'); include('../../inc/scraper.php');
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
    <h1 class="title"><?=ucfirst($fullname)?></h1>
    <h4 class="subtitle">¡Disfruta de tu evento!</h4>
</div>

<!-- Categorías -->
    <div class="section mt-2">
        <div class="container">
            <div class="row">
                <?php
                // get DOM from URL or file
                $juegos = mysqli_query($conn, "select * from tenis");
                while($result=mysqli_fetch_array($juegos)){
                    $index = $result['id'];
                    $tenista1 = $result['tenista1'];
                    $imagen1 = $result['imagen1'];
                    $tenista2 = $result['tenista2'];
                    $imagen2 = $result['imagen2'];
                ?>
                <!-- Elemento -->
                <div class="col-12 mycard">
                    <a data-toggle="collapse" href="#juego-<?=$index?>" role="button" aria-expanded="<?=$aria?>" aria-controls="juego-<?=$local?>-<?=$visita?>">
                        <div class="card product-card">
                            <div style="height:200px" class="main-event">
                                <div class="league">
                                    <img src="<?=$app?>assets/img/canales/tenis.png" alt="League" />
                                </div>
                                <div class="match">
                                    <div class="team">
                                        <img width="60px" src="<?=$imagen1?>" alt="<?=$local?>" />
                                        <h4><?=ucfirst($tenista1)?></h4>
                                    </div>
                                    <div class="vs">
                                        <h6>vs</h6>
                                    </div>
                                    <div class="team">
                                        <img width="60px" src="<?=$imagen2?>" alt="<?=$visita?>" />
                                        <h4><?=ucfirst($tenista2)?></h4>
                                    </div>
                                </div>
                                <div class="channel">
                                    <img src="<?=$app?>assets/img/canales/eurosport.png" alt="Channel" />
                                </div>
                            </div>
                        </div>
                    </a>
                    <div class="collapse <?=$collapse?>" id="juego-<?=$index?>">
                        <div class="card card-body">
                            <ul class="listview link-listview">
                                <li>
                                    <a class="justify-content-center" href="http://iraffle.live/v3/agenda/play/?c=eurosport">
                                        <i class="flag es"></i>
                                        #Vamos
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Elemento -->
                <?php } ?>

            </div>
        </div>
    </div>
<!-- End Categorías -->
<?php
include('../../inc/navbar.php');
?>
