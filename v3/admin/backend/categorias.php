<?php
// Categorías

// Agregar
if(isset($_POST['agregar'])) {
    $categoryName=$_POST['categoryName'];
    $msg=mysqli_query($conn,"insert into categories(categoryName) values('$categoryName')");

if($msg) {
    $_SESSION['message'] = "¡Se ha agregado la categoría!";
    }
}

// Editar
if(isset($_POST['guardar'])) {
    $categoryName=$_POST['categoryName'];
    $categoryId=$_POST['categoryId'];
    $msg=mysqli_query($conn,"update categories set categoryName='$categoryName' where categoryId='$categoryId'");

if($msg) {
    $_SESSION['message'] = "¡Se ha actualizado la categoría!";
    }
}

// Borrar
if(isset($_GET['cid'])) {
    $categoryId=$_GET['cid'];
    $msg=mysqli_query($conn,"delete from categories where categoryId='$categoryId'");
    if($msg) {
        $_SESSION['message'] = "¡Se ha eliminado la categoría!";
    }
}