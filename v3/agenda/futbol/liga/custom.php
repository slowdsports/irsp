<?php
// Star
if ($result['visita'] === "team"){
    $canalImg = "starplus";
    $r= "";
    $custom1 = '
    <li>
        <a class="justify-content-center" href="../../../tv/epg?r='.$r.'">
        <i class="flag ar"></i>
        Star + | HD
        </a>
    </li>
    ';
}


//HBO
if ($result['visita'] === "team"){
    $canalImg = "hbow";
    $s= "";
    $custom1 = '
    <li>
        <a class="justify-content-center" href="../../../tv/epg?s='.$s.'">
        <i class="flag ar"></i>
        HBO Max | HD
        </a>
    </li>
    ';
}
if ($result['visita'] === "arsenal"){
    $canalImg = "hbow";
    $s= "aHR0cHM6Ly9saXZlLmNmLmxhdGFtLmhib21heGNkbi5jb20vY21hZi9saXZlLzIwMzE2ODIvZGFzaC9jZW5jLzI3ODUyL21hc3Rlci5tcGQ=&key=MDEwMTQ5YmYxYjhkNTUyNzU2OWExOGVlNmJhNjExMjc=&key2=Y2RjOWZkYzRmOGI2MmVkMWFiNDUzNmE3MGM2OTNkN2Y=";
    $custom1 = '
    <li>
        <a class="justify-content-center" href="../../../tv/epg?s='.$s.'">
        <i class="flag ar"></i>
        HBO Max | HD
        </a>
    </li>
    ';
}
if ($result['visita'] === "baltimore"){
    $canalImg = "nfl";
    $s= "";
    $custom1 = '
    <li>
        <a class="justify-content-center" href="http://d2wd103krdtde9.cloudfront.net/hls/ravens/playlist.m3u8">
        <i class="flag us"></i>
        Ravens
        </a>
    </li>
    ';
}
