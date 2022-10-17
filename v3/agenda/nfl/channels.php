<?php
$canal = $result['canal'];
$canal2 = $result['canal2'];
$canal3 = $result['canal3'];

// Opciones Adicionales NFL
if ($result['liga'] == 14 && $result['canal3'] !== ""){
    $r = base64_encode($result['canal3']);
    $custom1 = '
    <li>
        <a class="justify-content-center" href="../../../tv/epg/?nba&c='.$r.'&futbol&id='.$index.'&plyr=jw">
        <i class="flag us"></i>
        Nueva Opción | HD
        </a>
    </li>
    ';
}


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
    $canalop4 = '
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
    $canalImg = "movistar";
    $canalop4 = '
    <li>
        <a class="justify-content-center" href="'.$app.'/agenda/play?c=mdep">
        <i class="flag es"></i>
        Movistar Deportes | VIP HD
        </a>
    </li>';
}

if($canal === "M+ Deportes 2" || $canal === "mdep2"){
    $canalImg = "movistar";
    $canalop2 = '
    <li>
        <a class="justify-content-center" href="'.$app.'/agenda/play?c=mdep2">
        <i class="flag es"></i>
        Movistar Deportes 2 | VIP HD
        </a>
    </li>';
} elseif($canal2 === "M+ Deportes 2" || $canal2 === "mdep2"){
    $canalImg = "movistar";
    $canalop4 = '
    <li>
        <a class="justify-content-center" href="'.$app.'/agenda/play?c=mdep2">
        <i class="flag es"></i>
        Movistar Deportes 2 | VIP HD
        </a>
    </li>';
}