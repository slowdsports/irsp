<script src='//cdn.jsdelivr.net/npm/clappr@latest/dist/clappr.min.js'></script>
<script src='//cdn.jsdelivr.net/npm/level-selector@latest/dist/level-selector.min.js'></script>
<script src='//cdn.jsdelivr.net/npm/clappr-pip@latest/dist/clappr-pip.min.js'></script>
<script src='//cdn.jsdelivr.net/npm/dash-shaka-playback@latest/dist/dash-shaka-playback.min.js'></script>
<div id="player"></div>
<script>
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