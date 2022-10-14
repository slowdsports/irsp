<form method="GET">
    <?php
    include('conn.php');
    if (isset($_GET['c'])){
        $getChannel = $_GET['c'];
        $query = mysqli_query($conn, "select * from channels where channelId='$getChannel'");
        $row = mysqli_fetch_assoc($query);
        $url = $row['channelUrl'];
    } else {
        //echo "Selecciona un canal";
    }
    $query = mysqli_query($conn, "select * from channels where type=1");
    while($row = mysqli_fetch_assoc($query)){
        ?>
        <button value="<?=$row['channelId']?>" name="c" type="submit"><?=$row['channelName']?></button>
        <?php
    }
    ?>
</form>
<script src="https://ssl.p.jwpcdn.com/player/v/8.24.0/jwplayer.js"></script>
<script> jwplayer.key='XSuP4qMl+9tK17QNb+4+th2Pm9AWgMO/cYH8CI0HGGr7bdjo';</script>
<div id="jwp"></div>
<script>
    var playerInstance = jwplayer("jwp");
    playerInstance.setup({
        playlist: [
            {
                sources: [
                    {
                        default: false,
                        file: '<?=$url?>',
                        //drm: {
                            //clearkey: { keyId: atob(getKEY), key: atob(getKEY2) },
                        //},
                        label: "0",
                    },
                ],
            },
        ],
        //height: "50%",
        //width: "100%",
        aspectratio: "16:9",
        stretching: "bestfit",
        mediaid: "player",
        mute: false,
        autostart: true,
        language: "es",
        cast: {
            appid: "player",
            logo: "https://eduveel1.github.io/baleada/img/iRTVW_PLAYER.png",
        },
        logo: {
            file: "https://eduveel1.github.io/baleada/img/iRTVW_PLAYER.png",
            hide: "false",
            position: "top-left",
        }
    });
    jwplayer().setMute(false);
</script>