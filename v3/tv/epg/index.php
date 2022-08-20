<?php
session_start();
if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')) {
    //header("location: ../../login.php");
    // No validamos sesión
} else
include('../../inc/header.php'); include('../../conn.php'); include('../../inc/scraper.php');
$query=mysqli_query($conn,"select * from user where userid='".$_SESSION['id']."'");
$row=mysqli_fetch_assoc($query);

// Canales
$base = "https://www.gatotv.com/canal/{$GET['url']}";
$channel = $_GET['c'];
include ('../../agenda/play/channels.php');
$query=mysqli_query($conn,"select * from channels
    INNER JOIN channeltype ON channels.type = channeltype.typeId
    where channelId='".$channel."'");
    $row=mysqli_fetch_assoc($query);
    $channel = $row['channelUrl'];
    $typeChannel = $row['typeId'];
    //$channel = base64_encode($channel);
    echo '<script>
    var source = "'.$channel.'"
    </script>';
?>
<!-- Clappr --
<script src="//cdn.jsdelivr.net/npm/clappr@latest/dist/clappr.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/level-selector@latest/dist/level-selector.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/clappr-chromecast-plugin@latest/dist/clappr-chromecast-plugin.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/clappr-pip@latest/dist/clappr-pip.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/dash-shaka-playback@latest/dist/dash-shaka-playback.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/clappr-playback-rate-plugin@latest/dist/clappr-playback-rate-plugin.min.js"></script>
<!-- JW Core -->
<script src="https://jwpsrv.com/library/FfMxTl3oEeSEiiIACxmInQ.js"></script>

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

<!-- <div class="header-large-title">
    <h1 class="title"><?=ucfirst($row['fullname'])?>,</h1>
    <h4 class="subtitle">¿Qué quieres ver hoy?</h4>
</div> -->

<div class="container">
    <div id="jwp">Cargando Reproductor...</div>
    <script src="jwp.js"></script>
</div>

<!-- Evento en directo -->
<?= include('../../inc/sliders/gatotv.php'); ?>
<div class="container">
    <a href="javascript:void(0)">
        <div class="item">
            <div class="card">
                <center>
                    <img src="<?=$eventoImg?>" class="image" alt="image" />
                    <div class="card-body">
                            <h6 class="text text-center">
                                <?=$enVivo?>
                            </h6>
                            <p class="text text-center">
                                <?=$evento?>
                            </p>
                    </div>
                    <div class="card-footer text-muted">
                        De <?=$horaInicio;?> a <?=$horaFinal;?>
                    </div>

                </center>
            </div>
        </div>
    </a>
</div>

<!-- *Evento en directo -->



<!-- Otros Eventos Slider -->
<div class="section full mt-3 mb-3">
    <div class="carousel-multiple owl-carousel owl-theme">
        <?php
        $html = file_get_html($base);
        $imgCanal = $html -> find ('div.div_MainPicture a picture img',0 ) ->src;
        $nombreCanal = $html -> find ('div.div_MainInformation h1 a span',0) ->plaintext;
        $programas = $html ->find ('table.tbl_EPG tr');
        $index = 0;
        foreach ($programas as $programa):
            $index++;
            $horaInicio = $programa ->find ('td div time',0)->plaintext;
            $horaFinal = $programa ->find ('td div time',1)->plaintext;
            $evento = $programa ->find ('td div.div_program_title_on_channel span',0)->plaintext;
            $eventoImg = $programa ->find ('td a[title] img',0)->src;
            if ($eventoImg == null){
                $eventoImg = $imgCanal;
            }
            $tipo = $programa ->find ('td div.div_episode_deporte_on_channel',0)->plaintext;
            if ($tipo == null){
                $tipo = $programa ->find ('td div.div_episode_programa_on_channel',0)->plaintext;
            }
            $enVivo = $programa ->find ('tr.tbl_EPG_row_selected td div.div_program_title_on_channel span',1)->plaintext;
            // Condición En Vivo
            if ($enVivo == null){
                $enVivo = 'Presentando Ahora';
            } else {
            $enVivo = '<i class="fa fa-circle text-danger faa-flash animated"></i> En Vivo';
            }
            //General
            if ($evento == null){
                $evento = $nombreCanal;
            } else {
                $hidden = "show";
            }
        ?>
        <a href="javascript:void(0)">
            <div class="item">
                <div class="card">
                    <center>
                        <img src="<?=$eventoImg?>" class="image" alt="image">
                        <div class="card-body">
                            <p class="text text-center">
                                <?=$evento;?>
                            </p>
                        </div>
                        <div class="card-footer text-muted">
                        De <?=$horaInicio;?> a <?=$horaFinal;?>
                        </div>
                    </center>
                </div>
            </div>
        </a>
        <?php endforeach; ?>
    </div>
</div>
<!-- End Otros Eventos Slider -->
</div>
<?php
include('../../inc/navbar.php');
?>