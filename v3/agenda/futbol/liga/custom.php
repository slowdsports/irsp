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
if ($result['visita'] === "lecce"){
    $_SESSION['starplus'] = "Los eventos por Star+ estarán listos 5 o 10 minutos antes del comienzo.";
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
if ($result['local'] === "city"){
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
if ($result['local'] === "toulouse"){
    $_SESSION['starplus'] = "Los eventos por Star+ estarán listos 5 o 10 minutos antes del comienzo.";
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
if ($result['visita'] === "tottenham"){
    $_SESSION['starplus'] = "Los eventos por Star+ estarán listos 5 o 10 minutos antes del comienzo.";
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
if ($result['visita'] === "bayern"){
    $_SESSION['starplus'] = "Los eventos por Star+ estarán listos 5 o 10 minutos antes del comienzo.";
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