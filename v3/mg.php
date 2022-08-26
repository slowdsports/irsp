<script src="https://ssl.p.jwpcdn.com/player/v/8.24.0/jwplayer.js"></script>
<script> jwplayer.key='XSuP4qMl+9tK17QNb+4+th2Pm9AWgMO/cYH8CI0HGGr7bdjo';</script>

<?php
$getURL = $_GET['get'];
$getKEY = $_GET['key'];
$getKEY2 = $_GET['key2'];
echo '
<script>
let getURL = "'.$getURL.'";
let getKEY = "'.$getKEY.'";
let getKEY2 = "'.$getKEY2.'";
</script>';
?>

<div id="player"></div>
<script>
var mt = "//edge-live15-sl";
var playerInstance = jwplayer("player");
playerInstance.setup({
    playlist: [
        {
            sources: [
                {
                    default: false,
                    file: mt + atob(getURL),
                    drm: {
                        clearkey: { keyId: atob(getKEY), key: atob(getKEY2) },
                    },
                    label: "0",
                },
            ],
        },
    ],
    width: "100%",
    height: "100%",
    aspectratio: "16:9",
    mute: false,
    autostart: false,
    cast: {},
    sharing: {},
});
</script>