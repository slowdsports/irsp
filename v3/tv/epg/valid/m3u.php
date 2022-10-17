<?php
if ($typeChannel == 1 || $typeChannel == 8){
    $core = '<script src="cores/jwp.js"></script>';
    echo '<style>#iframe-element{display:none;} #player_img{display:none}</style>';
    echo '
    <script>
    var source = "'.$channel.'"
    </script>';
    // YouTube Poster
    if (strlen($result['channelUrl']) == 11){
        //$iframeSrc = "//www.youtube.com/embed/" . $result['channelUrl'];
        $iframeSrc = base64_encode($result['channelUrl']);
        $core = '
        <script>
        let getURL = "'.$iframeSrc.'";
        var player = new Clappr.Player({
            source: atob(getURL),
            parentId: "#jwp",
            watermark: "https://eduveel1.github.io/baleada/img/iRTVW_PLAYER.png",
            position: "top-left",
            plugins: [LevelSelector, ClapprPip.PipButton, ClapprPip.PipPlugin, DashShakaPlayback, ChromecastPlugin, ClapprPip.PipButton, ClapprPip.PipPlugin, YoutubePlugin, YoutubePlugin],
            events: {
                onReady: function () {
                    var plugin = this.getPlugin("click_to_pause");
                    plugin && plugin.disable();
                },
            },
            chromecast: {
                appId: "9DFB77C0",
                contentType: "video/mp4",
            },
            gaAccount: "G-Z7958KV9CY",
            gaTrackerName: "MyPlayerInstance",
            height: "100%",
            width: "100%",
            autoPlay: true,
            muted: false,
        });
        </script>
        ';
        echo '
        <style>#jwp{display:block!important;} #iframe-element{display:none!important;} #player_img{display:none} #myTab{display:none}</style>
        ';
    } else {
        echo '<script>var ytposter = ""</script>';
    }
}