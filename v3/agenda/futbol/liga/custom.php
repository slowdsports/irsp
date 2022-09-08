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
if ($result['visita'] === "betis"){
    $_SESSION['campeones'] = "Los eventos por Star+ estarán listos 5 o 10 minutos antes del comienzo.";
    $canalImg = "campeones";
    $r= "Ly92ZXJjb21vZnV0Ym9sLnh5ei9zL3N0YXJfandwLmh0bWw/Z2V0PWh0dHBzOi8vbGl2ZS1mdGMtbmEtc291dGgtMi5tZWRpYS5zdGFyb3R0LmNvbS9ncnUxL3FiMDEvc3RhcnBsdXMvZXZlbnQvMjAyMi8wOS8wOC9IamtfSGVsc2lua2lfdnNfUmVhbF9CZXRpXzIwMjIwOTA4XzE2NjI2NDkyMzUwMzgvY3RyLWFsbC1jb21wbGV0ZS5tM3U4JmltZz1odHRwczovL3Byb2QtcmlwY3V0LWRlbGl2ZXJ5LmRpc25leS1wbHVzLm5ldC92MS92YXJpYW50L3N0YXIvNDNGNEJEQTg3QTIzOERGQThGRUEwRTRENkFENUUxQ0QzMkFFOTJDRDY0NERFMjhGRTc4RTE3NUY3MzEwQjYzRC9zY2FsZT93aWR0aD0xOTIwJmFzcGVjdFJhdGlvPTEuNzgmZm9ybWF0PWpwZWcma2V5PWNhMGEzZWY0ZTI3ODQyODZiMTJiNDBjZWJjNjgyYTJjJmtleTI9YWQ4OTkzYzQxNDg5MGMxNGZkMGI2OGQ3ZDcwNjIyMDE=";
    $custom1 = '
    <li>
        <a class="justify-content-center" href="../../../tv/epg?r='.$r.'">
        <i class="flag es"></i>
        Star + | HD
        </a>
    </li>
    ';
}
if ($result['local'] === "zurich"){
    $_SESSION['starplus'] = "Los eventos por Star+ estarán listos 5 o 10 minutos antes del comienzo.";
    $canalImg = "starplus";
    $r= "Ly92ZXJjb21vZnV0Ym9sLnh5ei9zL3N0YXJfandwLmh0bWw/Z2V0PWh0dHBzOi8vbGl2ZS1mdGMtbmEtc291dGgtMi5tZWRpYS5zdGFyb3R0LmNvbS9ncnUxL3FiMDEvc3RhcnBsdXMvZXZlbnQvMjAyMi8wOS8wNy9adXJpY2hfdnNfQXJzZW5hbF8yMDIyMDkwOF8xNjYyNjQ5MjIxMDYxL2N0ci1hbGwtY29tcGxldGUubTN1OCZpbWc9aHR0cHM6Ly9wcm9kLXJpcGN1dC1kZWxpdmVyeS5kaXNuZXktcGx1cy5uZXQvdjEvdmFyaWFudC9zdGFyLzg1MTgwNjlGNzFCNjFGODM3NDI2OEY5RUExMjIyNzY4OTBEOTNEREEwNkUzQTM0MDU4NzQ2QzM0MUQ0MTZCQUUvc2NhbGU/d2lkdGg9MTkyMCZhc3BlY3RSYXRpbz0xLjc4JmZvcm1hdD1qcGVnJmtleT0xOGFlNGM3OGI0NGI0YzE4ODQ3YjhiMTU0ZTQ1ZTJmNiZrZXkyPTc0YWYwNjFmZDRhZTdmYzljN2Q4YWE5ZTUxMzU0ZmZl";
    $custom1 = '
    <li>
        <a class="justify-content-center" href="../../../tv/epg?r='.$r.'">
        <i class="flag ar"></i>
        Star + | HD
        </a>
    </li>
    ';
}
if ($result['visita'] === "roma"){
    $_SESSION['starplus'] = "Los eventos por Star+ estarán listos 5 o 10 minutos antes del comienzo.";
    $canalImg = "starplus";
    $r= "Ly92ZXJjb21vZnV0Ym9sLnh5ei9zL3N0YXJfandwLmh0bWw/Z2V0PWh0dHBzOi8vbGl2ZS1mdGMtbmEtc291dGgtMi5tZWRpYS5zdGFyb3R0LmNvbS9ncnUxL3FiMDEvc3RhcnBsdXMvZXZlbnQvMjAyMi8wOS8wOC9MdWRvZ29yZXRzX3ZzX0FTX1JvbWFfMjAyMjA5MDhfMTY2MjY0OTIxMjA2MS9jdHItYWxsLWNvbXBsZXRlLm0zdTgmaW1nPWh0dHBzOi8vcHJvZC1yaXBjdXQtZGVsaXZlcnkuZGlzbmV5LXBsdXMubmV0L3YxL3ZhcmlhbnQvc3Rhci84NTE4MDY5RjcxQjYxRjgzNzQyNjhGOUVBMTIyMjc2ODkwRDkzRERBMDZFM0EzNDA1ODc0NkMzNDFENDE2QkFFL3NjYWxlP3dpZHRoPTE5MjAmYXNwZWN0UmF0aW89MS43OCZmb3JtYXQ9anBlZyZrZXk9MDUxMzM0NjYwMmNiNDlhMmIyOWViOTFmYjc4ZDg3YTMma2V5Mj01ZTMzYjZhMzM1ZWU2ZWU4YzA3YjBiZjdmNWIzMmQ0ZA==";
    $custom1 = '
    <li>
        <a class="justify-content-center" href="../../../tv/epg?r='.$r.'">
        <i class="flag ar"></i>
        Star + | HD
        </a>
    </li>
    ';
}
if ($result['local'] === "manchesterutd"){
    $_SESSION['starplus'] = "Los eventos por Star+ estarán listos 5 o 10 minutos antes del comienzo.";
    $canalImg = "starplus";
    $r= "Ly92ZXJjb21vZnV0Ym9sLnh5ei9zL3N0YXJfandwLmh0bWw/Z2V0PWh0dHBzOi8vbGl2ZS1mdGMtbmEtc291dGgtMi5tZWRpYS5zdGFyb3R0LmNvbS9ncnUxL3FiMDEvc3RhcnBsdXMvZXZlbnQvMjAyMi8wOS8wOC9NYW5jaGVzdGVyX1VuaXRlZF92c19SZWFsXzIwMjIwOTA4XzE2NjI2NTcwMzgwNjMvY3RyLWFsbC1jb21wbGV0ZS5tM3U4JmltZz1odHRwczovL3Byb2QtcmlwY3V0LWRlbGl2ZXJ5LmRpc25leS1wbHVzLm5ldC92MS92YXJpYW50L3N0YXIvOEEyRjg2REE2RTNBNzQ3NkRERkQ5MTVBQzAyMDkyNzRFRkI1QjI5RTE5MTE3N0MxQTQ1N0MzMDhDQTMzMDhBMy9zY2FsZT93aWR0aD0xOTIwJmFzcGVjdFJhdGlvPTEuNzgmZm9ybWF0PWpwZWcma2V5PTk3OTA1ZTgxNTY1NTQ2ZGNhYTk5ZGI4ZDlmZmVlM2E2JmtleTI9Nzc4MGY1ZDExNDFmNzRmYThjZDJhYWZhZWY0ZjU1OGU=";
    $custom1 = '
    <li>
        <a class="justify-content-center" href="../../../tv/epg?r='.$r.'">
        <i class="flag ar"></i>
        Star + | HD
        </a>
    </li>
    ';
}
if ($result['local'] === "lazio"){
    $_SESSION['starplus'] = "Los eventos por Star+ estarán listos 5 o 10 minutos antes del comienzo.";
    $canalImg = "starplus";
    $r= "Ly92ZXJjb21vZnV0Ym9sLnh5ei9zL3N0YXJfandwLmh0bWw/Z2V0PWh0dHBzOi8vbGl2ZS1mdGMtbmEtc291dGgtMi5tZWRpYS5zdGFyb3R0LmNvbS9ncnUxL3FiMDEvc3RhcnBsdXMvZXZlbnQvMjAyMi8wOS8wOC9MYXppb192c19GZXllbm9vcmRfMjAyMjA5MDhfMTY2MjY1NzA1MzAyOC9jdHItYWxsLWNvbXBsZXRlLm0zdTgmaW1nPWh0dHBzOi8vcHJvZC1yaXBjdXQtZGVsaXZlcnkuZGlzbmV5LXBsdXMubmV0L3YxL3ZhcmlhbnQvc3Rhci81NTgxRTk3MzJEODQ0Mzk5MkIxQkNBQURCRjA3NDlFREUzN0U4RTIxNDA1MDM4RUU5QUM5MjI1MDAzMjAyMzBGL3NjYWxlP3dpZHRoPTE5MjAmYXNwZWN0UmF0aW89MS43OCZmb3JtYXQ9anBlZyZrZXk9NDYyMGZlYzUyZDgzNDM4ZmI4YmM2ODc0YTA3ZDliMjMma2V5Mj1hMzQ4ZmRmMjQxYjlhYTY2ZWJkNzEyYWYyODRiODkxMA==";
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
