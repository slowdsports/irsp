<?php
// Categorías

// Agregar
if(isset($_POST['agregar'])) {
    $ligaName=$_POST['ligaName'];
    $ligaImg=$_POST['ligaImg'];
    $scraper=$_POST['scraper'];
    $url=$_POST['url'];
    $msg=mysqli_query($conn,"insert into ligas(ligaName,ligaImg,scraper,url) values('$ligaName','$ligaImg','$scraper','$url')");

if($msg) {
    $_SESSION['message'] = "¡Se ha agregado la liga!";
    }
}

// Editar
if(isset($_POST['guardar'])) {
    $ligaName=$_POST['ligaName'];
    $ligaImg=$_POST['ligaImg'];
    $scraper=$_POST['scraper'];
    $url=$_POST['url'];
    $ligaId=$_POST['ligaId'];
    $msg=mysqli_query($conn,"update ligas set ligaName='$ligaName', ligaImg='$ligaImg', scraper='$scraper', url='$url' where ligaId='$ligaId'");

if($msg) {
    $_SESSION['message'] = "¡Se ha actualizado la liga!";
    }
}

// Borrar
if(isset($_GET['lid'])) {
    $ligaId=$_GET['lid'];
    $msg=mysqli_query($conn,"delete from ligas where ligaId='$ligaId'");
    if($msg) {
        $_SESSION['message'] = "¡Se ha eliminado la liga!";
    }
}