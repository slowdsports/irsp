<?php
if (isset($_GET['nba'])){
    $core = '<script src="cores/jwp.js"></script>';
    $channel = $_GET['m'];
    echo '<script>
    var source = "'.$channel.'"
    </script>
    <style>#jwp{display:block!important} #iframe-element{display:none!important;} #vidarea{display:none} #player_img{display:none}</style>';
    if ($_GET['plyr'] === "ifr"){
        $iframeSrc = base64_decode($_GET['i']);
        echo '<style>#jwp{display:none!important} #iframe-element{display:block!important;} #vidarea{display:none} #player_img{display:none}</style>';
    }
}