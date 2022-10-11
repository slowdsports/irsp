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

if ($result['visita'] === "realmadrid"){
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

if ($result['local'] === "milan"){
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

if ($result['local'] === "dortmund"){
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

if ($result['local'] === "dinamozagreb"){
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
