window.onload = function () {
    var player = new Clappr.Player({
        source: atob(source),
        //source: "http://audiotvserver.net:1935/livemedia/cholusat/playlist.m3u8",
        parentId: "#jwp",
        mimeType: "audio/mpeg",
        watermark: "https://eduveel1.github.io/baleada/img/iRTVW_PLAYER.png",
        position: "top-left",
        plugins: [LevelSelector, ChromecastPlugin, ClapprPip.PipButton, ClapprPip.PipPlugin],
        events: {
            onReady: function () {
                var plugin = this.getPlugin("click_to_pause");
                plugin && plugin.disable();
            },
        },
        height: "100%",
        width: "100%",
        autoPlay: true,
        mute: false,
    });
};
