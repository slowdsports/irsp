var playerInstance = jwplayer("jwp");
playerInstance.setup({
    playlist: [
        {
            sources: [
                {
                    default: false,
                    file: atob(getURL),
                    drm: {
                        clearkey: { keyId: atob(getKEY), key: atob(getKEY2) },
                    },
                    label: "0",
                },
            ],
        },
    ],
    height: "50%",
    width: "100%",
    aspectratio: "16:9",
    stretching: "bestfit",
    mediaid: "player",
    mute: false,
    autostart: false,
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