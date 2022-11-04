<?php
session_start();
$_SESSION['referer'] = "//" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
include('../../../inc/header.php'); include('../../../conn.php');
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
    <h4 class="subtitle">¡Disfruta de tu evento!</h4>
</div>

<!-- Categorías -->
    <div class="section mt-2">
        <div class="container">
            <div class="row">
                <?php
                $getLiga = $_GET['id'];
                $ligas = mysqli_query($conn, "select * from agenda
                INNER JOIN ligas ON agenda.liga = ligas.ligaId
                where liga = '$getLiga' and status=1");
                while($result=mysqli_fetch_array($ligas)){
                    // Teams
                    $local = $result['local'];
                    $visita = $result['visita'];
                    $index = $result['id'];
                    // Channels
                    include ('custom.php');
                    include('channels.php');

                    include('../../../inc/cntdwn.php');
                    include('teams.php');
                ?>
                <!-- Elemento -->
                <div class="col-12 mycard">
                    <a data-toggle="collapse" href="#juego<?=$result['id']?>" role="button" aria-expanded="<?=$aria?>" aria-controls="juego<?=$result['id']?>">
                        <div class="card product-card">
                            <div class="main-event">
                                <div class="league">
                                    <img src="../../../../img/ligas/<?=$result['ligaImg']?>.png" alt="League" />
                                    <!-- <p class="<?=$result['id']?>"><?=ucfirst($dia)?></p> -->
                                    <p class="cntdwn-<?=$index?>"></p>
                                </div>
                                <div class="match">
                                    <div class="team">
                                        <img width="60px" src="../../../../img/equipos/<?=strtolower($result['ligaImg'])?>/<?=str_replace(' ', '', strtolower($result['local'])); ?>.png" alt="" />
                                        <h4><?=ucfirst($local)?></h4>
                                    </div>
                                    <div <?=$isEventoHidden?> class="vs">
                                        <h6>vs</h6>
                                    </div>
                                    <div <?=$isEventoHidden?> class="team">
                                        <img width="60px" src="../../../../img/equipos/<?=strtolower($result['ligaImg'])?>/<?=str_replace(' ', '', strtolower($result['visita'])); ?>.png" alt="" />
                                        <h4><?=ucfirst($visita)?></h4>
                                    </div>
                                </div>
                                <div class="channel">
                                    <img src="../../../../img/canales/<?=($canalImg===null)?"152x152":$canalImg ?>.png" alt="" />
                                </div>
                            </div>
                        </div>
                    </a>
                    <div class="collapse <?=$collapse?>" id="juego<?=$result['id']?>">
                        <div class="card card-body">
                            <ul class="listview link-listview">
                                <?php
                                //include('timer.php');
                                // Canal 2
                                echo $canalop2;
                                //echo $canal2;
                                // Canal 3
                                echo $canalop3;
                                // Canal 4
                                echo $canalop4;
                                // Custom Channels
                                echo $custom1;
                                echo $custom2;
                                echo $custom3;
                                // Canal 4
                                $canal4 = $result['canal4'];
                                $c4=mysqli_query($conn,"select * from channels
                                INNER JOIN countries ON channels.country = countries.countryId
                                where channelId = '$canal4'");
                                $row=mysqli_fetch_array($c4);
                                if ($canal4 === null || $canal4 === ""){
                                    // No mostramos nada
                                } else{
                                ?>
                                <li>
                                    <a class="justify-content-center" href="../../../tv/epg/?futbol&id=<?=$index?>&c=<?=$row['channelId']?>">
                                        <i class="flag <?=$row['countryImg']?>"></i>
                                        <?=$row['channelName']?>
                                    </a>
                                </li>
                                <?php }?>

                                <?php
                                // Canal 5
                                $canal5 = $result['canal5'];
                                $c5=mysqli_query($conn,"select * from channels
                                INNER JOIN countries ON channels.country = countries.countryId
                                where channelId = '$canal5'");
                                $row=mysqli_fetch_array($c5);
                                if ($canal5 === null || $canal5 === ""){
                                    // No mostramos nada
                                } else{
                                ?>
                                <li>
                                    <a class="justify-content-center" href="../../../tv/epg/?futbol&id=<?=$index?>&c=<?=$row['channelId']?>">
                                        <i class="flag <?=$row['countryImg']?>"></i>
                                        <?=$row['channelName']?>
                                    </a>
                                </li>
                                <?php }?>

                                <?php
                                // Canal 6
                                $canal6 = $result['canal6'];
                                $c6=mysqli_query($conn,"select * from channels
                                INNER JOIN countries ON channels.country = countries.countryId
                                where channelId = '$canal6'");
                                $row=mysqli_fetch_array($c6);
                                if ($canal6 === null || $canal6 === ""){
                                    // No mostramos nada
                                } else{
                                ?>
                                <li>
                                    <a class="justify-content-center" href="../../../tv/epg/?futbol&id=<?=$index?>&c=<?=$row['channelId']?>">
                                        <i class="flag <?=$row['countryImg']?>"></i>
                                        <?=$row['channelName']?>
                                    </a>
                                </li>
                                <?php }?>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Elemento -->
                <?}?>

            </div>
            <br>
            <a class="hidden" <?=$isEventoHidden?> href="<?=$app?>repeticion/liga/?id=<?=$getLiga?>" class="btn btn-primary btn-lg btn-block">Repeticiones</a>
        </div>
    </div>
<!-- End Categorías -->
<?php
include('../../../inc/navbar.php');
?>
