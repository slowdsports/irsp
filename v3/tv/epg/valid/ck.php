<?php
if ($typeChannel == 9) {
    // Recargar página con SSL
    echo '<script>
    if (window.location.protocol != "https:") {
        location.href =   location.href.replace("http://", "https://");
    }
    </script>';
    $requested = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    $core = '<script src="cores/ck-jwp.js"></script>';
    $getURL = base64_encode($result['channelUrl']);
    $getKEY = $result['key1'];
    $getKEY2 = $result['key2'];
    echo '
    <script>
    let getURL = "' . $getURL . '";
    let getKEY = "' . $getKEY . '";
    let getKEY2 = "' . $getKEY2 . '";
    </script>
    <style>#jwp{display:block!important} #iframe-element{display:none!important;} #vidarea{display:none} #player_img{display:none}</style>';
}
