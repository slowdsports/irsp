<?php
if(!empty($_POST["channelId"])){

//Include DB configuration file
require '../conn.php';

//Get last ID
$lastID = $_POST['channelId'];

//Limit on data display
$showLimit = 30;

//Get all rows except already displayed
$queryAll = $conn->query("SELECT COUNT(*) as num_rows FROM channels WHERE channelId < ".$lastID." ORDER BY channelId DESC");
$rowAll = $queryAll->fetch_assoc();
$allNumRows = $rowAll['num_rows'];

//Get rows by limit except already displayed
$query = $conn->query("SELECT * FROM channels WHERE channelId < ".$lastID." ORDER BY channelId DESC LIMIT ".$showLimit);

if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        $postID = $row["channelId"]; ?>
<div class="list-item"><h4><?php echo $row['channelName']; ?></h4></div>
<?php } ?>
<?php if($allNumRows > $showLimit){ ?>
    <div class="load-more" lastID="<?php echo $postID; ?>" style="display: none;">
        <img src="https://www.codexworld.com/wp-content/uploads/2014/09/codexworld-logo.png"/>
    </div>
<?php }else{ ?>
    <div class="load-more" lastID="0">
        That's All!
    </div>
<?php }
}else{ ?>
    <div class="load-more" lastID="0">
        That's All!
    </div>
<?php
    }
}
?>