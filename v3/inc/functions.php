<?php
// SET SITE URL
//$app = "//{$_SERVER['SERVER_NAME']}/v3/";
$app = "https://irafflevip.tk/v3/";
// ADMIN DASH
//$base = "https://".$_SERVER['SERVER_NAME']."/v3/admin/";
$base = "https://irafflevip.tk/v3/admin/";
// GET REFER
// $refer = $_GET['refer'];
$refer = $_SERVER['HTTP_REFERER'];
// GET USER AGENT
$useragent = $_SERVER['HTTP_USER_AGENT'];
// TELEGRAM CONTACT
$telegram = "https://t.me/slowdmelendez360";
// USERTYPE
$userType = $row['type'];
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