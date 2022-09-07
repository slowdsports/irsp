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
if ($result['local'] === "barcelona"){
    $_SESSION['campeones'] = "Los eventos por Star+ estarán listos 5 o 10 minutos antes del comienzo.";
    $canalImg = "campeones";
    $r= "Ly92ZXJjb21vZnV0Ym9sLnh5ei9zL3N0YXJfandwLmh0bWw/Z2V0PWh0dHBzOi8vbGl2ZS1mdGMtbmEtc291dGgtMi5tZWRpYS5zdGFyb3R0LmNvbS9ncnUxL3FiMDEvc3RhcnBsdXMvZXZlbnQvMjAyMi8wOS8wNy9GQ19CYXJjZWxvbmFfdnNfRkNfVmlrdG9yXzIwMjIwOTA3XzE2NjI1NzA2NTIwMTcvY3RyLWFsbC1jb21wbGV0ZS5tM3U4JmltZz1odHRwczovL3Byb2QtcmlwY3V0LWRlbGl2ZXJ5LmRpc25leS1wbHVzLm5ldC92MS92YXJpYW50L3N0YXIvRUI2NjgxQUY4ODI3MjQzN0U1MTE5NDg2MEI3NTEzRjJFRTI1N0VEREU3QUQ5RTgwMDUwQjUwQzE4MjM3MUNGRC9zY2FsZT93aWR0aD0xOTIwJmFzcGVjdFJhdGlvPTEuNzgmZm9ybWF0PWpwZWcma2V5PTQwNTY1NDg3ZTExYzQ2OTY5NjM4NmRmNmFmYTc0NzUxJmtleTI9NWY0NTkwOGI0ZmU2NzgzYWU0NGVmYTFkN2Q4Zjg4MjI=";
    $custom1 = '
    <li>
        <a class="justify-content-center" href="../../../tv/epg?r='.$r.'">
        <i class="flag es"></i>
        Star + | HD
        </a>
    </li>
    ';
}
if ($result['local'] === "at.madrid"){
    $_SESSION['starplus'] = "Los eventos por Star+ estarán listos 5 o 10 minutos antes del comienzo.";
    $canalImg = "starplus";
    $r= "Ly92ZXJjb21vZnV0Ym9sLnh5ei9zL3N0YXJfandwLmh0bWw/Z2V0PWh0dHBzOi8vbGl2ZS1mdGMtbmEtc291dGgtMi5tZWRpYS5zdGFyb3R0LmNvbS9ncnUxL3FiMDEvc3RhcnBsdXMvZXZlbnQvMjAyMi8wOS8wNy9BdGx0aWNvX01hZHJpZF92c19GQ19Qb3J0XzIwMjIwOTA3XzE2NjI1NzA2MjEwMTYvY3RyLWFsbC1jb21wbGV0ZS5tM3U4JmltZz1odHRwczovL3Byb2QtcmlwY3V0LWRlbGl2ZXJ5LmRpc25leS1wbHVzLm5ldC92MS92YXJpYW50L3N0YXIvN0U2M0UwMEY4MzNFOEQ0N0Y3MkJDRUY2QUQ5MUI2MTg1NDdBRTUyN0ZEMEJGMkFBQkFCNkM1RjgxNDZBNTQ5Qi9zY2FsZT93aWR0aD0xOTIwJmFzcGVjdFJhdGlvPTEuNzgmZm9ybWF0PWpwZWcma2V5PWVlMmE1MTQwMTRiMTRkYWJhYTM2ZTQyYjQzMjMzMDE5JmtleTI9ZDRiZTk2OTJiZjdmMWNlYWY3MTBmM2RjNzI5YzYwZWM=";
    $custom1 = '
    <li>
        <a class="justify-content-center" href="../../../tv/epg?r='.$r.'">
        <i class="flag ar"></i>
        Star + | HD
        </a>
    </li>
    ';
}
if ($result['local'] === "inter"){
    $_SESSION['starplus'] = "Los eventos por Star+ estarán listos 5 o 10 minutos antes del comienzo.";
    $canalImg = "starplus";
    $r= "Ly92ZXJjb21vZnV0Ym9sLnh5ei9zL3N0YXJfandwLmh0bWw/Z2V0PWh0dHBzOi8vbGl2ZS1mdGMtbmEtc291dGgtMi5tZWRpYS5zdGFyb3R0LmNvbS9ncnUxL3FiMDEvc3RhcnBsdXMvZXZlbnQvMjAyMi8wOS8wNy9JbnRlcl9NaWxhbl92c19CYXllcm5fTXVuXzIwMjIwOTA3XzE2NjI1NzA2MjIwMzYvY3RyLWFsbC1jb21wbGV0ZS5tM3U4JmltZz1odHRwczovL3Byb2QtcmlwY3V0LWRlbGl2ZXJ5LmRpc25leS1wbHVzLm5ldC92MS92YXJpYW50L3N0YXIvNjM1ODhFQ0QxNTE4NUI1ODc0NDk0NThEQjZGMTBGREM3MkQ3OUU4NzNFNzdGQTc0ODZDNEEzMDBENTc4MTBEQi9zY2FsZT93aWR0aD0xOTIwJmFzcGVjdFJhdGlvPTEuNzgmZm9ybWF0PWpwZWcma2V5PWQ5ZGNiZDdhOGVmNDRmOTdhY2FjYTg3ZTMxYjA4YWRhJmtleTI9NDk0YWJlMWQ0MzBjNzk3MmM5NzY3NzU2N2U4YWQ1ZmM=";
    $custom1 = '
    <li>
        <a class="justify-content-center" href="../../../tv/epg?r='.$r.'">
        <i class="flag ar"></i>
        Star + | HD
        </a>
    </li>
    ';
}
if ($result['local'] === "napoli"){
    $_SESSION['starplus'] = "Los eventos por Star+ estarán listos 5 o 10 minutos antes del comienzo.";
    $canalImg = "starplus";
    $r= "Ly92ZXJjb21vZnV0Ym9sLnh5ei9zL3N0YXJfandwLmh0bWw/Z2V0PWh0dHBzOi8vbGl2ZS1mdGMtbmEtc291dGgtMi5tZWRpYS5zdGFyb3R0LmNvbS9ncnUxL3FiMDEvc3RhcnBsdXMvZXZlbnQvMjAyMi8wOS8wNy9OYXBvbGlfdnNfTGl2ZXJwb29sXzIwMjIwOTA3XzE2NjI1NzA2MDEwMTgvY3RyLWFsbC1jb21wbGV0ZS5tM3U4JmltZz1odHRwczovL3Byb2QtcmlwY3V0LWRlbGl2ZXJ5LmRpc25leS1wbHVzLm5ldC92MS92YXJpYW50L3N0YXIvMEVDRDBFNUI0QzA1NUQxQUZFQTZGQzdERjU2NzU4MjhDMkQ5RjA0MjI4M0RCRkE2QTAyMjhFRDk4REVCNkZDOC9zY2FsZT93aWR0aD0xOTIwJmFzcGVjdFJhdGlvPTEuNzgmZm9ybWF0PWpwZWcma2V5PWIzN2U1OGVmMzY4YjQwYWM5Y2E5MTdlZjI0M2I4ZDNhJmtleTI9OTU2OTBhNDY0OGJiMmQ4MzFmMzNhNjVjNDNiYTllODE=";
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
