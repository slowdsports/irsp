<?php
include('includes/header.php');
    // Get Liga
    $liga = $_GET['liga'];
    if ($liga == ""){
        $liga = 1;
    }
    $queryScrap=mysqli_query($conn,"select * from ligas
    INNER JOIN scraper ON ligas.scraper = scraper.scraperId
    where ligaId='$liga'");
    $scrap=mysqli_fetch_array($queryScrap);
    $scraper = str_replace(" ", "", $scrap['scraperName']) ;
    $base = str_replace(" ", "", $scrap['url']);

    if(!isset($scraper)){
        $scraper = "movistar";
    }
// code for Deleting
if(isset($_GET['id'])){
    $gameId=$_GET['id'];
    $msg=mysqli_query($conn,"delete from agenda where id='$gameId'");
    if($msg){
        echo '
        <script>
        alert("Se ha eliminado el juego");
        </script>';
    }
}
//Code for Deleting Data
if(isset($_POST['delete'])){
    $msg=mysqli_query($conn,"delete from agenda where liga='$liga'");
    if($msg){
        echo '
        <script>
        alert("Se ha elminado la data de la liga");
        </script>
        "; echo "
        <script type="text/javascript">
        document.location = "manage-agenda.php";
        </script>
        ';
    }
}
//Code for Truncate
if(isset($_POST['truncate'])){
    $msg=mysqli_query($conn,"truncate table agenda");
    if($msg){
        echo '
        <script>
        alert("Se ha limpiado la tabla");
        </script>
        "; echo "
        <script type="text/javascript">
        document.location = "manage-agenda.php";
        </script>
        ';
    }
}

//Code for Cleaning
if(isset($_POST['clean'])){
    $msg=mysqli_query($conn,"delete from agenda where local='' and visita=''");
    if($msg){
        echo '
        <script>
        alert("Se ha limpiado las entradas en blanco de la tabla");
        </script>
        "; echo "
        <script type="text/javascript">
        document.location = "manage-agenda.php";
        </script>
        ';
    }
}
?>
    <div class="main-panel">
    <div class="content-wrapper">

                        <div class="row">
                            <div class="col-12">
                                    <!-- Select -->
                                    <form method="get">
                                        <div class="input-group">
                                            <select class="custom-select" id="inputGroupSelect04" name="liga" id="liga">
                                                <option selected>Selecciona Liga</option>
                                                <?php
                                                $ligaDrop=mysqli_query($conn,"select * from ligas");
                                                $cnt=1;
                                                while($ligas=mysqli_fetch_array($ligaDrop)){
                                                ?>
                                                <option
                                                <?php if ($ligas['ligaId'] == $liga ){echo "selected";} ?>
                                                value="<?php echo $ligas['ligaId'] ?>"><?php echo $ligas['ligaName'] ?></option>
                                                <?php
                                                $cnt=$cnt+1; } ?>
                                            </select>
                                            <div class="input-group-append">
                                                <button type="submit" class="btn btn-outline-secondary" name="selectLiga" type="button">Seleccionar</button>
                                            </div>
                                        </div>
                                    </form>
                            </div>
                            <div class="col-12">
                                <form method="post">
                                    <button type="submit" class="btn btn-outline-primary btn-block" name="create"><i class="fa fa-plus"></i> Update Data</button>
                                    <button type="submit" class="btn btn-outline-warning btn-block" name="delete"><i class="fa fa-trash"></i> Delete Data</button>
                                    <button type="submit" class="btn btn-outline-danger btn-block" name="truncate"><i class="fa fa-trash"></i> Truncate Table</button>
                                    <button type="submit" class="btn btn-outline-primary btn-block" name="clean"><i class="fa fa-file"></i> Clean Blank Rows</button>
                                </form>
                                <a href="add-agenda.php" class="btn btn-outline-success btn-block"><i class="fa fa-plus"></i> Add Match</a>
                            </div>
                        </div>

                        <hr />

                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                <?php
                                echo "Afectando: ".
                                $scrap['ligaName'].
                                " mediante: ".
                                $scrap['scraperName'] ?>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Local</th>
                                            <th>Visita</th>
                                            <th>Canal</th>
                                            <th>Canal 2</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>Local</th>
                                            <th>Visita</th>
                                            <th>Canal</th>
                                            <th>Canal 2</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        $scraper = "scraper/" . $scraper. ".php";
                                        include ($scraper);?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </body>
</html>
<?php include('includes/footer.php'); ?>