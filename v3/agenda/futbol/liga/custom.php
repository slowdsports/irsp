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
    $s= "Ly92ZXJjb21vZnV0Ym9sLnh5ei9oYm8vYnRtLnBocD9nZXQ9YUhSMGNITTZMeTlzYVhabExtRnJiUzVzWVhSaGJTNW9ZbTl0WVhoalpHNHVZMjl0TDJOdFlXWXZiR2wyWlM4eU1ETXhOakUxTDJSaApjMmd2WTJWdVl5OHlPREUyTnk5dFlYTjBaWEl1YlhCayZrZXk9TURFd01XVmxPVFU1WVdKa1lqRTVPVEk1Tm1KaE5UYzVZV1l3WkRGaU1HST0ma2V5Mj1ORGt5TkRrNE5XVmxPRGhoTWpka09UY3pNRFF6WW1VMU1HWXdORE13WXpjPQ==";
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
    $s= "Ly92ZXJjb21vZnV0Ym9sLnh5ei9oYm8vYnRtLnBocD9nZXQ9YUhSMGNITTZMeTlzYVhabExtTm1MbXhoZEdGdExtaGliMjFoZUdOa2JpNWpiMjB2WTIxaFppOXNhWFpsTHpJd016RTJNVEl2WkdGegphQzlqWlc1akx6STRNVFkxTDIxaGMzUmxjaTV0Y0dRPSZrZXk9TURFd01UWXpOekEzT0dGbVptWmhORFUwTXpJNVl6VXdOVE0yWW1SaFlqRT0ma2V5Mj1ZV0UwWmpBd05qVXdOV1E0TWpGbU1UTmxOemswTldObVl6QTRORGMzTTJNPQ==";
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
    $s= "Ly92ZXJjb21vZnV0Ym9sLnh5ei9oYm8vYnRtLnBocD9nZXQ9YUhSMGNITTZMeTlzYVhabExtRnJiUzVzWVhSaGJTNW9ZbTl0WVhoalpHNHVZMjl0TDJOdFlXWXZiR2wyWlM4eU1ETXhOakUyTDJSaApjMmd2WTJWdVl5OHlPREUyT0M5dFlYTjBaWEl1YlhCayZrZXk9TURFd01UbG1aakprT0RZNU1XUmtaVFF4WTJFek5EQmtPRFpsTlRNek5EST0ma2V5Mj1NRE0xWW1Jek1XSXdPVFEwT1RFeVptUm1NVFpqWm1OaE1HRXpaV00zTnpjPQ==";
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
    $s= "Ly92ZXJjb21vZnV0Ym9sLnh5ei9oYm8vYnRtLnBocD9nZXQ9YUhSMGNITTZMeTlzYVhabExtTm1MbXhoZEdGdExtaGliMjFoZUdOa2JpNWpiMjB2WTIxaFppOXNhWFpsTHpJd016RTJPREl2WkdGegphQzlqWlc1akx6STRNVFk1TDIxaGMzUmxjaTV0Y0dRPSZrZXk9TURFd01UazNOMkZrWldFek56RXpaV1pqWVRCaE5tRTJNbVJrWVRBME1UVT0ma2V5Mj1OamRqTmpWak1qSmtOVFV3TW1SaU1UZzFOVGt4WXpsalpHUmlOR015T0dNPQ==";
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
    $s= "Ly92ZXJjb21vZnV0Ym9sLnh5ei9oYm8vYnRtLnBocD9nZXQ9YUhSMGNITTZMeTlzYVhabExtWnNlUzVzWVhSaGJTNW9ZbTl0WVhoalpHNHVZMjl0TDJOdFlXWXZiR2wyWlM4eU1ETXhOamd6TDJSaApjMmd2WTJWdVl5OHlPREUzTUM5dFlYTjBaWEl1YlhCayZrZXk9TURFd01XWmpOekV6WlRoaU4yWXdPRGhqTWprME5tSTRPVFk1T0RnNU1EQT0ma2V5Mj1ObVUyT0RWaVlURmxaV0ppWTJabFpUYzJZekE0T0dNM1pqUmpOV1ExWW1ZPQ==";
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
    $s= "Ly92ZXJjb21vZnV0Ym9sLnh5ei9oYm8vYnRtLnBocD9nZXQ9YUhSMGNITTZMeTlzYVhabExtRnJiUzVzWVhSaGJTNW9ZbTl0WVhoalpHNHVZMjl0TDJOdFlXWXZiR2wyWlM4eU1ETXhOakUzTDJSaApjMmd2WTJWdVl5OHlPREUyTmk5dFlYTjBaWEl1YlhCayZrZXk9TURFd01XVmxZMlF4TnpBM05UVmxNVEE1TldKak0yVTRNRE5qT0Raa01UQT0ma2V5Mj1OR0psWmpSaU1qTmxZbU16TkRFNFptUTVOekl5WXpSa1pERTJOR015TmpjPQ==";
    $custom1 = '
    <li>
        <a class="justify-content-center" href="../../../tv/epg?s='.$s.'">
        <i class="flag ar"></i>
        HBO Max | HD
        </a>
    </li>
    ';
}