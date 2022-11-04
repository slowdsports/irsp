<?php
// Trabajos

// Agregar
if(isset($_POST['agregarTrabajo'])) {
    $trabajoName=$_POST['trabajoName'];
    $msg=mysqli_query($conn,"insert into trabajos (trabajoName, status) values ('$trabajoName', 0)");

if($msg) {
    $_SESSION['message'] = "¡Se ha agregado el trabajo!";
    }
}

// Editar
if(isset($_POST['guardar'])) {
    $userid=$_POST['userid'];
    $username=$_POST['username'];
    $fullname=$_POST['fullname'];
    $password=$_POST['password'];
    $fecha=$_POST['fecha'];
    $msg=mysqli_query($conn,"update user set username='$username',fullname='$fullname',password='$password',fecha='$fecha' where userid='$userid'");

if($msg) {
    $_SESSION['message'] = "¡Se ha actualizado el usuario!";
    }
}

// Completar Trabajo
if(isset($_GET['check'])) {
    $check=$_GET['check'];
    $cid=$_GET['cid'];
    $msg=mysqli_query($conn,"update trabajos set status='$check' where trabajoId='$cid'");

if($msg) {
    $_SESSION['message'] = "¡Se ha actualizado el usuario!";
    }
}

// Borrar
if(isset($_GET['tid'])) {
    $tid=$_GET['tid'];
    $msg=mysqli_query($conn,"delete from trabajos where trabajoId='$tid'");
    if($msg) {
        $_SESSION['message'] = "¡Se ha eliminado el trabajo!";
    }
}