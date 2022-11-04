<?php
// Usuarios

// Agregar
if(isset($_POST['agregar'])) {
    $telegram=$_POST['telegram'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=md5(md5($_POST['password']));
    $subscriptionExpDate=$_POST['subscriptionExpDate'];
    $msg=mysqli_query($conn,"insert into users (telegram,name,email,password,subscriptionExpDate,subscription) values ('$telegram','$name','$email','$password','$subscriptionExpDate',0)");

if($msg) {
    $_SESSION['message'] = "¡Se ha agregado el usuario!";
    }
}

// Editar
if(isset($_POST['guardar'])) {
    $id=$_POST['id'];
    $telegram=$_POST['telegram'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=md5(md5($_POST['password']));
    $subscriptionExpDate=$_POST['subscriptionExpDate'];
    $msg=mysqli_query($conn,"update users set telegram='$telegram',name='$name',email='$email',password='$password',subscriptionExpDate='$subscriptionExpDate' where id='$id'");

if($msg) {
    $_SESSION['message'] = "¡Se ha actualizado el usuario!";
    }
}

// Borrar
if(isset($_GET['uid'])) {
    $id=$_GET['uid'];
    $msg=mysqli_query($conn,"delete from users where id='$id'");
    if($msg) {
        $_SESSION['message'] = "¡Se ha eliminado el usuario!";
    }
}