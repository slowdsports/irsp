<?php
// Categorías

// Agregar
if(isset($_POST['agregar'])) {
    $local=$_POST['local'];
    $visita=$_POST['visita'];
    $logoL=$_POST['logoL'];
    $logoV=$_POST['logoV'];
    $link=$_POST['link'];
    $fecha=$_POST['fecha'];
    $liga=$_POST['liga'];
    $msg=mysqli_query($conn,"insert into repeticion(local,visita,logoL,logoV,link,fecha,liga) values('$local','$visita','$logoL','$logoV','$link','$fecha','$liga')");

if($msg) {
    $_SESSION['message'] = "¡Se ha agregado la repetición!";
    }
}

// Editar
if(isset($_POST['guardar'])) {
    $id = $_POST['id'];
    $local=$_POST['local'];
    $visita=$_POST['visita'];
    $logoL=$_POST['logoL'];
    $logoV=$_POST['logoV'];
    $link=$_POST['link'];
    $fecha=$_POST['fecha'];
    $liga=$_POST['liga'];
    $msg=mysqli_query($conn,"update repeticion set local='$local', visita='$visita', logoL='$logoL', logoV='$logoV', link='$link', fecha='$fecha', liga='$liga' where id='$id'");

if($msg) {
    $_SESSION['message'] = "¡Se ha actualizado la repetición!";
    }
}

// Borrar
if(isset($_GET['rid'])) {
    $id=$_GET['rid'];
    $msg=mysqli_query($conn,"delete from repeticion where id='$id'");
    if($msg) {
        $_SESSION['message'] = "¡Se ha eliminado la repetición!";
    }
}