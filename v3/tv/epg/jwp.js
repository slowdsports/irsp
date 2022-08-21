var playerInstance = jwplayer("jwp");
playerInstance.setup({
    file: atob(source),
    //file: "https://5caf24a595d94.streamlock.net:1937/8142/8142/playlist.m3u8",
    //file: source,
    height: "50%",
    width: "100%",
    aspectratio: "16:9",
    stretching: "bestfit",
    image: "#",
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
