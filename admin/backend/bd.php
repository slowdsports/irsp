<?php
define('DB_SERVER','localhost');
define('DB_USER','n57whzfm2yvo');
define('DB_PASS' ,'SlowD2019');
define('DB_NAME', 'cookiename');
$conn = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);

// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }

// Dash URL
$dash = "//". $_SERVER['SERVER_NAME'] . "/app2/irsp/v3/admin/";
?>