<?php
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
if ($result['visita'] === "hellas"){
    $_SESSION['starplus'] = "Los eventos por Star+ estarán listos 5 o 10 minutos antes del comienzo.";
    $canalImg = "starplus";
    $r= "Ly92ZXJjb21vZnV0Ym9sLnh5ei9zL3N0YXJfandwLmh0bWw/Z2V0PWh0dHBzOi8vbGl2ZS1mdGMtbmEtc291dGgtMi5tZWRpYS5zdGFyb3R0LmNvbS9jbHQyL3ZhMDEvc3RhcnBsdXMvZXZlbnQvMjAyMi8wOC8zMS9FbXBvbGlfdnNfSGVsbGFzX1Zlcm9uYV8yMDIyMDgzMV8xNjYxOTU3NzM0MDEyL2N0ci1hbGwtY29tcGxldGUubTN1OCZpbWc9aHR0cHM6Ly9wcm9kLXJpcGN1dC1kZWxpdmVyeS5kaXNuZXktcGx1cy5uZXQvdjEvdmFyaWFudC9zdGFyL0JBMEI4MjI2OTlENzU5OURDRUJBMTU4OTAzMDlBRUU2NzRERTk5NjIzREMyNTY3NERFMTM2MEZBOEIwQjJDNEQvc2NhbGU/d2lkdGg9MTkyMCZhc3BlY3RSYXRpbz0xLjc4JmZvcm1hdD1qcGVnJmtleT0wOTc1ZDkyYjQ1MjA0NjlhOWI0ODk5YTQwMmE0MjllNyZrZXkyPWM3YWY1Mzg3NWVjZDMxZjMwYjU4M2Y0N2ZhZTIwOTRm";
    $custom1 = '
    <li>
        <a class="justify-content-center" href="../../../tv/epg?r='.$r.'">
        <i class="flag ar"></i>
        Star + | HD
        </a>
    </li>
    ';
}
if ($result['visita'] === "lazio"){
    $_SESSION['starplus'] = "Los eventos por Star+ estarán listos 5 o 10 minutos antes del comienzo.";
    $canalImg = "starplus";
    $r= "Ly92ZXJjb21vZnV0Ym9sLnh5ei9zL3N0YXJfandwLmh0bWw/Z2V0PWh0dHBzOi8vbGl2ZS1mdGMtbmEtc291dGgtMi5tZWRpYS5zdGFyb3R0LmNvbS9ncnUxL3FiMDIvc3RhcnBsdXMvZXZlbnQvMjAyMi8wOC8zMS9TYW1wZG9yaWFfdnNfTGF6aW9fMjAyMjA4MzFfMTY2MTk1NzQxNjAxMy9jdHItYWxsLWNvbXBsZXRlLm0zdTgmaW1nPWh0dHBzOi8vcHJvZC1yaXBjdXQtZGVsaXZlcnkuZGlzbmV5LXBsdXMubmV0L3YxL3ZhcmlhbnQvc3Rhci8xRUE4Qjk3QzhGQTlGMjRCOTJFQkNGMjJCMENBMDUxMDM4MzBBM0M0QjJBRDU4MDI1RkY0NzdCRjQzODcwRjE5L3NjYWxlP3dpZHRoPTE5MjAmYXNwZWN0UmF0aW89MS43OCZmb3JtYXQ9anBlZyZrZXk9N2E5MTRiMDBmNzkxNDI1YjhkMGZkZGYzOWM0ZGRhZGQma2V5Mj1jZTlmN2Q2MDRlY2E4OWFmZmJmYWRjMmRlNTMyYmQ2ZQ==";
    $custom1 = '
    <li>
        <a class="justify-content-center" href="../../../tv/epg?r='.$r.'">
        <i class="flag ar"></i>
        Star + | HD
        </a>
    </li>
    ';
}
if ($result['visita'] === "fiorentina"){
    $_SESSION['starplus'] = "Los eventos por Star+ estarán listos 5 o 10 minutos antes del comienzo.";
    $canalImg = "starplus";
    $r= "Ly92ZXJjb21vZnV0Ym9sLnh5ei9zL3N0YXJfandwLmh0bWw/Z2V0PWh0dHBzOi8vbGl2ZS1mdGMtbmEtc291dGgtMi5tZWRpYS5zdGFyb3R0LmNvbS9jbHQyL3ZhMDEvc3RhcnBsdXMvZXZlbnQvMjAyMi8wOC8zMS9VZGluZXNlX3ZzX0Zpb3JlbnRpbmFfMjAyMjA4MzFfMTY2MTk1Nzc0MTAyMC9jdHItYWxsLWNvbXBsZXRlLm0zdTgmaW1nPWh0dHBzOi8vcHJvZC1yaXBjdXQtZGVsaXZlcnkuZGlzbmV5LXBsdXMubmV0L3YxL3ZhcmlhbnQvc3Rhci8wNTdEMzczRjhGMjgxRTJDMzRBRUQyNzEyNTdBMzYyMzc4QjVGOTExRDcxRDYzRjI2NTcyRjA3NkYyMzJGRTBBL3NjYWxlP3dpZHRoPTE5MjAmYXNwZWN0UmF0aW89MS43OCZmb3JtYXQ9anBlZyZrZXk9MDBmMGM1OTQwZjg5NGVkMWJlN2U0Yzk2NTVmMjY3ZDIma2V5Mj02Yjg1MzY3YTI5ZjU4YmU3NjllZmNkMDFlOGU4ODBmMA==";
    $custom1 = '
    <li>
        <a class="justify-content-center" href="../../../tv/epg?r='.$r.'">
        <i class="flag ar"></i>
        Star + | HD
        </a>
    </li>
    ';
}
if ($result['visita'] === "spezia"){
    $_SESSION['starplus'] = "Los eventos por Star+ estarán listos 5 o 10 minutos antes del comienzo.";
    $canalImg = "starplus";
    $r= "Ly92ZXJjb21vZnV0Ym9sLnh5ei9zL3N0YXJfandwLmh0bWw/Z2V0PWh0dHBzOi8vbGl2ZS1mdGMtbmEtc291dGgtMi5tZWRpYS5zdGFyb3R0LmNvbS9ncnUxL3FiMDEvc3RhcnBsdXMvZXZlbnQvMjAyMi8wOC8zMS9KdXZlbnR1c192c19TcGV6aWFfMjAyMjA4MzFfMTY2MTk2NTIyOTAxMy9jdHItYWxsLWNvbXBsZXRlLm0zdTgmaW1nPWh0dHBzOi8vcHJvZC1yaXBjdXQtZGVsaXZlcnkuZGlzbmV5LXBsdXMubmV0L3YxL3ZhcmlhbnQvc3Rhci8xMTM0NEQxQ0I3MUQwMUIyQTRGMkVFQjVCRjg1QjcyNjVCOENGQTJBQzlENzA5MjE2OUI3MjdFM0FDQjVEM0VGL3NjYWxlP3dpZHRoPTE5MjAmYXNwZWN0UmF0aW89MS43OCZmb3JtYXQ9anBlZyZrZXk9OTgwNDNmNzQ2OWMzNDdjMDg4MzQxYmVkOTFlNDU2YTQma2V5Mj1iOWIyMDJkZDY3ZjcxOGE4YzI3NDg1YTVjOTk0ZTU0ZQ==";
    $custom1 = '
    <li>
        <a class="justify-content-center" href="../../../tv/epg?r='.$r.'">
        <i class="flag ar"></i>
        Star + | HD
        </a>
    </li>
    ';
}
if ($result['visita'] === "lecce"){
    $_SESSION['starplus'] = "Los eventos por Star+ estarán listos 5 o 10 minutos antes del comienzo.";
    $canalImg = "starplus";
    $r= "Ly92ZXJjb21vZnV0Ym9sLnh5ei9zL3N0YXJfandwLmh0bWw/Z2V0PWh0dHBzOi8vbGl2ZS1mdGMtbmEtc291dGgtMi5tZWRpYS5zdGFyb3R0LmNvbS9jbHQyL3ZhMDEvc3RhcnBsdXMvZXZlbnQvMjAyMi8wOC8zMS9OYXBvbGlfdnNfTGVjY2VfMjAyMjA4MzFfMTY2MTk2NTIwMjAyMi9jdHItYWxsLWNvbXBsZXRlLm0zdTgmaW1nPWh0dHBzOi8vcHJvZC1yaXBjdXQtZGVsaXZlcnkuZGlzbmV5LXBsdXMubmV0L3YxL3ZhcmlhbnQvc3Rhci8xRENENTEyQkYxOEVEMDU2RUNFMTNFRkE4OTZCOEEyNThEMjU5M0VERDJGRjYzNTJGNDIyNkI0MzNBMDFCMDdBL3NjYWxlP3dpZHRoPTE5MjAmYXNwZWN0UmF0aW89MS43OCZmb3JtYXQ9anBlZyZrZXk9MGZmZjAxMDM0NGY2NGJiMmIxMDI5MmQ1NTc4MmI5MGUma2V5Mj1kYzJhZDdjNjE3N2RlYTE3NDkzZTgyNTg4MGU2ZDQwNA==";
    $custom1 = '
    <li>
        <a class="justify-content-center" href="../../../tv/epg?r='.$r.'">
        <i class="flag ar"></i>
        Star + | HD
        </a>
    </li>
    ';
}
if ($result['local'] === "arsenal"){
    $_SESSION['starplus'] = "Los eventos por Star+ estarán listos 5 o 10 minutos antes del comienzo.";
    $canalImg = "starplus";
    $r= "Ly92ZXJjb21vZnV0Ym9sLnh5ei9zL3N0YXJfandwLmh0bWw/Z2V0PWh0dHBzOi8vbGl2ZS1mdGMtbmEtc291dGgtMi5tZWRpYS5zdGFyb3R0LmNvbS9ncnUxL3FiMDIvc3RhcnBsdXMvZXZlbnQvMjAyMi8wOC8zMS9BcnNlbmFsX3ZzX0FzdG9uX1ZpbGxhXzIwMjIwODMxXzE2NjE5NjQ2NDMwMjIvY3RyLWFsbC1jb21wbGV0ZS5tM3U4JmltZz1odHRwczovL3Byb2QtcmlwY3V0LWRlbGl2ZXJ5LmRpc25leS1wbHVzLm5ldC92MS92YXJpYW50L3N0YXIvRURDQjg4RTM4OUQxOEE3RDM1MEI1QjU0MzQ3OTlBRjBFRTVGOEJFMTZERDMzRkE3RDQ4REUyQjAyNEMzMzQ0OC9zY2FsZT93aWR0aD0xOTIwJmFzcGVjdFJhdGlvPTEuNzgmZm9ybWF0PWpwZWcma2V5PTliY2MzYWE2OGJhZTQ4NWQ5MWU3NmQwMjQ2ZDU0NjNiJmtleTI9NGFjZDVlN2I1ZDdmOTk3OWMxZTM4Y2FhYTAyZDUxYzA=";
    $custom1 = '
    <li>
        <a class="justify-content-center" href="../../../tv/epg?r='.$r.'">
        <i class="flag ar"></i>
        Star + | HD
        </a>
    </li>
    ';
}
if ($result['local'] === "manchestercity"){
    $_SESSION['starplus'] = "Los eventos por Star+ estarán listos 5 o 10 minutos antes del comienzo.";
    $canalImg = "starplus";
    $r= "Ly92ZXJjb21vZnV0Ym9sLnh5ei9zL3N0YXJfandwLmh0bWw/Z2V0PWh0dHBzOi8vbGl2ZS1mdGMtbmEtc291dGgtMi5tZWRpYS5zdGFyb3R0LmNvbS9ncnUxL3FiMDEvc3RhcnBsdXMvZXZlbnQvMjAyMi8wOC8zMS9NYW5jaGVzdGVyX0NpdHlfdnNfTm90dGluXzIwMjIwODMxXzE2NjE5NjQ2MDIwMjQvY3RyLWFsbC1jb21wbGV0ZS5tM3U4JmltZz1odHRwczovL3Byb2QtcmlwY3V0LWRlbGl2ZXJ5LmRpc25leS1wbHVzLm5ldC92MS92YXJpYW50L3N0YXIvNTc0OThDOTYwNTJBQTA5OTU1RjJEOUI1QzY5RkRDNDYxOTg3MjhBNjhEOTI3QzVFMDQ0NkI0MkNBRjI2MzYxMS9zY2FsZT93aWR0aD0xOTIwJmFzcGVjdFJhdGlvPTEuNzgmZm9ybWF0PWpwZWcma2V5PWNmMmYyNWYwOWFhNDRkZmViZmRmMzQ2MGQxYWRkOGVmJmtleTI9MjBkODQ0MzI0MjNhNzdjZDc4MjI1NDliYTdhOTRiZDk=";
    $custom1 = '
    <li>
        <a class="justify-content-center" href="../../../tv/epg?r='.$r.'">
        <i class="flag ar"></i>
        Star + | HD
        </a>
    </li>
    ';
}
if ($result['local'] === "bournemouth"){
    $_SESSION['starplus'] = "Los eventos por Star+ estarán listos 5 o 10 minutos antes del comienzo.";
    $canalImg = "starplus";
    $r= "Ly92ZXJjb21vZnV0Ym9sLnh5ei9zL3N0YXJfandwLmh0bWw/Z2V0PWh0dHBzOi8vbGl2ZS1mdGMtbmEtc291dGgtMi5tZWRpYS5zdGFyb3R0LmNvbS9jbHQyL3ZhMDEvc3RhcnBsdXMvZXZlbnQvMjAyMi8wOC8zMS9Cb3VybmVtb3V0aF92c19Xb2x2ZXJoYW1wXzIwMjIwODMxXzE2NjE5NjQ5NTMwMjEvY3RyLWFsbC1jb21wbGV0ZS5tM3U4JmltZz1odHRwczovL3Byb2QtcmlwY3V0LWRlbGl2ZXJ5LmRpc25leS1wbHVzLm5ldC92MS92YXJpYW50L3N0YXIvQTk5QjJEMzA2NTUzMzMyQTU4Mzk5QjVEQTg0NDRGRUU2NjBEMDUwNTBCQjM3OThGM0MzOUNBRUQ0NkFFNDMxRi9zY2FsZT93aWR0aD0xOTIwJmFzcGVjdFJhdGlvPTEuNzgmZm9ybWF0PWpwZWcma2V5PTA4YmI4ODlmNjFiZjQ0NjliZmY4YWVmYmIyMGY1ZmEyJmtleTI9OGM1ODMxNmUwMzhjNGQwMjNlMmRlNzJjMTNjZjhmYTM=";
    $custom1 = '
    <li>
        <a class="justify-content-center" href="../../../tv/epg?r='.$r.'">
        <i class="flag ar"></i>
        Star + | HD
        </a>
    </li>
    ';
}
if ($result['local'] === "liverpool"){
    $_SESSION['starplus'] = "Los eventos por Star+ estarán listos 5 o 10 minutos antes del comienzo.";
    $canalImg = "starplus";
    $r= "Ly92ZXJjb21vZnV0Ym9sLnh5ei9zL3N0YXJfandwLmh0bWw/Z2V0PWh0dHBzOi8vbGl2ZS1mdGMtbmEtc291dGgtMi5tZWRpYS5zdGFyb3R0LmNvbS9ncnUxL3FiMDEvc3RhcnBsdXMvZXZlbnQvMjAyMi8wOC8zMS9MaXZlcnBvb2xfdnNfTmV3Y2FzdGxlX1VuXzIwMjIwODMxXzE2NjE5NjY3MDAyODcvY3RyLWFsbC1jb21wbGV0ZS5tM3U4JmltZz1odHRwczovL3Byb2QtcmlwY3V0LWRlbGl2ZXJ5LmRpc25leS1wbHVzLm5ldC92MS92YXJpYW50L3N0YXIvM0IxNzM2MDRGRkE2MEZDMEY4QUNFOTRGQjFBMjQwQ0NDMTBDMENDQ0M3ODlCQUQ0NTFFOUI2OTIzQkIzNEY4Mi9zY2FsZT93aWR0aD0xOTIwJmFzcGVjdFJhdGlvPTEuNzgmZm9ybWF0PWpwZWcma2V5PTA1YzZmNzMxOWUyYTRhZGQ5NGM4NTJkNDU1NGNlZTZjJmtleTI9MTZhNzVlOTIyNmI4MTE0ZDZkMjhmMDdmMDQzMWQ1ZTk=";
    $custom1 = '
    <li>
        <a class="justify-content-center" href="../../../tv/epg?r='.$r.'">
        <i class="flag ar"></i>
        Star + | HD
        </a>
    </li>
    ';
}
if ($result['local'] === "toulouse"){
    $_SESSION['starplus'] = "Los eventos por Star+ estarán listos 5 o 10 minutos antes del comienzo.";
    $canalImg = "starplus";
    $r= "Ly92ZXJjb21vZnV0Ym9sLnh5ei9zL3N0YXJfandwLmh0bWw/Z2V0PWh0dHBzOi8vbGl2ZS1mdGMtbmEtc291dGgtMi5tZWRpYS5zdGFyb3R0LmNvbS9ncnUxL3FiMDIvc3RhcnBsdXMvZXZlbnQvMjAyMi8wOC8zMS9Ub3Vsb3VzZV92c19QU0dfMjAyMjA4MzFfMTY2MTk2NjQxMTAyMi9jdHItYWxsLWNvbXBsZXRlLm0zdTgmaW1nPWh0dHBzOi8vcHJvZC1yaXBjdXQtZGVsaXZlcnkuZGlzbmV5LXBsdXMubmV0L3YxL3ZhcmlhbnQvc3Rhci9DODAzNDE5NUZDRkYyOEFDRDgzMDdBOUE2QkZBOTIxQzNFRTA2REUxMTM2Q0UzNjMzQjc3NzBCNUQzQzI1MDBDL3NjYWxlP3dpZHRoPTE5MjAmYXNwZWN0UmF0aW89MS43OCZmb3JtYXQ9anBlZyZrZXk9ODFjZjQyYTYwNWY2NDBmYmE2N2Y3MGY4OTY4MDM2NGMma2V5Mj1mZjI3OWNlZjM2ODAzNzg2ZTc5MjMxMzU2OGJlMDAxYQ==";
    $custom1 = '
    <li>
        <a class="justify-content-center" href="../../../tv/epg?r='.$r.'">
        <i class="flag ar"></i>
        Star + | HD
        </a>
    </li>
    ';
}
if ($result['visita'] === "tottenham"){
    $_SESSION['starplus'] = "Los eventos por Star+ estarán listos 5 o 10 minutos antes del comienzo.";
    $canalImg = "starplus";
    $r= "Ly92ZXJjb21vZnV0Ym9sLnh5ei9zL3N0YXJfandwLmh0bWw/Z2V0PWh0dHBzOi8vbGl2ZS1mdGMtbmEtc291dGgtMi5tZWRpYS5zdGFyb3R0LmNvbS9jbHQyL3ZhMDEvc3RhcnBsdXMvZXZlbnQvMjAyMi8wOC8zMS9XZXN0X0hhbV9Vbml0ZWRfdnNfVG90dGVuXzIwMjIwODMxXzE2NjE5NjUyMzcwMjEvY3RyLWFsbC1jb21wbGV0ZS5tM3U4JmltZz1odHRwczovL3Byb2QtcmlwY3V0LWRlbGl2ZXJ5LmRpc25leS1wbHVzLm5ldC92MS92YXJpYW50L3N0YXIvNkQ4MzkyNTY2NjY4NDE5N0QyMUVEMDU1NTc4M0FCNUI4Q0I0RkYyQzYzMjZFQ0IzNDI3NEEyMTAwNjNGRUI1NC9zY2FsZT93aWR0aD0xOTIwJmFzcGVjdFJhdGlvPTEuNzgmZm9ybWF0PWpwZWcma2V5PTcyNDEwNGM0MmNkOTQ5ZDI5Y2MyZDQ5NDE2YjM1NGI5JmtleTI9ZjYxMTBiMzIzNzI1MDAwNWViNzRiMWNhMjFmNTRmMzY=";
    $custom1 = '
    <li>
        <a class="justify-content-center" href="../../../tv/epg?r='.$r.'">
        <i class="flag ar"></i>
        Star + | HD
        </a>
    </li>
    ';
}
if ($result['visita'] === "bayern"){
    $_SESSION['starplus'] = "Los eventos por Star+ estarán listos 5 o 10 minutos antes del comienzo.";
    $canalImg = "starplus";
    $r= "Ly92ZXJjb21vZnV0Ym9sLnh5ei9zL3N0YXJfandwLmh0bWw/Z2V0PWh0dHBzOi8vbGl2ZS1mdGMtbmEtc291dGgtMi5tZWRpYS5zdGFyb3R0LmNvbS9jbHQyL3ZhMDEvc3RhcnBsdXMvZXZlbnQvMjAyMi8wOC8zMS9WaWt0b3JpYV9Lb2xuX3ZzX0JheWVybl9NXzIwMjIwODMxXzE2NjE5NjUyMjQwMjEvY3RyLWFsbC1jb21wbGV0ZS5tM3U4JmltZz1odHRwczovL3Byb2QtcmlwY3V0LWRlbGl2ZXJ5LmRpc25leS1wbHVzLm5ldC92MS92YXJpYW50L3N0YXIvNjgxMDE1NzE1NTU1OEY1NDNBRUNFMThGNUM2OTNGODk4NTA4NzlENzNEQTA5NEE0QTYzRTE4QzRGRjUxODA4NS9zY2FsZT93aWR0aD0xOTIwJmFzcGVjdFJhdGlvPTEuNzgmZm9ybWF0PWpwZWcma2V5PTJkNmFlM2IxYzc4NTRjYzM5MzU5NTI1MWNmZjc2YjA5JmtleTI9YTU2Njg5YjAxYzk3OWQ2MjMxYWZlNTI2N2RkOTMyOGY=";
    $custom1 = '
    <li>
        <a class="justify-content-center" href="../../../tv/epg?r='.$r.'">
        <i class="flag ar"></i>
        Star + | HD
        </a>
    </li>
    ';
}
if ($result['visita'] === "paraguay"){
    $_SESSION['starplus'] = "Los eventos por Star+ estarán listos 5 o 10 minutos antes del comienzo.";
    $canalImg = "starplus";
    $r= "Ly92ZXJjb21vZnV0Ym9sLnh5ei9zL3N0YXJfandwLmh0bWw/Z2V0PWh0dHBzOi8vbGl2ZS1mdGMtbmEtc291dGgtMi5tZWRpYS5zdGFyb3R0LmNvbS9ncnUxL3FiMDIvc3RhcnBsdXMvZXZlbnQvMjAyMi8wOS8wMS9NZXhpY29fdnNfUGFyYWd1YXlfMjAyMjA5MDFfMTY2MTk4ODAwMjAyNi9jdHItYWxsLWNvbXBsZXRlLm0zdTgmaW1nPWh0dHBzOi8vcHJvZC1yaXBjdXQtZGVsaXZlcnkuZGlzbmV5LXBsdXMubmV0L3YxL3ZhcmlhbnQvc3Rhci84MUVEMjdFNDFDMzc5QzI4MjFFMERCQzJCRERBQTFEMTcwQjI3M0RCQ0RCMDI3OUNCMThBODFEMEZFMkUyREJBL3NjYWxlP3dpZHRoPTE5MjAmYXNwZWN0UmF0aW89MS43OCZmb3JtYXQ9anBlZyZrZXk9NTYzOTljZmFkYjZjNDQ5Yzg3MzNmMTM4OWMzMjlmNmUma2V5Mj1lMzk3MGQ4NGExNjZlZGMyM2M5NThjZTEzY2ExNTJmNQ==";
    $custom1 = '
    <li>
        <a class="justify-content-center" href="../../../tv/epg?r='.$r.'">
        <i class="flag ar"></i>
        Star + | HD
        </a>
    </li>
    ';
}