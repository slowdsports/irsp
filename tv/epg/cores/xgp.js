var playerInstance = jwplayer("jwp");
playerInstance.setup({
    file: atob(source),
    height: "50%",
    width: "80%",
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
