<?php
// Fútbol

// Agregar
if(isset($_POST['agregar'])) {
    $local=$_POST['local'];
    $visita=$_POST['visita'];
    $logoL=$_POST['logoL'];
    $logoV=$_POST['logoV'];
    $canal=$_POST['canal'];
    $canal2=$_POST['canal2'];
    $canal3=$_POST['canal3'];
    $canal4=$_POST['canal4'];
    $canal5=$_POST['canal5'];
    $canal6=$_POST['canal6'];
    $liga=$_POST['liga'];
    $msg=mysqli_query($conn,"insert into agenda(local,visita,logoL,logoV,canal,canal2,canal3,canal4,canal5,canal6,liga,fecha,status) values('$local','$visita','$logoL','$logoV','$canal','$canal2','$canal3','$canal4','$canal5','$canal6','$liga',null,1)");

if($msg) {
    $_SESSION['message'] = "¡Se ha agregado el partido!";
    }
}

// Editar
if(isset($_POST['guardar'])) {
    $juegoId=$_POST['id'];
    $local=$_POST['local'];
    $visita=$_POST['visita'];
    $logoL=$_POST['logoL'];
    $logoV=$_POST['logoV'];
    $canal=$_POST['canal'];
    $canal2=$_POST['canal2'];
    $canal3=$_POST['canal3'];
    $canal4=$_POST['canal4'];
    $canal5=$_POST['canal5'];
    $canal6=$_POST['canal6'];
    $fecha=$_POST['fecha'];
    $liga=$_POST['liga'];
    $status=$_POST['status'];
    $msg=mysqli_query($conn,"update agenda set local='$local',visita='$visita',logoL='$logoL',logoV='$logoV',canal='$canal',canal2='$canal2',canal3='$canal3',canal4='$canal4',canal5='$canal5',canal6='$canal6',fecha='$fecha',liga='$liga',status='1' where id='$juegoId'");

if($msg) {
    $_SESSION['message'] = "¡Se ha actualizado el partido!";
    }
}

// Borrar
if(isset($_GET['id'])) {
    $juegoId=$_GET['id'];
    $msg=mysqli_query($conn,"delete from agenda where id='$juegoId'");
    if($msg) {
        $_SESSION['message'] = "¡Se ha eliminado el partido!";
    }
}

// Borrando data de Ligas
if(isset($_POST['delete'])){
    $msg=mysqli_query($con,"delete from agenda where liga='$liga'");
    if($msg){
        $_SESSION['message'] = "¡Se ha eliminado la data de la liga!";
    }
}

// Limpiando la tabla
if(isset($_POST['truncate'])){
    $msg=mysqli_query($con,"truncate table agenda");
    if($msg){
        $_SESSION['message'] = "¡Se ha limpiado la tabla!";
    }
}

// Limpiando espacios vacíos
if(isset($_POST['clean'])){
    $msg=mysqli_query($con,"delete from agenda where local='' and visita=''");
    if($msg){
        $_SESSION['message'] = "¡Se han eliminado los espacios en blanco!";
    }
}