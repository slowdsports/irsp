<?php
    session_start();
    if (isset($_SESSION['id'])) {
        header("location: home.php");
        $_SESSION['message'] = "¡Ya has iniciado sesión previamente!";
        //unset($_SESSION['message']);
    }
	include('conn.php');
    // Validación GEO
    // include('inc/geo.php');
    // if (!in_array($geoCountry_data, $countries)){
    //     header("Location: server-error.html");
    // }
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
    <title>PROmedia v4</title>
    <meta name="description" content="Accede a tu cuenta para disfrutar el contenido.">
    <meta name="keywords" content="bootstrap 4, mobile template, cordova, phonegap, mobile, html" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico" sizes="32x32">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/icon/192x192.png">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="bg-white dark-mode-active auth">

    <!-- loader -->
    <div id="loader">
        <div class="spinner-border text-white" role="status"></div>
    </div>
    <!-- * loader -->

    <div class="appHeader no-border transparent position-absolute">

<div class="pageTitle"></div>
<div class="left">
    <a href="<?=$app?>reset-password.php" class="headerButton">
        Olvidé mi contraseña
    </a>
</div>
</div>

    <!-- App Capsule -->
    <div id="appCapsule" class="pt-0">

        <div class="login-form mt-1">
            <div class="section-auth">
                <ion-icon name="person-circle-outline" size="large" style="zoom:4.0;"></ion-icon>
            </div>
            <div class="section mt-1">
                <h1>Acceder</h1>
            </div>
            <div class="section mt-1 mb-5">
                <form action="auth.php" method="POST" id="frmlLogin">
                    <!-- Registro Correcto -->
                    <div class="error-mensaje text-center">
                        <?php
                        // Mensaje de error
                        if (isset($_SESSION['registro'])){
                            echo '
                            <div class="alert alert-success" role="alert">
                            '.$_SESSION['registro'].'
                            </div>
                            ';
                        }
                        unset($_SESSION['registro']);
                        ?>
                    </div>
                    <!-- Login Incorrecto -->
                    <div class="error-mensaje text-center">
                        <?php
                        // Mensaje de error
                        if (isset($_SESSION['message'])){
                            echo '
                            <div class="alert alert-danger" role="alert">
                            '.$_SESSION['message'].'
                            </div>
                            ';
                        }
                        unset($_SESSION['message']);
                        // Refererer para redirección después del login
                        if (isset($_SESSION['referer'])){
                            $_SESSION['referer'];
                        }
                        ?>
                    </div>
                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            <input required id="username" name="username" type="text" class="form-control" placeholder="Usuario" value="<?php if (isset($_COOKIE["username"])){echo $_COOKIE["username"];}?>">
                            <i class="clear-input">
                                <ion-icon name="close-circle"></ion-icon>
                            </i>
                        </div>
                    </div>

                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            <input required id="password" name="password" type="password" class="form-control" placeholder="Contraseña" value="<?php if (isset($_COOKIE["pass"])){echo $_COOKIE["pass"];}?>">
                            <i class="clear-input">
                                <ion-icon name="close-circle"></ion-icon>
                            </i>
                        </div>
                    </div>

                    <center>
                        <div class="form-check">
                            <input type="checkbox" name="remember" id="remember" checked class="form-check-input">
                            <label for="remember-me">Recuérdame</label>
                        </div>
                    </center>

                    <div class="form-links mt-2">
                        <div>
                            <a class="signup" href="signup.php">Quiero registrarme</a>

                    <div class="form-button-group">
                        <button name="login" type="submit" class="btn btn-auth btn-block btn-lg">ENTRAR</button>
                    </div>

                </form>
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


</body>

</html>