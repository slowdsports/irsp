<?php
session_start();
$_SESSION['referer'] = "//" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
//if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')) {
    //header("location: login.php");
    // Dejamos el home abierto al público general
//} else
include('../conn.php'); include('../inc/header.php'); include('../inc/scraper.php');
$query=mysqli_query($conn,"select * from user where userid='".$_SESSION['id']."'");
$row=mysqli_fetch_assoc($query);

?>
<!-- App Capsule -->
<div id="appCapsule" class="container">
    <div class="header-large-title container">
        <h1 class="title"><?php if(!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')){ $fullname = "Invitado"; } else{ $fullname = ucfirst($row['fullname']); } echo $fullname; ?></h1>
        <h4 class="subtitle">¡Disfuta de tu evento!</h4>
    </div>
    <div class="row">
    <?php
    $baseUrl = "https://megadeportes.online/star-plus/";
    $html = file_get_html($baseUrl);
    // MAIN ELEMENT
    $juego = $html ->find ('div.w3-quarter');
    // INDEX
    $i = 1;
    $i2 = 1;

    foreach ($juego as $nombre){
        $logo = $nombre ->find('a img',0) -> src;
        $evento = $nombre ->find('div p',1) -> plaintext;
        $liga = $nombre ->find('div.w3-card-4 p b',0) -> plaintext;
        $link = $nombre ->find('a',0) -> href;
            if ($link === "#"){
                $link = "javascript:void(0)";
            } else {
                $link = str_replace("https://megatelevisionhd.com/eventos/star/?r=", "", $link);
                $link = "tv/epg/?r=".$link;
            }
        ?>
        <div class="col-6 col-lg-4 mycard">
            <div class="section mt-2">
                <a href="<?=$link?>">
                    <div class="card">
                        <img src="<?=$logo?>" class="card-img-top" alt="image" />
                        <div class="card-body">
                            <p class="card-text"><?=$evento?></p>
                            <h5 class="card-subtitle"><?=$liga?></h5>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <?php
        }

        ?>
    </div>
</div>

    <?php include('../inc/navbar.php');