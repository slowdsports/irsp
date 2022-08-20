<?php
session_start();
if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')) {
    header("location: ../../../login.php");
} else
include('../../../inc/header.php'); include('../../../conn.php');
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
            $getLiga = $_GET['id'];
            $ligas = mysqli_query($conn, "select * from agenda
            INNER JOIN ligas ON agenda.liga = ligas.ligaId
            where liga = '$getLiga' and status=1");
            while($result=mysqli_fetch_array($ligas)){
            ?>
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
                            <?php
                            // Canales
                            include('../../../inc/channels.php');
                            $canal = $result['canal'];
                            $canal2 = $result['canal2'];
                            $canal3 = $result['canal3'];
                            // Canal 2
                            echo $canalop2;
                            // Canal 3
                            echo $canalop3;
                            // Canal 4
                            $canal4 = $result['canal4'];
                            $c4=mysqli_query($conn,"select * from channels
                            INNER JOIN countries ON channels.country = countries.countryId
                            where channelId = '$canal4'");
                            $row=mysqli_fetch_array($c4);
                            if ($canal4 == null || $canal4 = ""){
                                // No mostramos nada
                            } else{
                            ?>
                            <li>
                                <a class="justify-content-center" href="../../play/?c=<?=$row['channelId']?>">
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
                            if ($canal5 == null || $canal5 = ""){
                                // No mostramos nada
                            } else{
                            ?>
                            <li>
                                <a class="justify-content-center" href="#">
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
                            if ($canal6 == null || $canal6 = ""){
                                // No mostramos nada
                            } else{
                            ?>
                            <li>
                                <a class="justify-content-center" href="#">
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
    </div>
<!-- End Categorías -->
<?php
include('../../../inc/navbar.php');
?>