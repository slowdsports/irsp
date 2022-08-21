window.onload = function () {
    var clappr = new Clappr.Player({
        //source: atob(source),
        source: "http://audiotvserver.net:1935/livemedia/cholusat/playlist.m3u8",
        parentId: "#clappr",
        mimeType: "audio/mpeg",
        watermark: "https://eduveel1.github.io/baleada/img/iRTVW_PLAYER.png",
        position: "top-left",
        plugins: [LevelSelector, ChromecastPlugin, ClapprPip.PipButton, ClapprPip.PipPlugin, DashShakaPlayback, Clappr.MediaControl, PlaybackRatePlugin],
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
        shakaConfiguration: {
            manifest: { retryParameters: { maxAttempts: Infinity } },
            streaming: { retryParameters: { maxAttempts: Infinity } },
            drm: { retryParameters: { maxAttempts: Infinity } },
        },
        playbackRateConfig: {
            defaultValue: "1.00x",
            options: [
                { value: "0.10", label: "0.10x" },
                { value: "0.25", label: "0.25x" },
                { value: "0.50", label: "0.50x" },
                { value: "0.75", label: "0.75x" },
                { value: "1.00", label: "1.00x" },
                { value: "1.25", label: "1.25x" },
                { value: "1.50", label: "1.50x" },
                { value: "1.75", label: "1.75x" },
                { value: "2.00", label: "2.00x" },
            ],
        },
    });
};
