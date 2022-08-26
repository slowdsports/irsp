var mt = "//edge-live15-sl";
var playerInstance = jwplayer("jwp");
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