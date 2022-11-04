
<html>
<head>
  <title>Reproductor M3U8 & MPD Player</title>
  <style type="text/css">body{margin:0 auto;}</style>
</head>
<body>
<script src="//cdn.jsdelivr.net/npm/clappr@latest/dist/clappr.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/level-selector@latest/dist/level-selector.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/clappr-pip@latest/dist/clappr-pip.min.js"></script>
<script src="//cdn.jsdelivr.net/gh/clappr/dash-shaka-playback@latest/dist/dash-shaka-playback.min.js"></script>


<div id="player"></div>
<script>
    let url = "http://213.239.217.94:8080/live/admin/slowdmelendez360/1.m3u8";
    function playM3u8(url, license, clearkeys) {
    var player = new Clappr.Player({
        source: url,
        parentId: '#player',
        preload: 'auto',
        autoPlay: 'true',
        width: '100%',
        height: '100%',
        fullscreenEnabled: 'true',
        hideMediaControl: 'false',
        plugins: [LevelSelector, ClapprPip.PipButton, ClapprPip.PipPlugin, DashShakaPlayback],
        shakaConfiguration: {
            drm: {
                servers: {
                    'com.widevine.alpha': license
                },
                clearKeys: JSON.parse(clearkeys)
            },
        },

    });

    document.title = url; //.split('/')[url.split('/').length - 1];
    }
    var url = window.location.href.split("#")[1];
    try {
    ck = window.atob(window.location.href.split("&ck=")[1]);
    } catch{
    ck = '{"":""}';
    }
    try {
    license = window.atob(window.location.href.split("&l=")[1]);    
    } catch {
    license = '';
    }
    playM3u8(url, license, ck);
</script>
</body>
</html>