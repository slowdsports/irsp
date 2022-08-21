<?php
session_start();
$_SESSION['referer'] = "//" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
include('conn.php'); include('inc/functions.php');
$query=mysqli_query($conn,"select * from user where userid='".$_SESSION['id']."'");
$row=mysqli_fetch_assoc($query);

// El usuario envió el formulario
if(isset($_POST['contratar'])){
    $username = $_POST['username'];
    $contacto = $_POST['contacto'];
    $comentario = $_POST['comentario'];
    // Guardamos en BD
    if(mysqli_query($conn, "INSERT INTO premium (username, contacto, comentario) VALUES('$username', '$contacto', '$comentario')")) {
        $premiumRequested;
        $_SESSION['message'] = "Se ha notificado a los administradores tu alta";
        echo '<meta http-equiv = "refresh" content = "3; url = https://www.paypal.com/paypalme/slowd/5.50?servicePayment" />';
        unset($_SESSION['message']);
    } else {
        echo "Error: " . $sql . "" . mysqli_error($conn);
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
    <title>iRafle TV 3</title>
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
                Cancelar
            </a>
        </div>
    </div>
    <!-- * App Header -->
    <!-- * App Capsule -->
    <div id="appCapsule">
    <div class="login-form">
        <div class="section mt-2">
            <h1>Contratar Premium</h1>
            <h4>Rellena el formulario</h4>
            <div class="container">
                <div class="alert alert-success" role="alert">
                <?=$_SESSION['message']?>
                </div>
            </div>
            <?php
            if ($premiumRequested){
                echo '
                <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                    Se ha notificado a los administradores tu alta
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
                unset($_SESSION['message']);
            }
            ?>
        </div>
        <div class="section mt-4 mb-5">
            <form method="post">
                <div class="form-group basic">
                    <div class="input-wrapper">
                        <label class="form-label" for="username">Usuario</label>
                        <input readonly type="text" class="form-control" id="username" name="username" id="username" placeholder="Usuario" value="<?=$row['username']?>" />
                        <i class="clear-input">
                            <ion-icon name="close-circle" role="img" class="md hydrated" aria-label="close circle"></ion-icon>
                        </i>
                    </div>
                </div>
                <div class="form-group basic">
                    <div class="input-wrapper">
                        <label class="form-label" for="contacto">Método de contacto</label>
                        <select class="form-control form-select" id="contacto" name="contacto">
                            <option id="0" value="0">Telegram</option>
                            <option id="1" value="1">WhatsApp</option>
                            <option id="2" value="2">Email</option>
                        </select>
                    </div>
                </div>
                <div class="form-group basic">
                    <div class="input-wrapper">
                        <label class="form-label" for="comentario">Comentario</label>
                        <input type="text" class="form-control" id="comentario" name="comentario" id="comentario" placeholder="Déjanos un mensaje adicional (opcional)" value="<?=$row['comentario']?>" />
                        <i class="clear-input">
                            <ion-icon name="close-circle" role="img" class="md hydrated" aria-label="close circle"></ion-icon>
                        </i>
                    </div>
                </div>
                <div class="mt-2">
                    <button type="submit" id="contratar" name="contratar" class="btn btn-primary btn-block btn-lg" data-bs-dismiss="modal">CONTRATAR</button>
                </div>
            </form>
        </div>
    </div>


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