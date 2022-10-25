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
    $s= "aHR0cHM6Ly9saXZlLmFrbS5sYXRhbS5oYm9tYXhjZG4uY29tL2NtYWYvbGl2ZS8yMDMxNjExL2Rhc2gvY2VuYy8yODIxNS9tYXN0ZXIubXBk&key=MDEwMTdhZDI0YTZmY2M3MmZjMGQwY2ZkNWM4ZDVjZmE=&key2=Y2JlMGQzNWVkOGZhOWI4MDZlYTM4N2ViOTFjYjBhYmQ=";
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
    $s= "aHR0cHM6Ly9saXZlLmNmLmxhdGFtLmhib21heGNkbi5jb20vY21hZi9saXZlLzIwMzE2MTAvZGFzaC9jZW5jLzI4MjEyL21hc3Rlci5tcGQ=&key=MDEwMTk4ZmQ0ZGVmNGI1Y2E2M2NhOGJlYjFhMmVjNTg=&key2=NDA3MGEwZTRhYjhkOTg0ZTljYTM5YTcyNzBkZDkxYjM=";
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