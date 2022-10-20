<?php
$canal = $result['canal'];
$canal2 = $result['canal2'];
$canal3 = $result['canal3'];
if($canal === "M+ #Vamos" || $canal === "M+ #Vamos Bar 2 (305)" || $canal === "mvamos"){
    $canalImg = "mvamos";
    $canalop2 = '
    <li>
        <a class="justify-content-center" href="'.$app.'/tv/epg?futbol&id='.$index.'&c=mvamos">
        <i class="flag es"></i>
        Movistar #Vamos | VIP HD
        </a>
    </li>';
} elseif($canal2 === "M+ #Vamos" || $canal2 === "M+ #Vamos Bar 2 (305)" || $canal2 === "mvamos"){
    $canalImg = "mvamos";
    $canalop4 = '
    <li>
        <a class="justify-content-center" href="'.$app.'/tv/epg?futbol&id='.$index.'&c=mvamos">
        <i class="flag es"></i>
        Movistar #Vamos | VIP HD
        </a>
    </li>';
}

if($canal === "M+ Deportes" || $canal === "mdep"){
    $canalImg = "mdep";
    $canalop2 = '
    <li>
        <a class="justify-content-center" href="'.$app.'/tv/epg?futbol&id='.$index.'&c=mdep">
        <i class="flag es"></i>
        Movistar Deportes | VIP HD
        </a>
    </li>';
} elseif($canal2 === "M+ Deportes" || $canal2 === "mdep"){
    $canalImg = "mdep";
    $canalop4 = '
    <li>
        <a class="justify-content-center" href="'.$app.'/tv/epg?futbol&id='.$index.'&c=mdep">
        <i class="flag es"></i>
        Movistar Deportes | VIP HD
        </a>
    </li>';
}

if($canal === "M+ Deportes 2" || $canal === "mdep2"){
    $canalImg = "mdep";
    $canalop2 = '
    <li>
        <a class="justify-content-center" href="'.$app.'/tv/epg?futbol&id='.$index.'&c=mdep2">
        <i class="flag es"></i>
        Movistar Deportes 2 | VIP HD
        </a>
    </li>';
} elseif($canal2 === "M+ Deportes 2" || $canal2 === "mdep2"){
    $canalImg = "mdep";
    $canalop4 = '
    <li>
        <a class="justify-content-center" href="'.$app.'/tv/epg?futbol&id='.$index.'&c=mdep2">
        <i class="flag es"></i>
        Movistar Deportes 2 | VIP HD
        </a>
    </li>';
}

if($canal === "DAZN3" || $canal === "DAZN3" || $canal === "dazn3"){
    $canalImg = "dazn";
    $canalop2 = '
    <li>
        <a class="justify-content-center" href="'.$app.'/tv/epg?futbol&id='.$index.'&c=dazn3">
        <i class="flag es"></i>
        DAZN 3 | VIP HD
        </a>
    </li>';
} elseif($canal2 === "DAZN3" || $canal2 === "DAZN3" || $canal2 === "dazn3"){
    $canalImg = "dazn";
    $canalop4 = '
    <li>
        <a class="justify-content-center" href="'.$app.'/tv/epg?futbol&id='.$index.'&c=dazn3">
        <i class="flag es"></i>
        DAZN 3 | VIP HD
        </a>
    </li>';
}