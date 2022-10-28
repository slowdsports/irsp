<?php
// Encriptamos

$core = '<script src="cores/ck-jwp.js"></script>';
$getURL = base64_encode($_GET['r']);
$getIMG = base64_encode($_GET['img']);
$getKEY = base64_encode($_GET['key']);
$getKEY2 = base64_encode($_GET['key2']);
echo '
    <script>
    let getURL = "' . $getURL . '";
    let getKEY = "' . $getKEY . '";
    let getKEY2 = "' . $getKEY2 . '";
    let getIMG = "' . $getIMG . '";
    </script>
    <style>#jwp{display:block!important} #iframe-element{display:none!important;} #vidarea{display:none} #player_img{display:none}</style>';
