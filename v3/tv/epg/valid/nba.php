<?php
if (isset($_GET['nba'])){
    $channel = $_GET['c'];
    $core = '<script src="cores/jwp.js"></script>';
    echo '<style>#jwp{display:block!important;} #iframe-element{display:none!important;} #player_img{display:none} #myTab{display:none}</style>';
    echo '<script>
    var source = "'.$channel.'"
    </script>';
}