<?php
if (isset($_GET['nba'])){
    $channel = $_GET['c'];
    $core = '<script src="jwp.js"></script>';
    echo '<style>#iframe-element{display:none;} #player_img{display:none}</style>';
    echo '<script>
    var source = "'.$channel.'"
    </script>';
}