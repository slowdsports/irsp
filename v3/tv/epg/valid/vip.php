<?php
$_SESSION['referer'] = "//" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
session_start();
if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')) {
    $_SESSION['message'] = "¡Debes iniciar sesión para acceder a esta sección!";
    echo '<script>window.location.href = "../../login.php";</script>
    ';
} else {
    include('../../conn.php');
    $query=mysqli_query($conn,"select * from user where userid='".$_SESSION['id']."'");
    $vip=mysqli_fetch_assoc($query);
    $usuario = $vip['username'];
    $password = $vip['password'];
    $channel = $_GET['c'];
    $server = "http://213.239.217.94:8080/live/";
}
$core = '<script cus="vip" src="cores/jwp.js"></script>';
echo '<style>#jwp{display:block!important} #iframe-element{display:none!important;} #vidarea{display:none} #player_img{display:none}</style>';

switch ($channel){
    case 'mdep2' : $channel=
    $server.$usuario."/".$password."/"."5".".m3u8";break;
    case 'mega' : $channel=
    $server.$usuario."/".$password."/"."6".".m3u8"; break;
    case 'rmtv' : $channel=
    $server.$usuario."/".$password."/"."7".".m3u8"; break;
    case 'smartbank' : $channel=
    $server.$usuario."/".$password."/"."8".".m3u8"; break;
    case 'smartbank1' : $channel=
    $server.$usuario."/".$password."/"."9".".m3u8"; break;
    case 'mlaliga3' : $channel=
    $server.$usuario."/".$password."/"."11".".m3u8"; break;
    case 'mlaliga7' : $channel=
    $server.$usuario."/".$password."/"."12".".m3u8"; break;
    case 'bar' : $channel=
    $server.$usuario."/".$password."/"."14".".m3u8"; break;
    case 'mlaliga1' : $channel=
    $server.$usuario."/".$password."/"."15".".m3u8"; break;
    case 'mlaliga2' : $channel=
    $server.$usuario."/".$password."/"."16".".m3u8"; break;
    case 'mlcamp' : $channel =
    $server.$usuario."/".$password."/"."17".".m3u8"; break;
    case 'mlcamp4' : $channel=
    $server.$usuario."/".$password."/"."38".".m3u8"; break;
    case 'mdep' : $channel=
    $server.$usuario."/".$password."/"."19".".m3u8"; break;
    case 'mdep1' : $channel=
    $server.$usuario."/".$password."/"."20".".m3u8"; break;
    case 'dazn1' : $channel=
    $server.$usuario."/".$password."/"."21".".m3u8"; break;
    case 'vamos' : $channel=
    $server.$usuario."/".$password."/"."22".".m3u8"; break;
    case 'mvamos' : $channel=
    $server.$usuario."/".$password."/"."22".".m3u8"; break;
    case 'goles' : $channel=
    $server.$usuario."/".$password."/"."23".".m3u8"; break;
    case 'mlcamp2' : $channel=
    $server.$usuario."/".$password."/"."24".".m3u8"; break;
    case 'esport3' : $channel=
    $server.$usuario."/".$password."/"."25".".m3u8"; break;
    case 'telecinco' : $channel=
    $server.$usuario."/".$password."/"."26".".m3u8"; break;
    case 'dazn2' : $channel=
    $server.$usuario."/".$password."/"."27".".m3u8"; break;
    case 'daznf1' : $channel=
    $server.$usuario."/".$password."/"."28".".m3u8"; break;
    case 'mlcamp3' : $channel=
    $server.$usuario."/".$password."/"."30".".m3u8"; break;
    case 'mlcampsd' : $channel =
    $server.$usuario."/".$password."/"."32".".m3u8"; break;
    case 'barsd' : $channel =
    $server.$usuario."/".$password."/"."33".".m3u8"; break;
    case 'eurosport' : $channel =
    $server.$usuario."/".$password."/"."34".".m3u8"; break;
    case 'daznlaliga' : $channel =
    $server.$usuario."/".$password."/"."36".".m3u8"; break;
    case 'daznlaliga2' : $channel =
    $server.$usuario."/".$password."/"."37".".m3u8"; break;
    case 'dazn3' : $channel =
    $server.$usuario."/".$password."/"."40".".m3u8"; break;
}
if ($channel){
    $channel = base64_encode($channel);
    echo '<script>let source = "'.$channel.'"</script>';
}