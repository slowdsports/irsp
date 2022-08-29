<?php
// UFC

// Agregar
if(isset($_POST['agregar'])) {
    $peleador1=$_POST['peleador1'];
    $imagen1=$_POST['imagen1'];
    $peleador2=$_POST['peleador2'];
    $imagen2=$_POST['imagen2'];
    $fecha=$_POST['fecha'];
    $msg=mysqli_query($conn,"insert into ufc(peleador1,peleador2,imagen1,imagen2,fecha) values('$peleador1', '$peleador2', '$imagen1', '$imagen2', '$fecha')");

if($msg) {
    $_SESSION['message'] = "¡Se ha agregado la pelea!";
    }
}

// Editar
if(isset($_POST['guardar'])) {
    $id = $_POST['id'];
    $peleador1=$_POST['peleador1'];
    $imagen1=$_POST['imagen1'];
    $peleador2=$_POST['peleador2'];
    $imagen2=$_POST['imagen2'];
    $fecha=$_POST['fecha'];
    $msg=mysqli_query($conn,"update ufc set peleador1='$peleador1', peleador2='$peleador2', imagen1='$imagen1', imagen2='$imagen2', fecha='$fecha' where id='$id'");

if($msg) {
    $_SESSION['message'] = "¡Se ha actualizado la pelea!";
    }
}

// Borrar
if(isset($_GET['id'])) {
    $id=$_GET['id'];
    $msg=mysqli_query($conn,"delete from ufc where id='$id'");
    if($msg) {
        $_SESSION['message'] = "¡Se ha eliminado la pelea!";
    }
}