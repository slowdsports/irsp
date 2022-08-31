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

<div class="header-large-title">
    <h1 class="title"><?=ucfirst($row['fullname'])?></h1>
    <h4 class="subtitle">¡Disfruta de tu evento!</h4>
</div>

<!-- Categorías -->
    <div class="section mt-2">
        <div class="container">
            <div class="row">
                <?php
                $getLiga = $_GET['id'];
                $ligas = mysqli_query($conn, "select * from repeticion
                INNER JOIN ligas ON repeticion.liga = ligas.ligaId
                where liga = '$getLiga' and status=1");
                while($result=mysqli_fetch_array($ligas)){
                    // Teams
                    $local = $result['local'];
                    $visita = $result['visita'];
                    $index = $result['id'];
                    setlocale(LC_ALL, "es_ES", 'Spanish_Spain', 'Spanish');
                    date_default_timezone_set('America/Tegucigalpa');
                    $dia = iconv('ISO-8859-2', 'UTF-8', strftime("%A %d", strtotime($result['fecha'])));
                    $dd = iconv('ISO-8859-2', 'UTF-8', strftime("%d", strtotime($result['fecha'])));
                    $hoy = date("d");

                    if ($dd == $hoy){
                        $dia = "Hoy";
                    } elseif ($dd == $hoy+1){
                        $dia = "Mañana";
                    }

                    include('../../agenda/futbol/liga/teams.php');
                ?>
                <!-- Elemento -->
                <div class="col-12 mycard">
                    <a href="../../tv/epg/?r=<?=$result['link']?>">
                        <div class="card product-card">
                            <div class="main-event">
                                <div class="league">
                                    <img src="<?=$app?>assets/img/ligas/<?=$result['ligaImg']?>.png" alt="League" />
                                    <p class="<?=$result['id']?>"><?=ucfirst($dia)?></p>
                                </div>
                                <div class="match">
                                    <div class="team">
                                        <img width="60px" src="<?=$app?>assets/img/equipos/<?=strtolower($result['ligaImg'])?>/<?=str_replace(' ', '', strtolower($result['local'])); ?>.png" alt="" />
                                        <h4><?=ucfirst($local)?></h4>
                                    </div>
                                    <div class="vs">
                                        <h6>vs</h6>
                                    </div>
                                    <div class="team">
                                        <img width="60px" src="<?=$app?>assets/img/equipos/<?=strtolower($result['ligaImg'])?>/<?=str_replace(' ', '', strtolower($result['visita'])); ?>.png" alt="" />
                                        <h4><?=ucfirst($visita)?></h4>
                                    </div>
                                </div>
                                <div class="channel">
                                    <img src="<?=$app?>assets/img/canales/starplus.png" alt="" />
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- End Elemento -->
                <?}?>

            </div>
        </div>
    </div>
<!-- End Categorías -->
<?php
include('../../inc/navbar.php');
?>