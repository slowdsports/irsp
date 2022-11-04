<meta http-equiv="refresh" content="3; url=server-error.html">
<?php
include('inc/functions.php');
// Redirección inmediata si ya existe la sesión
session_start();
if (isset($_SESSION['id'])) {
    //header("location: $app/home.php");
}
// Validación del Geo
// include('inc/geo.php');
// if (!in_array($geoCountry_data, $countries)){
//     echo '
//     <meta http-equiv="refresh" content="3; url=server-error.html">
//     ';
// } else {
//     echo '
//     <meta http-equiv="refresh" content="3; url=home.php">
//     ';
// }
//echo '<meta http-equiv="refresh" content="3; url=home.php">';
?>
<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="theme-color" content="#000000">
    <title>iRaffle TV 3</title>
    <meta name="description" content="Accede a tu cuenta para disfrutar el contenido.">
    <meta name="keywords" content="bootstrap 4, mobile template, cordova, phonegap, mobile, html" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico" sizes="32x32">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/icon/192x192.png">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="manifest" href="__manifest.json">
</head>

<body class="bg-white dark-mode-active auth">

    <!-- loader -->
    <div id="loader">
        <div class="spinner-border text-white" role="status"></div>
    </div>
    <!-- * loader -->

    <!-- App Header -->
    <!-- * App Header -->

    <!-- App Capsule -->
    <div id="appCapsule" class="container">

        <div class="error-page">
            <img src="assets/img/logo-white.png" alt="alt" class="imaged square w200">

            <button class="btn btn-light" type="button" disabled="">
                <span class="spinner-border spinner-border-sm mr-05" role="status" aria-hidden="true"></span>
                Preparando servidor...
            </button>
        </div>

    </div>
    <!-- * App Capsule -->


    <!-- ///////////// Js Files ////////////////////  -->
    <!-- Jquery -->
    <script src="assets/js/lib/jquery-3.4.1.min.js"></script>
    <!-- Bootstrap-->
    <script src="assets/js/lib/popper.min.js"></script>
    <script src="assets/js/lib/bootstrap.min.js"></script>
    <!-- Ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@5.0.0/dist/ionicons/ionicons.js"></script>
    <!-- Owl Carousel -->
    <script src="assets/js/plugins/owl-carousel/owl.carousel.min.js"></script>
    <!-- jQuery Circle Progress -->
    <script src="assets/js/plugins/jquery-circle-progress/circle-progress.min.js"></script>
    <!-- Base Js File -->
    <script src="assets/js/base.js"></script>


</body>

</html>