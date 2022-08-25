<?php
// Get Liga
$liga = $_GET['liga'];
if ($liga == ""){
    $liga = 1;
}
$queryScrap=mysqli_query($conn,"select * from ligas
INNER JOIN scraper ON ligas.scraper = scraper.scraperId
where ligaId='$liga'");
$scrap=mysqli_fetch_array($queryScrap);
$scraper = str_replace(" ", "", $scrap['scraperName']) ;
$base = str_replace(" ", "", $scrap['url']);

if(!isset($scraper)){
    $scraper = "movistar";
}
// code for Deleting
if(isset($_GET['id'])){
$gameId=$_GET['id'];
$msg=mysqli_query($conn,"delete from agenda where id='$gameId'");
if($msg){
    $_SESSION['message'] = "¡Se ha eliminado el partido!";
}
}
//Code for Deleting Data
if(isset($_POST['delete'])){
$msg=mysqli_query($conn,"delete from agenda where liga='$liga'");
if($msg){
    $_SESSION['message'] = "¡Se han eliminado los partidos de la liga!";
}
}
//Code for Truncate
if(isset($_POST['truncate'])){
$msg=mysqli_query($conn,"truncate table agenda");
if($msg){
    $_SESSION['message'] = "¡Se ha limpiado la tabla!";
}
}

//Code for Cleaning
if(isset($_POST['clean'])){
$msg=mysqli_query($conn,"delete from agenda where local='' and visita=''");
if($msg){
    $_SESSION['message'] = "¡Se ha eliminado los espacios en blanco de la tabla!";
}
}