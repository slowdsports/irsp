<script>
//var str = window.atob(getURL);
let getURL = "<?=$getURL?>";
let getKEY = '.$getKEY.';
let getKEY2 = "'.$getKEY2.'";
//var str = "https://opl-n02.cdn-ncplus.pl/live/store01/11Sports4/hd2-dashdrm02/11Sports4.mpd";
var player = new Clappr.Player({
    source: atob(getURL),
    parentId: "#jwp",
    watermark: "http://url/img.png",
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
    autoplay: true,
    muted: true,
    shakaConfiguration: {
        preferredAudioLanguage: "es-MX",
        drm: {
            clearKeys: {getKEY},
        },
    },
});
</script>