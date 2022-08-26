<?php
// EPG Oculto para Pluto
if ($typeChannel == 2 || $typeChannel == 3 || $typeChannel == 8 | $_GET['url'] == "" ){
    $epgStatus = "hidden";
}
// Para M3U
if ($typeChannel == 1 || $typeChannel == 8){
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
    echo '<script>
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
    $base = "https://megatelevisionhd.com/en-vivo/{$row['channelUrl']}/?ver";
    $html = file_get_html($base);
        $jwPlayer = $html ->find ('a.btn-md',0)->href;
        $jwPlayer = str_replace("https://germanyip.work/jw.html", "", $jwPlayer);
        $jwPlayer = $referer;
        echo $jwPlayer;
        if (!isset($GET['key'])){
            //echo '<meta http-equiv="refresh" content="0; url='.$jwPlayer.'">';
        } if (isset($GET['key'])){
            $getURL = $_GET['get'];
            $getKEY = $_GET['key'];
            $getKEY2 = $_GET['key2'];
            //echo '<meta http-equiv="refresh" content="0; url='.$jwPlayer.'">';
            echo "
            <script src='https://ssl.p.jwpcdn.com/player/v/8.24.0/jwplayer.js'></script>
            <script> jwplayer.key='XSuP4qMl+9tK17QNb+4+th2Pm9AWgMO/cYH8CI0HGGr7bdjo';</script>
            ";
            echo '
            <script>
            let getURL = "'.$getURL.'";
            let getKEY = "'.$getKEY.'";
            let getKEY2 = "'.$getKEY2.'";
            </script>
            <div id="MGplayerJW"></div>
            <script>
            var mt = "//edge-live15-sl";
            var playerInstance = jwplayer("MGplayerJW");
            playerInstance.setup({
                playlist: [
                    {
                        sources: [
                            {
                                default: false,
                                file: mt + atob(getURL),
                                drm: {
                                    clearkey: { keyId: atob(getKEY), key: atob(getKEY2) },
                                },
                                label: "0",
                            },
                        ],
                    },
                ],
                width: "100%",
                height: "100%",
                aspectratio: "16:9",
                mute: false,
                autostart: false,
                cast: {},
                sharing: {},
            });
            </script>
            <style>#jwp{display:none!important} #iframe-element{display:none!important;} #vidarea{display:none} #player_img{display:none}</style>';
        }
    }
?>