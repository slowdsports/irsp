<?php
$_SESSION['referer'] = "//" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
// IGNORAMOS SESIÓN PARA SECCIONES NBA Y MLB
if (isset($_GET['nba']) || isset($_GET['mlb'])){
    // No necesitamos ninguna comprobación
} else {
    session_start();
    if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')) {
        $_SESSION['message'] = "¡Debes iniciar sesión para acceder a esta sección!";
        header("location: ../../login.php");
        exit();
    }
}
include('../../conn.php');
$query=mysqli_query($conn,"select * from user where userid='".$_SESSION['id']."'");
$row=mysqli_fetch_assoc($query);
$usuario = $row['username'];
$password = $row['password'];
$channel = $_GET['c'];

// Si el usuario es free
if ($row['type'] == 2 && $row['fecha'] == null){
    $_SESSION['userType'] = "free";
    header ("location: ../../premium-upgrade.php");
}

// Channels
include('channels.php');
$source = base64_encode($channel);
    // NBA & MLB
    if (isset($_GET['nba']) || isset($_GET['mlb'])){
        $source = $_GET['c'];
    }
    echo
    '<script> var source = "'.$source.'" </script>';

// Alternar Player
$player = $_GET['plyr'];
    if ($player == "vid"){
        echo '
        <video id="vidarea" class="video-js vjs-default-skin" width="100%" height="100%" controls autoplay ></video>
        <script>
        var url = atob(source);
        var vid = document.getElementById("vidarea");
        vid.src = url;
        </script>
        ';
    } else {
        echo '
        <div id="player"></div>
        <script src="clappr.js"></script>
        ';
    }
?>
<script src="//cdn.jsdelivr.net/npm/clappr@latest/dist/clappr.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/level-selector@latest/dist/level-selector.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/clappr-chromecast-plugin@latest/dist/clappr-chromecast-plugin.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/clappr-pip@latest/dist/clappr-pip.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/dash-shaka-playback@latest/dist/dash-shaka-playback.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/clappr-playback-rate-plugin@latest/dist/clappr-playback-rate-plugin.min.js"></script>
<style>
html, body {
    max-height: 100%;
    max-width: 100%;
    background-color: #000;
}
#aRzklaXf {
    height: 100%;
    width: 100%;
    padding: 0;
    margin: 0;
}
</style>