<?php
// Star
if ($result['visita'] === "team"){
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

if ($result['local'] === "suecia"){
    $canalImg = "starplus";
    // LINK:
    $r= "Ly92ZXJjb21vZnV0Ym9sLnh5ei9zL3N0YXJfandwLmh0bWw/Z2V0PWh0dHBzOi8vbGl2ZS1mdGMtbmEtc291dGgtMi5tZWRpYS5zdGFyb3R0LmNvbS9vbWEyL3ZhMDEvc3RhcnBsdXMvZXZlbnQvMjAyMi8wOS8yNy9TdWVjaWFfdnNfU2xvdmVuaWFfMjAyMjA5MjdfMTY2NDI5ODA1MzAzOS9jdHItYWxsLWNvbXBsZXRlLm0zdTgmaW1nPWh0dHBzOi8vcHJvZC1yaXBjdXQtZGVsaXZlcnkuZGlzbmV5LXBsdXMubmV0L3YxL3ZhcmlhbnQvc3Rhci8xQzY2N0JGQjUyQzAyMDQ1NjNCQzNERkE0NDAwQzFERjlDODlDNDcyNTM1RUYxNzRGRjgxNTRCMDYwRTVEMzUyL3NjYWxlP3dpZHRoPTE5MjAmYXNwZWN0UmF0aW89MS43OCZmb3JtYXQ9anBlZyZrZXk9M2U3ZGUzNjJlZWUzNGUxNDllYWVhOWM2ODI3M2Q5MTUma2V5Mj1jOGE4NDllZGM0MDlhODMyNTkxMDMwMWIyM2RkOGZmNjc=";

    if ($r !== ""){
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

if ($result['local'] === "portugal"){
    $canalImg = "starplus";
    // LINK:
    $r= "Ly92ZXJjb21vZnV0Ym9sLnh5ei9zL3N0YXJfandwLmh0bWw/Z2V0PWh0dHBzOi8vbGl2ZS1mdGMtbmEtc291dGgtMi5tZWRpYS5zdGFyb3R0LmNvbS9ncnUxL3FiMDEvc3RhcnBsdXMvZXZlbnQvMjAyMi8wOS8yNy9Qb3J0dWdhbF92c19Fc3BhYV8yMDIyMDkyN18xNjY0Mjk4MDQ3MDE0L2N0ci1hbGwtY29tcGxldGUubTN1OCZpbWc9aHR0cHM6Ly9wcm9kLXJpcGN1dC1kZWxpdmVyeS5kaXNuZXktcGx1cy5uZXQvdjEvdmFyaWFudC9zdGFyLzgwNkU5NDUzQjg4MzIxODAxQ0ZFNjdDNjA0MjE3MzREMEExRjAwRTE5M0U5ODk5NDhDNUE4NjI5ODJEMUQyNkMvc2NhbGU/d2lkdGg9MTkyMCZhc3BlY3RSYXRpbz0xLjc4JmZvcm1hdD1qcGVnJmtleT1hN2QwYTBkM2JmNGQ0MWRkOTE2ZDY3ZjY2MzYwMmIyOSZrZXkyPTQ1OTA4ZWViZTBjNjdjZTNjZjgwNWYyMzg3MTdhOGIy";

    if ($r !== ""){
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


if ($result['local'] === "noruega"){
    $canalImg = "starplus";
    // LINK:
    $r= "Ly92ZXJjb21vZnV0Ym9sLnh5ei9zL3N0YXJfandwLmh0bWw/Z2V0PWh0dHBzOi8vbGl2ZS1mdGMtbmEtc291dGgtMi5tZWRpYS5zdGFyb3R0LmNvbS9ncnUxL3FiMDEvc3RhcnBsdXMvZXZlbnQvMjAyMi8wOS8yNy9Ob3J1ZWdhX3ZzX1NlcmJpYV8yMDIyMDkyN18xNjY0Mjk4MDQ0MDIxL2N0ci1hbGwtY29tcGxldGUubTN1OCZpbWc9aHR0cHM6Ly9wcm9kLXJpcGN1dC1kZWxpdmVyeS5kaXNuZXktcGx1cy5uZXQvdjEvdmFyaWFudC9zdGFyL0IzMjlEQjZFN0E0MzhBNEU1NUREQjI1NkIwM0Q4QTA3NURBMzMzQzIzNzU1RkY0RjQ0MzYwODE2OUE5ODg4QTIvc2NhbGU/d2lkdGg9MTkyMCZhc3BlY3RSYXRpbz0xLjc4JmZvcm1hdD1qcGVnJmtleT05MTQ2NmM3MTgwOTc0ZDIxYWMwZjE3OWE4NWQ3NWVkNiZrZXkyPWRiMjA4N2FlYzE2OTVjMDg2M2NjNmU4ZTY2ZmVjMTMzNWY4Nw==";

    if ($r !== ""){
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

if ($result['local'] === "ucrania"){
    $canalImg = "starplus";
    // LINK:
    $r= "Ly92ZXJjb21vZnV0Ym9sLnh5ei9zL3N0YXJfandwLmh0bWw/Z2V0PWh0dHBzOi8vbGl2ZS1mdGMtbmEtc291dGgtMi5tZWRpYS5zdGFyb3R0LmNvbS9ncnUxL3FiMDEvc3RhcnBsdXMvZXZlbnQvMjAyMi8wOS8yNy9Va3JhaW5lX3ZzX0VzY29jaWFfMjAyMjA5MjdfMTY2NDI5NzQzNjAyMy9jdHItYWxsLWNvbXBsZXRlLm0zdTgmaW1nPWh0dHBzOi8vcHJvZC1yaXBjdXQtZGVsaXZlcnkuZGlzbmV5LXBsdXMubmV0L3YxL3ZhcmlhbnQvc3Rhci8xOTE4NzI5NjcwQkM3QThBQTg0QzdBMDRCRjBGQTExNDM0MTk1Nzk1MDBBMUE2QUVDNDEzNjJFMEYxM0RCMTcyL3NjYWxlP3dpZHRoPTE5MjAmYXNwZWN0UmF0aW89MS43OCZmb3JtYXQ9anBlZyZrZXk9YTBiOTEwNjk5ZmYwNDlhYjliZDFiMjk0NjFkOGNkZmMma2V5Mj0xNjBiODhjZTNmYzM5NGU5NGFmYWE1ZmJlOTY3NWY4Nw==";

    if ($r !== ""){
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


if ($result['local'] === "grecia"){
    $canalImg = "starplus";
    // LINK:
    $r= "Ly92ZXJjb21vZnV0Ym9sLnh5ei9zL3N0YXJfandwLmh0bWw/Z2V0PWh0dHBzOi8vbGl2ZS1mdGMtbmEtc291dGgtMi5tZWRpYS5zdGFyb3R0LmNvbS9vbWEyL3ZhMDEvc3RhcnBsdXMvZXZlbnQvMjAyMi8wOS8yNy9HcmVjaWFfdnNfSXJsYW5kYV9kZWxfTm9yXzIwMjIwOTI3XzE2NjQyOTgzMjMwMjQvY3RyLWFsbC1jb21wbGV0ZS5tM3U4JmltZz1odHRwczovL3Byb2QtcmlwY3V0LWRlbGl2ZXJ5LmRpc25leS1wbHVzLm5ldC92MS92YXJpYW50L3N0YXIvN0Y5NDVBMkRDNjdCQjkwNjE0MkNBMTZDNkE1NDk1OTZDNEUyQzk0RTFCNzYxNzc0MUVBNENEOUVDODQwQ0IyQy9zY2FsZT93aWR0aD0xOTIwJmFzcGVjdFJhdGlvPTEuNzgmZm9ybWF0PWpwZWcma2V5PTI5NzJmYTI2Yzc4OTQ1MTc4MmIwMDJjMzAyYWY5NGY0JmtleTI9ZjZjOTQ0ZDIzZDI5YmIxOGRiNmJjZjA4Y2NiYzM5NzA=";

    if ($r !== ""){
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

if ($result['local'] === "suiza"){
    $canalImg = "starplus";
    // LINK:
    $r= "Ly92ZXJjb21vZnV0Ym9sLnh5ei9zL3N0YXJfandwLmh0bWw/Z2V0PWh0dHBzOi8vbGl2ZS1mdGMtbmEtc291dGgtMi5tZWRpYS5zdGFyb3R0LmNvbS9ncnUxL3FiMDEvc3RhcnBsdXMvZXZlbnQvMjAyMi8wOS8yNy9TdWl6YV92c19DemVjaF9SZXB1YmxpY18yMDIyMDkyN18xNjY0Mjk4MDQ4MDIyL2N0ci1hbGwtY29tcGxldGUubTN1OCZpbWc9aHR0cHM6Ly9wcm9kLXJpcGN1dC1kZWxpdmVyeS5kaXNuZXktcGx1cy5uZXQvdjEvdmFyaWFudC9zdGFyLzg0RDA5NEM2NTBGMkNEOTA5NzUxMzI0RDlBQTg0NEUwOEMwRTU3NzU2NkU5RDU5RkI0RjRCRDBERkFEREVFRkYvc2NhbGU/d2lkdGg9MTkyMCZhc3BlY3RSYXRpbz0xLjc4JmZvcm1hdD1qcGVnJmtleT0zNjc1NDQ5MjZmYWE0YzRjOWNlNzFhMDk4ODNmOGJkNCZrZXkyPWQzMWYxZGQ1YzNlNWRiZTlhYTI3MDk0OTM5ZGE3MWQ0";

    if ($r !== ""){
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

if ($result['visita'] === "armenia"){
    $canalImg = "starplus";
    // LINK:
    $r= "";

    if ($r !== "Ly92ZXJjb21vZnV0Ym9sLnh5ei9zL3N0YXJfandwLmh0bWw/Z2V0PWh0dHBzOi8vbGl2ZS1mdGMtbmEtc291dGgtMi5tZWRpYS5zdGFyb3R0LmNvbS9vbWEyL3ZhMDEvc3RhcnBsdXMvZXZlbnQvMjAyMi8wOS8yNy9JcmxhbmRhX3ZzX0FybWVuaWFfMjAyMjA5MjdfMTY2NDI5ODMxOTAyMi9jdHItYWxsLWNvbXBsZXRlLm0zdTgmaW1nPWh0dHBzOi8vcHJvZC1yaXBjdXQtZGVsaXZlcnkuZGlzbmV5LXBsdXMubmV0L3YxL3ZhcmlhbnQvc3Rhci84MzVFOUMxMEZGM0EzMEJFMDVBOTZFNjdCMUNBMjk0N0Y2QTc0NTY1OTg5RTQ5QUY2RTA1QjE3Q0Y1MjkwQkZCL3NjYWxlP3dpZHRoPTE5MjAmYXNwZWN0UmF0aW89MS43OCZmb3JtYXQ9anBlZyZrZXk9M2JiMjg4YTYzNTg3NGMxMDhlNjQ3ZWU2ODY1NWY1ZjEma2V5Mj05ODA2MjVmYjM0MDc0ZWJlMWJkZjI2MWU2YmM1ZTE5YQ=="){
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

if ($result['local'] === "albania"){
    $canalImg = "starplus";
    // LINK:
    $r= "Ly92ZXJjb21vZnV0Ym9sLnh5ei9zL3N0YXJfandwLmh0bWw/Z2V0PWh0dHBzOi8vbGl2ZS1mdGMtbmEtc291dGgtMi5tZWRpYS5zdGFyb3R0LmNvbS9vbWEyL3ZhMDEvc3RhcnBsdXMvZXZlbnQvMjAyMi8wOS8yNy9BbGJhbmlhX3ZzX0lzbGFuZGlhXzIwMjIwOTI3XzE2NjQyOTgzMzgwMTgvY3RyLWFsbC1jb21wbGV0ZS5tM3U4JmltZz1odHRwczovL3Byb2QtcmlwY3V0LWRlbGl2ZXJ5LmRpc25leS1wbHVzLm5ldC92MS92YXJpYW50L3N0YXIvOEI4NjI4MzlCMEQ0RUZBMEQ4Mzc0Q0ZBN0QxMzg1OTI1MUNEMTA3MDdCRUJEQkNBQzM3MTA4QTJGQzc4NTA3RC9zY2FsZT93aWR0aD0xOTIwJmFzcGVjdFJhdGlvPTEuNzgmZm9ybWF0PWpwZWcma2V5PTUxYzk3YTcxMmRlNDRjMzY5YzkzYjY0MTkwM2E5ZWZiJmtleTI9N2M4MTk4ZWY2NmVmNTg4MjgwM2IwYWYyZmVlZGM1MmY=";

    if ($r !== ""){
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

if ($result['local'] === "kosovo"){
    $canalImg = "starplus";
    // LINK:
    $r= "Ly92ZXJjb21vZnV0Ym9sLnh5ei9zL3N0YXJfandwLmh0bWw/Z2V0PWh0dHBzOi8vbGl2ZS1mdGMtbmEtc291dGgtMi5tZWRpYS5zdGFyb3R0LmNvbS9vbWEyL3ZhMDEvc3RhcnBsdXMvZXZlbnQvMjAyMi8wOS8yNy9Lb3Nvdm9fdnNfQ2hpcHJlXzIwMjIwOTI3XzE2NjQyOTgzNTEwMjEvY3RyLWFsbC1jb21wbGV0ZS5tM3U4JmltZz1odHRwczovL3Byb2QtcmlwY3V0LWRlbGl2ZXJ5LmRpc25leS1wbHVzLm5ldC92MS92YXJpYW50L3N0YXIvRjE1ODI3MkFDQ0UwNkYyQTY4QURFMEE0MTYxRjE4OTAzMTUyRkEyMjlGRTlBQkU5OUJGNzRCRjczOTc3OUNERS9zY2FsZT93aWR0aD0xOTIwJmFzcGVjdFJhdGlvPTEuNzgmZm9ybWF0PWpwZWcma2V5PTM3OTY3NzE5NDU1MDRmZDI4OGU5ZmNiZmY2NTY4NmNlJmtleTI9NzU2ZTM2ODk3YjFkZmY5YmQxYWYzZGUxNTEyMzYxZGU=";

    if ($r !== ""){
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