<?php
//Recargar página con SSL
if (isset($_GET['s']) || isset($_GET['r'])){
    echo '<script>
    if (window.location.protocol != "https:") {
        //location.href =   location.href.replace("http://", "https://");
    }
    </script>';
    if (isset($_GET['s'])){
        // HBO
        include('valid/hmax.php');
    } elseif (isset($_GET['r'])){
        // Star
        include('valid/star.php');
    }
}

// mlaliga iframe
if ($_GET['c']==558 || $_GET['c']==93){
    // Recargar página con SSL
    echo '<script>
    if (window.location.protocol != "https:") {
        //location.href =   location.href.replace("http://", "https://");
    }
    </script>';
}
// EPG Oculto para Pluto
if ($typeChannel == 2 || $typeChannel == 3 || $typeChannel == 8 || $_GET['url'] == "" ){
    $epgStatus = "hidden";
}

// NBA
if (isset($_GET['nba']) || isset($_GET['nfl']) || isset($_GET['mlb']) || isset($_GET['s']) || isset($_GET['r'])){
    // NBA & NFL
    include('valid/nba.php');
} else {
    // VIP
    if (!isset($typeChannel) && !isset($_GET['key'])){
        include('valid/vip.php');
    }

    // M3U
    include('valid/m3u.php');

    // iFrame
    include('valid/iframe.php');

    // Redir
    include('valid/redir.php');

    // PC XYZ
    include('valid/pcxyz.php');

    //Blim
    include('valid/blim.php');

    // DRM WV
    include('valid/wv.php');

    // DRM CK
    include('valid/ck.php');

    // Twitch
    include('valid/twitch.php');

    // DRM CKM
    include('valid/ckm.php');
}

?>
