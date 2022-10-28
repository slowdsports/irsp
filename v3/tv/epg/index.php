<?php
session_start();
include('../../conn.php');
$query = mysqli_query($conn, "select * from user where userid='" . $_SESSION['id'] . "'");
$result = mysqli_fetch_assoc($query);
$channel = $_GET['c'];
$query = mysqli_query($conn, "select * from channels
INNER JOIN channeltype ON channels.type = channeltype.typeId
INNER JOIN categories ON channels.category = categories.categoryId
INNER JOIN countries ON channels.country = countries.countryId
where channelId='" . $channel . "'");
$result = mysqli_fetch_assoc($query);
$channel = $result['channelUrl'];
$key1 = $result['key1'];
$key2 = $result['key2'];
$typeChannel = $result['typeId'];
$channel = base64_encode($channel);
echo $channel;
?>
<script>
    if (window.location.protocol != "https:") {
        location.href =   location.href.replace("http://", "https://");
    }
</script>
<script src="https://ssl.p.jwpcdn.com/player/v/8.24.0/jwplayer.js"></script>
<script>
    jwplayer.key = 'XSuP4qMl+9tK17QNb+4+th2Pm9AWgMO/cYH8CI0HGGr7bdjo';
</script>
<div id="jwp"></div>
<script>
    var getURL = "<?= $channel ?>";
    var getKEY = "<?= $key1 ?>";
    var getKEY2 = "<?= $key2 ?>";
    var playerInstance = jwplayer("jwp");

    playerInstance.setup({
        playlist: [{
            //image: atob(getIMG),
            sources: [{
                default: false,
                type: "dash",
                file: atob(getURL),
                drm: {
                    clearkey: {
                        keyId: atob(getKEY),
                        key: atob(getKEY2)
                    },
                },
                label: "0",
            }, ],
        }, ],
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
</script>