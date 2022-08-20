<?php
// SET SITE URL
$app = "//{$_SERVER['SERVER_NAME']}/app2/";
// ADMIN DASH
$base = "//".$_SERVER['SERVER_NAME']."/app2/admin/";
// GET REFER
// $refer = $_GET['refer'];
$refer = $_SERVER['HTTP_REFERER'];
// GET USER AGENT
$useragent = $_SERVER['HTTP_USER_AGENT'];
// TELEGRAM CONTACT
$telegram = "https://t.me/slowdmelendez360";
// CALC SUBSCRIPTION
$futuro = strtotime($row['fecha']);
$presente = time();
$left = $futuro - $presente;
$daysleft = round((($left/24)/60)/60);

if (-$daysleft > 0){
    $susdisabled = 'disabled';
} else{
    $susdisabled = '';
}
?>