<?php
// Betcris Honduras - Tigo Sports
if ($result['liga'] == 21 && $result['canal3'] !== ""){
    $r = base64_encode($result['canal3']);
    $custom1 = '
    <li>
        <a class="justify-content-center" href="../../../tv/epg/?nba&c='.$r.'&plyr=jw">
        <i class="flag hn"></i>
        Tigo Sports | HD
        </a>
    </li>
    ';
}

// Star
if ($result['local'] === "team"){
    $canalImg = "starplus";
    // LINK:
    $r= "";

    if ($r === ""){
        $r = "../../../tv/epg?r=" . $r;
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

//HBO
if ($result['visita'] === "team"){
    $canalImg = "hbow";
    $s= "aHR0cHM6Ly9saXZlLmFrbS5sYXRhbS5oYm9tYXhjZG4uY29tL2NtYWYvbGl2ZS8yMDMxNjExL2Rhc2gvY2VuYy8yODIxNS9tYXN0ZXIubXBk&key=MDEwMTdhZDI0YTZmY2M3MmZjMGQwY2ZkNWM4ZDVjZmE=&key2=Y2JlMGQzNWVkOGZhOWI4MDZlYTM4N2ViOTFjYjBhYmQ=";
    $custom1 = '
    <li>
        <a class="justify-content-center" href="'.$s.'">
        <i class="flag ar"></i>
        HBO Max | HD
        </a>
    </li>
    ';
}

if ($result['local'] === "inter"){
    $canalImg = "hbow";
    $s= "";
    if ($s === ""){ $s= "javascript:void(0)"; } else {$s = "../../../tv/epg?s='.$s.'";}
    $custom1 = '
    <li>
        <a class="justify-content-center" href="'.$s.'">
        <i class="flag ar"></i>
        HBO Max | HD
        </a>
    </li>
    ';
}

if ($result['local'] === "brujas"){
    $canalImg = "hbow";
    $s= "";
    if ($s === ""){ $s= "javascript:void(0)"; } else {$s = "../../../tv/epg?s='.$s.'";}
    $custom1 = '
    <li>
        <a class="justify-content-center" href="'.$s.'">
        <i class="flag ar"></i>
        HBO Max | HD
        </a>
    </li>
    ';
}

if ($result['local'] === "barcelona"){
    $canalImg = "hbow";
    $s= "";
    if ($s === ""){ $s= "javascript:void(0)"; } else {$s = "../../../tv/epg?s='.$s.'";}
    $custom1 = '
    <li>
        <a class="justify-content-center" href="'.$s.'">
        <i class="flag ar"></i>
        HBO Max | HD
        </a>
    </li>
    ';
}

if ($result['local'] === "at.madrid"){
    $canalImg = "hbow";
    $s= "";
    if ($s === ""){ $s= "javascript:void(0)"; } else {$s = "../../../tv/epg?s='.$s.'";}
    $custom1 = '
    <li>
        <a class="justify-content-center" href="'.$s.'">
        <i class="flag ar"></i>
        HBO Max | HD
        </a>
    </li>
    ';
}

if ($result['local'] === "ajax"){
    $canalImg = "hbow";
    $s= "";
    if ($s === ""){ $s= "javascript:void(0)"; } else {$s = "../../../tv/epg?s='.$s.'";}
    $custom1 = '
    <li>
        <a class="justify-content-center" href="'.$s.'">
        <i class="flag ar"></i>
        HBO Max | HD
        </a>
    </li>
    ';
}

if ($result['local'] === "tottenham"){
    $canalImg = "hbow";
    $s= "";
    if ($s === ""){ $s= "javascript:void(0)"; } else {$s = "../../../tv/epg?s='.$s.'";}
    $custom1 = '
    <li>
        <a class="justify-content-center" href="'.$s.'">
        <i class="flag ar"></i>
        HBO Max | HD
        </a>
    </li>
    ';
}

if ($result['local'] === "eintracht"){
    $canalImg = "hbow";
    $s= "";
    if ($s === ""){ $s= "javascript:void(0)"; } else {$s = "../../../tv/epg?s='.$s.'";}
    $custom1 = '
    <li>
        <a class="justify-content-center" href="'.$s.'">
        <i class="flag ar"></i>
        HBO Max | HD
        </a>
    </li>
    ';
}

if ($result['local'] === "napoli"){
    $canalImg = "hbow";
    $s= "aHR0cHM6Ly9saXZlLmFrbS5sYXRhbS5oYm9tYXhjZG4uY29tL2NtYWYvbGl2ZS8yMDMxNjExL2Rhc2gvY2VuYy8yODIxNS9tYXN0ZXIubXBk&key=MDEwMTdhZDI0YTZmY2M3MmZjMGQwY2ZkNWM4ZDVjZmE=&key2=Y2JlMGQzNWVkOGZhOWI4MDZlYTM4N2ViOTFjYjBhYmQ=";
    if ($s === ""){ $s= "javascript:void(0)"; } else {$s = "../../../tv/epg?s='.$s.'";}
    $custom1 = '
    <li>
        <a class="justify-content-center" href="'.$s.'">
        <i class="flag ar"></i>
        HBO Max | HD
        </a>
    </li>
    ';
}