<?php
if (isset($_GET['nba'])){
    $core = '<script src="cores/jwp.js"></script>';
    $channel = $_GET['m'];
    echo '<script>
    var source = "'.$channel.'"
    </script>
    <style>#jwp{display:block!important} #iframe-element{display:none!important;} #vidarea{display:none} #player_img{display:none}</style>';
}