<?php
session_start();
$_SESSION['referer'] = "//" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
include('../../conn.php');
$query = mysqli_query($conn, "select * from user where userid='" . $_SESSION['id'] . "'");
$result = mysqli_fetch_assoc($query);

// Canales
$base = "https://www.gatotv.com/canal/{$GET['url']}";
$channel = $_GET['c'];
$query = mysqli_query($conn, "select * from channels
    INNER JOIN channeltype ON channels.type = channeltype.typeId
    INNER JOIN categories ON channels.category = categories.categoryId
    INNER JOIN countries ON channels.country = countries.countryId
    where channelId='" . $channel . "'");
$result = mysqli_fetch_assoc($query);
$channel = $result['channelUrl'];
$typeChannel = $result['typeId'];
$channel = base64_encode($channel);
// Categoría del canal actual || Obtener recomendados
$categoriaActual = $result['categoryId'];
?>

<!-- App Capsule -->
<div id="appCapsule" class="container">

    <?php
    if (isset($_SESSION['message'])) {
        echo '
    <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
        ' . $_SESSION['message'] . '
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    ';
        unset($_SESSION['message']);
    }
    ?>
    <hr>

    <?php
    if (!isset($_GET['id'])) {
        $channelName = ucfirst($result['channelName']);
        $channelFlag = '<i class="' . $result['countryImg'] . ' flag"></i>';
    } else {
        $channelName = "";
        $channelFlag = "";
    }

    ?>

    <div class="header-large-title container">
        <h2 class="title">
            <?= $channelFlag ?>
            <?= $channelName ?>
        </h2>
    </div>

    <div class="container">
        <?php
        // Evento | Juego
        include('../../inc/epgevent.php');
        // Validaciones de Canales
        include('valid.php');
        // Windows o Mobile Pluto
        if ($typeChannel == 8 && strpos($useragent, "Android") || $_GET['plyr'] === "vid") {
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
                <div class="container">
                    <iframe src="<?php echo $iframeSrc ?>" width="100%" height="450px" frameborder="0" sandbox="allow-same-origin allow-scripts" allow="encrypted-media" allowfullscreen scrolling="no" id="iframe-element"></iframe>
                </div>
                <!-- Twitch -->
                <?= $twitchEmbed ?>
                <!-- PC Player -->
                <a id="player_img" href="<?php echo $pcSrc . "&m3u8"; ?>">
                    <img class="img-fluid" src="../player_img.png" alt="">
                </a>
                <div class="tab-pane fade <?= $isJw ?>" id="jw" role="tabpanel" aria-labelledby="jw-tab">
                    <!-- M3U8 -->
                    <script src="https://ssl.p.jwpcdn.com/player/v/8.24.0/jwplayer.js"></script>
                    <script>
                        jwplayer.key = 'XSuP4qMl+9tK17QNb+4+th2Pm9AWgMO/cYH8CI0HGGr7bdjo';
                    </script>
                    <script src="//cdn.jsdelivr.net/npm/clappr@latest/dist/clappr.min.js"></script>
                    <script src="//cdn.jsdelivr.net/npm/level-selector@latest/dist/level-selector.min.js"></script>
                    <script src="//cdn.jsdelivr.net/npm/clappr-pip@latest/dist/clappr-pip.min.js"></script>
                    <script src="//cdn.jsdelivr.net/gh/clappr/dash-shaka-playback@latest/dist/dash-shaka-playback.min.js"></script>
                    <script src='//cdn.jsdelivr.net/npm/clappr-chromecast-plugin@latest/dist/clappr-chromecast-plugin.min.js'></script>
                    <script src='//cdn.jsdelivr.net/npm/clappr-pip@latest/dist/clappr-pip.min.js'></script>
                    <script src="//ewwink.github.io/clappr-youtube-plugin/clappr-youtube-plugin.js"></script>
                    <div class="onclick"">
                        <div id="jwp"></div>
                    </div>
                    <!-- <script src="jwp.js"></script> -->
                    <?= $core ?>
                </div>
                <div class="tab-pane fade <?= $isHls ?>" id="hls" role="tabpanel" aria-labelledby="hls-tab">
                    <!-- Video TAG -->
                    <div class="onclick" onclick="noFullScreen('player');">
                        <video controls id="vidarea" class="video-js vjs-default-skin" controls></video>
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
</div>

<!-- Includes -->
<?php
// Evento en directo
//include('directo.php');
// Otros eventos
//include('otros.php');
// Canales relacionados
// if (!isset($_GET['id'])) {
//include('relacionados.php');
// }
?>
<!-- *Includes -->
<?php
?>
<script>
    // $( document ).ready(function() {
    //     $( ".appHeader" ).removeClass('scrolled');
    //     });
</script>