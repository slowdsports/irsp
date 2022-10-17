<?php
if ($typeChannel == 6) {
    // Recargar página con SSL
    echo '<script>
    if (window.location.protocol != "https:") {
        location.href =   location.href.replace("http://", "https://");
    }
    </script>';
    $core = '<script src="cores/bm-jwp.js"></script>';
    $getKEY = $result['key1'];
    $getKEY2 = $result['key2'];
    echo '
    <script>
    var source = "' . base64_encode("//channel-" . $result['channelUrl'] . "-cdn.blim.com/manifest.mpd") . '";
    let getKEY = "' . $getKEY . '";
    let getKEY2 = "' . $getKEY2 . '";
    </script>
    <style>#jwp{display:block!important} #iframe-element{display:none!important;} #vidarea{display:none} #player_img{display:none}</style>
    ';
}
