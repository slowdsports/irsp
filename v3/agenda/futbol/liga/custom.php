<?php
// Star
if ($result['local'] === "team"){
    $canalImg = "starplus";
    // LINK:
    $r= "../../star.php";

    if ($r !== ""){
        $r = $r;
    } else {
        $r = "javascript:void(0)";
    }
    $custom1 = '
    <li>
        <a class="justify-content-center" href="'.$r.'">
        <i class="flag ar"></i>
        Star + | HD
        </a>
    </li>
    ';
}
//HBO MAX
if ($result['local'] === "team"){
    $canalImg = "hbo";
    $s= "";

    if ($s !== ""){
        $s = "../../../tv/epg?s=" . $s;
    } else {
        $s = "javascript:void(0)";
    }
    $custom2 = '
    <li>
        <a class="justify-content-center" href="'.$s.'">
        <i class="flag ar"></i>
        HBO MAX | HD
        </a>
    </li>
    ';
}

// CUSTOMS

if ($result['local'] === "salzburgo"){
    $canalImg = "starplus";
    // STAR+:
    $r= "../../star.php";

    // HBO MAX:
    $s= "";

    if ($r !== ""){
        $r = $r;
    } else {
        $r = "javascript:void(0)";
    }
    $custom1 = '
    <li>
        <a class="justify-content-center" href="'.$r.'">
        <i class="flag ar"></i>
        Star + | HD
        </a>
    </li>
    <li>
        <a class="justify-content-center" href="'.$s.'">
        <i class="flag ar"></i>
        HBO MAX | HD
        </a>
    </li>
    ';

    if ($s !== ""){
        $s = "../../../tv/epg?s=" . $s;
    } else {
        $s = "javascript:void(0)";
    }
}