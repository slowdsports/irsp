<?php
// Betcris Honduras - Tigo Sports
if ($result['liga'] == 21 && $result['canal3'] !== ""){
    $r = base64_encode($result['canal3']);
    $custom1 = '
    <li>
        <a class="justify-content-center" href="../../../tv/epg/?nba&c='.$r.'&plyr=jw">
        <i class="flag hn"></i>
        Tigo Sports | HD
        </a>
    </li>
    ';
}

// Star
if ($result['local'] === "team"){
    $canalImg = "starplus";
    // LINK:
    $r= "";

    if ($r === ""){
        $r = "../../../tv/epg?r=" . $r;
    } else {
        $r = "javascript:void(0)";
    }
    $custom1 = '
    <li>
        <a class="justify-content-center" href="'.$r.'">
        <i class="flag ar"></i>
        Star + | HD
        </a>
    </li>
    ';
}

if ($result['local'] === "Balon De Oro" || $result['local'] === "lecce"){
    $canalImg = "starplus";
    // LINK:
    $r= "";

    if ($r === ""){
        $r = "../../star.php";
    } else {
        $r = "javascript:void(0)";
    }
    $custom2 = '
    <li>
        <a class="justify-content-center" href="'.$r.'">
        <i class="flag ar"></i>
        Star + | HD
        </a>
    </li>
    ';
}


//HBO
if ($result['visita'] === "team"){
    $canalImg = "hbow";
    $s= "Ly92ZXJjb21vZnV0Ym9sLnh5ei9oYm8vYnRtLnBocD9nZXQ9YUhSMGNITTZMeTlzYVhabExtWnNlUzVzWVhSaGJTNW9ZbTl0WVhoalpHNHVZMjl0TDJOdFlXWXZiR2wyWlM4eU1ETXhOakV3TDJSaGMyZ3ZZMlZ1WXk4eU9ERTJOQzl0WVhOMFpYSXViWEJrJmtleT1NREV3TVRZNU1qSTBaR1ZsTjJaaVpqRmpaams1TURrd05tVmxNamxsWmpFPSZrZXkyPU16TmlNVEkwTVRVeVpXTTJZV1E1TmpKaFptUmtZVE5pWXpoak9ERTJObU09";
    $custom1 = '
    <li>
        <a class="justify-content-center" href="../../../tv/epg?s='.$s.'">
        <i class="flag ar"></i>
        HBO Max | HD
        </a>
    </li>
    ';
}