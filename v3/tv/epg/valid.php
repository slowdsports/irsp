<?php
// EPG Oculto para Pluto
if ($typeChannel == 2 || $typeChannel == 3 || $typeChannel == 8 | $_GET['url'] == "" ){
    $epgStatus = "hidden";
}
// Star+ MegaDep
if (isset($_GET['r'])){
    if ($_GET['r'] === "" || $_GET['r'] === null){
        $_SESSION['message'] = "El evento no está listo.";
        echo '<script>history.go(-1)</script>';
    } else {
        $decode = base64_decode($_GET['r']);
        // Sustituir URL: "//vercomofutbol.xyz/s/star_jwp.html"
        $decode = str_replace("//vercomofutbol.xyz/s/star_jwp.html", "", $decode);
        $decode = "https://irpc.ga/mg/play/star.php" . $decode;
        header ("location: $decode");
    }
}
if (isset($_GET['get']) || isset($_GET['key'])){
    $getURL = $_GET['get'];
    $getIMG = $_GET['img'];
    $getKEY = $_GET['key'];
    $getKEY2 = $_GET['key2'];
    echo '
    <script>
    var getURL = "'.$getURL.'";
    var getIMG = "'.$getIMG.'";
    var getKEY  = "'.$getKEY.'";
    var getKEY2  = "'.$getKEY2.'";
    </script>
    <script src="https://content.jwplatform.com/libraries/KB5zFt7A.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.0.0/crypto-js.min.js"></script>
    <script> jwplayer.key="XSuP4qMl+9tK17QNb+4+th2Pm9AWgMO/cYH8CI0HGGr7bdjo";</script>

    <div id="starPlayer"></div>

    <script type="text/javascript">
    var playerInstance=jwplayer("starPlayer");

    playerInstance.setup({

        playlist: [{
        "image": getIMG,
        "sources": [
            {
            "default": false,
            "type": "dash",
            "file": getURL,
            "drm": {
                "clearkey": {"keyId": getKEY, "key": getKEY2}
            },
            "label": "0"
            }
        ]
        }],
        width: "100%",
        height: "100%",
        aspectratio: "16:9",
        autostart: false,
        cast: {},
        sharing: {}
    });
    </script>
    <style>#jwp{display:none!important;} #iframe-element{display:none!important;} #player_img{display:none} #myTab{display:none}</style>
    ';
}
// Para M3U
if ($typeChannel == 1 || $typeChannel == 8){
    $core = '<script src="jwp.js"></script>';
    echo '
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="btn btn-primary active" id="jw-tab" data-toggle="tab" data-target="#jw" type="button" role="tab" aria-controls="home" aria-selected="true">JW Player</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="btn btn-primary" id="hls-tab" data-toggle="tab" data-target="#hls" type="button" role="tab" aria-controls="hls" aria-selected="false">Hls Player</button>
        </li>
    </ul>
    ';
    echo '<style>#iframe-element{display:none;} #player_img{display:none}</style>';
    echo '
    <script>
    var source = "'.$channel.'"
    </script>';
    // YouTube Poster
    if (strlen($row['channelUrl']) == 11){
        $iframeSrc = "//www.youtube.com/embed/" . $row['channelUrl'];
        echo '
        <style>#iframe-element{display:block!important;} #player_img{display:none} #myTab{display:none}</style>
        ';
    } else {
        echo '<script>var ytposter = ""</script>';
    }
} //iFrame
elseif ($typeChannel == 2){
    $iframeSrc = $row['channelUrl'];
    echo '<style>#iframe-element{display:block!important;} #myTab, .tab-content{display:none} #vidarea{display:none} #player_img{display:none}</style>';
} // Redirect
elseif ($typeChannel == 3){
    // Fuente Sin codificar
    $channel = $row['channelUrl'];
    echo '
    <script>
    window.location.href = "'.$channel.'";
    </script>
    ';
} // Photocall
elseif ($typeChannel == 4){
    $pKey=mysqli_query($conn,"select * from photocall");
    $ret=mysqli_fetch_assoc($pKey);
    $pKey = $ret['pKey'];
    $pcSrc = "http://irsitpv.42web.io/pc/list.php?id=" . $ret['pKey'] . "/" . $row['channelUrl'];
    echo '<style>#iframe-element{display:none;} #myTab{display:none} #jwp{display:none} #vidarea{display:none} #player_img img{display:block!important}</style>';
} // Blim
if ($typeChannel == 6){
    echo '
    <script>var source = "'. base64_encode("//channel-".$row['channelUrl']."-cdn.blim.com/manifest.mpd").'";</script>
    <script src="https://ssl.p.jwpcdn.com/player/v/8.24.6/jwplayer.js"></script>
    <script src="bm-jwp.js"></script>
    <style>#jwp{display:block!important} #iframe-element{display:none!important;} #vidarea{display:none} #player_img{display:none}</style>
    ';
} // Photocall Blim
elseif ($typeChannel == 7){
    $pKey=mysqli_query($conn,"select * from photocall");
    $ret=mysqli_fetch_assoc($pKey);
    $pKey = $ret['pKey'];
    $pcSrc = "https://irpc.ga/pc/bm.php?id=" . $ret['pKey'] . "/" . $row['channelUrl'];
    echo
    '<script>
    window.location.replace("'.$pcSrc.'");
    </script>';
} // Megatv
//elseif ($_GET['get'] || $_GET['key'] || $GET['key2']){
elseif ($typeChannel == 9){
    //if($_SERVER['SERVER_PORT'] != '443') { header('Location: https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']); exit(); }
    if($_SERVER['SERVER_PORT'] != '443') { header('Location: https://irafflevip.tk/'.$_SERVER['REQUEST_URI']); exit(); }
    $core = '<script src="mg-jwp.js"></script>';
    $getURL = base64_encode($row['channelUrl']);
    $getKEY = $row['key1'];
    $getKEY2 = $row['key2'];
    echo '
    <script>
    let getURL = "'.$getURL.'";
    let getKEY = "'.$getKEY.'";
    let getKEY2 = "'.$getKEY2.'";
    </script>
    <style>#jwp{display:block!important} #iframe-element{display:none!important;} #vidarea{display:none} #player_img{display:none}</style>';
    }
?>
