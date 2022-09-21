<?php
    if (isset($_GET['id'])){
    $id = $_GET['id'];
    $juego=mysqli_query($conn,"select * from agenda
    INNER JOIN ligas ON agenda.liga = ligas.ligaId
    where id='".$id."'");
    $ress=mysqli_fetch_assoc($juego);
    $local = $ress['local'];
    $visita = $ress['visita'];
    $liga = $ress['ligaImg'];
    if ($liga == "nba"){
        include('../../agenda/basket/nba/teams.php');
    } elseif ($liga == "mlb"){
        include('../../agenda/mlb/teams.php');
    } elseif ($liga == "nfl" || $liga == "nations"){
        //include('../../agenda/nfl/teams.php');
    }
    if (isset($_GET['futbol'])){
        include('../../agenda/futbol/liga/teams.php');
    }
    include('../../inc/cntdwn.php');
    ?>
    <div class="card product-card">
        <div class="main-event">
            <div class="league">
                <img src="<?=$app?>assets/img/ligas/<?=$ress['ligaImg']?>.png" alt="League" />
                <p class="cntdwn-<?=$index?>"></p>
            </div>
            <div class="match">
                <div class="team">
                    <img width="60px" src="<?=$app?>assets/img/equipos/<?=strtolower($ress['ligaImg'])?>/<?=str_replace(' ', '', strtolower($local)); ?>.png" alt="" />
                    <h4><?=ucfirst($local)?></h4>
                </div>
                <div class="vs">
                    <h6>vs</h6>
                </div>
                <div class="team">
                    <img width="60px" src="<?=$app?>assets/img/equipos/<?=strtolower($ress['ligaImg'])?>/<?=str_replace(' ', '', strtolower($visita)); ?>.png" alt="" />
                    <h4><?=ucfirst($visita)?></h4>
                </div>
            </div>
            <div class="channel"><img src="<?=$app?>assets/img/canales/<?=($canalImg===null)?"cincoestrellas":$canalImg ?>.png" alt="" /></div>
        </div>
    </div>
    <?php }?>
</div>