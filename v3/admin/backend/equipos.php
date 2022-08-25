<?php
// Equipos

// Agregar
if(isset($_POST['agregar'])) {
    $teamName=$_POST['teamName'];
    $teamImg=$_POST['teamImg'];
    $teamLocation=$_POST['teamLocation'];
    $liga=$_POST['liga'];
    $msg=mysqli_query($conn,"insert into teams(teamName,teamImg,teamLocation,liga) values('$teamName','$teamImg','$teamLocation','$liga')");

if($msg) {
    $_SESSION['message'] = "¡Se ha agregado el equipo!";
    }
}

// Editar
if(isset($_POST['guardar'])) {
    $teamName=$_POST['teamName'];
    $teamImg=$_POST['teamImg'];
    $teamLocation=$_POST['teamLocation'];
    $liga=$_POST['liga'];
    $teamId=$_POST['teamId'];
    $msg=mysqli_query($conn,"update teams set teamName='$teamName', teamImg='$teamImg', teamLocation='$teamLocation', liga='$liga'  where teamId='$teamId'");

if($msg) {
    $_SESSION['message'] = "¡Se ha actualizado el equipo!";
    }
}

// Borrar
if(isset($_GET['tid'])) {
    $teamId=$_GET['tid'];
    $msg=mysqli_query($conn,"delete from teams where teamId='$teamId'");
    if($msg) {
        $_SESSION['message'] = "¡Se ha eliminado el equipo!";
    }
}