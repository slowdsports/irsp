<?php
if ($typeChannel == 10) {
    // Recargar página con SSL
    echo '<script>
    if (window.location.protocol != "https:") {
        location.href =   location.href.replace("http://", "https://");
    }
    </script>';
    $requested = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    $twitchEmbed = '<div id="twitch-embed"></div>
    <script src="https://embed.twitch.tv/embed/v1.js"></script>
    <script type="text/javascript">
        var embed = new Twitch.Embed("twitch-embed", {
            width: "100%",
            height: "480",
            channel: atob("' . $channel . '"),
            layout: "video",
            autoplay: false,
            parent: ["iraffle.live", "irafflevip.tk", "localhost"]
        });

        embed.addEventListener(Twitch.Embed.VIDEO_READY, () => {
            var player = embed.getPlayer();
            player.play();
        });
    </script>
    <style>#twitch-embed{display:block!important} #jwp{display:none!important;} #iframe-element{display:none!important;} #vidarea{display:none} #player_img{display:none}</style>
    ';
}
