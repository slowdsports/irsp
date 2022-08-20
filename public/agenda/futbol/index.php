<?php
session_start();
if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')) {
    header("location: ../../login.php");
} else
include('../../inc/header.php'); include('../../conn.php');
$query=mysqli_query($conn,"select * from user where userid='".$_SESSION['id']."'");
$row=mysqli_fetch_assoc($query);
?>

<!-- App Capsule -->
<div id="appCapsule">

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
    <h1 class="title"><?=ucfirst($row['fullname'])?>,</h1>
    <h4 class="subtitle">¿Qué quieres ver hoy?</h4>
</div>

<!-- Categorías -->
    <div class="section mt-2">
        <div class="row">
            <?php
            $ligas = mysqli_query($conn, "select * from ligas ");
            while($result=mysqli_fetch_array($ligas)){
                // Cantidad de Juegos
                $index = $i++;
                $queryQty=mysqli_query($conn,"select * from agenda where liga = $index");
                $totalGames=mysqli_num_rows($queryQty);
                if ($totalGames == 0){
                    $ligaStatus = "hidden";
                } elseif ($totalGames >= 1){
                    $ligaStatus = "show";
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
<?php
include('../../inc/navbar.php');
?>