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

if ($result['local'] === "manchesterutd."){
    $canalImg = "starplus";
    // STAR+:
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

if ($result['local'] === "sheriff"){
    $canalImg = "starplus";
    // STAR+:
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

if ($result['visita'] === "lazio"){
    $canalImg = "starplus";
    // STAR+:
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

if ($result['local'] === "asroma"){
    $canalImg = "starplus";
    // STAR+:
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

if ($result['local'] === "arsenal"){
    $canalImg = "starplus";
    // STAR+:
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

if ($result['visita'] === "feyenoord"){
    $canalImg = "starplus";
    // STAR+:
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