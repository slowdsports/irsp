<?php
include('../conn.php');
if (isset($_POST['row'])) {
  $start = $_POST['row'];
  $limit = 3;
  $query = "SELECT * FROM channels ORDER BY channelId desc LIMIT ".$start.",".$limit;
  $result = mysqli_query($conn,$query);
  if ($result->num_rows > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      ?>
      <div class="post"><?php echo $row['channelName']; ?></div>
    <?php }
  }
}
?>