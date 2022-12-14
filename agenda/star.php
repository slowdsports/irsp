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
    $baseUrl = "https://megadeportes.live/star-plus/";
    $html = file_get_html($baseUrl);
    // MAIN ELEMENT
    $juego = $html ->find ('div.section');
    // INDEX
    $i = 1;
    $i2 = 1;

    foreach ($juego as $nombre){
        $logo = $nombre ->find('a img',0) -> src;
        $evento = $nombre ->find('a div h3',0) -> plaintext;
        $liga = $nombre ->find('a div h5',0) -> plaintext;
        $link = $nombre ->find('a',0) -> href;
            if ($link === "#"){
                $link = "javascript:void(0)";
            } else {
                $link = str_replace("/embed/star/?r=", "", $link);
                $link = base64_decode($link);
                $link = str_replace("//vercomofutbol.xyz/s/star_jwp.html?get=", "", $link);
                $link = "../tv/epg/?r=".$link;
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