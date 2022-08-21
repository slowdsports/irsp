<?php
// $arr = str_split('A1B2C3D4E5F6G7H8I9J0KLMNOP'); // get all the characters into an array
// shuffle($arr); // randomize the array
// $arr = array_slice($arr, 0, 6); // get the first six (random) characters out
// $str = implode('', $arr); // smush them back into a string
// echo $str;

$server = "http://213.239.217.94:8080/live/";
$concat = $server.$usuario."/".$password."/".$channel.".m3u8";
switch ($channel){
    case 'mlaliga3' : $channel=
    $server.$usuario."/".$password."/"."11".".m3u8"; break;
    case 'mlaliga7' : $channel=
    $server.$usuario."/".$password."/"."12".".m3u8"; break;
    case 'mega' : $channel=
    $server.$usuario."/".$password."/"."13".".m3u8"; break;
    case 'bar' : $channel=
    $server.$usuario."/".$password."/"."14".".m3u8"; break;
    case 'mlaliga1' : $channel=
    $server.$usuario."/".$password."/"."15".".m3u8"; break;
    case 'mlaliga2' : $channel=
    $server.$usuario."/".$password."/"."16".".m3u8"; break;
    case 'mlcamp' : $channel = 
    $server.$usuario."/".$password."/"."17".".m3u8"; break;
    case 'mlcamp1' : $channel=
    $server.$usuario."/".$password."/"."18".".m3u8"; break;
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
    case 'dazn2es' : $channel=
    $server.$usuario."/".$password."/"."27".".m3u8"; break;
    case 'daznf1' : $channel=
    $server.$usuario."/".$password."/"."28".".m3u8"; break;
    case 'mlcampsd' : $channel =
    $server.$usuario."/".$password."/"."32".".m3u8"; break;
    case 'barsd' : $channel =
    $server.$usuario."/".$password."/"."33".".m3u8"; break;
    case 'daznlaliga' : $channel =
    $server.$usuario."/".$password."/"."36".".m3u8"; break;
    case 'daznlaliga2' : $channel =
    $server.$usuario."/".$password."/"."37".".m3u8"; break;

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
    
    // INFANTIL
    
    case 'tooncast' : $channel =
    "http://arlocaltstvhls.lcdn.clarotv.com.ar/Content/HLS_HLS_FK/Live/channel(TOONCAST)/index.m3u8"; break;
    
    case 'disneychannel' : $channel =
    "http://arlocaltstvhls.lcdn.clarotv.com.ar/Content/HLS_HLS_FK/Live/channel(DISNEY_CHANNEL)/index.m3u8"; break;
    
    case 'disneyjunior' : $channel =
    "http://arlocaltstvhls.lcdn.clarotv.com.ar/Content/HLS_HLS_FK/Live/channel(DISNEY_JUNIOR)/index.m3u8"; break;
    
    case 'cartoonnetwork' : $channel =
    "http://arlocaltstvhls.lcdn.clarotv.com.ar/Content/HLS_HLS_FK/Live/channel(CARTOON_NETWORK_HD)/index.m3u8"; break;
    
    case 'nickelodeon' : $channel =
    "http://arlocaltstvhls.lcdn.clarotv.com.ar/Content/HLS_HLS_FK/Live/channel(NICK_HD)/index.m3u8"; break;
    
    case 'pakapaka' : $channel =
    "http://arlocaltstvhls.lcdn.clarotv.com.ar/Content/HLS_HLS_FK/Live/channel(PAKA_PAKA)/index.m3u8"; break;
    
    case 'babytv' : $channel =
    "http://arlocaltstvhls.lcdn.clarotv.com.ar/Content/HLS_HLS_FK/Live/channel(BABY_TV)/index.m3u8"; break;
    
    // ENTRETENIMIENTO
    
    case 'tlc' : $channel =
    "http://arlocaltstvhls.lcdn.clarotv.com.ar/Content/HLS_HLS_FK/Live/channel(TLC_HD)/index.m3u8"; break;
    
    case 'htv' : $channel =
    "http://arlocaltstvhls.lcdn.clarotv.com.ar/Content/HLS_HLS_FK/Live/channel(HTV)/index.m3u8"; break;
    
    // CINE
    
    case 'fx' : $channel =
    "http://arlocaltstvhls.lcdn.clarotv.com.ar/Content/HLS_HLS_FK/Live/channel(FX_HD)/index.m3u8"; break;
    
    case 'cinecanal' : $channel =
    "http://arlocaltstvhls.lcdn.clarotv.com.ar/Content/HLS_HLS_FK/Live/channel(CINECANAL_HD)/index.m3u8"; break;
    
    case 'tcm' : $channel =
    "http://arlocaltstvhls.lcdn.clarotv.com.ar/Content/HLS_HLS_FK/Live/channel(TCM)/index.m3u8"; break;
    
    case 'tnt' : $channel =
    "http://arlocaltstvhls.lcdn.clarotv.com.ar/Content/HLS_HLS_FK/Live/channel(TNT_HD)/index.m3u8"; break;
    
    case 'tntseries' : $channel =
    "http://arlocaltstvhls.lcdn.clarotv.com.ar/Content/HLS_HLS_FK/Live/channel(TNT_SERIES_HD)/index.m3u8"; break;
    
    case 'space' : $channel =
    "http://arlocaltstvhls.lcdn.clarotv.com.ar/Content/HLS_HLS_FK/Live/channel(SPACE_HD)/index.m3u8"; break;
    
    case 'axn' : $channel =
    "http://arlocaltstvhls.lcdn.clarotv.com.ar/Content/HLS_HLS_FK/Live/channel(AXN_HD)/index.m3u8"; break;
    
    case 'cinemax' : $channel =
    "http://arlocaltstvhls.lcdn.clarotv.com.ar/Content/HLS_HLS_FK/Live/channel(CINEMAX_HD)/index.m3u8"; break;
    
    case 'universal' : $channel =
    "http://arlocaltstvhls.lcdn.clarotv.com.ar/Content/HLS_HLS_FK/Live/channel(UNIVERSAL_HD)/index.m3u8"; break;
    
    case 'syfy' : $channel =
    "http://arlocaltstvhls.lcdn.clarotv.com.ar/Content/HLS_HLS_FK/Live/channel(SYFY_HD)/index.m3u8"; break;
    
    case 'telemundo' : $channel =
    "http://arlocaltstvhls.lcdn.clarotv.com.ar/Content/HLS_HLS_FK/Live/channel(TELEMUNDO)/index.m3u8"; break;
    
    case 'volver' : $channel =
    "http://arlocaltstvhls.lcdn.clarotv.com.ar/Content/HLS_HLS_FK/Live/channel(VOLVER)/index.m3u8"; break;
    
    case 'tve' : $channel =
    "http://arlocaltstvhls.lcdn.clarotv.com.ar/Content/HLS_HLS_FK/Live/channel(TVE)/index.m3u8"; break;
    
    case 'startve' : $channel =
    "http://arlocaltstvhls.lcdn.clarotv.com.ar/Content/HLS_HLS_FK/Live/channel(STAR_TVE_HD)/index.m3u8"; break;
    
    case 'amc' : $channel =
    "http://arlocaltstvhls.lcdn.clarotv.com.ar/Content/HLS_HLS_FK/Live/channel(AMC_HD)/index.m3u8"; break;
    
    case 'europa' : $channel =
    "http://arlocaltstvhls.lcdn.clarotv.com.ar/Content/HLS_HLS_FK/Live/channel(EUROPA_EUROPA_HD)/index.m3u8"; break;
    
    case 'paramount' : $channel =
    "http://arlocaltstvhls.lcdn.clarotv.com.ar/Content/HLS_HLS_FK/Live/channel(PARAMOUNT_CHANNEL_HD)/index.m3u8"; break;
    
    case 'comedycentral' : $channel =
    "http://arlocaltstvhls.lcdn.clarotv.com.ar/Content/HLS_HLS_FK/Live/channel(COMEDY_CENTRAL_HD)/index.m3u8"; break;
    
    case 'pasiones' : $channel =
    "http://arlocaltstvhls.lcdn.clarotv.com.ar/Content/HLS_HLS_FK/Live/channel(PASIONES_HD)/index.m3u8"; break;
    
    // PREMIUM
    
    case 'hbo' : $channel =
    "http://arlocaltstvhls.lcdn.clarotv.com.ar/Content/HLS_HLS_FK/Live/channel(HBO_HD)/index.m3u8"; break;
    
    case 'hbo2' : $channel =
    "http://arlocaltstvhls.lcdn.clarotv.com.ar/Content/HLS_HLS_FK/Live/channel(HBO_2_HD)/index.m3u8"; break;
    
    case 'hbofamily' : $channel =
    "http://arlocaltstvhls.lcdn.clarotv.com.ar/Content/HLS_HLS_FK/Live/channel(HBO_FAMILY_ESTE_HD)/index.m3u8"; break;
    
    case 'hboplus' : $channel =
    "http://arlocaltstvhls.lcdn.clarotv.com.ar/Content/HLS_HLS_FK/Live/channel(HBO_PLUS_ESTE_HD)/index.m3u8"; break;
    
    case 'hbosignature' : $channel =
    "http://arlocaltstvhls.lcdn.clarotv.com.ar/Content/HLS_HLS_FK/Live/channel(HBO_SIGNATURE_HD)/index.m3u8"; break;
    
    case 'universalpremiere' : $channel =
    "http://arlocaltstvhls.lcdn.clarotv.com.ar/Content/HLS_HLS_FK/Live/channel(UNIVERESAL_PREMIERE_HD)/index.m3u8"; break;
    
    case 'universalcinema' : $channel =
    "http://arlocaltstvhls.lcdn.clarotv.com.ar/Content/HLS_HLS_FK/Live/channel(UNIVERSAL_CINEMA_HD)/index.m3u8"; break;
    
    case 'universalcomedy' : $channel =
    "http://arlocaltstvhls.lcdn.clarotv.com.ar/Content/HLS_HLS_FK/Live/channel(UNIVERSAL_COMEDY_HD)/index.m3u8"; break;
    
    case 'universalcrime' : $channel =
    "http://arlocaltstvhls.lcdn.clarotv.com.ar/Content/HLS_HLS_FK/Live/channel(UNIVERSAL_CRIME_HD)/index.m3u8"; break;
    
    case 'universalreality' : $channel =
    "http://arlocaltstvhls.lcdn.clarotv.com.ar/Content/HLS_HLS_FK/Live/channel(UNIVERSAL_REALITY_HD)/index.m3u8"; break;
    
    case 'penthouse' : $channel =
    "http://arlocaltstvhls.lcdn.clarotv.com.ar/Content/HLS_HLS_FK/Live/channel(PENTHOUSE)/index.m3u8"; break;
    
    case 'brazzers' : $channel =
    "http://arlocaltstvhls.lcdn.clarotv.com.ar/Content/HLS_HLS_FK/Live/channel(BRAZZERS)/index.m3u8"; break;
    
    case 'playboy' : $channel =
    "http://arlocaltstvhls.lcdn.clarotv.com.ar/Content/HLS_HLS_FK/Live/channel(PLAYBOY_HD)/index.m3u8"; break;
    
    case 'sextreme' : $channel =
    "http://arlocaltstvhls.lcdn.clarotv.com.ar/Content/HLS_HLS_FK/Live/channel(SEXTREME)/index.m3u8"; break;
    
    case 'venus' : $channel =
    "http://arlocaltstvhls.lcdn.clarotv.com.ar/Content/HLS_HLS_FK/Live/channel(VENUS)/index.m3u8"; break;
}
?>