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
if ($result['visita'] === "juventus"){
    $_SESSION['starplus'] = "Los eventos por Star+ estarán listos 5 o 10 minutos antes del comienzo.";
    $canalImg = "starplus";
    $r= "Ly92ZXJjb21vZnV0Ym9sLnh5ei9zL3N0YXJfandwLmh0bWw/Z2V0PWh0dHBzOi8vbGl2ZS1mdGMtbmEtc291dGgtMi5tZWRpYS5zdGFyb3R0LmNvbS9ncnUxL3FiMDEvc3RhcnBsdXMvZXZlbnQvMjAyMi8wOS8wMS9BdGFsYW50YV92c19Ub3Jpbm9fMjAyMjA5MDFfMTY2MjA1MTYyNDAyMC9jdHItYWxsLWNvbXBsZXRlLm0zdTgmaW1nPWh0dHBzOi8vcHJvZC1yaXBjdXQtZGVsaXZlcnkuZGlzbmV5LXBsdXMubmV0L3YxL3ZhcmlhbnQvc3Rhci80NjFGMDMyRkQyODlBNTY5MUIzNzY0NkE0NkU1ODAxMEIxRUVCNTVDMzE1QUVCOTQ5QzJFRTlBNEMwMzEzMDBGL3NjYWxlP3dpZHRoPTE5MjAmYXNwZWN0UmF0aW89MS43OCZmb3JtYXQ9anBlZyZrZXk9YTM5YmNiNjliMzNlNDc5NDk4ZjkzMGY5YTk1MjVhNzIma2V5Mj0wZmVmNDZhNzE1MThmMjI2ZGVlNmNmZGJlNDcxZjQ2MA==";
    $custom1 = '
    <li>
        <a class="justify-content-center" href="../../../tv/epg?r='.$r.'">
        <i class="flag ar"></i>
        Star + | HD
        </a>
    </li>
    ';
}
if ($result['visita'] === "fulham"){
    $_SESSION['starplus'] = "Los eventos por Star+ estarán listos 5 o 10 minutos antes del comienzo.";
    $canalImg = "starplus";
    $r= "Ly92ZXJjb21vZnV0Ym9sLnh5ei9zL3N0YXJfandwLmh0bWw/Z2V0PWh0dHBzOi8vbGl2ZS1mdGMtbmEtc291dGgtMi5tZWRpYS5zdGFyb3R0LmNvbS9jbHQyL3ZhMDEvc3RhcnBsdXMvZXZlbnQvMjAyMi8wOS8wMy9Ub3R0ZW5oYW1fSG90c3B1cl92c19GdWxoXzIwMjIwOTAzXzE2NjIyMDc2MjMwMzEvY3RyLWFsbC1jb21wbGV0ZS5tM3U4JmltZz1odHRwczovL3Byb2QtcmlwY3V0LWRlbGl2ZXJ5LmRpc25leS1wbHVzLm5ldC92MS92YXJpYW50L3N0YXIvNEI3QTEyQUE0MUQ1ODc0QTE4RDZBRUYyQkE5M0NBREQwMDM3MUZBNjQyNjE1RjA4M0NEODk1Mjc4OUE1NjZBRi9zY2FsZT93aWR0aD0xOTIwJmFzcGVjdFJhdGlvPTEuNzgmZm9ybWF0PWpwZWcma2V5PTkyZDVlYWMwNmU5MTQ4YjhiZGQ3ZWE0YjY0ZDUxNWUyJmtleTI9MzBjMTU3Y2Y3ZWI0MjVmMTUzNDZhYzZiYzEzMmZjZGM=";
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
if ($result['visita'] === "city"){
    $_SESSION['starplus'] = "Los eventos por Star+ estarán listos 5 o 10 minutos antes del comienzo.";
    $canalImg = "starplus";
    $r= "Ly92ZXJjb21vZnV0Ym9sLnh5ei9zL3N0YXJfandwLmh0bWw/Z2V0PWh0dHBzOi8vbGl2ZS1mdGMtbmEtc291dGgtMi5tZWRpYS5zdGFyb3R0LmNvbS9ncnUxL3FiMDEvc3RhcnBsdXMvZXZlbnQvMjAyMi8wOS8wMS9MZWljZXN0ZXJfQ2l0eV92c19NYW5jaGVzXzIwMjIwOTAxXzE2NjIwNTI4MzIwMzgvY3RyLWFsbC1jb21wbGV0ZS5tM3U4JmltZz1odHRwczovL3Byb2QtcmlwY3V0LWRlbGl2ZXJ5LmRpc25leS1wbHVzLm5ldC92MS92YXJpYW50L3N0YXIvMjZFRTQ5N0JBQkY3MkM4RTUzMjRCMTJDMjBCQ0Y1NDM5OTE2OUNGMkUzQUM5M0E4OUMyRkVERTVDQTI3NjA5RS9zY2FsZT93aWR0aD0xOTIwJmFzcGVjdFJhdGlvPTEuNzgmZm9ybWF0PWpwZWcma2V5PTc5MmQ5YTk4NGFjYzQxZDc4MTRiZDIzMDgyMTc2MGY2JmtleTI9MzI1MGE1MzA5ZjBjMjQ5YThhN2Y4MWVlMzdkNDk1ODk=";
    $custom1 = '
    <li>
        <a class="justify-content-center" href="../../../tv/epg?r='.$r.'">
        <i class="flag ar"></i>
        Star + | HD
        </a>
    </li>
    ';
}
