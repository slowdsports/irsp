<?php
session_start();
$_SESSION['referer'] = "//" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
include('../../inc/header.php'); include('../../conn.php'); include('../../inc/scraper.php');
$query=mysqli_query($conn,"select * from user where userid='".$_SESSION['id']."'");
$row=mysqli_fetch_assoc($query);

$base ="http://givemenbastreams.com/nfl.php?g=";
$g = $_GET['g'];
$file = $base.$g;

$site= file_get_contents($file);
preg_match("(source\:\s'(.*?)')", $site, $stream);

if(isset($_GET['g'])){
    if ($stream[1] == null){
        $_SESSION['nflError'] = "No se ha podido cargar la retransmisión del juego.";
    } else{
        $m3u8 = base64_encode($stream[1]);
        // header ("location: ../../play?nfl&plyr=vid&c=$m3u8");
        echo '<script>window.location.href = "../../play?nba&plyr=vid&c='.$m3u8.'";</script>';
    }
}
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

<div class="header-large-title">
    <h1 class="title"><?=ucfirst($row['fullname'])?>,</h1>
    <h4 class="subtitle">¡Disfruta de tu evento!</h4>
</div>

<!-- Alerta -->
<?php
if (isset($_SESSION['nbaError'])){
?>
<br>
<div class="container">
    <div class="alert alert-danger text-center" role="alert">
    <?=$_SESSION['nflError'];?>
    </div>
</div>
<br>
<?php unset($_SESSION['nflError']); }?>
<!-- *Alerta -->

<!-- Categorías -->
    <div class="section mt-2">
        <div class="container">
            <div class="row">
                <?php
                // get DOM from URL or file
                $html = file_get_html('https://www.espn.com.mx/futbol-americano/nfl/calendario');
                $fecha = $html -> find ('div.Table__Title' ,0)-> plaintext;
                $juegos = $html ->find ('tbody tr');
                foreach ($juegos as $juego):
                    $local = $juego ->find ('td div.local span a',1)-> plaintext;
                    $localFull = $juego ->find ('td div.local span a',0)-> href;
                    $localFull = substr($localFull, 33, 100);
                    $localLogo = $juego ->find ('td div span a img',0)-> src;
                    $visita = $juego ->find ('td div.matchTeams span a',1)-> plaintext;
                    $visitaFull = $juego ->find ('td div.matchTeams span a',0)-> href;
                    $visitaFull = substr($visitaFull, 33, 100);
                    $visitaLogo = $juego ->find ('td div.matchTeams span a img',0)-> src;
                    //Resultado $time = $juego ->find ('td a',4)-> plaintext;
                    $time = $juego ->find ('td',2)-> plaintext;
                    if (!$time){
                        $time = $juego ->find ('td.date__col a.AnchorLink',0)-> plaintext;
                        $finalizado = "";
                    }
                    if ($time == "LIVE"){
                        $time = '<i class="fas fa-circle faa-flash animated"></i> En Vivo';
                        $finalizado = "";
                    }
                    // Teams
                    include ('teams.php');
                ?>
                <!-- Elemento -->
                <div class="col-12 mycard">
                    <a data-toggle="collapse" href="#juego-<?=$local?>-<?=$visita?>" role="button" aria-expanded="false" aria-controls="juego-<?=$local?>-<?=$visita?>">
                        <div class="card product-card">
                            <div class="main-event">
                                <div class="league">
                                    <img src="<?=$app?>assets/img/ligas/nfl.png" alt="League" />
                                </div>
                                <div class="match">
                                    <div class="team">
                                        <img width="60px" src="<?=$app?>assets/img/equipos/nfl/<?=$local?>.png" alt="<?=$local?>" />
                                        <h4><?=ucfirst($local)?></h4>
                                    </div>
                                    <div class="vs">
                                        <h6>vs</h6>
                                    </div>
                                    <div class="team">
                                        <img width="60px" src="<?=$app?>assets/img/equipos/nfl/<?=$visita?>.png" alt="<?=$visita?>" />
                                        <h4><?=ucfirst($visita)?></h4>
                                    </div>
                                </div>
                                <div class="channel">
                                    <img src="<?=$app?>assets/img/canales/nfl.png" alt="Channel" />
                                </div>
                            </div>
                        </div>
                    </a>
                    <div class="collapse" id="juego-<?=$local?>-<?=$visita?>">
                        <div class="card card-body">
                            <ul class="listview link-listview">
                                <li>
                                    <a class="justify-content-center" href="?g=<?=$local?>">
                                    <i class="flag us"></i>
                                    NFL TV - <?=ucfirst($local)?> | HD
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Elemento -->
                <?php endforeach; ?>

            </div>
        </div>
    </div>
<!-- End Categorías -->
<?php
include('../../inc/navbar.php');
?>
