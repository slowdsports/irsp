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
if ($result['local] === "ajax"){
    $_SESSION['campeones'] = "Los eventos por Star+ estarán listos 5 o 10 minutos antes del comienzo.";
    $canalImg = "campeones";
    $r= "Ly92ZXJjb21vZnV0Ym9sLnh5ei9zL3N0YXJfandwLmh0bWw/Z2V0PWh0dHBzOi8vbGl2ZS1mdGMtbmEtc291dGgtMi5tZWRpYS5zdGFyb3R0LmNvbS9ncnUxL3FiMDEvc3RhcnBsdXMvZXZlbnQvMjAyMi8wOS8wNi9EaW5hbW9fWmFncmViX3ZzX0NoZWxzZWFfMjAyMjA5MDZfMTY2MjQ3NjQyMDA3NC9jdHItYWxsLWNvbXBsZXRlLm0zdTgmaW1nPWh0dHBzOi8vcHJvZC1yaXBjdXQtZGVsaXZlcnkuZGlzbmV5LXBsdXMubmV0L3YxL3ZhcmlhbnQvc3Rhci8yNEE3MzUyNzFGRjFFMjBBOUQ0MTM4QUQ5QTAyQUVEMDMyMUU5RjJEQjYwRDczOTg5MUJFMzZCRDQ4RTgxNEJFL3NjYWxlP3dpZHRoPTE5MjAmYXNwZWN0UmF0aW89MS43OCZmb3JtYXQ9anBlZyZrZXk9YTBlYTIyMDQ0MzczNGExMWIxZjNkNWQyNTc4MDM0OTMma2V5Mj0yYjBlZTIwNGFjMWEyZThiOWQxZjcyZTk3ZGY0OTY4Nw==";
    $custom1 = '
    <li>
        <a class="justify-content-center" href="../../../tv/epg?r='.$r.'">
        <i class="flag es"></i>
        Liga campeones | HD
        </a>
    </li>
    ';
}
if ($result['local'] === "dortmund"){
    $_SESSION['starplus'] = "Los eventos por Star+ estarán listos 5 o 10 minutos antes del comienzo.";
    $canalImg = "starplus";
    $r= "Ly92ZXJjb21vZnV0Ym9sLnh5ei9zL3N0YXJfandwLmh0bWw/Z2V0PWh0dHBzOi8vbGl2ZS1mdGMtbmEtc291dGgtMi5tZWRpYS5zdGFyb3R0LmNvbS9ncnUxL3FiMDEvc3RhcnBsdXMvZXZlbnQvMjAyMi8wOS8wNi9Cb3J1c3NpYV9Eb3J0bXVuZF92c19Db3BlXzIwMjIwOTA2XzE2NjI0NzY0MDgwMzEvY3RyLWFsbC1jb21wbGV0ZS5tM3U4JmltZz1odHRwczovL3Byb2QtcmlwY3V0LWRlbGl2ZXJ5LmRpc25leS1wbHVzLm5ldC92MS92YXJpYW50L3N0YXIvN0RDRUMxRjUzRUJFNjFERTRDMUVDNkNCNjU3MDNDNUFEMTlFN0M0MENDMjg4MDFBRDRBRjhGMEMyQjBDMjE1RS9zY2FsZT93aWR0aD0xOTIwJmFzcGVjdFJhdGlvPTEuNzgmZm9ybWF0PWpwZWcma2V5PTY5Y2IzZTQ0MjQwYTQ1ZjM4YThiZjc2ZTFhZjgwOGU4JmtleTI9MzFiODg0YTE0YmFjNTg2MmFmNTc0MWU2MDBhMTk3ZGE=";
    $custom1 = '
    <li>
        <a class="justify-content-center" href="../../../tv/epg?r='.$r.'">
        <i class="flag ar"></i>
        Star + | HD
        </a>
    </li>
    ';
}
if ($result['local'] === "psg"){
    $_SESSION['starplus'] = "Los eventos por Star+ estarán listos 5 o 10 minutos antes del comienzo.";
    $canalImg = "starplus";
    $r= "Ly92ZXJjb21vZnV0Ym9sLnh5ei9zL3N0YXJfandwLmh0bWw/Z2V0PWh0dHBzOi8vbGl2ZS1mdGMtbmEtc291dGgtMi5tZWRpYS5zdGFyb3R0LmNvbS9ncnUxL3FiMDEvc3RhcnBsdXMvZXZlbnQvMjAyMi8wOS8wNi9QU0dfdnNfSnV2ZW50dXNfRkNfMjAyMjA5MDZfMTY2MjQ4NDIxMDA0Ni9jdHItYWxsLWNvbXBsZXRlLm0zdTgmaW1nPWh0dHBzOi8vcHJvZC1yaXBjdXQtZGVsaXZlcnkuZGlzbmV5LXBsdXMubmV0L3YxL3ZhcmlhbnQvc3Rhci83QTQ5NzQzMkRCMjUyOUQ4RUE1RTQ0QTQ1NDdDODI0NTg4MUZDMEQ4MDg4MzUxRUVBQjMzQkJEMjEzQzc0MDUzL3NjYWxlP3dpZHRoPTE5MjAmYXNwZWN0UmF0aW89MS43OCZmb3JtYXQ9anBlZyZrZXk9ZDI2MDdhYWQ1NWQxNDcwNjk2OGRlZmM1MzUzMDI5NjIma2V5Mj04ZTc1OWQ1MjA1NDFjNDFlOGQ3ZGMyYjA5NjdkMzQzMg==";
    $custom1 = '
    <li>
        <a class="justify-content-center" href="../../../tv/epg?r='.$r.'">
        <i class="flag ar"></i>
        Star + | HD
        </a>
    </li>
    ';
}
if ($result['local'] === "celtic"){
    $_SESSION['starplus'] = "Los eventos por Star+ estarán listos 5 o 10 minutos antes del comienzo.";
    $canalImg = "starplus";
    $r= "Ly92ZXJjb21vZnV0Ym9sLnh5ei9zL3N0YXJfandwLmh0bWw/Z2V0PWh0dHBzOi8vbGl2ZS1mdGMtbmEtc291dGgtMi5tZWRpYS5zdGFyb3R0LmNvbS9ncnUxL3FiMDIvc3RhcnBsdXMvZXZlbnQvMjAyMi8wOS8wNi9DZWx0aWNfRkNfdnNfUmVhbF9NYWRyaWRfMjAyMjA5MDZfMTY2MjQ4NDIzMzAxOC9jdHItYWxsLWNvbXBsZXRlLm0zdTgmaW1nPWh0dHBzOi8vcHJvZC1yaXBjdXQtZGVsaXZlcnkuZGlzbmV5LXBsdXMubmV0L3YxL3ZhcmlhbnQvc3Rhci80QTI1QjM3MzlFRjE1QkVGQzBEMjk4NUFENzY4ODVCMTA1NEFBM0M1RjMwRTJGMkJGQUZGMzA2QjBCNkU3NTdBL3NjYWxlP3dpZHRoPTE5MjAmYXNwZWN0UmF0aW89MS43OCZmb3JtYXQ9anBlZyZrZXk9YmU5ZWMyYzMyZmVjNGJkODkwYzRmN2MyNTY4NzZiNTUma2V5Mj1iYzZmZGRmZDE0YWIwYTIwMmMzMWM1NjI0MmE1ZmJkOQ==";
    $custom1 = '
    <li>
        <a class="justify-content-center" href="../../../tv/epg?r='.$r.'">
        <i class="flag ar"></i>
        Star + | HD
        </a>
    </li>
    ';
}
if ($result['local'] === "sevilla"){
    $_SESSION['starplus'] = "Los eventos por Star+ estarán listos 5 o 10 minutos antes del comienzo.";
    $canalImg = "starplus";
    $r= "Ly92ZXJjb21vZnV0Ym9sLnh5ei9zL3N0YXJfandwLmh0bWw/Z2V0PWh0dHBzOi8vbGl2ZS1mdGMtbmEtc291dGgtMi5tZWRpYS5zdGFyb3R0LmNvbS9ncnUxL3FiMDIvc3RhcnBsdXMvZXZlbnQvMjAyMi8wOS8wNi9TZXZpbGxhX3ZzX01hbmNoZXN0ZXJfQ2l0XzIwMjIwOTA2XzE2NjI0ODQyMzMwNDEvY3RyLWFsbC1jb21wbGV0ZS5tM3U4JmltZz1odHRwczovL3Byb2QtcmlwY3V0LWRlbGl2ZXJ5LmRpc25leS1wbHVzLm5ldC92MS92YXJpYW50L3N0YXIvOEM5MzQ3Mzg5ODcwQTQxRUE2NUQxMzBDMTFCREEyNzI0NDBENkQ5ODBBMjA5QTgxQ0JCQkI1QUQyMTgxM0VCNi9zY2FsZT93aWR0aD0xOTIwJmFzcGVjdFJhdGlvPTEuNzgmZm9ybWF0PWpwZWcma2V5PTc4MTQwMTcyMDFlMTRjNjBiNzJiMTE2MTZhNTcwMDA0JmtleTI9MzIwNDIxMDgxNmQ1ZDhkMzJlNzhiNWE4YTJiYzllYmY=";
    $custom1 = '
    <li>
        <a class="justify-content-center" href="../../../tv/epg?r='.$r.'">
        <i class="flag ar"></i>
        Star + | HD
        </a>
    </li>
    ';
}
if ($result['visita'] === "milan"){
    $_SESSION['starplus'] = "Los eventos por Star+ estarán listos 5 o 10 minutos antes del comienzo.";
    $canalImg = "starplus";
    $r= "Ly92ZXJjb21vZnV0Ym9sLnh5ei9zL3N0YXJfandwLmh0bWw/Z2V0PWh0dHBzOi8vbGl2ZS1mdGMtbmEtc291dGgtMi5tZWRpYS5zdGFyb3R0LmNvbS9ncnUxL3FiMDEvc3RhcnBsdXMvZXZlbnQvMjAyMi8wOS8wNi9GQ19TYWx6YnVyZ192c19BQ19NaWxhbl8yMDIyMDkwNl8xNjYyNDg0MjMxMDE2L2N0ci1hbGwtY29tcGxldGUubTN1OCZpbWc9aHR0cHM6Ly9wcm9kLXJpcGN1dC1kZWxpdmVyeS5kaXNuZXktcGx1cy5uZXQvdjEvdmFyaWFudC9zdGFyLzUzMkYwMTkyQTQ2OTJEQzhGMTYxRTNBM0UwNDQ2REE1OUZDOEUxMzRBMUI5RkQwMTE3NjI5QjFERkREQTIyMDcvc2NhbGU/d2lkdGg9MTkyMCZhc3BlY3RSYXRpbz0xLjc4JmZvcm1hdD1qcGVnJmtleT02YjEwNTdjNzFhOTU0MTc5ODBiZWUxOGQ2ZGNiMzdjYSZrZXkyPTUxZjdhMzM2NDZjNGFjZWMwZjQ3YjM1ZTYwMmE4N2M0";
    $custom1 = '
    <li>
        <a class="justify-content-center" href="../../../tv/epg?r='.$r.'">
        <i class="flag ar"></i>
        Star + | HD
        </a>
    </li>
    ';
}
if ($result['local'] === "benfica"){
    $_SESSION['starplus'] = "Los eventos por Star+ estarán listos 5 o 10 minutos antes del comienzo.";
    $canalImg = "starplus";
    $r= "Ly92ZXJjb21vZnV0Ym9sLnh5ei9zL3N0YXJfandwLmh0bWw/Z2V0PWh0dHBzOi8vbGl2ZS1mdGMtbmEtc291dGgtMi5tZWRpYS5zdGFyb3R0LmNvbS9ncnUxL3FiMDIvc3RhcnBsdXMvZXZlbnQvMjAyMi8wOS8wNi9CZW5maWNhX3ZzX01hY2NhYmlfSGFpZmFfMjAyMjA5MDZfMTY2MjQ4NDIzNjAxNi9jdHItYWxsLWNvbXBsZXRlLm0zdTgmaW1nPWh0dHBzOi8vcHJvZC1yaXBjdXQtZGVsaXZlcnkuZGlzbmV5LXBsdXMubmV0L3YxL3ZhcmlhbnQvc3Rhci9GOEI0M0I0NkEwMjIxQzlBMTFGMkJEQThENkRBMzZDMjRGNTM4Mzk3MzlEM0UyMDVCQjY5NEZFMzZBOUNENDI4L3NjYWxlP3dpZHRoPTE5MjAmYXNwZWN0UmF0aW89MS43OCZmb3JtYXQ9anBlZyZrZXk9NDZlY2QzYWQ4NDdhNDlmZGE4OTJiNWZhNThjYTI5OTAma2V5Mj1jZGU5YjBhYjZmNmU5NWMwZTU1ZTc5ZmEzZjUyMGYzMg==";
    $custom1 = '
    <li>
        <a class="justify-content-center" href="../../../tv/epg?r='.$r.'">
        <i class="flag ar"></i>
        Star + | HD
        </a>
    </li>
    ';
}

if ($result['local'] === "leipzig"){
    $_SESSION['starplus'] = "Los eventos por Star+ estarán listos 5 o 10 minutos antes del comienzo.";
    $canalImg = "starplus";
    $r= "Ly92ZXJjb21vZnV0Ym9sLnh5ei9zL3N0YXJfandwLmh0bWw/Z2V0PWh0dHBzOi8vbGl2ZS1mdGMtbmEtc291dGgtMi5tZWRpYS5zdGFyb3R0LmNvbS9ncnUxL3FiMDIvc3RhcnBsdXMvZXZlbnQvMjAyMi8wOS8wNi9SQl9MZWlwemlnX3ZzX0ZDX1NoYWtodGFyXzIwMjIwOTA2XzE2NjI0ODUxNzc4MTAvY3RyLWFsbC1jb21wbGV0ZS5tM3U4JmltZz1odHRwczovL3Byb2QtcmlwY3V0LWRlbGl2ZXJ5LmRpc25leS1wbHVzLm5ldC92MS92YXJpYW50L3N0YXIvRUM5MDg1MTA5NTIxNzVFMzlCM0Q4OEVDMUVGODBENjAyN0E0QUQwODM5Qzg3NUM5NTFDNjcwMzQyRTg2NkFERC9zY2FsZT93aWR0aD0xOTIwJmFzcGVjdFJhdGlvPTEuNzgmZm9ybWF0PWpwZWcma2V5PTI4NzU3N2Q0MDYwMjRkZTg4NzgwMWZkMTcwZjkzNmNkJmtleTI9ZTRlZTU0OTg4M2U5MjAwMTBmNWZlZDkyZDU5YmE4MTA=";
    $custom1 = '
    <li>
        <a class="justify-content-center" href="../../../tv/epg?r='.$r.'">
        <i class="flag ar"></i>
        Star + | HD
        </a>
    </li>
    ';
}
