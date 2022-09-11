<?php
// Tenis

// Agregar
if(isset($_POST['agregar'])) {
    $tenista1=$_POST['tenista1'];
    $imagen1=$_POST['imagen1'];
    $tenista2=$_POST['tenista2'];
    $imagen2=$_POST['imagen2'];
    $fecha=$_POST['fecha'];
    $msg=mysqli_query($conn,"insert into tenis(tenista1,tenista2,imagen1,imagen2,fecha) values('$tenista1', '$tenista2', '$imagen1', '$imagen2', '$fecha')");

if($msg) {
    $_SESSION['message'] = "¡Se ha agregado el juego!";
    }
}

// Editar
if(isset($_POST['guardar'])) {
    $id = $_POST['id'];
    $tenista1=$_POST['tenista1'];
    $imagen1=$_POST['imagen1'];
    $tenista2=$_POST['tenista2'];
    $imagen2=$_POST['imagen2'];
    $fecha=$_POST['fecha'];
    $msg=mysqli_query($conn,"update tenis set tenista1='$tenista1', tenista2='$tenista2', imagen1='$imagen1', imagen2='$imagen2', fecha='$fecha' where id='$id'");

if($msg) {
    $_SESSION['message'] = "¡Se ha actualizado el juego!";
    }
}

// Borrar
if(isset($_GET['id'])) {
    $id=$_GET['id'];
    $msg=mysqli_query($conn,"delete from tenis where id='$id'");
    if($msg) {
        $_SESSION['message'] = "¡Se ha eliminado el juego!";
    }
}