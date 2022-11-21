<?php
// $arr = str_split('A1B2C3D4E5F6G7H8I9J0KLMNOP'); // get all the characters into an array
// shuffle($arr); // randomize the array
// $arr = array_slice($arr, 0, 6); // get the first six (random) characters out
// $str = implode('', $arr); // smush them back into a string
// echo $str;

$server = "http://213.239.217.94:8080/live/";
$concat = $server.$usuario."/".$password."/".$channel.".m3u8";
switch ($channel){
    case 'golm' : $channel=
    $server.$usuario."/".$password."/"."3".".m3u8"; break;
    case 'golmsd' : $channel=
    $server.$usuario."/".$password."/"."4".".m3u8"; break;
    case 'mdep2' : $channel=
    $server.$usuario."/".$password."/"."5".".m3u8"; break;
    case 'mega' : $channel=
    $server.$usuario."/".$password."/"."6".".m3u8"; break;
    case 'rmtv' : $channel=
    $server.$usuario."/".$password."/"."7".".m3u8"; break;
    case 'smartbank' : $channel=
    $server.$usuario."/".$password."/"."8".".m3u8"; break;
    case 'smartbank1' : $channel=
    $server.$usuario."/".$password."/"."9".".m3u8"; break;
    case 'canal10' : $channel=
    $server.$usuario."/".$password."/"."10".".m3u8"; break;
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
    case 'mlcamp2' : $channel =
    $server.$usuario."/".$password."/"."18".".m3u8"; break;
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
    case 'mlcamp3' : $channel=
    $server.$usuario."/".$password."/"."24".".m3u8"; break;
    case 'esport3' : $channel=
    $server.$usuario."/".$password."/"."25".".m3u8"; break;
    case 'telecinco' : $channel=
    $server.$usuario."/".$password."/"."26".".m3u8"; break;
    case 'dazn2' : $channel=
    $server.$usuario."/".$password."/"."27".".m3u8"; break;
    case 'daznf1' : $channel=
    $server.$usuario."/".$password."/"."28".".m3u8"; break;
    case 'mlcamp4' : $channel=
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
    case 'tudnusa' : $channel =
    $server.$usuario."/".$password."/"."38".".m3u8"; break;
    case 'mlcamp5' : $channel =
    $server.$usuario."/".$password."/"."41".".m3u8"; break;
    case 'daznlaligasd' : $channel =
    $server.$usuario."/".$password."/"."42".".m3u8"; break;
    case 'golm2' : $channel =
    $server.$usuario."/".$password."/"."43".".m3u8"; break;
    case 'golm2sd' : $channel =
    $server.$usuario."/".$password."/"."44".".m3u8"; break;
    case 'telemundo' : $channel =
    $server.$usuario."/".$password."/"."45".".m3u8"; break;

    //BACKUP
    // ESPN SUR: https://edge3.prepro.cvattv.com.ar/live/vod/ESPN2HD/SA_Live_WebVTT_FTA/ESPN2HD.m3u8;
    // http://spliktv-edge2.wedrly.xyz/live/vod/ESPN2HD/SA_Live_WebVTT_FTA/ESPN2HD.m3u8;
    // https://edge10-hr.cvattv.com.ar/live/c3eds/ESPN3/SA_SAGEMCOM/ESPN3.m3u8
    // FOX SPORTS: https://edge1-hr.cvattv.com.ar/live/c3eds/FoxSports/SA_SAGEMCOM/FoxSports.m3u8


    // FutboLibre
    // DEPORTES
    case 'espnsur' : $channel =
    "http://arlocaltstvhls.lcdn.clarotv.com.ar/Content/HLS_HLS_FK/Live/channel(ESPN)/index.m3u8"; break;

    case 'espn2sur' : $channel =
    "http://arlocaltstvhls.lcdn.clarotv.com.ar/Content/HLS_HLS_FK/Live/channel(ESPN2)/index.m3u8"; break;

    case 'espn3sur' : $channel =
    "http://arlocaltstvhls.lcdn.clarotv.com.ar/Content/HLS_HLS_FK/Live/channel(ESPN3)/index.m3u8"; break;

    case 'espnextra' : $channel =
    "http://arlocaltstvhls.lcdn.clarotv.com.ar/Content/HLS_HLS_FK/Live/channel(ESPN_EXTRA)/index.m3u8"; break;

    case 'foxsports' : $channel =
    "http://arlocaltstvhls.lcdn.clarotv.com.ar/Content/HLS_HLS_FK/Live/channel(FOX_SPORTS)/index.m3u8"; break;

    case 'foxsports2' : $channel =
    "http://arlocaltstvhls.lcdn.clarotv.com.ar/Content/HLS_HLS_FK/Live/channel(FOX_SPORTS_2)/index.m3u8"; break;

    case 'foxsports3' : $channel =
    "http://arlocaltstvhls.lcdn.clarotv.com.ar/Content/HLS_HLS_FK/Live/channel(FOX_SPORTS_3)/index.m3u8"; break;

    case 'foxsportspremium' : $channel =
    "http://arlocaltstvhls.lcdn.clarotv.com.ar/Content/HLS_HLS_FK/Live/channel(FOX_SPORTS_PREMIUM)/index.m3u8"; break;

    case 'tntsports' : $channel =
    "http://arlocaltstvhls.lcdn.clarotv.com.ar/Content/HLS_HLS_FK/Live/channel(TNT_SPORTS)/index.m3u8"; break;

    case 'tvmax' : $channel =
    "https://bcovlive-a.akamaihd.net/7482a528b34142c9a11b4285307632d0/us-west-2/6058004209001/playlist_dvr.m3u8"; break;

    case 'deportv' : $channel =
    "http://arlocaltstvhls.lcdn.clarotv.com.ar/Content/HLS_HLS_FK/Live/channel(DEPORTV)/index.m3u8"; break;

    case 'turbo' : $channel =
    "http://arlocaltstvhls.lcdn.clarotv.com.ar/Content/HLS_HLS_FK/Live/channel(DISCOVERY_TURBO)/index.m3u8"; break;
}
?>
