<?php
if ($_GET['s'] === "" || $_GET['s'] === null) {
    $_SESSION['message'] = "El evento no está listo.";
    echo '<script>history.go(-1)</script>';
} else {
    $core = '<script src="cores/ck-jwp.js"></script>';
    $getURL = $_GET['s'];
    $getKEY = $_GET['key'];
    $getKEY2 = $_GET['key2'];
    $getURL = str_replace("//vercomofutbol.xyz/hbo/jwp.php", "", $getURL);
    //$decode = "https://irpc.ga/mg/play/mlaliga.php" . $decode;
    //header ("location: $decode");
    echo '
        <script>
        let getIMG;
        let getURL = "' . $getURL . '";
        let getKEY = "' . $getKEY . '";
        let getKEY2 = "' . $getKEY2 . '";
        </script>
        <style>#jwp{display:block!important} #iframe-element{display:none!important;} #vidarea{display:none} #player_img{display:none}</style>';
}
