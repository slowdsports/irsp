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
    <h1 class="title"><?=ucfirst($row['fullname'])?></h1>
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
                <?php
                // get DOM from URL or file
                $peleas = mysqli_query($conn, "select * from ufc");
                while($result=mysqli_fetch_array($peleas)){
                    $index = $result['id'];
                    $peleador1 = $result['peleador1'];
                    $imagen1 = $result['imagen1'];
                    $peleador2 = $result['peleador2'];
                    $imagen2 = $result['imagen2'];
                ?>
                <!-- Elemento -->
                <div class="col-12 mycard">
                    <a data-toggle="collapse" href="#juego-<?=$index?>" role="button" aria-expanded="<?=$aria?>" aria-controls="juego-<?=$local?>-<?=$visita?>">
                        <div class="card product-card">
                            <div style="height:200px" class="main-event">
                                <div class="league">
                                    <img src="<?=$app?>assets/img/canales/ufc.png" alt="League" />
                                </div>
                                <div class="match">
                                    <div class="team">
                                        <img width="60px" src="<?=$imagen1?>" alt="<?=$local?>" />
                                        <h4><?=ucfirst($peleador1)?></h4>
                                    </div>
                                    <div class="vs">
                                        <h6>vs</h6>
                                    </div>
                                    <div class="team">
                                        <img width="60px" src="<?=$imagen2?>" alt="<?=$visita?>" />
                                        <h4><?=ucfirst($peleador2)?></h4>
                                    </div>
                                </div>
                                <div class="channel">
                                    <img src="<?=$app?>assets/img/canales/espn.png" alt="Channel" />
                                </div>
                            </div>
                        </div>
                    </a>
                    <div class="collapse <?=$collapse?>" id="juego-<?=$index?>">
                        <div class="card card-body">
                            <ul class="listview link-listview">
                                <li>
                                 <a class="justify-content-center" href="../../tv/epg?r=Ly92ZXJjb21vZnV0Ym9sLnh5ei9zL3N0YXJfandwLmh0bWw/Z2V0PWh0dHBzOi8vbGl2ZS1mdGMtbmEtc291dGgtMi5tZWRpYS5zdGFyb3R0LmNvbS9ncnUxL3FiMDEvc3RhcnBsdXMvZXZlbnQvMjAyMi8wOS8xMC9OYXRlX0RpYXpfdnNfVG9ueV9GZXJndXNvXzIwMjIwOTEwXzE2NjI4NDE4NTgyMDIvY3RyLWFsbC1jb21wbGV0ZS5tM3U4JmltZz1odHRwczovL3Byb2QtcmlwY3V0LWRlbGl2ZXJ5LmRpc25leS1wbHVzLm5ldC92MS92YXJpYW50L3N0YXIvOTQwNTZGMEExQzIwNDExMDBCOTUzNjEzMUVBODBEMDk5OEY0MDVEQjI4ODdDRTYxRDA1NjZFREJEMzBEMEQ1Mi9zY2FsZT93aWR0aD0xOTIwJmFzcGVjdFJhdGlvPTEuNzgmZm9ybWF0PWpwZWcma2V5PWQ3Y2NkMzFkOGE3NjQ4OTdhZGI4YmUxZWEyM2FiZGIyJmtleTI9MTk5NDYzYTRkZmRlNTBkNTc2MmM1NDBmNDk4YTg2M2E=">
                                 <i class="flag ar"></i>
                                  Star + | HD
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
include ('custom.php');
?>
