<?php
include('../conn.php');include('../inc/functions.php');
if (isset($_POST['row'])) {
  $start = $_POST['row'];
  $limit = 30;
  $query = "SELECT * FROM channels
  INNER JOIN categories ON channels.category = categories.categoryId
  INNER JOIN countries ON channels.country = countries.countryId
  where type IN ('1','2','3','4','6','7','9','10')
  ORDER BY category DESC
  LIMIT " . $start . "," . $limit;
  $channels = mysqli_query($conn, $query);
  if ($channels->num_rows > 0) {
    while ($result = mysqli_fetch_assoc($channels)) {
?>
      <!-- Elemento -->
      <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2 mycard <?= $result['categoryName'] ?>">
        <a href="<?=$app?>/tv/epg?url=<?= $result['epg'] ?>&c=<?= $result['channelId'] ?>">
          <div class="card product-card liga-card">
            <div class="card-body">
              <center>
                <img width="48px" src="https://i.ibb.co/w0qg9JF/trans.png" style="background-image: url('<?=$app?>/assets/img/canales/<?=$result['channelImg']?>.png');
                background-size: contain;
                background-repeat: no-repeat" class="image" alt="product image">
                <h2 class="title text-center"><?= strtoupper($result['channelName']) ?></h2>
              </center>
            </div>
          </div>
        </a>
      </div>
      <!-- End Elemento -->
      <?php }
      }
    }
    ?>