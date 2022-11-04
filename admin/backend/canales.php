<?php
// Canales

// Agregar
if(isset($_POST['agregar'])) {
    $channelName=$_POST['channelName'];
    $channelUrl=$_POST['channelUrl'];
    $channelImg=$_POST['channelImg'];
    $epg=$_POST['epg'];
    $category=$_POST['category'];
    $country=$_POST['country'];
    $type=$_POST['type'];
    $msg=mysqli_query($conn,"insert into channels (channelName,channelUrl,channelImg,epg,category,country,type) values ('$channelName','$channelUrl','$channelImg','$epg','$category','$country','$type')");

if($msg) {
    $_SESSION['message'] = "¡Se ha agregado el canal!";
    }
}

// Editar
if(isset($_POST['guardar'])) {
    $channelid=$_POST['channelId'];
    $channelName=$_POST['channelName'];
    $channelUrl=$_POST['channelUrl'];
    $channelImg=$_POST['channelImg'];
    $epg=$_POST['epg'];
    $category=$_POST['category'];
    $country=$_POST['country'];
    $type=$_POST['type'];
    $msg=mysqli_query($conn,"update channels set channelName='$channelName',channelUrl='$channelUrl',channelImg='$channelImg',epg='$epg',category='$category',country='$country',type='$type' where channelId='$channelid'");

if($msg) {
    $_SESSION['message'] = "¡Se ha actualizado el canal!";
    }
}

// Borrar
if(isset($_GET['cid'])) {
    $channelId=$_GET['cid'];
    $msg=mysqli_query($conn,"delete from channels where channelId='$channelId'");
    if($msg) {
        $_SESSION['message'] = "¡Se ha eliminado el canal!";
    }
}