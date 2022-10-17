<?php
if ($typeChannel == 11){
    // Recargar página con SSL
    echo '<script>
    if (window.location.protocol != "https:") {
        location.href =   location.href.replace("http://", "https://");
    }
    </script>';
    $requested = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    $getURL = base64_encode($result['channelUrl']);
    $getKEY = $result['key1'];
    $getKEY2 = $result['key2'];
    echo '
    <script>
    let getURL = "'.$getURL.'";
    let getKEY = '.$getKEY.';
    let getKEY2 = "'.$getKEY2.'";
    </script>
    <style>#jwp{display:block!important} #iframe-element{display:none!important;} #vidarea{display:none} #player_img{display:none}</style>';
    $core = '
    <script>
    let getURL = "'.$getURL.'";
    var player = new Clappr.Player({
        source: atob(getURL),
        parentId: "#jwp",
        watermark: "https://eduveel1.github.io/baleada/img/iRTVW_PLAYER.png",
        position: "top-left",
        plugins: [LevelSelector, ClapprPip.PipButton, ClapprPip.PipPlugin, DashShakaPlayback, ChromecastPlugin, ClapprPip.PipButton, ClapprPip.PipPlugin],
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
        shakaConfiguration: {
            preferredAudioLanguage: "es-MX",
            drm: {
                clearKeys: {'.$getKEY.'},
            },
        },
    });
    </script>
    ';
}