<?php
include('functions.php'); include('conn.php'); ?>
<!doctype html>
<html lang="en">

<!-- device detection -->

<script>
function detectPC() {
    if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
        return false;
    } else {
        return true;
    }
}

if (detectPC()){
//top.location.href="device.html";
}
</script>

<!-- device detection -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="theme-color" content="#000000">
    <title>iRaffle TV 3</title>
    <meta name="description" content="Accede a tu cuenta para disfrutar el contenido.">
    <meta name="keywords" content="iptv, fútbol, eventos, gratis" />
    <link rel="icon" type="image/png" href="<?=$app?>assets/img/favicon.ico" sizes="32x32">
    <link rel="apple-touch-icon" sizes="180x180" href="<?=$app?>assets/img/icon/192x192.png">
    <link rel="stylesheet" href="<?=$app?>assets/css/style.css">
    <link rel="stylesheet" href="<?=$app?>assets/css/events.css">
    <link rel="stylesheet" href="<?=$app?>assets/css/inc/flags.css">
    <link rel="stylesheet" href="<?=$app?>assets/css/inc/font-awesome.css">
    <link rel="stylesheet" href="<?=$app?>assets/css/inc/font-awesome-animation.css">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/@mdi/font@6.9.96/css/materialdesignicons.min.css"></link>
    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-Z7958KV9CY"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-Z7958KV9CY');
    </script>

<script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
<script>
  window.OneSignal = window.OneSignal || [];
  OneSignal.push(function() {
    OneSignal.init({
      appId: "55c78208-a044-41f1-8a5c-b0ef0a221f66",
    });
  });
</script>
<!-- OneSignal -->
</head>

<body class="bg-white dark-mode-active">

    <!-- loader -->
    <div id="loader">
        <div class="spinner-border text-white" role="status"></div>
    </div>
    <!-- * loader -->

    <!-- App Header -->
    <div class="appHeader bg-primary scrolled">
        <div class="left">
            <a href="#" class="headerButton" data-toggle="modal" data-target="#sidebarPanel">
                <ion-icon name="menu-outline"></ion-icon>
            </a>
        </div>
        <div class="pageTitle">
            iRaffle TV
        </div>
        <div class="right">
            <!-- <a href="#" class="headerButton toggle-searchbox">
                <ion-icon name="search-outline" role="img" class="md hydrated" aria-label="search outline"></ion-icon>
            </a> -->
        </div>
    </div>
    <!-- * App Header -->

    <!-- Search Component -->
    <div id="search" class="appHeader">
        <form action="<?=$app?>search.php" class="search-form">
            <div class="form-group searchbox">
                <input type="text" class="form-control" placeholder="Search..." />
                <i class="input-icon">
                    <ion-icon name="search-outline" role="img" class="md hydrated" aria-label="search outline"></ion-icon>
                </i>
                <a href="#" class="ms-1 close toggle-searchbox"> <ion-icon name="close-circle" role="img" class="md hydrated" aria-label="close circle"></ion-icon> </a>
            </div>
        </form>
    </div>
    <!-- * Search Component -->