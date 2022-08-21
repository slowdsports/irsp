<?php
session_start();
$_SESSION['referer'] = "//" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
include('../../inc/header.php'); include('../../conn.php'); include('../../inc/scraper.php');

$base ="http://givemenbastreams.com/mlb.php?g=";
$g = $_GET['g'];
$file = $base.$g;

$site= file_get_contents($file);
preg_match("(source\:\s'(.*?)')", $site, $stream);

if(isset($_GET['g'])){
    if ($stream[1] == null){
        echo '
        <br/><br/>
        <div class="container">
        <center>
            <div class="alert alert-danger" role="alert">
                ¡No hay Stream!
            </div>
        </center>
        </div>
        ';
    }

    else{
        $m3u8 = base64_encode($stream[1]);
        echo '<script>window.location.href = "..//play?mlb&plyr=vid&c='.$m3u8.'";</script>';
    }
}

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
            <?php
            $html = file_get_html('https://www.espn.com.mx/futbol-americano/nfl/calendario');
            $fecha = $html -> find ('div.ResponsiveTable');
            $juegos = $html ->find ('tbody tr');
            foreach ($juegos as $juego):
                $local = $juego ->find ('td.home div a.team-name span',0)-> plaintext;
                $localLogo = $juego ->find ('td.home div.home-wrapper div.teams a img',0)-> src;
                $visita = $juego ->find ('td a.team-name span',0)-> plaintext;
                $visitaLogo = $juego ->find ('td div.teams a img',0)-> src;
                //Resultado $time = $juego ->find ('td a',4)-> plaintext;
                $time = $juego ->find ('td',2)-> plaintext;
                if (!$time){
                    $time = $juego ->find ('td.date__col a.AnchorLink',0)-> plaintext;
                    $finalizado = "";
                }
                if ($time == "EN VIVO"){
                    $time = '<i class="fas fa-circle faa-flash animated"></i> En Vivo';
                    $finalizado = "";
                }
            // Teams
            include ('teams.php');
            $i; $i2;
            ?>
            <!-- Elemento -->
            <div class="col-12 mycard">
                <a data-toggle="collapse" href="#juego<?=$local.$visita?>" role="button" aria-expanded="false" aria-controls="juego<?=$local.$visita?>">
                    <div class="card product-card">
                        <div class="card-body">
                            <center>
                                <img width="48px" src="<?=$app?>assets/img/ligas/<?=$result['ligaImg']?>.png" alt="" class="float-left">
                                <img width="48px" src="https://cdn.worldvectorlogo.com/logos/movistar-plus-2.svg" alt="" class="float-right">
                                <div class="row">
                                    <div class="col-6">
                                        <img src="<?=$result['logoL']?>" alt="">
                                        <h4><?=ucfirst($local)?></h4>
                                    </div>
                                    <div class="col-6">
                                        <img src="<?=$result['logoV']?>" alt="">
                                        <h4><?=ucfirst($visita)?></h4>
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
            <?endforeach;?>

        </div>
    </div>
<!-- End Categorías -->
<?php
include('../../inc/navbar.php');
?>