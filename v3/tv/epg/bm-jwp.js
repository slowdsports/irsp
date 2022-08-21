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
                        "value": atob("T0F1dGggb2F1dGhfY29uc3VtZXJfa2V5PTQ0ODdmYjY1NGRmZjUyMWYyNWUwMzhkMTNmY2U2N2ViY2MwNmI0ZWJlNjY4YWQ4ZmUyNWI3ODZlYzNjY2FhOGIsIG9hdXRoX25vbmNlPW01R1RMRywgb2F1dGhfc2lnbmF0dXJlPWN4RmRiV2hVdk1UQlJiWUpzY0dZek5aRmNSZyUzRCwgb2F1dGhfc2lnbmF0dXJlX21ldGhvZD1ITUFDLVNIQTEsIG9hdXRoX3RpbWVzdGFtcD0xNjUwNTg0OTE4LCBvYXV0aF92ZXJzaW9uPTEuMA==")
                    }],
                    "url": atob("Ly9hcGkuYmxpbS5jb20vbGljZW5zZS93aWRldmluZQ==")
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
