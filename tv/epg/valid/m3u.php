<?php
if ($typeChannel == 1 || $typeChannel == 8){
    $core = '<script src="cores/jwp.js"></script>';
    echo '<style>#iframe-element{display:none;} #player_img{display:none}</style>';
    echo '
    <script>
    var source = "'.$channel.'"
    </script>';
    // YouTube Poster
    if (strlen($result['channelUrl']) == 11){
        //$iframeSrc = "//www.youtube.com/embed/" . $result['channelUrl'];
        $iframeSrc = base64_encode($result['channelUrl']);
        echo $iframeSrc;
        $core = '<script src="cores/clappr.js"></script>';
        echo '
        <style>#jwp{display:block!important;} #iframe-element{display:none!important;} #player_img{display:none} #myTab{display:none}</style>
        ';
    } else {
        echo '<script>var ytposter = ""</script>';
    }
}