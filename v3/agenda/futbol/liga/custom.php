<?php
// Star
if ($result['local'] === "team"){
    $canalImg = "starplus";
    // LINK:
    $r= "../../star.php";

    if ($r !== ""){
        $r = $r;
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
//HBO MAX
if ($result['local'] === "team"){
    $canalImg = "hbo";
    $s= "";

    if ($s !== ""){
        $s = "../../../tv/epg?s=" . $s;
    } else {
        $s = "javascript:void(0)";
    }
    $custom2 = '
    <li>
        <a class="justify-content-center" href="'.$s.'">
        <i class="flag ar"></i>
        HBO MAX | HD
        </a>
    </li>
    ';
}

// CUSTOMS

if ($result['local'] === "copenhague"){
    $canalImg = "hbo";
    $s= "Ly92ZXJjb21vZnV0Ym9sLnh5ei9oYm8vYnRtLnBocD9nZXQ9YUhSMGNITTZMeTlzYVhabExtRnJiUzVzWVhSaGJTNW9ZbTl0WVhoalpHNHVZMjl0TDJOdFlXWXZiR2wyWlM4eU1ETXhOakV3TDJSaGMyZ3ZZMlZ1WXk4eU56azRNUzl0WVhOMFpYSXViWEJrJmtleT1NREV3TVRRME9UbGlZbU0yTWpZMFl6WTJZMlkwT1RreU5qUXpaRGhrTTJFPSZrZXkyPVpESXhNMlJpWm1VeE1qTTNaalU0TnpKa1lXUTJORE0zWXpZMFlqRmtOelU9";

    if ($s !== ""){
        $s = "../../../tv/epg?s=" . $s;
    } else {
        $s = "javascript:void(0)";
    }
    $custom2 = '
    <li>
        <a class="justify-content-center" href="'.$s.'">
        <i class="flag ar"></i>
        HBO MAX | HD
        </a>
    </li>
    ';
}

if ($result['visita'] === "juventus"){
    $canalImg = "hbo";
    $s= "Ly92ZXJjb21vZnV0Ym9sLnh5ei9oYm8vYnRtLnBocD9nZXQ9YUhSMGNITTZMeTlzYVhabExtTm1MbXhoZEdGdExtaGliMjFoZUdOa2JpNWpiMjB2WTIxaFppOXNhWFpsTHpJd016RTJNVEV2WkdGemFDOWpaVzVqTHpJM09UZ3lMMjFoYzNSbGNpNXRjR1E9JmtleT1NREV3TVRsaE9HTTROak15WmpVM01XTm1PRFUxWkdJMVptRXpOR1ZpTjJRPSZrZXkyPU9HWTNNVFJsWkRjeE5HUTVNalF5TkRoaU1ERmhZbVExTTJGaVlXTmpOV1E9";

    if ($s !== ""){
        $s = "../../../tv/epg?s=" . $s;
    } else {
        $s = "javascript:void(0)";
    }
    $custom2 = '
    <li>
        <a class="justify-content-center" href="'.$s.'">
        <i class="flag ar"></i>
        HBO MAX | HD
        </a>
    </li>
    ';
}

if ($result['local'] === "PSG"){
    $canalImg = "hbo";
    $s= "Ly92ZXJjb21vZnV0Ym9sLnh5ei9oYm8vYnRtLnBocD9nZXQ9YUhSMGNITTZMeTlzYVhabExtWnNlUzVzWVhSaGJTNW9ZbTl0WVhoalpHNHVZMjl0TDJOdFlXWXZiR2wyWlM4eU1ETXhOakV5TDJSaGMyZ3ZZMlZ1WXk4eU56azVOeTl0WVhOMFpYSXViWEJrJmtleT1NREV3TVdZek9EWmlZVEUwTmpNMVpqQTRNalJtT0Rnd05qZzVabVZtTkRJPSZrZXkyPU1EazVObVE1TlRBME1EaGlNVFZrTURKaVpqUXdZMkpoTVRFMllXUXhZelk9";

    if ($s !== ""){
        $s = "../../../tv/epg?s=" . $s;
    } else {
        $s = "javascript:void(0)";
    }
    $custom2 = '
    <li>
        <a class="justify-content-center" href="'.$s.'">
        <i class="flag ar"></i>
        HBO MAX | HD
        </a>
    </li>
    ';
}

if ($result['visita'] === "realmadrid"){
    $canalImg = "hbo";
    $s= "Ly92ZXJjb21vZnV0Ym9sLnh5ei9oYm8vYnRtLnBocD9nZXQ9YUhSMGNITTZMeTlzYVhabExtRnJiUzVzWVhSaGJTNW9ZbTl0WVhoalpHNHVZMjl0TDJOdFlXWXZiR2wyWlM4eU1ETXhOakUxTDJSaGMyZ3ZZMlZ1WXk4eU56azVOQzl0WVhOMFpYSXViWEJrJmtleT1NREV3TVRBM09HVTVNVGswWkRWbE1qZzJOVGMyTlRKaVkySm1NREE1TmpZPSZrZXkyPU1URXlZelV3TTJWaVlqQXdNak0xTURNeE9ETTJPVFZqTnpKaFptRXpaamc9";

    if ($s !== ""){
        $s = "../../../tv/epg?s=" . $s;
    } else {
        $s = "javascript:void(0)";
    }
    $custom2 = '
    <li>
        <a class="justify-content-center" href="'.$s.'">
        <i class="flag ar"></i>
        HBO MAX | HD
        </a>
    </li>
    ';
}

if ($result['local'] === "milan"){
    $canalImg = "hbo";
    $s= "Ly92ZXJjb21vZnV0Ym9sLnh5ei9oYm8vYnRtLnBocD9nZXQ9YUhSMGNITTZMeTlzYVhabExtRnJiUzVzWVhSaGJTNW9ZbTl0WVhoalpHNHVZMjl0TDJOdFlXWXZiR2wyWlM4eU1ETXhOakUyTDJSaGMyZ3ZZMlZ1WXk4eU56azVNeTl0WVhOMFpYSXViWEJrJmtleT1NREV3TVRnMk1tSTRabUprWXpFek9UZzNaRFkzWmpKbE9HVTJObUptT1RBPSZrZXkyPU0yTmtNR1U0TWpjMVlUSmxOMkV3TXpNd05qUXdNbVF4WVdVek5qRTRPREU9";

    if ($s !== ""){
        $s = "../../../tv/epg?s=" . $s;
    } else {
        $s = "javascript:void(0)";
    }
    $custom2 = '
    <li>
        <a class="justify-content-center" href="'.$s.'">
        <i class="flag ar"></i>
        HBO MAX | HD
        </a>
    </li>
    ';
}

if ($result['local'] === "dortmund"){
    $canalImg = "hbo";
    $s= "Ly92ZXJjb21vZnV0Ym9sLnh5ei9oYm8vYnRtLnBocD9nZXQ9YUhSMGNITTZMeTlzYVhabExtRnJiUzVzWVhSaGJTNW9ZbTl0WVhoalpHNHVZMjl0TDJOdFlXWXZiR2wyWlM4eU1ETXhOamd5TDJSaGMyZ3ZZMlZ1WXk4eU56azVOaTl0WVhOMFpYSXViWEJrJmtleT1NREV3TVRjd01qSXhZekJrTlRsak5qRXlOVFJoTkRjME5HUmhPREkyWVRjPSZrZXkyPU5EWXhNRGxqTWpoaE5UYzVPVGRpWm1VNVlqQXhOR1JrWkRZME5XRTVORGM9";

    if ($s !== ""){
        $s = "../../../tv/epg?s=" . $s;
    } else {
        $s = "javascript:void(0)";
    }
    $custom2 = '
    <li>
        <a class="justify-content-center" href="'.$s.'">
        <i class="flag ar"></i>
        HBO MAX | HD
        </a>
    </li>
    ';
}

if ($result['local'] === "celtic"){
    $canalImg = "hbo";
    $s= "Ly92ZXJjb21vZnV0Ym9sLnh5ei9oYm8vYnRtLnBocD9nZXQ9YUhSMGNITTZMeTlzYVhabExtTm1MbXhoZEdGdExtaGliMjFoZUdOa2JpNWpiMjB2WTIxaFppOXNhWFpsTHpJd016RTJNVGN2WkdGemFDOWpaVzVqTHpJM09UazFMMjFoYzNSbGNpNXRjR1E9JmtleT1NREV3TVRNNE9HUTNaakprTnpOa1l6VXdNalpqTkdJME16RTFPVFF3WmpNPSZrZXkyPU1URTVPVFkxTldVME1tSmpOV0UxWVdaa01qVTNaRGhqTmpNeVltTTJNR1E9";

    if ($s !== ""){
        $s = "../../../tv/epg?s=" . $s;
    } else {
        $s = "javascript:void(0)";
    }
    $custom2 = '
    <li>
        <a class="justify-content-center" href="'.$s.'">
        <i class="flag ar"></i>
        HBO MAX | HD
        </a>
    </li>
    ';
}

if ($result['local'] === "dinamozagreb"){
    $canalImg = "hbo";
    $s= "Ly92ZXJjb21vZnV0Ym9sLnh5ei9oYm8vYnRtLnBocD9nZXQ9YUhSMGNITTZMeTlzYVhabExtTm1MbXhoZEdGdExtaGliMjFoZUdOa2JpNWpiMjB2WTIxaFppOXNhWFpsTHpJd016RTJPRE12WkdGemFDOWpaVzVqTHpJM09Ua3lMMjFoYzNSbGNpNXRjR1E9JmtleT1NREV3TVdWbU5HVmpORGt4TUdNMFpqQXlNRFV5TUdaalpEQXhaRGRsWXpRPSZrZXkyPVltRTVZell3TWpBMVpHWXpaR1JtTVdJME1XTTFaVFl4TWprMk1ESTRaVFU9";

    if ($s !== ""){
        $s = "../../../tv/epg?s=" . $s;
    } else {
        $s = "javascript:void(0)";
    }
    $custom2 = '
    <li>
        <a class="justify-content-center" href="'.$s.'">
        <i class="flag ar"></i>
        HBO MAX | HD
        </a>
    </li>
    ';
}







if ($result['local'] === "copenhague"){
    $canalImg = "starplus";
    // STAR+:
    $r= "../../star.php";

    if ($r !== ""){
        $r = $r;
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

if ($result['visita'] === "juventus"){
    $canalImg = "starplus";
    // STAR+:
    $r= "../../star.php";

    if ($r !== ""){
        $r = $r;
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

if ($result['local'] === "PSG"){
    $canalImg = "starplus";
    // STAR+:
    $r= "../../star.php";

    if ($r !== ""){
        $r = $r;
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

if ($result['visita'] === "realmadrid"){
    $canalImg = "starplus";
    // STAR+:
    $r= "../../star.php";

    if ($r !== ""){
        $r = $r;
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

if ($result['local'] === "milan"){
    $canalImg = "starplus";
    // STAR+:
    $r= "../../star.php";

    if ($r !== ""){
        $r = $r;
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

if ($result['local'] === "dortmund"){
    $canalImg = "starplus";
    // STAR+:
    $r= "../../star.php";

    if ($r !== ""){
        $r = $r;
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

if ($result['local'] === "dinamozagreb"){
    $canalImg = "starplus";
    // STAR+:
    $r= "../../star.php";

    if ($r !== ""){
        $r = $r;
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
