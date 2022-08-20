<?php
session_start();
if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')) {
    header("location: ../login.php");
} else
include('../inc/header.php'); include('../conn.php');
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

<!-- Alerta -->
<div class="container">
    <div class="alert alert-info text-center" role="alert">
        <ion-icon name="information-circle-outline"></ion-icon> Esta sección está actualmente en mantenimiento
    </div>
</div>
<!-- *Alerta -->

<!-- Categorías -->
    <div class="section mt-2">
        <div class="row">
            <?php
            $channels = mysqli_query($conn, "select * from channels
            INNER JOIN categories ON channels.category = categories.categoryId
                INNER JOIN countries ON channels.country = countries.countryId
                where type IN ('1','2','3','4','6') ORDER BY category DESC");
            while($result=mysqli_fetch_array($channels)){
            ?>
            <!-- Elemento -->
            <div class="col-6 col-sm-4 col-md-3 mycard">
                <a href="epg?url=<?=$result['epg']?>&c=<?=$result['channelId']?>">
                    <div class="card product-card liga-card">
                        <div class="card-body">
                            <center>
                            <img width="48px" src="https://i.ibb.co/w0qg9JF/trans.png" style="background-image: url('<?=$result['channelImg']?>');
                            background-size: contain;
                            background-repeat: no-repeat" class="image" alt="product image">
                            <h2 class="title text-center"><?=$result['channelName']?></h2>
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
include('../inc/navbar.php');
?>