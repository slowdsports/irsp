<div class="section full mt-3 mb-3 container">
    <h2> Relacionados </h2>
    <div class="carousel-multiple owl-carousel owl-theme">
        <?php
        $query = mysqli_query($conn, "select * from channels where category='" . $categoriaActual . "' ORDER BY RAND() LIMIT 10");
        while ($result = mysqli_fetch_array($query)) {
            $channel = $result['channelName'];
            $url = $result['channelId'];
            $img = $result['channelImg'];
            $epg = $result['epg'];
        ?>
            <a href="<?= $app ?>/tv/epg?url=<?= $epg ?>&c=<?= $url ?>">
                <div class="item">
                    <div class="card">
                        <center>
                            <img src="<?= $app ?>/assets/img/canales/<?= $img ?>.png" class="image" alt="image">
                            <div class="card-body">
                                <p class="text text-center">
                                    <?= $channel; ?>
                                </p>
                            </div>
                        </center>
                    </div>
                </div>
            </a>
        <?php }
