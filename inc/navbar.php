<!-- app footer -->
<br>
<!-- <div class="appFooter">
    <img src="<?=$app?>assets/img/logo-white.png" alt="icon" class="footer-logo mb-2">
        <div class="footer-title">
            Copyright &copy; 2022 ⚽ iRaffle TV
        </div>
    </div>
</div> -->
<!-- * App Capsule -->


    <!-- App Bottom Menu -->
    <div class="appBottomMenu">
        <a href="<?=$app?>home.php" class="item">
            <div class="col">
                <ion-icon name="home-outline"></ion-icon>
                <strong>Inicio</strong>
            </div>
        </a>
        <!-- Counter de los partidos -->
        <?php
        $agenda=mysqli_query($conn,"select * from agenda where status=1");
        $totalPartidos=mysqli_num_rows($agenda);
        ?>
        <a href="<?=$app?>agenda/futbol" class="item">
            <div class="col">
                <ion-icon name="football-outline"></ion-icon>
                <strong>Fútbol</strong>
                <span class="badge badge-danger"><?=$totalPartidos?></span>
            </div>
        </a>
        <!-- Counter de los canales -->
        <?php
        $channels=mysqli_query($conn,"select * from channels where type IN ('1','2','3','4','7','8','9')");
        $totalChannels=mysqli_num_rows($channels);
        ?>
        <a href="<?=$app?>tv" class="item">
            <div class="col">
                <ion-icon name="tv-outline"></ion-icon>
                <strong>TV</strong>
                <span class="badge badge-danger"><?=$totalChannels?></span>
            </div>
        </a>
        <?php
        $query=mysqli_query($conn,"select * from user where userid='".$_SESSION['id']."'");
        $row=mysqli_fetch_assoc($query);
        if($row['email'] == null){
            $account = '<span class="badge badge-danger">1</span>';
            $accountQuery = "?updateEmail";
        }
        ?>
        <a href="<?=$app?>account.php<?=$accountQuery?>" class="item">
            <div class="col">
                <ion-icon name="people-outline" role="img" class="md hydrated" aria-label="people outline"></ion-icon>
                <strong>Perfil</strong>
                <?=$account?>
            </div>
        </a>
        <a href="javascript:;" class="item" data-toggle="modal" data-target="#sidebarPanel">
            <div class="col">
                <ion-icon name="menu-outline"></ion-icon>
            </div>
        </a>
    </div>
    <!-- * App Bottom Menu -->

    <!-- TV SideFilter -->
    <div class="modal fade panelbox panelbox-left" id="sidebarFilter" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <?php
                    session_start();
                    $query=mysqli_query($conn,"select * from user where userid='".$_SESSION['id']."'");
                    $row=mysqli_fetch_assoc($query);
                    ?>
                    <!-- profile box -->
                    <div class="profileBox">
                        <div class="image-wrapper">
                        <ion-icon name="person-circle-outline" size="large"></ion-icon>
                        </div>
                        <div class="in">
                            <strong>¡Hola <?=$row['fullname']?>!</strong>
                            <div class="text-muted">
                                <?php
                                include('functions.php');
                                if ($daysleft > 15){
                                    $vigencia = $row['username'];
                                    $icon = "person-outline";
                                } elseif ($daysleft < 15 && $daysleft >= 0){
                                    $vigencia = - $daysleft . " Días Restantes";
                                    $icon = "time";
                                } elseif ($daysleft <= 0){
                                    $vigencia = "Venció Hace " . - $daysleft . " Días";
                                    $icon = "time";
                                }
                                if ($daysleft < 360){
                                    $icon = "star-outline";
                                    $vigencia = "Contáctanos para convertirte en premium";
                                }
                                ?>
                                <ion-icon name="<?=$icon?>"></ion-icon>
                                <?=$vigencia?>
                            </div>
                        </div>
                        <a href="javascript:;" class="close-sidebar-button" data-dismiss="modal">
                            <ion-icon name="close"></ion-icon>
                        </a>
                    </div>
                    <!-- * profile box -->

                    <!-- tv filter -->
                        <!-- Tabs -->
                        <div class="section full mt-1">
                            <div class="wide-block pt-2 pb-2">
                                <ul class="nav nav-tabs style1" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#categorias" role="tab">
                                            Categorías
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#paises" role="tab">
                                            Países
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content mt-2">
                                    <div class="tab-pane fade show active" id="categorias" role="tabpanel">
                                        <ul class="listview flush transparent no-line image-listview mt-2">
                                            <li>
                                                <a href="<?=$app?>tv?categ=all" class="item">
                                                    <div class="icon-box bg-primary">
                                                        <ion-icon name="apps-outline"></ion-icon>
                                                    </div>
                                                    <div class="in">Todo</div>
                                                </a>
                                            </li>
                                            <?php
                                            $categorias=mysqli_query($conn,"select * from categories");
                                            while($result=mysqli_fetch_array($categorias)){
                                                $index= $result['categoryId'];
                                                $categnum=mysqli_query($conn,"select * from channels where category='$index'");
                                                $totalCanalCateg=mysqli_num_rows($categnum);
                                                if ($totalCanalCateg === 0){
                                                    $display = 'style= "display:none;"';
                                                } else {
                                                    $display = 'style= "display:block;"';
                                                }
                                            ?>
                                            <li <?=$display?>>
                                                <a href="<?=$app?>tv?categ=<?=$result['categoryId']?>" class="item">
                                                    <div class="icon-box bg-primary">
                                                        <ion-icon name="<?=$result['categoryIcon']?>-outline"></ion-icon>
                                                    </div>
                                                    <div class="in">
                                                        <div><?=$result['categoryName']?></div>
                                                        <span class="badge badge-danger"><?=$totalCanalCateg?></span>
                                                    </div>
                                                </a>
                                            </li>
                                            <?php }?>
                                        </ul>
                                    </div>

                                    <div class="tab-pane fade" id="paises" role="tabpanel">
                                        <ul class="listview flush transparent no-line image-listview mt-2">
                                            <li>
                                                <a href="<?=$app?>tv?cntry=all" class="item">
                                                    <div class="icon-box bg-primary">
                                                        <ion-icon name="apps-outline"></ion-icon>
                                                    </div>
                                                    <div class="in">Todo</div>
                                                </a>
                                            </li>
                                            <?php
                                            $paises=mysqli_query($conn,"select * from countries");
                                            while($result=mysqli_fetch_array($paises)){
                                                $index= $result['countryId'];
                                                $cntrynum=mysqli_query($conn,"select * from channels where country='$index'");
                                                $totalCanalCntry=mysqli_num_rows($cntrynum);
                                                if ($totalCanalCntry === 0){
                                                    $display = 'style= "display:none;"';
                                                } else {
                                                    $display = 'style= "display:block;"';
                                                }
                                            ?>
                                            <li <?=$display?>>
                                                <a href="<?=$app?>tv?cntry=<?=$result['countryId']?>" class="item">
                                                    <div class="icon-box bg-primary">
                                                        <i style="margin-left: 11px; margin-bottom: 4px;" class="flag <?=$result['countryImg']?>"></i>
                                                    </div>
                                                    <div class="in">
                                                        <div><?=$result['countryName']?></div>
                                                        <span class="badge badge-danger"><?=$totalCanalCntry?></span>
                                                    </div>
                                                </a>
                                            </li>
                                            <?php }?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- *tabs -->
                    <!-- * tv filter -->

                    <!-- sidebar buttons -->
                    <div class="sidebar-buttons">
                        <a href="<?=$app."account.php"?>" class="button">
                            <ion-icon name="person-outline"></ion-icon>
                        </a>
                        <!-- <a href="javascript:;" class="button">
                            <ion-icon name="archive-outline"></ion-icon>
                        </a> -->
                        <!-- <a href="javascript:;" class="button">
                            <ion-icon name="settings-outline"></ion-icon>
                        </a> -->
                        <?php
                        if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')){
                            $linkType = $app . "login.php";
                            $iconType = "log-in-outline";
                        } else {
                            $linkType = $app . "logout.php";
                            $iconType = "log-out-outline";
                        }
                        ?>
                        <a href="<?=$linkType?>" class="button">
                            <ion-icon name="<?=$iconType?>"></ion-icon>
                        </a>
                    </div>
                    <!-- * sidebar buttons -->

                </div>
            </div>
        </div>
    </div>
    <!-- * TV SideFilter -->

    <!-- App Sidebar -->
    <div class="modal fade panelbox panelbox-left" id="sidebarPanel" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <?php
                    session_start();
                    $query=mysqli_query($conn,"select * from user where userid='".$_SESSION['id']."'");
                    $row=mysqli_fetch_assoc($query);
                    ?>
                    <!-- profile box -->
                    <div class="profileBox">
                        <div class="image-wrapper">
                        <ion-icon name="person-circle-outline" size="large"></ion-icon>
                        </div>
                        <div class="in">
                            <strong>¡Hola <?=$row['fullname']?>!</strong>
                            <div class="text-muted">
                                <?php
                                include('functions.php');
                                if ($daysleft > 15){
                                    $vigencia = $row['username'];
                                    $icon = "person-outline";
                                } elseif ($daysleft < 15 && $daysleft >= 0){
                                    $vigencia = - $daysleft . " Días Restantes";
                                    $icon = "time";
                                } elseif ($daysleft <= 0){
                                    $vigencia = "Venció Hace " . - $daysleft . " Días";
                                    $icon = "time";
                                }
                                if ($daysleft < 360){
                                    $icon = "star-outline";
                                    $vigencia = "Contáctanos para convertirte en premium";
                                }
                                ?>
                                <ion-icon name="<?=$icon?>"></ion-icon>
                                <?=$vigencia?>
                            </div>
                        </div>
                        <a href="javascript:;" class="close-sidebar-button" data-dismiss="modal">
                            <ion-icon name="close"></ion-icon>
                        </a>
                    </div>
                    <!-- * profile box -->

                    <ul class="listview flush transparent no-line image-listview mt-2">
                        <li>
                            <a href="<?=$app?>home.php" class="item">
                                <div class="icon-box bg-primary">
                                    <ion-icon name="home-outline"></ion-icon>
                                </div>
                                <div class="in">
                                    Inicio
                                </div>
                            </a>
                        </li>
                        <!-- Counter de los partidos -->
                        <?php
                        $agenda=mysqli_query($conn,"select * from agenda where status=1");
                        $totalPartidos=mysqli_num_rows($agenda);
                        if ($totalPartidos == 0){
                            $display = 'style="display:none"';
                        }
                        ?>
                        <li <?=$display?>>
                            <a href="<?=$app?>agenda/futbol" class="item">
                                <div class="icon-box bg-primary">
                                    <ion-icon name="football-outline"></ion-icon>
                                </div>
                                <div class="in">
                                    <div>Fútbol</div>
                                    <span class="badge badge-danger"><?=$totalPartidos?></span>
                                </div>
                            </a>
                        </li>
                        <!-- Counter de los partidos -->
                        <?php
                        $agenda=mysqli_query($conn,"select * from agenda where liga=23");
                        $totalBasket=mysqli_num_rows($agenda);
                        if ($totalBasket == 0){
                            $display = 'style="display:none"';
                        }
                        ?>
                        <li <?=$display?>>
                            <a href="<?=$app?>agenda/basket" class="item">
                                <div class="icon-box bg-primary">
                                    <ion-icon name="basketball-outline"></ion-icon>
                                </div>
                                <div class="in">
                                    <div>Basketball</div>
                                    <span class="badge badge-danger"><?=$totalBasket?></span>
                                </div>
                            </a>
                        </li>
                        <!-- Counter de los partidos -->
                        <?php
                        $agenda=mysqli_query($conn,"select * from agenda where liga=14");
                        $totalNFL=mysqli_num_rows($agenda);
                        if ($totalNFL == 0){
                            $display = 'style="display:none"';
                        }
                        ?>
                        <li <?=$display?>>
                            <a href="<?=$app?>agenda/nfl" class="item">
                                <div class="icon-box bg-primary">
                                    <ion-icon name="american-football-outline"></ion-icon>
                                </div>
                                <div class="in">
                                    <div>NFL</div>
                                    <span class="badge badge-danger"><?=$totalNFL?></span>
                                </div>
                            </a>
                        </li>
                        <!-- Counter de los partidos -->
                        <?php
                        $agenda=mysqli_query($conn,"select * from agenda where liga=22");
                        $totalMLB=mysqli_num_rows($agenda);
                        if ($totalMLB == 0){
                            $display = 'style="display:none"';
                        }
                        ?>
                        <li <?=$display?>>
                            <a href="<?=$app?>agenda/mlb" class="item">
                                <div class="icon-box bg-primary">
                                    <ion-icon name="baseball-outline"></ion-icon>
                                </div>
                                <div class="in">
                                    <div>MLB</div>
                                    <span class="badge badge-danger"><?=$totalMLB?></span>
                                </div>
                            </a>
                        </li>
                        <!-- Counter de los partidos -->
                        <?php
                        $agenda=mysqli_query($conn,"select * from agenda where liga=25");
                        $totalBalonmano=mysqli_num_rows($agenda);
                        if ($totalBalonmano == 0){
                            $display = 'style="display:none"';
                        }
                        ?>
                        <li <?=$display?>>
                            <a href="<?=$app?>agenda/balonmano" class="item">
                                <div class="icon-box bg-primary">
                                    <i class="mdi mdi-handball" aria-hidden="true"></i>
                                </div>
                                <div class="in">
                                    <div>Balonmano</div>
                                    <span class="badge badge-danger"><?=$totalBalonmano?></span>
                                </div>
                            </a>
                        </li>
                        <!-- Counter de los canales -->
                        <?php
                        $agenda=mysqli_query($conn,"select * from channels");
                        $totalChannels=mysqli_num_rows($agenda);
                        if ($totalChannels == 0){
                            $display = 'style="display:none"';
                        }
                        ?>
                        <li <?=$display?>>
                            <a href="<?=$app?>tv" class="item">
                                <div class="icon-box bg-primary disabled">
                                    <ion-icon name="tv-outline"></ion-icon>
                                </div>
                                <div class="in">
                                    <div>TV 24/7</div>
                                    <span class="badge badge-danger"><?=$totalChannels?></span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="https://t.me/+uyWDSC69RzFlNWE5" class="item">
                                <div class="icon-box bg-primary">
                                    <ion-icon name="share-social-outline"></ion-icon>
                                </div>
                                <div class="in">
                                    <div>Contactar</div>
                                </div>
                            </a>
                        </li>
                    </ul>


                <!-- sidebar buttons -->
                <div class="sidebar-buttons">
                    <a href="<?=$app."account.php"?>" class="button">
                        <ion-icon name="person-outline"></ion-icon>
                    </a>
                    <!-- <a href="javascript:;" class="button">
                        <ion-icon name="archive-outline"></ion-icon>
                    </a> -->
                    <!-- <a href="javascript:;" class="button">
                        <ion-icon name="settings-outline"></ion-icon>
                    </a> -->
                    <?php
                    if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')){
                        $linkType = $app . "login.php";
                        $iconType = "log-in-outline";
                    } else {
                        $linkType = $app . "logout.php";
                        $iconType = "log-out-outline";
                    }
                    ?>
                    <a href="<?=$linkType?>" class="button">
                        <ion-icon name="<?=$iconType?>"></ion-icon>
                    </a>
                </div>
                <!-- * sidebar buttons -->
            </div>
        </div>
    </div>
    <!-- * App Sidebar -->

    <!-- ///////////// Js Files ////////////////////  -->
    <!-- Jquery -->
    <script src="<?=$app?>assets/js/lib/jquery-3.4.1.min.js"></script>
    <!-- Bootstrap-->
    <script src="<?=$app?>assets/js/lib/popper.min.js"></script>
    <script src="<?=$app?>assets/js/lib/bootstrap.min.js"></script>
    <!-- Ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@5.0.0/dist/ionicons/ionicons.js"></script>
    <!-- Owl Carousel -->
    <script src="<?=$app?>assets/js/plugins/owl-carousel/owl.carousel.min.js"></script>
    <!-- jQuery Circle Progress -->
    <script src="<?=$app?>assets/js/plugins/jquery-circle-progress/circle-progress.min.js"></script>
    <!-- Base Js File -->
    <script src="<?=$app?>assets/js/base.js"></script>
    <!-- Channel Filter -->
    <script src="<?=$app?>assets/js/filter.js"></script>
    <!-- Plyr --
    <script src="https://cdn.rawgit.com/video-dev/hls.js/18bb552/dist/hls.min.js"></script>
    <script src='https://cdn.polyfill.io/v2/polyfill.min.js?features=es6,Array.prototype.includes,CustomEvent,Object.entries,Object.values,URL'></script>
    <script src='https://unpkg.com/plyr@3'></script>
    <!-- Othr -->

    <script>
        setTimeout(() => {
            notification('notification-welcome', 5000);
        }, 2000);
    </script>

</body>

</html>