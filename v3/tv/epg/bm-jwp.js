jwplayer.key = "XSuP4qMl+9tK17QNb+4+th2Pm9AWgMO/cYH8CI0HGGr7bdjo";
var playerInstance = jwplayer("jwp");
playerInstance.setup({
    playlist: [{
        "sources": [{
            "file": atob(source),
            "drm": {
                "widevine": {
                    "headers": [{
                        "name": "authorization",
                        "value": atob(getKEY)
                    }],
                    "url": atob(getKEY2)
                }
            }
        }]
    }],
    width: "80%",
    height: "50%",
    aspectratio: "16:9",
    stretching: "bestfit",
    image: "#",
    mediaid: "player",
    mute: false,
    autostart: true,
    language: "es",
});
