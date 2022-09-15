jwplayer.key = "XSuP4qMl+9tK17QNb+4+th2Pm9AWgMO/cYH8CI0HGGr7bdjo";
var playerInstance = jwplayer("jwp");
playerInstance.setup({
    playlist: [{
        "sources": [{
            "file": "//channel-goldenmpx-cdn.blim.com/manifest.mpd",
            "drm": {
                "widevine": {
                    "headers": [{
                        "name": "authorization",
                        "value": atob("T0F1dGggb2F1dGhfY29uc3VtZXJfa2V5PTMzZWVlZjMyOWZkMzEyNzQzN2Q0YWJjZmFkN2U5MjE0NGM3ODUyMTVmZDA3MmUyZGRkMzYwMjhlZDVmNGIwNjMsIG9hdXRoX25vbmNlPURHQk01Qiwgb2F1dGhfc2lnbmF0dXJlPWxwa3NFSUM0TkhkbnV1U3Q5czNnOUR1bzdRQSUzRCwgb2F1dGhfc2lnbmF0dXJlX21ldGhvZD1ITUFDLVNIQTEsIG9hdXRoX3RpbWVzdGFtcD0xNjUwOTk1ODI2LCBvYXV0aF92ZXJzaW9uPTEuMA==")
                    }],
                    "url": atob("Ly9hcGkuYmxpbS5jb20vbGljZW5zZS93aWRldmluZQ==")
                }
            }
        }]
    }],
    width: "100%",
    height: "100%",
    autostart: false
});