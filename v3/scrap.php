<?php
include('inc/scraper.php');
// CALL URL CUSTOMIZED
$baseUrl = "http://crackstreams.biz/mlbstreams/";
// get DOM from URL or file
$html = file_get_html($baseUrl);
// MAIN ELEMENT
$juego = $html ->find ('div.ctpage');

foreach ($juego as $nombre){
    // CONDITIONS
    $evento = $nombre ->find('a div.media div.media-body h4',0) -> plaintext;
    $link = $nombre ->find('a',0) -> href;
    $fecha = $nombre ->find('a div.media div.media-body p',0) -> plaintext;
    echo $fecha . "<br>";
}