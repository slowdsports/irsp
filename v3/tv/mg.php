<?php
include('../inc/scraper.php');
$base = "https://megatelevisionhd.com/en-vivo/{$_GET['url']}/?ver";
$html = file_get_html($base);
$jwPlayer = $html ->find ('a.btn-md',0)->href;
    $jwPlayer = str_replace("https://germanyip.work/jw.html", "epg/", $jwPlayer);
    //$jwPlayer = str_replace("https://germanyip.work/jw.html", "mg.php/", $jwPlayer);
    //echo $jwPlayer;
echo '<meta http-equiv="refresh" content="0; url='.$jwPlayer.'">';
?>