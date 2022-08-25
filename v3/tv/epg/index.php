<?php
session_start();
$_SESSION['referer'] = "//" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
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
    $channel = base64_encode($channel);
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
<hr>

<div class="header-large-title">
    <h1 class="title"><?=ucfirst($row['channelName'])?></h1>
    <br>
</div>

<div class="container">
    <?php
    // // Validaciones de Canales
    include('valid.php');
    ?>
    <center>
        <hr>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade <?=$isJw?>" id="jw" role="tabpanel" aria-labelledby="jw-tab">
                <!-- M3U8 -->
                <script src="https://jwpsrv.com/library/FfMxTl3oEeSEiiIACxmInQ.js"></script>
                <div id="jwp">Cargando Reproductor...</div>
                <script src="jwp.js"></script>
                </div>
            <div class="tab-pane fade <?=$isHls?>" id="hls" role="tabpanel" aria-labelledby="hls-tab">
                <!-- Video TAG -->
                <video style="margin-top: 40px" id="vidarea" class="video-js vjs-default-skin" width="90%" height="55%" controls ></video>
            </div>
        </div>
        <!-- iFrame -->
        <iframe src="<?php echo $iframeSrc?>" width="100%" height="300px" frameborder="0" sandbox="allow-same-origin allow-scripts" allowfullscreen  id="iframe-element"></iframe>
        <!-- PC Player -->
        <a id="player_img" href="<?php echo $pcSrc."&m3u8"; ?>">
            <img class="img-fluid" src="../player_img.png" alt="">
        </a>
        <!-- Source -->
        <script>
            var url = atob(source);
            var vid = document.getElementById("vidarea");
            vid.src = url;
        </script>
    </center>
</div>

<!-- Evento en directo -->
<hr>
<?php include('../../inc/sliders/gatotv.php'); ?>
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