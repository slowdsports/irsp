
        <!-- Recomendados Slider -->
        <div class="section full mt-3 mb-3">
            <div class="carousel-multiple owl-carousel owl-theme">
            <?php
            // Fecha Actual
            date_default_timezone_set('America/Tegucigalpa');
            $date = date('Y/m/d H:i:s');
                $mm_0 = substr($date, 5, 2);
                $dd_0 = substr($date, 8, 2);
                $hh_0 = substr($date, 11, 2);
                $m_0 = substr($date, 14, 2);
                //echo "actual: " . "mm: " . $mm_0 . " dd: " . $dd_0 . " hh: " . $hh_0 . " m: " . $m_0 . "<br>";
            $ligas = mysqli_query($conn, "select * from agenda
            INNER JOIN ligas ON agenda.liga = ligas.ligaId
            where status=1
            ORDER BY
            CASE WHEN cast(fecha as time)='00:00:00' THEN 1 ELSE 0 END,
            cast(fecha as time) asc");
            while($result=mysqli_fetch_array($ligas)){
                $index = $result['id'];
                // Teams
                $local = $result['local'];
                    $localImg = strtolower($local);
                    $localImg = str_replace(" ", "", $localImg);
                $visita = $result['visita'];
                    $visitaImg = strtolower($visita);
                    $visitaImg = str_replace(" ", "", $visitaImg);
                $index = $result['id'];
                $liga = $result['liga'];
                    $ligaName = $result['ligaName'];
                    $ligaImg = strtolower($result['ligaImg']);
                    $ligaImg = str_replace(" ", "", $ligaImg);
                $fecha = $result['fecha'];
                    $mm_1 = substr($fecha, 5, 2);
                    $dd_1 = substr($fecha, 8, 2);
                    $hh_1 = substr($fecha, 11, 2);
                    $m_1 = substr($fecha, 14, 2);
                    //echo "mm: " . $mm_1 . " dd: " . $dd_1 . " hh: " . $hh_1 . " m: " . $m_1 . "<br>";
                    // Validación:
                    if ($mm_0 === $mm_1){
                        if ($dd_0 === $dd_1){
                            if ($liga == "23"){
                                $link = "basket/nba?ir";
                                include('agenda/basket/nba/teams.php');
                                $localImg = $local;
                                $visitaImg = $visita;
                                $isMotor = "";
                            } elseif ($liga == "12"){
                                $link = "basket/liga?id=" . $liga;
                                include('agenda/basket/liga/teams.php');
                                $localImg = str_replace(" ", "", $result['local']);
                                $visitaImg = str_replace(" ", "", $result['visita']);
                                $isMotor = "";
                            } elseif ($liga == "22"){
                                $link = "mlb?ir";
                                include('agenda/mlb/teams.php');
                                $localImg = strtolower($local);
                                $visitaImg = strtolower($visita);
                                $isMotor = "";
                            } elseif ($liga == "25"){
                                $link = "balonmano?ir";
                                include('agenda/balonmano/teams.php');
                                $localImg = str_replace(" ", "",$result['local']);
                                $visitaImg = str_replace(" ", "",$result['visita']);
                                $isMotor = "";
                            } elseif ($liga == "14"){
                                $link = "nfl?ir";
                                include('agenda/nfl/teams.php');
                            } elseif ($liga == "28"){
                                $link = "f1?ir";
                                $isMotor = 'style="display: none;"';
                                $motorText = '<h4 style="position: absolute; margin-top: 94px;">'.$local.'</h4>';
                                $localImg = $result['logoL'];
                                //include('agenda/nfl/teams.php');
                            } elseif ($liga == "29"){
                                $link = "motogp?ir";
                                $isMotor = 'style="display: none;"';
                                $motorText = '<h4 style="position: absolute; margin-top: 94px;">'.$local.'</h4>';
                                $localImg = $result['logoL'];
                                //include('agenda/nfl/teams.php');
                            } elseif ($liga == "32"){
                                $isMotor = 'style="display: none;"';
                                $motorText = '<h4 style="position: absolute; margin-top: 94px;">'.$local.'</h4>';
                            } else{
                                $link = "futbol/liga?id=" . $liga;
                                include('agenda/futbol/liga/teams.php');
                                $isMotor = "";
                                $motorText = "";
                            }
                    ?>
                <a href="<?=$app?>/agenda/<?=$link?>&juego=<?=$index?>">
                    <div class="item">
                        <div class="card">
                            <div class="mini-league">
                                <img width="25px" src="<?=$app?>/assets/img/ligas/<?=$ligaImg?>.png" alt="">
                                <h5><?=$ligaName?></h5>
                            </div>
                            <div class="main-event">
                                <div class="match">
                                    <div class="team">
                                        <img src="<?=$app?>/assets/img/equipos/<?=$ligaImg?>/<?=$localImg?>.png" class="image" alt="image">
                                        <!-- <h4><?=ucfirst($local)?></h4> -->
                                        <?=$motorText?>
                                    </div>
                                </div>
                                <div <?=$isMotor?> class="vs">vs</div>
                                <div <?=$isMotor?> class="team">
                                    <img src="<?=$app?>/assets/img/equipos/<?=$ligaImg?>/<?=$visitaImg?>.png" class="image" alt="image">
                                    <!-- <h4><?=ucfirst($visita)?></h4> -->
                                </div>
                            </div>
                            <p class="counter cntdwn-<?=$index?>"></p>
                            <script>
                            var yyyy = 2022;
                            var mm = '<?=$mm_1-1?>';
                            var dd = '<?=$dd_1?>';
                            var hh = '<?=$hh_1?>';
                            var m = '<?=$m_1?>';

                            var textLive = "<p style='position: absolute;' class='live-text'>En Vivo <ion-icon class='faa-flash animated' name='ellipse'></ion-icon></p>";
                            var textEnd = "Finalizó";



                                // Set the date we're counting down to
                                // Year, Month ( 0 for January ), Day, Hour, Minute, Second, , Milliseconds
                                //:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
                                //::::::::::::                                       ::::::::::::
                                //::::::::::::              12:00 AM                  ::::::::::::
                                //::::::::::::                                       ::::::::::::
                                //:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
                                //                                              (AAAA, MM, DD, HH, MM, SS));
                                var countDownDate<?=$index?> = new Date(Date.UTC(yyyy, mm, dd, hh, m, 00));

                                // Update the count down every 1 second
                                var x<?=$index?> = setInterval(function () {

                                // Get todays date and time
                                var now<?=$index?> = new Date().getTime();

                                // Find the distance between now an the count down date
                                // GMT/UTC Adjustment at the end of the function. 0 = GMT/UTC+0; 1 = GMT/UTC+1.
                                var distance<?=$index?> = countDownDate<?=$index?> - now<?=$index?> - (3600000 * -6);

                                // Time calculations for days, hours, minutes and seconds
                                var days<?=$index?> = Math.floor(distance<?=$index?> / (1000 * 60 * 60 * 24));
                                var hours<?=$index?> = Math.floor((distance<?=$index?> % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                                var minutes<?=$index?> = Math.floor((distance<?=$index?> % (1000 * 60 * 60)) / (1000 * 60));
                                var seconds<?=$index?> = Math.floor((distance<?=$index?> % (1000 * 60)) / 1000);

                                // Output the result in an element with id="demo"
                                if (days<?=$index?> > 0){
                                    for (const ele of document.getElementsByClassName("cntdwn-<?=$index?>")){
                                        ele.innerHTML = (days<?=$index?> + "d " + hours<?=$index?> + "h "
                                        + minutes<?=$index?> + "m " + seconds<?=$index?> + "s")
                                    }
                                } else if (hours<?=$index?> == 0){
                                    for (const ele of document.getElementsByClassName("cntdwn-<?=$index?>")){
                                        ele.innerHTML = (minutes<?=$index?> + "m " + seconds<?=$index?> + "s")
                                    }
                                } else if (minutes<?=$index?> == 0){
                                    for (const ele of document.getElementsByClassName("cntdwn-<?=$index?>")){
                                        ele.innerHTML = (seconds<?=$index?> + "s")
                                    }
                                } else {
                                    for (const ele of document.getElementsByClassName("cntdwn-<?=$index?>")){
                                        ele.innerHTML = (hours<?=$index?> + "h "
                                        + minutes<?=$index?> + "m " + seconds<?=$index?> + "s")
                                    }
                                }
                                // If the count down is over, write some text
                                if (distance<?=$index?> < 0) {
                                    for (const ele of document.getElementsByClassName("cntdwn-<?=$index?>")) {
                                        ele.innerHTML = textLive;
                                    }
                                    if (distance<?=$index?> + 10800000 < 0) {
                                        for (const allEllements of document.getElementsByClassName("cntdwn-<?=$index?>")) {
                                            allEllements.innerHTML = textEnd;
                                        }
                                    }
                                }
                            }, //1000
                            5000);
                            </script>
                        </div>
                    </div>
                </a>
                <?php } } } ?>
            </div>
        </div>
        <!-- End Recomendados Slider -->
