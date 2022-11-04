<img width="100%" src="../img/canales/dazn.png" alt="">
<?php
include('con.php');
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $userIP = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $userIP = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $userIP = $_SERVER['REMOTE_ADDR'];
}
$userAgent = $_SERVER['HTTP_USER_AGENT'];
echo "IP: " . $userIP . "<br> UA: " . $userAgent;