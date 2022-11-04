<?php
// Categorías

// Agregar
if(isset($_POST['agregar'])) {
    $countryName=$_POST['countryName'];
    $countryImg=$_POST['countryImg'];
    $msg=mysqli_query($conn,"insert into countries(countryName, countryImg) values('$countryName', '$countryImg')");

if($msg) {
    $_SESSION['message'] = "¡Se ha agregado el país!";
    }
}

// Editar
if(isset($_POST['guardar'])) {
    $countryName=$_POST['countryName'];
    $countryId=$_POST['countryId'];
    $countryImg=$_POST['countryImg'];
    $msg=mysqli_query($conn,"update countries set countryImg='$countryImg', countryName='$countryName' where countryId='$countryId'");

if($msg) {
    $_SESSION['message'] = "¡Se ha actualizado el país!";
    }
}

// Borrar
if(isset($_GET['pid'])) {
    $countryId=$_GET['pid'];
    $msg=mysqli_query($conn,"delete from countries where countryId='$countryId'");
    if($msg) {
        $_SESSION['message'] = "¡Se ha eliminado el país!";
    }
}