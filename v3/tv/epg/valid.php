<?php
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
        $decode = "https://irpc.ga/mg/play/star.php" . $decode;
        header ("location: $decode");
    }
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
    $core = '<script src="bm-jwp.js"></script>';
    $getKEY = $row['key1'];
    $getKEY2 = $row['key2'];
    echo '
    <script>
    var source = "'. base64_encode("//channel-".$row['channelUrl']."-cdn.blim.com/manifest.mpd").'";
    let getKEY = "'.$getKEY.'";
    let getKEY2 = "'.$getKEY2.'";
    </script>
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
    //if($_SERVER['SERVER_PORT'] != '443') { header('Location: https://irafflevip.tk'.$_SERVER['REQUEST_URI']); exit(); }
    $requested = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    $reload = '
    <h3>¿Problemas con el canal?</h3>
    <a href="https://'.$requested.'" class="btn btn-primary"><ion-icon name="refresh-outline"></ion-icon> Recargar</a>
    ';
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
