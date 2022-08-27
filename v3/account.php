<?php
session_start();
if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')) {
    header("location: login.php");
} else
include('inc/header.php');
$query=mysqli_query($conn,"select * from user where userid='".$_SESSION['id']."'");
$row=mysqli_fetch_assoc($query);
// Premium Request
if (isset($_GET['premiumRequest'])){
    include('inc/premium-request.php');
} elseif ($_POST['contratar']){
    // No incluimos nada
}
// El usuario envió el formulario
if(isset($_POST['contratar'])){
    $username = $_POST['username'];
    $contacto = $_POST['contacto'];
    // Guardamos en BD
    if(mysqli_query($conn, "INSERT INTO premium (username, contacto) VALUES('$username', '$contacto')")) {
        $premiumRequested;
        //header("location: $app");
        $_SESSION['message'] = "Se ha notificado a los administradores tu alta";
        echo '<meta http-equiv = "refresh" content = "3; url = https://www.paypal.com/paypalme/slowd/5.50?servicePayment" />';
    } else {
        echo "Error: " . $sql . "" . mysqli_error($conn);
    }
}
?>
    <!-- App Capsule -->
    <div id="appCapsule" class="container">

        <div class="section mt-2">
            <div class="profile-head">
                <div class="avatar">
                <ion-icon name="person-circle-outline" size="large"  style="zoom:2.0;"></ion-icon>
                </div>
                <div class="in">
                    <h3 class="name"><?=$row['fullname']?></h3>
                    <h5 class="subtext">
                        <?php
                        include('inc/functions.php');
                        if ($daysleft > 0){
                            $vigencia = $daysleft . " Días Restantes";
                            $icon = "time";
                        } elseif ($daysleft <= 0){
                            $vigencia = "Tu suscripcióin venció Hace " . - $daysleft . " Días";
                            $icon = "time";
                            if ($daysleft < 360){
                                $vigencia = "No tienes una suscripción activa";
                            }
                        }
                        ?>
                        <ion-icon name="<?=$icon?>"></ion-icon>
                        <?=$vigencia?></h5>
                </div>
            </div>
        </div>

        <?php
        // Modificar Perfil
        if (isset($_POST['modificar'])){
            $userid = $_SESSION['id'];
            $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
            $username = $row['username'];
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $password = mysqli_real_escape_string($conn, $_POST['password']);
            $fecha = $row['fecha'];
            $type = $row['type'];
            // Guardamos en BD
            $msg=mysqli_query($conn,"update user set userid='$userid', fullname='$fullname', username='$username', email='$email', password='$password', fecha='$fecha', type='$type' where userid='$userid'");
            if($msg) {
                $_SESSION['message'] = "¡Tus datos han sido actualizados!";
                echo '<meta http-equiv = "refresh" content = "2; url = #success" />';
            }

        }
        if (isset($_SESSION['message']) ){
            echo '
            <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                '.$_SESSION['message'].'
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            ';
            unset($_SESSION['message']);
        }
        ?>

        <div class="section full mt-2 mb-2">
            <div class="wide-block pb-1 pt-2">
                <form method="POST" class="needs-validation was-validated">
                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            <label class="form-label" for="fullname">Nombre</label>
                            <input required type="text" class="form-control" id="fullname" name="fullname" value="<?=$row['fullname']?>" placeholder="Ingresa tu nombre" autocomplete="off">
                            <i class="clear-input">
                                <ion-icon name="close-circle" role="img" class="md hydrated" aria-label="close circle"></ion-icon>
                            </i>
                            <div class="valid-feedback">¡Luce bien!</div>
                            <div class="invalid-feedback">Por favor ingresa tu nombre.</div>
                        </div>
                    </div>

                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            <label class="form-label" for="username">Usuario</label>
                            <input readonly type="text" class="form-control" id="username"  name="username" value="<?=$row['username']?>" placeholder="Ingresa tu usuario" autocomplete="off">
                            <i class="clear-input">
                                <ion-icon name="close-circle" role="img" class="md hydrated" aria-label="close circle"></ion-icon>
                            </i>
                            <div style="color: #34C759; font-size: 11px; line-height: 1.4em; margin-top: 4px" class="">*Este campo no puede ser modificado</div>
                        </div>
                    </div>

                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            <label class="form-label" for="email">E-mail</label>
                            <input required type="email" class="form-control" id="email" name="email" value="<?=$row['email']?>" placeholder="Ingresa correo electrónico" autocomplete="off">
                            <i class="clear-input">
                                <ion-icon name="close-circle" role="img" class="md hydrated" aria-label="close circle"></ion-icon>
                            </i>
                            <div class="valid-feedback">¡Luce bien!</div>
                            <div class="invalid-feedback">Por favor ingresa tu correo electrónico.</div>
                        </div>
                    </div>

                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            <label class="form-label" for="password">Contraseña</label>
                            <input required type="password" class="form-control" id="password" name="password" value="<?=$row['password']?>" placeholder="Ingresa tu contraseña" autocomplete="off">
                            <i class="clear-input">
                                <ion-icon name="close-circle" role="img" class="md hydrated" aria-label="close circle"></ion-icon>
                            </i>
                            <div class="valid-feedback">¡Luce bien!</div>
                            <div class="invalid-feedback">Por favor ingresa tu nombre.</div>
                        </div>
                    </div>

                    <div class="mt-2">
                        <button id="modificar" name="modificar" class="btn btn-primary btn-block" type="submit">Modificar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- * App Capsule -->
    <?php
    include('inc/navbar.php');
    ?>