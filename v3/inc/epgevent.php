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
        $localImg = $local;
        $visitaImg = $visita;
    } elseif ($liga == "mlb"){
        include('../../agenda/mlb/teams.php');
        $localImg = $local;
        $visitaImg = $visita;
    } elseif ($liga == "nfl"){
        $localImg = $ress['local'];
        $visitaImg = $ress['visita'];
        include('../../agenda/nfl/teams.php');
    } elseif ($liga == "balonmano"){
        $localImg = $ress['local'];
        $visitaImg = $ress['visita'];
        include('../../agenda/balonmano/teams.php');
    } elseif ($liga == "eventos"){
        $localImg = $ress['local'];
        $isEventoHidden = 'style="display:none"';
    } else {
        $localImg = $ress['local'];
        $visitaImg = $ress['visita'];
        $isEventoHidden = "";
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
                    <img width="60px" src="<?=$app?>assets/img/equipos/<?=strtolower($ress['ligaImg'])?>/<?=str_replace(' ', '', strtolower($localImg)); ?>.png" alt="" />
                    <h4><?=ucfirst($local)?></h4>
                </div>
                <div <?=$isEventoHidden?> class="vs">
                    <h6>vs</h6>
                </div>
                <div <?=$isEventoHidden?> class="team">
                    <img width="60px" src="<?=$app?>assets/img/equipos/<?=strtolower($ress['ligaImg'])?>/<?=str_replace(' ', '', strtolower($visitaImg)); ?>.png" alt="" />
                    <h4><?=ucfirst($visita)?></h4>
                </div>
            </div>
            <div class="channel"><img src="<?=$app?>assets/img/canales/<?=($canalImg===null)?"cincoestrellas":$canalImg ?>.png" alt="" /></div>
        </div>
    </div>
    <?php }?>
</div>