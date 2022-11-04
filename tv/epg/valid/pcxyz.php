<?php
if ($typeChannel == 4) {
    $pKey = mysqli_query($conn, "select * from photocall");
    $ret = mysqli_fetch_assoc($pKey);
    $pKey = $ret['pKey'];
    //$pcSrc = "http://irsitpv.42web.io/pc/list.php?id=" . $ret['pKey'] . "/" . $result['channelUrl'];
    $pcSrc = "https://irpc.ga/epg/?id=" . $ret['pKey'] . "/" . $result['channelUrl'];
    echo '<style>#iframe-element{display:none;} #myTab{display:none} #jwp{display:none} #vidarea{display:none} #player_img img{display:none!important}</style>';
    echo '<script>
    window.location.href = "' . $pcSrc . '";
    </script>';
}
