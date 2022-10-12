<?php
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

if ($result['visita'] === "ajax" || $result['local'] === "at.madrid" || $result['local'] === "barcelona" || $result['visita'] === "liverpool" || $result['visita'] === "bayern" || $result['local'] === "tottenham" || $result['visita'] === "marseille" || $result['visita'] === "porto"){
    $canalImg = "starplus";
    // LINK:
    $r= "";

    if ($r === ""){
        $r = "../../../tv/epg?r=" . $r;
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
if ($result['visita'] === "ajax"){
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

if ($result['local'] === "at.madrid"){
    $canalImg = "hbow";
    $s= "Ly92ZXJjb21vZnV0Ym9sLnh5ei9oYm8vYnRtLnBocD9nZXQ9YUhSMGNITTZMeTlzYVhabExtTm1MbXhoZEdGdExtaGliMjFoZUdOa2JpNWpiMjB2WTIxaFppOXNhWFpsTHpJd016RTJNVEV2WkdGemFDOWpaVzVqTHpJNE1UWXpMMjFoYzNSbGNpNXRjR1E9JmtleT1NREV3TVdRNFpEUTNNR1JtT0dVeFl6RXhPR1kyTkRobVpXWXhZakV5WkdVPSZrZXkyPVl6Um1aRGxsT1dRMU9HTTNObVk0WkRFMU1XTXpPV1prWkRKaU9EUXdZVEE9";
    $custom1 = '
    <li>
        <a class="justify-content-center" href="../../../tv/epg?s='.$s.'">
        <i class="flag ar"></i>
        HBO Max | HD
        </a>
    </li>
    ';
}

if ($result['local'] === "barcelona"){
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

if ($result['visita'] === "liverpool"){
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

if ($result['visita'] === "bayern"){
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

if ($result['local'] === "tottenham"){
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

if ($result['visita'] === "marseille"){
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

if ($result['visita'] === "porto"){
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