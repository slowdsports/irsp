<?php
if($_SERVER["HTTPS"] != "on")
{
    header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
    exit();
}
$conn = mysqli_connect("db5009304956.hosting-data.io","dbu2929559","FHZ]YvbV*8[/ugc$","dbs7886165"); //prod

// Guardar Usuario
if (isset($_POST['signup'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, md5($_POST['password']));
    $user = mysqli_real_escape_string($conn, $_POST['user']);
    $password = md5($password);

    if (!$error) {
        if(mysqli_query($conn, "INSERT INTO users (name,email,password,telegram,subscription) VALUES('$name','$email','$password','$user',0)")) {
            header("location: /thanks");
            //echo "listo!";
            exit();
        } else {
            echo "Error: " . $sql . "" . mysqli_error($conn);
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="description" content="PROMEDIA | RESERVAR" />
        <meta name="keywords" content="PROMEDIA, app" />

        <!-- Site Title -->
        <title>PROMEDIA - Registro</title>
        <!-- Site favicon -->
        <link rel="shortcut icon" href="images/favicon.ico" />

        <!-- Light-box -->
        <link rel="stylesheet" href="css/mklb.css" type="text/css" />

        <!-- Swiper js -->
        <link rel="stylesheet" href="css/swiper-bundle.min.css" type="text/css" />

        <!--Material Icon -->
        <link rel="stylesheet" type="text/css" href="css/materialdesignicons.min.css" />

        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />

        <!-- Hotjar Tracking Code for https://pro-media.online/ -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:3053188,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>
<!-- Hotjar Tracking Code for https://pro-media.online/ -->
    
<!-- OneSignal -->
<!-- <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
<script>
  window.OneSignal = window.OneSignal || [];
  OneSignal.push(function() {
    OneSignal.init({
      appId: "55c78208-a044-41f1-8a5c-b0ef0a221f66",
    });
  });
</script> -->
<!-- OneSignal -->

<!-- Meta Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '558203379107825');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=558203379107825&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->

    </head>

    <body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="60">
        <!--Navbar Start-->
        <nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky-dark" id="navbar-sticky">
            <div class="container">
                <!-- LOGO -->
                <a class="logo text-uppercase">
                    <img src="images/logo-light.png" alt="" />
                </a>
                <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="mdi mdi-menu"></i>
                </button> -->
            </div>
        </nav>
        <!-- Navbar End -->

        <!-- home-agency start -->
        <section class="hero-5" id="home">
           <div class="container">
               <div class="row align-items-center justify-content-center">
                   <div class="col-lg-6">
                       <h1 class="mb-4 display-5 fw-semibold h1dark">Regístrate y obtén el mes de agosto GRATIS</h1>
                       <p class="text-muted fs-17 h1dark">Mira La Liga, La Premier, La Champions donde vayas, cupos gratis LIMITADOS ¡Apresúrate! <br>
                       No se te pedirá tarjeta de crédito ni ningún método de pago para tu mes gratis.</p>
                       <a href="https://m.me/promediahn" class="btn btn-lg btn-gradient-success mt-4 mb-4 mb-lg-0" target="blank">Necesito Ayuda<i class="mdi mdi-lifebuoy fs-14 ms-1"></i></a>
                   </div>

                   <div class="col-md-8 col-lg-5 offset-lg-1">
                      <div class="card mb-0">
                          <div class="card-body p-4">
                            <h5 class="border-bottom fs-22 pb-3 mb-4">Reservar mi cupo</h5>
                          <div class="card-body p-4">
                          <form method="post">
                            <div class="mb-3">
                                <label for="name" class="form-label text-muted fs-14">¿Cómo te llamas? <span class="text-danger">*</span></label>
                                <input id="name" name="name" type="text" class="form-control" id="formFullname" placeholder="Nombre" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label text-muted fs-14">Correo electrónico <span class="text-danger">*</span></label>
                                <input id="email" name="email" type="email" class="form-control" id="formEmail" placeholder="Email" required>
                            </div>
                            <div class="mb-3">
                                <label for="user" class="form-label text-muted fs-14">Usuario de Telegram o WhatsApp <span class="text-danger">*</span></label>
                                <input id="user" name="user" type="text" class="form-control" placeholder="Usuario o número de teléfono" required>
                            </div>
                            <div class="mb-4">
                                <label for="password" class="form-label text-muted fs-14">Crea tu contraseña <span class="text-danger">*</span></label>
                                <input id="password" name="password" type="password" class="form-control" id="formPassword" placeholder="******" required>
                            </div>
                            <button id="signup" name="signup" type="submit" class="btn btn-primary w-100">RESERVAR</button>
                            </form>
                        </div>

                      </div>
                   </div>
               </div>
           </div>
        </section>
        <!-- home-agency end -->

        <!-- footer & cta start -->
        <section class="footer bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 text-center text-lg-start">
                        <div class="footer-logo mb-4">
                            <a>
                                <img src="images/logo-dark.png" alt="" />
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-sm-6 col-md-3">
                                <h5 class="fs-22 mb-3 fw-semibold"><a href="https://www.facebook.com/promediahn">Facebook</a></h5>
                            
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <h5 class="fs-22 mb-3 fw-semibold"><a href="https://t.me/promedia_app">Telegram</a></h5>
                            
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <h5 class="fs-22 mb-3 fw-semibold"><a href="https://www.youtube.com/c/PROmediaHN/videos">YouTube</a></h5>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- footer & cta end -->

        <!-- Back to top -->
        <a onclick="topFunction()" class="back-to-top-btn btn btn-dark" id="back-to-top"><i class="mdi mdi-chevron-up"></i></a>

        <!-- javascript -->
        <script src="js/bootstrap.bundle.min.js"></script>

        <!-- Light-box -->
        <script src="js/mklb.js"></script>
        <!-- swiper -->
        <script src="js/swiper-bundle.min.js"></script>
        <script src="js/swiper.js"></script>

        <!-- counter -->
        <script src="js/counter.init.js"></script>
        <script src="js/app.js"></script>
    </body>
</html>
