<?php
session_start();
$_SESSION['referer'] = "//" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
include('../../inc/header.php'); include('../../conn.php'); include('../../inc/scraper.php'); include('tildes.php');
$query=mysqli_query($conn,"select * from user where userid='".$_SESSION['id']."'");
$row=mysqli_fetch_assoc($query);

$base ="http://givemenbastreams.com/mlb.php?g=";
$g = $_GET['g'];
$file = $base.$g;

$site= file_get_contents($file);
preg_match("(source\:\s'(.*?)')", $site, $stream);

if(isset($_GET['g'])){
    if ($stream[1] == null){
        $_SESSION['nbaError'] = "No se ha podido cargar la retransmisión del juego.";
    } else{
        $m3u8 = base64_encode($stream[1]);
        // header ("location: ../../play?nba&plyr=vid&c=$m3u8");
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

<div class="header-large-title container">
    <h1 class="title"><?php if(!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')){ $fullname = "Invitado"; } else{ $fullname = ucfirst($row['fullname']); } echo $fullname; ?></h1>
    <h4 class="subtitle">¡Disfruta de tu evento!</h4>
</div>

<!-- Alerta -->
<?php
if (isset($_SESSION['nbaError'])){
?>
<br>
<div class="container">
    <div class="alert alert-danger text-center" role="alert">
    <?=$_SESSION['nbaError'];?>
    </div>
</div>
<br>
<?php unset($_SESSION['nbaError']); }?>
<!-- *Alerta -->

<!-- Categorías -->
    <div class="section mt-2">
        <div class="container">
            <div class="row">
                <!-- NBA TV -->
                <div style="" class="col-6">
                    <a href="../../tv/epg?url=epg&c=567">
                        <div class="card product-card liga-card">
                            <div class="card-body">
                                <center>
                                    <img width="48px" src="https://i.ibb.co/w0qg9JF/trans.png" style="background-image: url('../../assets/img/canales/dazn.png'); background-size: contain; background-repeat: no-repeat;" class="image" alt="product image" />
                                    <h2 class="title text-center">DAZN F1</h2>
                                </center>
                            </div>
                        </div>
                    </a>
                </div>
                <div style="" class="col-6">
                    <a href="../../tv/epg?url=epg&c=564">
                        <div class="card product-card liga-card">
                            <div class="card-body">
                                <center>
                                    <img width="48px" src="https://i.ibb.co/w0qg9JF/trans.png" style="background-image: url('../../assets/img/canales/espn.png'); background-size: contain; background-repeat: no-repeat;" class="image" alt="product image" />
                                    <h2 class="title text-center">ESPN</h2>
                                </center>
                            </div>
                        </div>
                    </a>
                </div>
                <div style="" class="col-6">
                    <a href="../../tv/epg?url=epg&c=8">
                        <div class="card product-card liga-card">
                            <div class="card-body">
                                <center>
                                    <img width="48px" src="https://i.ibb.co/w0qg9JF/trans.png" style="background-image: url('../../assets/img/canales/espn.png'); background-size: contain; background-repeat: no-repeat;" class="image" alt="product image" />
                                    <h2 class="title text-center">Fox Sports Premium</h2>
                                </center>
                            </div>
                        </div>
                    </a>
                </div>
                <hr>
                <!-- NBA TV -->
                <?php
                // get DOM from URL or file
                $html = file_get_html('https://www.espn.com.mx/deporte-motor/f1/calendario');
                $fecha = $html -> find ('div.ResponsiveTable');
                $juegos = $html ->find ('tbody tr');
                foreach ($juegos as $juego):
                    $event = $juego ->find ('td.race__col a',0)-> plaintext;
                    $eventLogo = eliminar_tildes(strtolower($event));
                    $time = $juego ->find ('td.winnerLightsOut__col',0)-> plaintext;
                    $place = $juego ->find ('td.race__col div',0)-> plaintext;
                    $ended = $juego ->find ('td.tv__col a',0)-> plaintext;
                    if ($ended){
                        $winner = '<i class="fas fa-trophy text-warning"></i> ';
                    } else {
                        $winner = "";
                    }
                    if ($time == "EN VIVO"){
                        $time = '<i class="fas fa-circle faa-flash animated"></i> En Vivo';
                        $finalizado = "";
                    } elseif ($time == "Cancelado"){
                        $time = '<span class="badge badge-pill badge-danger">Cancelado</span>';
                    }
                    // Counters
                    $i=1; $i2=1;
                    $i++; $i2++;
                    // Locations & Custom Channels
                    include ('locations.php'); include ('channels.php');
                ?>
                <!-- Elemento --
                <div class="col-12 mycard">
                    <a data-toggle="collapse" href="#juego-<?=$i++?>" role="button" aria-expanded="false" aria-controls="juego-<?=$i++?>">
                        <div class="card product-card">
                            <div class="main-event">
                                <div class="league">
                                    <img src="<?=$app?>assets/img/ligas/f1.png" alt="" />
                                </div>
                                <div class="match">
                                    <div class="team">
                                        <img class="<?=$eventLogo?>" width="60px" src="https://i.ibb.co/w0qg9JF/trans.png" alt="<?=$event?>" />
                                        <h4><?=ucfirst($event)?></h4>
                                    </div>
                                </div>
                                <div class="channel">
                                    <img src="<?=$app?>assets/img/canales/dazn.png" alt="Channel" />
                                </div>
                            </div>
                        </div>
                    </a>
                    <div class="collapse" id="juego-<?=$i2++?>">
                        <div class="card card-body">
                            <ul class="listview link-listview">
                                <?php
                                if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')){
                                    echo '
                                    <li>
                                        <a class="justify-content-center" href="https://irpc.ga/mg/play/sandbox.php?get=daznf1">
                                        <i class="flag es"></i>
                                        DAZN F1 | HD
                                        </a>
                                    </li>
                                    ';
                                    echo $canal1Free;
                                    echo $canal2Free;
                                    echo $canal3Free;
                                } else{
                                    echo '
                                    <li>
                                        <a class="justify-content-center" href="https://irpc.ga/mg/play/sandbox.php?get=daznf1">
                                        <i class="flag es"></i>
                                        DAZN F1 | HD
                                        </a>
                                    </li>
                                    <li>
                                        <a class="justify-content-center" href="../play/?c=daznf1">
                                        <i class="flag es"></i>
                                        DAZN F1 | HD (VIP)
                                        </a>
                                    </li>
                                    ';
                                    echo $canal1VIP;
                                    echo $canal2VIP;
                                    echo $canal3VIP;
                                }
                                ?>
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
