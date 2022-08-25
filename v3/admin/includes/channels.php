<?php
if($canal === "M+ Liga de Campeones" || $canal === "M+ Liga de Campeones UHD (M441 O115)"){
    $canalop2 = '
    <a href="../../play?c=mlcamp">
      <li class="canalito list-group-item darkolorbg blancolor">
      <i class="es flag"></i> Movistar Liga de Campeones | VIP HD</li>
    </a>
    <a href="../../play?c=mlcampsd">
      <li class="canalito list-group-item darkolorbg blancolor">
      <i class="es flag"></i> Movistar Liga de Campeones | VIP SD</li>
    </a>
    ';
} elseif($canal2 === "M+ Liga de Campeones" || $canal2 === "M+ Liga de Campeones UHD (M441 O115)"){
  $canalop4 = '
  <a href="../../play?c=mlcamp">
    <li class="canalito list-group-item darkolorbg blancolor">
    <i class="es flag"></i> Movistar Liga de Campeones | VIP HD</li>
  </a>
  <a href="../../play?c=mlcampsd">
      <li class="canalito list-group-item darkolorbg blancolor">
      <i class="es flag"></i> Movistar Liga de Campeones | VIP SD</li>
    </a>
  ';
}

if($canal === "M+ LaLiga"){
    $canalop2 = '
    <a href="../../play?c=bar">
      <li class="canalito list-group-item darkolorbg blancolor">
      <i class="es flag"></i> Movistar LaLiga | VIP HD</li>
    </a>
    <a href="../../play?c=barsd">
      <li class="canalito list-group-item darkolorbg blancolor">
      <i class="es flag"></i> Movistar LaLiga | VIP SD</li>
    </a>
    ';
} elseif($canal2 === "M+ LaLiga"){
  $canalop4 = '
  <a href="../../play?c=bar">
    <li class="canalito list-group-item darkolorbg blancolor">
    <i class="es flag"></i> Movistar LaLiga | VIP HD</li>
  </a>
  <a href="../../play?c=barsd">
      <li class="canalito list-group-item darkolorbg blancolor">
      <i class="es flag"></i> Movistar LaLiga | VIP SD</li>
    </a>
  ';
}

if($canal === "M+ LaLiga 1"){
    $canalop2 = '
    <a href="../../play?c=mlaliga1">
      <li class="canalito list-group-item darkolorbg blancolor">
      <i class="es flag"></i> Movistar LaLiga 1 | VIP HD</li>
    </a>';
} elseif($canal2 === "M+ LaLiga 1"){
  $canalop3 = '
    <a href="../../play?c=mlaliga1">
      <li class="canalito list-group-item darkolorbg blancolor">
      <i class="es flag"></i> Movistar LaLiga 1 | VIP HD</li>
    </a>';
}

if($canal === "M+ LaLiga 2"){
  $canalop2 = '
    <a href="../../play?c=mlaliga2">
      <li class="canalito list-group-item darkolorbg blancolor">
      <i class="es flag"></i> Movistar LaLiga 2 | VIP HD</li>
    </a>';
} elseif($canal2 === "M+ LaLiga 2"){
  $canalop3 = '
    <a href="../../play?c=mlaliga2">
      <li class="canalito list-group-item darkolorbg blancolor">
      <i class="es flag"></i> Movistar LaLiga 2 | VIP HD</li>
    </a>';
}

if($canal === "M+ LaLiga 3"){
  $canalop2 = '
    <a href="../../play?c=mlaliga3">
      <li class="canalito list-group-item darkolorbg blancolor">
      <i class="es flag"></i> Movistar LaLiga 3 | VIP HD</li>
    </a>';
} elseif($canal2 === "M+ LaLiga 3"){
  $canalop3 = '
    <a href="../../play?c=mlaliga3">
      <li class="canalito list-group-item darkolorbg blancolor">
      <i class="es flag"></i> Movistar LaLiga 3 | VIP HD</li>
    </a>';
}

if($canal === "M+ LaLiga 7"){
  $canalop2 = '
    <a href="../../play?c=mlaliga7">
      <li class="canalito list-group-item darkolorbg blancolor">
      <i class="es flag"></i> Movistar LaLiga 7 | VIP HD</li>
    </a>';
} elseif($canal2 === "M+ LaLiga 7"){
  $canalop3 = '
    <a href="../../play?c=mlaliga7">
      <li class="canalito list-group-item darkolorbg blancolor">
      <i class="es flag"></i> Movistar LaLiga 7 | VIP HD</li>
    </a>';
}

if($canal === "M+ #Vamos"){
  $canalop2 = '
    <a href="../../play?c=mvamos">
      <li class="canalito list-group-item darkolorbg blancolor">
      <i class="es flag"></i> Movistar #Vamos | VIP HD</li>
    </a>';
} elseif($canal2 === "M+ #Vamos"){
  $canal2 = '
    <a href="../../play?c=mvamos">
      <li class="canalito list-group-item darkolorbg blancolor">
      <i class="es flag"></i> Movistar #Vamos | VIP HD</li>
    </a>';
}

if($canal === "GOL" || $canal === "GOL (Síguelo en directo)"){
    $canalop2 = '
    <a href="../../play?c=goles">
      <li class="canalito list-group-item darkolorbg blancolor">
      <i class="es flag"></i> GOL | VIP HD</li>
    </a>';
} elseif($canal2 === "GOL"){
  $canal2 = '
    <a href="../../play?c=goles">
      <li class="canalito list-group-item darkolorbg blancolor">
      <i class="es flag"></i> GOL | VIP HD</li>
    </a>';
}

if($canal === "DAZN" || $canal === "DAZN"){
  $canalop2 = '
  <a href="../../play?c=dazn1">
    <li class="canalito list-group-item darkolorbg blancolor">
    <i class="es flag"></i> DAZN 1 | VIP HD</li>
  </a>';
} elseif($canal2 === "DAZN" || $canal2 === "DAZN"){
$canal2 = '
  <a href="../../play?c=dazn1">
    <li class="canalito list-group-item darkolorbg blancolor">
    <i class="es flag"></i> DAZN 1 | VIP HD</li>
  </a>';
}

if($canal === "DAZN (Regístrate)" || $canal === "DAZN | (Movistar 59)"){
  $canalop2 = '
  <a href="../../play?c=dazn1">
    <li class="canalito list-group-item darkolorbg blancolor">
    <i class="es flag"></i> DAZN 1 | VIP HD</li>
  </a>';
} elseif($canal2 === "DAZN (Regístrate)" || $canal2 === "DAZN | (Movistar 59)"){
$canal2 = '
  <a href="../../play?c=dazn1">
    <li class="canalito list-group-item darkolorbg blancolor">
    <i class="es flag"></i> DAZN 1 | VIP HD</li>
  </a>';
}

if($canal === "Canal por confirmar" || $canal === "Canal por confirmar"){
  $canalop2 = '
  <a href="javascript:void(0)">
    <li class="canalito list-group-item darkolorbg blancolor">
    <i class="fa fa-exclamation-triangle"></i> Sin información de TV</li>
  </a>';
} elseif($canal2 === "DAZN (Regístrate)" || $canal2 === "DAZN | (Movistar 59)"){
$canal2 = '
  <a href="javascript:void(0)">
    <li class="canalito list-group-item darkolorbg blancolor">
    <i class="fa fa-exclamation-triangle"></i> Sin información de TV</li>
  </a>';
}


if ($canalop2 == $canalop3){
$canalop3 = "";
}
if ($canalop2 == $canalop4){
$canalop4 = "";
}
if ($canalop3 == $canalop4){
$canalop4 = "";
}
?>