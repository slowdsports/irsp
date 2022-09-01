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
if ($result['visita'] === "torino"){
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
if ($result['visita'] === "salernitana"){
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
if ($result['visita'] === "manchesterutd."){
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