<?php
include('con.php');
$userIP = $_SERVER['REMOTE_ADDR'];
$userAgent = $_SERVER['HTTP_USER_AGENT'];
echo "IP: " . $userIP . "<br> UA: " . $userAgent;