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

if ($result['visita'] === "chelsea" || $result['local'] === "sevilla" || $result['visita'] === "realmadrid" || $result['local'] === "dortmund" || $result['visita'] === "juventus" || $result['visita'] === "milan" || $result['visita'] === "PSG" || $result['local'] === "celtic"){
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
        <a class="justify-content-center" href="../../../tv/epg?s='.$s.'">
        <i class="flag ar"></i>
        HBO Max | HD
        </a>
    </li>
    ';
}

if ($result['visita'] === "chelsea"){
    $canalImg = "hbow";
    $s= "aHR0cHM6Ly9saXZlLmNmLmxhdGFtLmhib21heGNkbi5jb20vY21hZi9saXZlLzIwMzE2MTAvZGFzaC9jZW5jLzI4MjEyL21hc3Rlci5tcGQ=&key=MDEwMTk4ZmQ0ZGVmNGI1Y2E2M2NhOGJlYjFhMmVjNTg=&key2=NDA3MGEwZTRhYjhkOTg0ZTljYTM5YTcyNzBkZDkxYjM=";
    $custom1 = '
    <li>
        <a class="justify-content-center" href="../../../tv/epg?s='.$s.'">
        <i class="flag ar"></i>
        HBO Max | HD
        </a>
    </li>
    ';
}

if ($result['local'] === "sevilla"){
    $canalImg = "hbow";
    $s= "aHR0cHM6Ly9saXZlLmFrbS5sYXRhbS5oYm9tYXhjZG4uY29tL2NtYWYvbGl2ZS8yMDMxNjExL2Rhc2gvY2VuYy8yODIxNS9tYXN0ZXIubXBk&key=MDEwMTdhZDI0YTZmY2M3MmZjMGQwY2ZkNWM4ZDVjZmE=&key2=Y2JlMGQzNWVkOGZhOWI4MDZlYTM4N2ViOTFjYjBhYmQ=";
    $custom1 = '
    <li>
        <a class="justify-content-center" href="../../../tv/epg?s='.$s.'">
        <i class="flag ar"></i>
        HBO Max | HD
        </a>
    </li>
    ';
}

if ($result['local'] === "PSG"){
    $canalImg = "hbow";
    $s= "aHR0cHM6Ly9saXZlLmxsbi5sYXRhbS5oYm9tYXhjZG4uY29tL2NtYWYvbGl2ZS8yMDMxNjEyL2Rhc2gvY2VuYy8yODI0OC9tYXN0ZXIubXBk&key=MDEwMTdiZDllYTI5ZmExZjQ0NjRmOTI3NDMzMzk4ZDI=&key2=MmJkYzEyZTNhYTI1MmFiZWYzN2U3MDc0OGVkZThhMjk=";
    $custom1 = '
    <li>
        <a class="justify-content-center" href="../../../tv/epg?s='.$s.'">
        <i class="flag ar"></i>
        HBO Max | HD
        </a>
    </li>
    ';
}

if ($result['local'] === "dortmund"){
    $canalImg = "hbow";
    $s= "aHR0cHM6Ly9saXZlLmNmLmxhdGFtLmhib21heGNkbi5jb20vY21hZi9saXZlLzIwMzE2MTYvZGFzaC9jZW5jLzI4MjQ1L21hc3Rlci5tcGQ=&key=MDEwMTEwNjFiNTc1YjRjMzVjNWIwYTMyNGMyYWFjY2Q=&key2=N2YyMDZmY2M3YmI2MmZiNjMyOGZlY2U4NmM3OTQzMjg=";
    $custom1 = '
    <li>
        <a class="justify-content-center" href="../../../tv/epg?s='.$s.'">
        <i class="flag ar"></i>
        HBO Max | HD
        </a>
    </li>
    ';
}

if ($result['visita'] === "juventus"){
    $canalImg = "hbow";
    $s= "aHR0cHM6Ly9saXZlLmZseS5sYXRhbS5oYm9tYXhjZG4uY29tL2NtYWYvbGl2ZS8yMDMxNjgyL2Rhc2gvY2VuYy8yODI0OS9tYXN0ZXIubXBk&key=MDEwMTAxNjkxNzE1ZTQwMzI2NWRiMjNhZjY1ZDE4Yzg=&key2=NzZhNTQ5ZGE5NjdiNzlhZGUyYjIwYzk1OTYzNTU4OGM=";
    $custom1 = '
    <li>
        <a class="justify-content-center" href="../../../tv/epg?s='.$s.'">
        <i class="flag ar"></i>
        HBO Max | HD
        </a>
    </li>
    ';
}

if ($result['visita'] === "milan"){
    $canalImg = "hbow";
    $s= "aHR0cHM6Ly9saXZlLmZseS5sYXRhbS5oYm9tYXhjZG4uY29tL2NtYWYvbGl2ZS8yMDMxNjE3L2Rhc2gvY2VuYy8yODI0NC9tYXN0ZXIubXBk&key=MDEwMWZlYTk2OWE3NzNhNDE3ZmYyZGIwNmJhODFhZmE=&key2=NmYyMTRhYThhZDg1ZTllNzJhNDU5NmE2MWE2MGJmMDg=";
    $custom1 = '
    <li>
        <a class="justify-content-center" href="../../../tv/epg?s='.$s.'">
        <i class="flag ar"></i>
        HBO Max | HD
        </a>
    </li>
    ';
}

if ($result['local'] === "celtic"){
    $canalImg = "hbow";
    $s= "aHR0cHM6Ly9saXZlLmFrbS5sYXRhbS5oYm9tYXhjZG4uY29tL2NtYWYvbGl2ZS8yMDMxNjgzL2Rhc2gvY2VuYy8yODI0Ny9tYXN0ZXIubXBk&key=MDEwMTFiMDIxMWNhOGQ2YmQ5N2MzMGExNDk0MDE1ZWY=&key2=MjJhYTQxNzA5NTQ2ZWE2MGQ0OGIyNzcxNTRjZDNlNTE=";
    $custom1 = '
    <li>
        <a class="justify-content-center" href="../../../tv/epg?s='.$s.'">
        <i class="flag ar"></i>
        HBO Max | HD
        </a>
    </li>
    ';
}

if ($result['visita'] === "realmadrid"){
    $canalImg = "hbow";
    $s= "aHR0cHM6Ly9saXZlLmZseS5sYXRhbS5oYm9tYXhjZG4uY29tL2NtYWYvbGl2ZS8yMDMxNjE1L2Rhc2gvY2VuYy8yODI0Ni9tYXN0ZXIubXBk&key=MDEwMWI0M2NhNTYxNDM5OWQwNDE0ODhhMzA0NTM1NDQ=&key2=YzcyNTAzMTk2MzIwNjZmODBiYTRkNzllYTEzYzE3ODM=";
    $custom1 = '
    <li>
        <a class="justify-content-center" href="../../../tv/epg?s='.$s.'">
        <i class="flag ar"></i>
        HBO Max | HD
        </a>
    </li>
    ';
}