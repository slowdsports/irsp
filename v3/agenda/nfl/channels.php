<?php
$canal = $result['canal'];
$canal2 = $result['canal2'];
$canal3 = $result['canal3'];
if($canal === "M+ #Vamos" || $canal === "M+ #Vamos Bar 2 (305)" || $canal === "mvamos"){
    $canalImg = "mvamos";
    $canalop2 = '
    <li>
        <a class="justify-content-center" href="'.$app.'/agenda/play?c=mvamos">
        <i class="flag es"></i>
        Movistar #Vamos | VIP HD
        </a>
    </li>';
} elseif($canal2 === "M+ #Vamos" || $canal2 === "M+ #Vamos Bar 2 (305)" || $canal2 === "mvamos"){
    $canalImg = "mvamos";
    $canal2 = '
    <li>
        <a class="justify-content-center" href="'.$app.'/agenda/play?c=mvamos">
        <i class="flag es"></i>
        Movistar #Vamos | VIP HD
        </a>
    </li>';
}

if($canal === "M+ Deportes" || $canal === "mdep"){
    $canalImg = "mvamos";
    $canalop2 = '
    <li>
        <a class="justify-content-center" href="'.$app.'/agenda/play?c=mdep">
        <i class="flag es"></i>
        Movistar Deportes | VIP HD
        </a>
    </li>';
} elseif($canal2 === "M+ Deportes" || $canal2 === "mdep"){
    $canalImg = "mvamos";
    $canal2 = '
    <li>
        <a class="justify-content-center" href="'.$app.'/agenda/play?c=mdep">
        <i class="flag es"></i>
        Movistar Deportes | VIP HD
        </a>
    </li>';
}