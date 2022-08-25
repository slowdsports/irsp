<?php
// Para M3U
if ($typeChannel == 1 || $typeChannel == 8){
    echo '
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="btn btn-primary " id="jw-tab" data-toggle="tab" data-target="#jw" type="button" role="tab" aria-controls="home" aria-selected="true">JW Player</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="btn btn-primary " id="hls-tab" data-toggle="tab" data-target="#hls" type="button" role="tab" aria-controls="hls" aria-selected="false">Hls Player</button>
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
    <script>
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
}
?>