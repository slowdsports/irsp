<?php
session_start();
$_SESSION['referer'] = "//" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
include('../../inc/header.php'); include('../../conn.php');
$query=mysqli_query($conn,"select * from user where userid='".$_SESSION['id']."'");
$row=mysqli_fetch_assoc($query);
?>

<!-- App Capsule -->
<div id="appCapsule" class="container">

<?php
if (isset($_SESSION['message']) ){
    echo '
    <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
        '.$_SESSION['message'].'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    ';
    unset($_SESSION['message']);
}
?>

<div class="header-large-title">
    <h1 class="title"><?=ucfirst($row['fullname'])?></h1>
    <h4 class="subtitle">¿Qué quieres ver hoy?</h4>
</div>

<!-- Categorías -->
    <div class="section mt-2">
        <div class="row">
            <!-- Elemento --
            <div class="col-12 mycard">
                <a data-toggle="collapse" href="#chiringuito" role="button" aria-expanded="false" aria-controls="chiringuito">
                    <div class="card product-card">
                        <div class="main-event">
                            <div class="league">
                                <img src="<?=$app?>assets/img/chiringuito.png" alt="Chiringuito" />
                            </div>
                            <div class="match">
                                <div class="team">
                                    <img src="<?=$app?>assets/img/chiringuito.png" alt="" />
                                    <h4>Chiringuito de Jugones</h4>
                                </div>
                            </div>
                            <div class="channel">
                                <img src="<?=$app?>assets/img/canales/MEGA.png" alt="" />
                            </div>
                        </div>
                    </div>
                </a>
                <div class="collapse" id="chiringuito">
                    <div class="card card-body">
                        <ul class="listview link-listview">
                            <li>
                                <a class="justify-content-center" href="../play/?c=mega">
                                    <i class="flag es"></i>
                                    MEGA | HD (VIP)
                                </a>
                            </li>
                            <li>
                                <a class="justify-content-center" href="../../tv/epg/?c=100">
                                    <i class="flag es"></i>
                                    MEGA [GEO] | HD (FREE)
                                </a>
                            </li>
                            <li>
                                <a class="justify-content-center" href="../../tv/epg/?c=262">
                                    <i class="flag es"></i>
                                    MEGA | HD (FREE)
                                </a>
                            </li>
                            <li>
                                <a class="justify-content-center" href="../../tv/epg/?c=280">
                                    <i class="flag es"></i>
                                    MEGA [YouTube] | HD (FREE)
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Elemento -->
            <?php
            $ligas = mysqli_query($conn, "select * from ligas ");
            while($result=mysqli_fetch_array($ligas)){
                // Cantidad de Juegos
                $index = $result['ligaId'];
                $queryQty=mysqli_query($conn,"select * from agenda where liga = $index");
                $totalGames=mysqli_num_rows($queryQty);
                if ($totalGames == 0){
                    $ligaStatus = "hidden";
                } elseif ($totalGames >= 1){
                    $ligaStatus = "show";
                }
                if ($index == 12 || $index == 13 || $index == 14){
                    $ligaStatus = "hidden";
                }
            ?>
            <!-- Elemento -->
            <div class="col-6 col-sm-4 col-md-3 mycard <?=$ligaStatus?>">
                <a href="liga?id=<?=$result['ligaId']?>">
                    <div class="card product-card liga-card">
                        <div class="card-body">
                            <center>
                            <img width="48px" src="<?=$app?>assets/img/ligas/<?=$result['ligaImg']?>.png" class="image" alt="product image">
                            <h2 class="title text-center"><?=$result['ligaName']?></h2>
                            </center>
                        </div>
                    </div>
                </a>
            </div>
            <!-- End Elemento -->
            <?}?>

        </div>
    </div>
<!-- End Categorías -->
<!-- Timer -->
<script>
    var yyyy = 2022; var mm = 07; var dd = 22;

    var myTime = yyyy+mm+dd;
    var textLive = "<p class='live-text'>En Vivo <ion-icon class='faa-flash animated' name='ellipse'></ion-icon></p>";
    var textEnd = "Finalizó";


    function caseTime() {
        // Set the date we're counting down to
        // Year, Month ( 0 for January ), Day, Hour, Minute, Second, , Milliseconds
        //:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
        //::::::::::::                                       ::::::::::::
        //::::::::::::              12:00 AM                  ::::::::::::
        //::::::::::::                                       ::::::::::::
        //:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
        //                                   (AAAA, MM, DD, HH, MM, SS));
        var countDownDate = new Date(Date.UTC(yyyy, mm, dd, 03, 00, 00));

        // Update the count down every 1 second
        var x = setInterval(function () {

        // Get todays date and time
        var now = new Date().getTime();

        // Find the distance between now an the count down date
        // GMT/UTC Adjustment at the end of the function. 0 = GMT/UTC+0; 1 = GMT/UTC+1.
        var distance = countDownDate - now - (3600000 * -6);

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Output the result in an element with id="demo"
        for (const ele of document.getElementsByClassName("caseTime")){
            ele.innerHTML = (hours + "<span>h</span> "
            + minutes + "<span>m</span> " + seconds + "<span>s</span><br />")
        }
        // If the count down is over, write some text
        if (distance < 0) {
            for (const ele of document.getElementsByClassName("caseTime")) {
                ele.innerHTML = textLive;
            }
            if (distance + 10800000 < 0) {
                countDownDate = new Date(countDownDate.getTime() + 86400000)
            } else if (distance + 7200000 < 0) {
                for (const allEllements of document.getElementsByClassName("caseTime")) {
                    allEllements.innerHTML = textEnd;
                }
            }
        }
    }, 1000);
}
caseTime()
</script>
<!-- *Timer -->
<?php
include('../../inc/navbar.php');
?>