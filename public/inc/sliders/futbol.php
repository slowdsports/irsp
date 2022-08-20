<style>
    .row-responsive{
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: stretch;
    }
    .row-responsive .col .card{
        min-height: 90%;
        max-height: 90%;
    }
</style>
<div class="container">
    <div class="row blog">
        <div class="col-md-12">
            <div id="blogCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#blogCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#blogCarousel" data-slide-to="1"></li>
                </ol>

                <?php
                include('../scraper.php');
                $gatotv = "https://www.gatotv.com/canal/";
                $base = $gatotv . "movistar_laliga";
                $url = $app."agenda/play/?c=bar";
                include ('gatotv.php');
                ?>

                <!-- Carousel items -->
                <div class="carousel-inner">
                    <!-- Start Evento -->
                    <div class="carousel-item active">
                        <div class="row row-responsive">
                            <div class="col">
                                <div class="card darkolorbg text-white card-canal">
                                    <a href="<?php echo $url; ?>" class="card-link text-white">
                                        <div class="card-body text-center">
                                            <h4 class="card-title">
                                                <p class="card-text"><?php echo $tipo;?></p>
                                                <img class="text-center" width="35%" src="<?php echo $eventoImg;?>" alt="">
                                            </h4>
                                            <div class="d-flex justify-content-center">
                                                <h5><?php echo $evento;?></h5>
                                            </div>
                                            <p class="card-text">
                                                <?php echo $horaInicio . " - " . $horaFinal;?>
                                            </p>
                                            <p class="live"><?php echo $enVivo;?></p>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <?php
                            $gatotv = "https://www.gatotv.com/canal/";
                            $base = $gatotv . "fox_sports_cono_sur";
                            $url = "tv/epg/?url=fox_sports_cono_sur&c=5";
                            include ('gatotv.php');
                            ?>

                            <div class="col">
                                <div class="card darkolorbg text-white card-canal">
                                    <a href="<?php echo $url; ?>" class="card-link text-white">
                                        <div class="card-body text-center">
                                            <h4 class="card-title">
                                                <p class="card-text"><?php echo $tipo;?></p>
                                                <img class="text-center" width="35%" src="<?php echo $eventoImg;?>" alt="">
                                            </h4>
                                            <div class="d-flex justify-content-center">
                                                <h5><?php echo $evento;?> 2</h5>
                                            </div>
                                            <p class="card-text">
                                                <?php echo $horaInicio . " - " . $horaFinal;?>
                                            </p>
                                            <p class="live"><?php echo $enVivo;?></p>
                                        </div>
                                    </a>
                                </div>
                            </div>



                        </div>
                        <!--.row-->
                    </div>
                    <!-- End Evento -->

                    <!-- Start Evento -->
                    <div class="carousel-item">
                        <div class="row row-responsive">
                        <?php
                        $gatotv = "https://www.gatotv.com/canal/";
                        $base = $gatotv . "espn_sur";
                        $url = "tv/epg/?url=espn_sur&c=1";
                        include ('gatotv.php');
                        ?>
                            <div class="col">
                                <div class="card darkolorbg text-white card-canal">
                                    <a href="<?php echo $url; ?>" class="card-link text-white">
                                        <div class="card-body text-center">
                                            <h4 class="card-title">
                                                <p class="card-text"><?php echo $tipo;?></p>
                                                <img class="text-center" width="35%" src="<?php echo $eventoImg;?>" alt="">
                                            </h4>
                                            <div class="d-flex justify-content-center">
                                                <h5><?php echo $evento;?></h5>
                                            </div>
                                            <p class="card-text">
                                                <?php echo $horaInicio . " - " . $horaFinal;?>
                                            </p>
                                            <p class="live"><?php echo $enVivo;?></p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            
                            
                            
                            <?php
                        $gatotv = "https://www.gatotv.com/canal/";
                        $base = $gatotv . "espn_2_sur";
                        $url = "tv/epg/?url=espn_2_sur&c=2";
                        include ('gatotv.php');
                        ?>
                            <div class="col">
                                <div class="card darkolorbg text-white card-canal">
                                    <a href="<?php echo $url; ?>" class="card-link text-white">
                                        <div class="card-body text-center">
                                            <h4 class="card-title">
                                                <p class="card-text"><?php echo $tipo;?></p>
                                                <img class="text-center" width="35%" src="<?php echo $eventoImg;?>" alt="">
                                            </h4>
                                            <div class="d-flex justify-content-center">
                                                <h5><?php echo $evento;?></h5>
                                            </div>
                                            <p class="card-text">
                                                <?php echo $horaInicio . " - " . $horaFinal;?>
                                            </p>
                                            <p class="live"><?php echo $enVivo;?></p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            
                            
                            
                            
                            
                        </div>
                        <!--.row-->
                    </div>
                    <!-- End Evento -->


                </div>
                <!--.carousel-inner-->
            </div>
            <!--.Carousel-->
        </div>
    </div>
</div>
