<?php
session_start();
$_SESSION['referer'] = "//" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
include('../../inc/header.php'); include('../../conn.php'); include('../../inc/scraper.php'); include('../../inc/sliders/gatotv.php');
$query=mysqli_query($conn,"select * from user where userid='".$_SESSION['id']."'");
$result=mysqli_fetch_assoc($query);

// Canales
$base = "https://www.gatotv.com/canal/{$GET['url']}";
$channel = $_GET['c'];
include ('../../agenda/play/channels.php');
$query=mysqli_query($conn,"select * from channels
    INNER JOIN channeltype ON channels.type = channeltype.typeId
    INNER JOIN categories ON channels.category = categories.categoryId
    where channelId='".$channel."'");
    $result=mysqli_fetch_assoc($query);
    $channel = $result['channelUrl'];
    $typeChannel = $result['typeId'];
    $channel = base64_encode($channel);
    // Categoría del canal actual || Obtener recomendados
    $categoriaActual = $result['categoryId'];
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
<hr>

<div class="header-large-title container">
    <h1 class="title">
        <?php
        if (!isset($_GET['id'])){
            ucfirst($result['channelName']);
        }
    ?>
    </h1>

<div class="container">
    <?php
    // Evento | Juego
    include('../../inc/epgevent.php');
    // // Validaciones de Canales
    include('valid.php');
    // Windows o Mobile Pluto
    if ($typeChannel == 8 && strpos($useragent, "Android") || $_GET['plyr'] === "vid"){
        $isJw = "";
        $isHls = "show active";
        //echo $useragent;
    } else {
        $isJw = "show active";
        $isHls = "";
        //echo $useragent;
    }
    ?>
    <center>
        <div class="tab-content" id="myTabContent">
            <!-- iFrame -->
            <iframe src="<?php echo $iframeSrc?>" width="100%" height="300px" frameborder="0" sandbox="allow-same-origin allow-scripts" allow="encrypted-media" allowfullscreen scrolling="no"  id="iframe-element"></iframe>
            <!-- Twitch -->
            <?=$twitchEmbed?>
            <!-- PC Player -->
            <a id="player_img" href="<?php echo $pcSrc."&m3u8"; ?>">
                <img class="img-fluid" src="../player_img.png" alt="">
            </a>
            <div class="tab-pane fade <?=$isJw?>" id="jw" role="tabpanel" aria-labelledby="jw-tab">
                <!-- M3U8 -->
                <script src="https://ssl.p.jwpcdn.com/player/v/8.24.0/jwplayer.js"></script>
                <script> jwplayer.key='XSuP4qMl+9tK17QNb+4+th2Pm9AWgMO/cYH8CI0HGGr7bdjo';</script>
                <div class="onclick" onclick="noFullScreen('player');">
                    <div id="jwp">Cargando Reproductor...</div>
                </div>
                <!-- <script src="jwp.js"></script> -->
                <?=$core?>
                </div>
            <div class="tab-pane fade <?=$isHls?>" id="hls" role="tabpanel" aria-labelledby="hls-tab">
                <!-- Video TAG -->
                <div class="onclick" onclick="noFullScreen('player');">
                    <video id="vidarea" class="video-js vjs-default-skin" controls ></video>
                </div>
            </div>
        </div>
        <!-- Source -->
        <script>
            var url = atob(source);
            var vid = document.getElementById("vidarea");
            vid.src = url;
        </script>
    </center>
</div>

<!-- Anuncio --
<?php
if ($userType !== 0){
    echo '
    <script async="async" data-cfasync="false" src="//pl17709034.profitablegatetocontent.com/4da3cd607f700415595dd2eb6ec0456b/invoke.js"></script>
    ';
}
?>
<div id="container-4da3cd607f700415595dd2eb6ec0456b"></div>
<!-- *Anuncio -->

<!-- Evento en directo -->
<hr>
<div class="container <?=$epgStatus?>">
    <a href="javascript:void(0)">
        <div class="item">
            <div class="card">
                <center>
                    <img src="https://i.ibb.co/w0qg9JF/trans.png" style="background-image: url('<?=$eventoImg?>'); background-size: contain; background-repeat: no-repeat" class="image" alt="image" />
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

<!-- Recomendados Slider -->
<?php
if (!isset($_GET['id'])){
?>
<div class="section full mt-3 mb-3">
    <h2> Relacionados </h2>
    <div class="carousel-multiple owl-carousel owl-theme">
        <?php
        $query=mysqli_query($conn,"select * from channels where category='".$categoriaActual."' ORDER BY RAND() LIMIT 10");
        while($result=mysqli_fetch_array($query)){
            $channel = $result['channelName'];
            $url = $result['channelId'];
            $img = $result['channelImg'];
            $epg = $result['epg'];
        ?>
        <a href="<?=$app?>/tv/epg?url=<?=$epg?>&c=<?=$url?>">
            <div class="item">
                <div class="card">
                    <center>
                        <img src="<?=$app?>/assets/img/canales/<?=$img?>.png" class="image" alt="image">
                        <div class="card-body">
                            <p class="text text-center">
                                <?=$channel;?>
                            </p>
                        </div>
                    </center>
                </div>
            </div>
        </a>
        <?php }
    } ?>
    </div>
</div>
<!-- End Recomendados Slider -->
</div>
<?php
include('../../inc/navbar.php');
?>