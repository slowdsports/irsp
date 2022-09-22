<?php
session_start();
$_SESSION['referer'] = "//" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')) {
    header("location: ../login.php");
} else
include('../inc/header.php'); include('../conn.php');
$query=mysqli_query($conn,"select * from user where userid='".$_SESSION['id']."'");
$row=mysqli_fetch_assoc($query);
// Si el usuario es free
if ($row['type'] == 2 && $row['fecha'] == null){
    $_SESSION['userType'] = "free";
    header ("location: ../premium-upgrade.php");
}
?>


<!-- App Capsule -->
<div id="appCapsule" class="extra-header-active">

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
<div class="container">
    <div class="header-large-title container">
        <h1 class="title"><?=ucfirst($row['fullname'])?></h1>
        <h4 class="subtitle">¿Qué quieres ver hoy?</h4>
    </div>
</div>

<!-- Alerta --
<br>
<div class="container">
    <div class="alert alert-info text-center" role="alert">
        <ion-icon name="information-circle-outline"></ion-icon> Esta sección está actualmente en mantenimiento
    </div>
</div>
<br>
<!-- *Alerta -->

<!-- Filter --
<style>
    .mycard {
        display: none;
    }
    .show {
        display: block;
    }
</style>

<div class="section full mb-3">
    <div class="container text-center">
        <div class="section-title">Filtar:</div>

        <div class="carousel-small owl-carousel owl-theme">
            <div class="item" onclick="filterSelection('all')">
                <ion-icon size="large" name="apps-outline"></ion-icon>
                <p class="text-center">Todo</p>
            </div>
            <?php
            $categ = mysqli_query($conn, "select * from categories");
            while($cat=mysqli_fetch_array($categ)){
            ?>
            <div class="item" onclick="filterSelection('<?=$cat['categoryName']?>')">
                <ion-icon size="large" name="<?=$cat['categoryIcon']?>-outline"></ion-icon>
                <p class="text-center"><?=$cat['categoryName']?></p>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
<!-- *Filter -->

<!-- Search Form -->
<div class="extraHeader">
    <div class="container">
        <form class="search-form">
            <div class="form-group searchbox">
                <input id="channelSearch" onkeyup="myFunction()" type="text" class="form-control" placeholder="Buscar..." />
                <i class="input-icon"> <ion-icon name="search-outline" role="img" class="md hydrated" aria-label="search outline"></ion-icon> </i>
            </div>
        </form>
    </div>
</div>
<!-- * Search Form -->

<!-- Categorías -->
    <div class="section mt-2">
        <div class="container">
            <div id="channelsList" class="row">
                <?php
                ?>
                <!-- Pluto TV -->
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2 mycard Entretenimiento show">
                    <a href="<?=$referer?>?pluto">
                        <form method="get">
                            <div class="card product-card liga-card">
                                <div class="card-body">
                                    <center>
                                    <img width="48px" src="https://i.ibb.co/w0qg9JF/trans.png" style="background-image: url('<?=$app?>/assets/img/canales/plutotvw.png');
                                    background-size: contain;
                                    background-repeat: no-repeat" class="image" alt="product image">
                                    <h2 class="title text-center">Pluto TV</h2>
                                    </center>
                                </div>
                            </div>
                        </form>
                    </a>
                </div>
                <!-- *Pluto TV -->
                <?php
                if(isset($_GET['pluto'])){
                    $channels = mysqli_query($conn, "select * from channels
                    INNER JOIN categories ON channels.category = categories.categoryId
                    INNER JOIN countries ON channels.country = countries.countryId
                    where type IN ('8') ORDER BY category DESC");
                } else {
                $channels = mysqli_query($conn, "select * from channels
                INNER JOIN categories ON channels.category = categories.categoryId
                    INNER JOIN countries ON channels.country = countries.countryId
                    where type IN ('1','2','3','4','6','7','9','10') ORDER BY category DESC");
                }
                while($result=mysqli_fetch_array($channels)){
                ?>
                <!-- Elemento -->
                <div style="<?php
                $channelUrl = $result['channelUrl'];
                $find = strpos($channelUrl, "arlocaltstvhls");
                $find2 = strpos($channelUrl, "cvattv");
                if ($find !== false){
                    echo "display: none";
                } if ($find2 !== false){
                    echo "display: none";
                };
                ?>" class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2 mycard <?=$result['categoryName']?>">
                    <a href="<?=$app?>/tv/epg?url=<?=$result['epg']?>&c=<?=$result['channelId']?>">
                        <div class="card product-card liga-card">
                            <div class="card-body">
                                <center>
                                <img width="48px" src="https://i.ibb.co/w0qg9JF/trans.png" style="background-image: url('<?=$app?>/assets/img/canales/<?=$result['channelImg']?>.png');
                                background-size: contain;
                                background-repeat: no-repeat" class="image" alt="product image">
                                <h2 class="title text-center"><?=strtoupper($result['channelName'])?></h2>
                                </center>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- End Elemento -->
                <?}?>

            </div>
        </div>
    </div>
<!-- End Categorías -->
<script>
filterSelection("all");
function filterSelection(c) {
    var x, i;
    x = document.getElementsByClassName("mycard");
    if (c == "all") c = "";
    for (i = 0; i < x.length; i++) {
        irspRemoveClass(x[i], "show");
        if (x[i].className.indexOf(c) > -1) irspAddClass(x[i], "show");
    }
}

function irspAddClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
        if (arr1.indexOf(arr2[i]) == -1) {
            element.className += " " + arr2[i];
        }
    }
}

function irspRemoveClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
        while (arr1.indexOf(arr2[i]) > -1) {
            arr1.splice(arr1.indexOf(arr2[i]), 1);
        }
    }
    element.className = arr1.join(" ");
}

// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("item");
for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function () {
        var current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active", "");
        this.className += " active";
    });
}
</script>
<?php
include('../inc/navbar.php');
?>