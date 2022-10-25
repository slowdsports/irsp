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

if ($result['visita'] === "chelsea" || $result['local'] === "sevilla" || $result['visita'] === "realmadrid" || $result['local'] === "dortmund" || $result['visita'] === "juventus" || $result['visita'] === "milan" || $result['visita'] === "PSG" || $result['local'] === "celtic"){
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

if ($result['visita'] === "chelsea"){
    $canalImg = "hbow";
    $s= "Ly92ZXJjb21vZnV0Ym9sLnh5ei9oYm8vYnRtLnBocD9nZXQ9YUhSMGNITTZMeTlzYVhabExtTm1MbXhoZEdGdExtaGliMjFoZUdOa2JpNWpiMjB2WTIxaFppOXNhWFpsTHpJd016RTJNVEF2WkdGemFDOWpaVzVqTHpJNE1qRXlMMjFoYzNSbGNpNXRjR1E9JmtleT1NREV3TVRrNFptUTBaR1ZtTkdJMVkyRTJNMk5oT0dKbFlqRmhNbVZqTlRnPSZrZXkyPU5EQTNNR0V3WlRSaFlqaGtPVGcwWlRsallUTTVZVGN5TnpCa1pEa3hZak09";
    $custom1 = '
    <li>
        <a class="justify-content-center" href="../../../tv/epg?s='.$s.'">
        <i class="flag ar"></i>
        HBO Max | HD
        </a>
    </li>
    ';
}

if ($result['local'] === "sevilla"){
    $canalImg = "hbow";
    $s= "Ly92ZXJjb21vZnV0Ym9sLnh5ei9oYm8vYnRtLnBocD9nZXQ9YUhSMGNITTZMeTlzYVhabExtRnJiUzVzWVhSaGJTNW9ZbTl0WVhoalpHNHVZMjl0TDJOdFlXWXZiR2wyWlM4eU1ETXhOakV4TDJSaGMyZ3ZZMlZ1WXk4eU9ESXhOUzl0WVhOMFpYSXViWEJrJmtleT1NREV3TVRkaFpESTBZVFptWTJNM01tWmpNR1F3WTJaa05XTTRaRFZqWm1FPSZrZXkyPVkySmxNR1F6TldWa09HWmhPV0k0TURabFlUTTROMlZpT1RGallqQmhZbVE9";
    $custom1 = '
    <li>
        <a class="justify-content-center" href="../../../tv/epg?s='.$s.'">
        <i class="flag ar"></i>
        HBO Max | HD
        </a>
    </li>
    ';
}

if ($result['local'] === "PSG"){
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

if ($result['local'] === "dortmund"){
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

if ($result['visita'] === "juventus"){
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

if ($result['visita'] === "milan"){
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

if ($result['local'] === "celtic"){
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