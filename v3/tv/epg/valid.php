<?php
// mlaliga iframe
if ($_GET['c']==558 || $_GET['c']==93){
    // Recargar página con SSL
    echo '<script>
    if (window.location.protocol != "https:") {
        location.href =   location.href.replace("http://", "https://");
    }
    </script>';
}
// EPG Oculto para Pluto
if ($typeChannel == 2 || $typeChannel == 3 || $typeChannel == 8 | $_GET['url'] == "" ){
    $epgStatus = "hidden";
}
// HBO Max MegaDep
if (isset($_GET['s'])){
    if ($_GET['s'] === "" || $_GET['s'] === null){
        $_SESSION['message'] = "El evento no está listo.";
        echo '<script>history.go(-1)</script>';
    } else {
        $iframeSrc = "https://vercomofutbol.xyz/hbo/btm.php?get=" . $_GET['s'];
        echo '<style>#iframe-element{display:block!important;} #myTab, .tab-content{display:none} #vidarea{display:none} #player_img{display:none}</style>';
    }
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
        //$decode = "https://irpc.ga/mg/play/star.php" . $decode;
        header ("location: $decode");
    }
}
// Encriptamos
if (isset($_GET['get']) && isset($_GET['img'])){
    $channel = base64_encode($_GET['get']);
    $img = base64_encode($_GET['img']);
    $key = base64_encode($_GET['key']);
    $key2 = base64_encode($_GET['key2']);
    $decode = "?c=".$channel."&img=".$img."&key=".$key."&key2=".$key2;
    header ("location: $decode");
}
// Cargamos
if (isset($_GET['c']) && isset($_GET['img'])){
//Recargar página con SSL
echo '<script>
if (window.location.protocol != "https:") {
    location.href =   location.href.replace("http://", "https://");
}
</script>';
$requested = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$core = '<script src="star-jwp.js"></script>';
$getURL = $_GET['c'];
$getIMG = $_GET['img'];
$getKEY = $_GET['key'];
$getKEY2 = $_GET['key2'];
echo '
<script>
let getURL = "'.$getURL.'";
let getIMG = "'.$getIMG.'";
let getKEY = "'.$getKEY.'";
let getKEY2 = "'.$getKEY2.'";
</script>
<style>#jwp{display:block!important} #iframe-element{display:none!important;} #{display:none} #player_img{display:none}</style>';
}



// NFL
if (isset($_GET['nba'])){
    $channel = $_GET['c'];
    $core = '<script src="jwp.js"></script>';
    echo '<style>#iframe-element{display:none;} #player_img{display:none}</style>';
    echo '<script>
    var source = "'.$channel.'"
    </script>';
}

// Para M3U
if ($typeChannel == 1 || $typeChannel == 8){
    $core = '<script src="jwp.js"></script>';
    echo '<style>#iframe-element{display:none;} #player_img{display:none}</style>';
    echo '
    <script>
    var source = "'.$channel.'"
    </script>';
    // YouTube Poster
    if (strlen($result['channelUrl']) == 11){
        $iframeSrc = "//www.youtube.com/embed/" . $result['channelUrl'];
        echo '
        <style>#iframe-element{display:block!important;} #player_img{display:none} #myTab{display:none}</style>
        ';
    } else {
        echo '<script>var ytposter = ""</script>';
    }
} //iFrame
elseif ($typeChannel == 2){
    $iframeSrc = $result['channelUrl'];
    echo '<style>#iframe-element{display:block!important;} #myTab, .tab-content{display:none} #vidarea{display:none} #player_img{display:none}</style>';
} // Redirect
elseif ($typeChannel == 3){
    // Fuente Sin codificar
    $channel = $result['channelUrl'];
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
    $pcSrc = "http://irsitpv.42web.io/pc/list.php?id=" . $ret['pKey'] . "/" . $result['channelUrl'];
    echo '<style>#iframe-element{display:none;} #myTab{display:none} #jwp{display:none} #vidarea{display:none} #player_img img{display:block!important}</style>';
} // Blim
if ($typeChannel == 6){
    // Recargar página con SSL
    echo '<script>
    if (window.location.protocol != "https:") {
        location.href =   location.href.replace("http://", "https://");
    }
    </script>';
    $requested = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    $core = '<script src="bm-jwp.js"></script>';
    $getKEY = $result['key1'];
    $getKEY2 = $result['key2'];
    echo '
    <script>
    var source = "'. base64_encode("//channel-".$result['channelUrl']."-cdn.blim.com/manifest.mpd").'";
    let getKEY = "'.$getKEY.'";
    let getKEY2 = "'.$getKEY2.'";
    </script>
    <style>#jwp{display:block!important} #iframe-element{display:none!important;} #vidarea{display:none} #player_img{display:none}</style>
    ';
} // Photocall Blim
elseif ($typeChannel == 7){
    // Recargar página con SSL
    echo '<script>
    if (window.location.protocol != "https:") {
        location.href =   location.href.replace("http://", "https://");
    }
    </script>';
    $requested = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    $core = '<script src="wv-jwp.js"></script>';
    $getURL = base64_encode($result['channelUrl']);
    $getKEY = $result['key1'];
    echo '
    <script>
    let getURL = "'.$getURL.'";
    let getKEY = "'.$getKEY.'";
    </script>
    <style>#jwp{display:block!important} #iframe-element{display:none!important;} #vidarea{display:none} #player_img{display:none}</style>
    ';
} // Megatv
//elseif ($_GET['get'] || $_GET['key'] || $GET['key2']){
elseif ($typeChannel == 9){
    // Recargar página con SSL
    echo '<script>
    if (window.location.protocol != "https:") {
        location.href =   location.href.replace("http://", "https://");
    }
    </script>';
    $requested = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    $core = '<script src="mg-jwp.js"></script>';
    $getURL = base64_encode($result['channelUrl']);
    $getKEY = $result['key1'];
    $getKEY2 = $result['key2'];
    echo '
    <script>
    let getURL = "'.$getURL.'";
    let getKEY = "'.$getKEY.'";
    let getKEY2 = "'.$getKEY2.'";
    </script>
    <style>#jwp{display:block!important} #iframe-element{display:none!important;} #vidarea{display:none} #player_img{display:none}</style>';
} // Twitch
elseif($typeChannel == 10){
    // Recargar página con SSL
    echo '<script>
    if (window.location.protocol != "https:") {
        location.href =   location.href.replace("http://", "https://");
    }
    </script>';
    $requested = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    $twitchEmbed = '<div id="twitch-embed"></div>
    <script src="https://embed.twitch.tv/embed/v1.js"></script>
    <script type="text/javascript">
        var embed = new Twitch.Embed("twitch-embed", {
            width: "100%",
            height: "480",
            channel: atob("'.$channel.'"),
            layout: "video",
            autoplay: false,
            parent: ["iraffle.live", "irafflevip.tk", "localhost"]
        });

        embed.addEventListener(Twitch.Embed.VIDEO_READY, () => {
            var player = embed.getPlayer();
            player.play();
        });
    </script>
    <style>#twitch-embed{display:block!important} #jwp{display:none!important;} #iframe-element{display:none!important;} #vidarea{display:none} #player_img{display:none}</style>
    ';
}
?>
