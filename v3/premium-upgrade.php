<!doctype html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="theme-color" content="#000000">
    <title>PROmedia v4</title>
    <meta name="description" content="Accede a tu cuenta para disfrutar el contenido.">
    <meta name="keywords" content="bootstrap 4, mobile template, cordova, phonegap, mobile, html" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico" sizes="32x32">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/icon/192x192.png">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="manifest" href="__manifest.json">
</head>

<body class="bg-white dark-mode-active premium">

    <!-- loader -->
    <div id="loader">
        <div class="spinner-border text-white" role="status"></div>
    </div>
    <!-- * loader -->

    <!-- App Header -->
    <div class="appHeader no-border transparent position-absolute">

        <div class="pageTitle"></div>
        <div class="right">
            <a href="index.php" class="headerButton">
                Omitir
            </a>
        </div>
    </div>
    <!-- * App Header -->

    <!-- App Capsule -->
    <div id="appCapsule" class="container">

        <div class="error-page">
            <div class="mb-2">
                <div class="section">
                    <img src="assets/img/premium.svg" alt="alt" class="imaged square w100">
                </div>
            </div>
            <h1 class="title">¡Obtén acceso ilimitado <span> por $5,59! </span></h1>
            <div class="text-left mb-3">
                <h4>La suscripción puede ser mensual, trimestral o semestral.</h4>
                <li>Obtendrás acceso a canales de TV 24/7.</li>
                <li>Podrás mirar juegos de las principales ligas europeas.</li>
                <li>Podrás solicitar eventos exclusivos.</li>
                <li>Tendrás acceso a un grupo privado con los demás suscriptores.</li>
                <li>Seguirás teniendo acceso a todo el contenido gratis.</li>
                <p>*Renuevas manualmente a partir de octubre a precio regular.</p>
            </div>
            <!-- <div id="countDown" class="mb-5"></div> -->

            <div class="footer-button">
                <div class="row">
                    <div class="col-12">
                        <a href="premium-request.php" class="btn btn-premium btn-lg btn-block">CONTRATAR</a>
                    </div>
                </div>
                <!-- <br> <div class="text mb-3">
                    <p>¿El botón no funciona? <br>
                        Escríbenos en Telegram <br>
                        @soportepromedia</p>
                    </div>-->
            </div>
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

    <!-- ////////////////////////////////////////////////////////// -->
    <!-- only for under construction page -->
    <!-- jQuery Countdown -->
    <script src="assets/js/plugins/jquery-countdown/jquery.countdown.min.js"></script>
    <!-- jQuery Countdown Settings -->
    <script>
        var date = "2022/12/20"; 
        $('#countDown').countdown(date, function (event) {
            $(this).html(event.strftime(
                '<div>%D<span>Days</span></div>'
                +
                '<div>%H<span>Hours</span></div>'
                +
                '<div>%M<span>Minutes</span></div>'
                +
                '<div>%S<span>Seconds</span></div>'
            ));
        });
    </script>
    <!-- ////////////////////////////////////////////////////////// -->

</body>

</html>