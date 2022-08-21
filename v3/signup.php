<?php
session_start();
if (isset($_SESSION['id'])) {
    header("location: home.php");
    $_SESSION['message'] = "¡Ya has iniciado sesión previamente!";
}
include('conn.php');
// Validación GEO
include('inc/geo.php');
if (!in_array($geoCountry_data, $countries)){
    //header("Location: server-error.html");
}
// Guardar Usuario
if (isset($_POST['signup'])){
    $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);
    // Validaciones
    if (!preg_match("/^[a-zA-Z ]+$/",$fullname)) {
        $fullname_error = "¡El nombre debe contener únicamente letras y/o espacios!";
        }

    if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
        $email_error = "¡Por favor introduce un correo electrónico válido!";
        }

    if(strlen($password) < 6) {
        $password_error = "¡Necesitarás una contraseña de al menos 6 caracteres!";
        }

    if($password != $cpassword) {
        $cpassword_error = "¡Las contraseñas no coinciden!";
        }

    if (!$error) {
        if(mysqli_query($conn, "INSERT INTO user (fullname, username, email, password, fecha, type) VALUES('$fullname', '$username', '$email','$password',null,0)")) {
            //header("location: login.php");
            $_SESSION['registro'] = "Te has registrado correctamente";
            $_SESSION['message'] = "Te has registrado correctamente";
            // Iniciamos sesión automáticamente con los datos recibidos
            $query = mysqli_query($conn, "select * from `user` where username='$username' && password='$password'");
            $row = mysqli_fetch_array($query);
            //set up cookie
            setcookie("user", $row["username"], time() + 86400 * 30);
            setcookie("pass", $row["password"], time() + 86400 * 30);
            $_SESSION["id"] = $row["userid"];
            $_SESSION["type"] = "registered";
            header("location: $app?premiumRequest");
            exit();
        } else {
            echo "Error: " . $sql . "" . mysqli_error($conn);
        }
    }
}
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
    <div class="appHeader no-border transparent position-absolute">

        <div class="pageTitle"></div>
        <div class="left">
            <a href="<?=$app?>login.php" class="headerButton">
                Ya tengo una cuenta
            </a>
        </div>
    </div>
    <!-- * App Header -->

    <!-- App Capsule -->
    <div id="appCapsule">
        <div class="login-form mt-1">
            <div class="section-reg">
                <ion-icon name="person-circle-outline" size="large" style="zoom:4.0;"></ion-icon>
            </div>
        <div class="login-form">
            <div class="section">
                <h1>Crea tu cuenta</h1>
            </div>
            <div class="section mt-2 mb-5">
                <form method="post">

                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            <input id="fullname" name="fullname" type="text" class="form-control" placeholder="¿Cómo te llamas?">
                            <i class="clear-input">
                                <ion-icon name="close-circle"></ion-icon>
                            </i>
                        </div>
                    </div>

                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            <input id="email" name="email" type="email" class="form-control" placeholder="Ingresa tu correo electrónico">
                            <i class="clear-input">
                                <ion-icon name="close-circle"></ion-icon>
                            </i>
                        </div>
                    </div>

                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            <input id="password" name="password" type="password" class="form-control" placeholder="Ingresa tu contraseña">
                            <i class="clear-input">
                                <ion-icon name="close-circle"></ion-icon>
                            </i>
                        </div>
                    </div>

                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            <input id="username" name="username" type="text" class="form-control" placeholder="Tu usuario de Telegram">
                            <i class="clear-input">
                                <ion-icon name="close-circle"></ion-icon>
                            </i>
                        </div>
                    </div>

                    <div class="form-button-group">
                        <button id="signup" name="signup" type="submit" class="btn btn-auth btn-block btn-lg">COMENZAR</button>
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