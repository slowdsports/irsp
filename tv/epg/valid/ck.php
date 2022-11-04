<?php
if ($typeChannel == 9) {
    // Recargar página con SSL
    echo '<script>
    if (window.location.protocol != "https:") {
        location.href =   location.href.replace("http://", "https://");
    }
    </script>';
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
if ($typeChannel == 12) {
    // Recargar página con SSL
    echo '<script>
    if (window.location.protocol != "https:") {
        location.href =   location.href.replace("http://", "https://");
    }
    </script>';
    $core = '<script src="cores/ck-jwp.js"></script>';
    $main = "https://corsiraffle.herokuapp.com/https://";
    $str = "-dash-"."mov"."ist"."arp"."lus".".em"."isi"."ond"."of6".".com"."/da"."sh/";
    $ext = ".is"."ml/"."man"."ife"."st."."m"."p"."d";
    $src = $result['channelUrl'];
    $getURL = $main . $src . $str . $src . $ext;
    $getURL = base64_encode($getURL);
    $getKEY = base64_encode($result['key1']);
    $getKEY2 = base64_encode($result['key2']);
    echo '
    <script>
    let getURL = "' . $getURL . '";
    let getKEY = "' . $getKEY . '";
    let getKEY2 = "' . $getKEY2 . '";
    </script>
    <style>#jwp{display:block!important} #iframe-element{display:none!important;} #vidarea{display:none} #player_img{display:none}</style>';
}