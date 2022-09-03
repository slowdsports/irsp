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
if ($result['visita'] === "at.madrid"){
    $_SESSION['starplus'] = "Los eventos por Star+ estarán listos 5 o 10 minutos antes del comienzo.";
    $canalImg = "starplus";
    $r= "Ly92ZXJjb21vZnV0Ym9sLnh5ei9zL3N0YXJfandwLmh0bWw/Z2V0PWh0dHBzOi8vbGl2ZS1mdGMtbmEtc291dGgtMi5tZWRpYS5zdGFyb3R0LmNvbS9jbHQyL3ZhMDEvc3RhcnBsdXMvZXZlbnQvMjAyMi8wOS8wMy9SZWFsX1NvY2llZGFkX3ZzX0F0bHRpY29fXzIwMjIwOTAzXzE2NjIyMTYzMzIwMjcvY3RyLWFsbC1jb21wbGV0ZS5tM3U4JmltZz1odHRwczovL3Byb2QtcmlwY3V0LWRlbGl2ZXJ5LmRpc25leS1wbHVzLm5ldC92MS92YXJpYW50L3N0YXIvMzc1RjdGQjA3Qjc5RjZEMzZGRUQ4ODA1ODlFOTQwMUM1NDUwNUE3NzMwOTdEQzdEMkMyRThEQzQ3MjM2MzcyMC9zY2FsZT93aWR0aD0xOTIwJmFzcGVjdFJhdGlvPTEuNzgmZm9ybWF0PWpwZWcma2V5PTgxNzk2MGRiNDQ3NzQzMTA4MzFkMmRmMDc0NGVmOTRhJmtleTI9OGQ1OGE5ZTNlMWQ4Njg5ODY2NTkwOWE1NTI4OWU3MWY=";
    $custom1 = '
    <li>
        <a class="justify-content-center" href="../../../tv/epg?r='.$r.'">
        <i class="flag ar"></i>
        Star + | HD
        </a>
    </li>
    ';
}
if ($result['visita'] === "napoli"){
    $_SESSION['starplus'] = "Los eventos por Star+ estarán listos 5 o 10 minutos antes del comienzo.";
    $canalImg = "starplus";
    $r= "Ly92ZXJjb21vZnV0Ym9sLnh5ei9zL3N0YXJfandwLmh0bWw/Z2V0PWh0dHBzOi8vbGl2ZS1mdGMtbmEtc291dGgtMi5tZWRpYS5zdGFyb3R0LmNvbS9jbHQyL3ZhMDEvc3RhcnBsdXMvZXZlbnQvMjAyMi8wOS8wMy9MYXppb192c19OYXBvbGlfMjAyMjA5MDNfMTY2MjIyNDQwMzAzNy9jdHItYWxsLWNvbXBsZXRlLm0zdTgmaW1nPWh0dHBzOi8vcHJvZC1yaXBjdXQtZGVsaXZlcnkuZGlzbmV5LXBsdXMubmV0L3YxL3ZhcmlhbnQvc3Rhci9DMDI3Mjg0RDE4NDc2ODFCNDNBNjJCMTg3QkZBRjlCMTlDQkFFMDIyM0E2MjhFRDk0QjVFNEE3ODk1RUYzQjc4L3NjYWxlP3dpZHRoPTE5MjAmYXNwZWN0UmF0aW89MS43OCZmb3JtYXQ9anBlZyZrZXk9ZGY0ZjRjZDQwNWY3NDhkYzhiOGUxMzJjMTM0NDlkNDEma2V5Mj1hM2M2YjYzMzAzOGM5NTU5MjQzZTg2YzRlNmRkYjU1Yw==";
    $custom1 = '
    <li>
        <a class="justify-content-center" href="../../../tv/epg?r='.$r.'">
        <i class="flag ar"></i>
        Star + | HD
        </a>
    </li>
    ';
}
if ($result['visita'] === "westham"){
    $_SESSION['starplus'] = "Los eventos por Star+ estarán listos 5 o 10 minutos antes del comienzo.";
    $canalImg = "starplus";
    $r= "Ly92ZXJjb21vZnV0Ym9sLnh5ei9zL3N0YXJfandwLmh0bWw/Z2V0PWh0dHBzOi8vbGl2ZS1mdGMtbmEtc291dGgtMi5tZWRpYS5zdGFyb3R0LmNvbS9jbHQyL3ZhMDEvc3RhcnBsdXMvZXZlbnQvMjAyMi8wOS8wMy9DaGVsc2VhX3ZzX1dlc3RfSGFtX1VuaXRlXzIwMjIwOTAzXzE2NjIyMDc2MjUxMTQvY3RyLWFsbC1jb21wbGV0ZS5tM3U4JmltZz1odHRwczovL3Byb2QtcmlwY3V0LWRlbGl2ZXJ5LmRpc25leS1wbHVzLm5ldC92MS92YXJpYW50L3N0YXIvRTdEN0NGQUUwNDRGMjNGNDQwRUEwNDZDMDQ0QjE5NDY5MDk5QTMxNzQzRDlBQjU4NEE1M0JFNTk4Q0ZBQzZEQy9zY2FsZT93aWR0aD0xOTIwJmFzcGVjdFJhdGlvPTEuNzgmZm9ybWF0PWpwZWcma2V5PWY1ZGQxMzkxZmQxZjQzZDY4ZWEyZTYwZmQ4YzU5MzM4JmtleTI9ODkxZjk2Yjc0Mjg3YTkxNmM5MDIwMzY3NDM2NjQxZDg=";
    $custom1 = '
    <li>
        <a class="justify-content-center" href="../../../tv/epg?r='.$r.'">
        <i class="flag ar"></i>
        Star + | HD
        </a>
    </li>
    ';
}
if ($result['visita'] === "manchester city"){
    $_SESSION['starplus'] = "Los eventos por Star+ estarán listos 5 o 10 minutos antes del comienzo.";
    $canalImg = "starplus";
    $r= "Ly92ZXJjb21vZnV0Ym9sLnh5ei9zL3N0YXJfandwLmh0bWw/Z2V0PWh0dHBzOi8vbGl2ZS1mdGMtbmEtc291dGgtMi5tZWRpYS5zdGFyb3R0LmNvbS9ncnUxL3FiMDEvc3RhcnBsdXMvZXZlbnQvMjAyMi8wOS8wMy9Bc3Rvbl9WaWxsYV92c19NYW5jaGVzdGVyXzIwMjIwOTAzXzE2NjIyMTY2NDgwMTUvY3RyLWFsbC1jb21wbGV0ZS5tM3U4JmltZz1odHRwczovL3Byb2QtcmlwY3V0LWRlbGl2ZXJ5LmRpc25leS1wbHVzLm5ldC92MS92YXJpYW50L3N0YXIvREJGQjgxN0JCQTEwOEI2MzM2MzZBQUE1ODlFQkU2RUVFNDMxM0NEMEM2QzUzNTc5MUIwRTU4RkQxMTZCRjYzNS9zY2FsZT93aWR0aD0xOTIwJmFzcGVjdFJhdGlvPTEuNzgmZm9ybWF0PWpwZWcma2V5PTdlZjZhMDlkN2ZmMjQ2Yzk5MjQzNmJiMDVhNGI4ZTlmJmtleTI9Y2VkYTJkYzE5OThmNjA4Y2I1NzRmMDMyOGZiM2I1M2M=";
    $custom1 = '
    <li>
        <a class="justify-content-center" href="../../../tv/epg?r='.$r.'">
        <i class="flag ar"></i>
        Star + | HD
        </a>
    </li>
    ';
}
