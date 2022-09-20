var playerInstance = jwplayer("jwp");
playerInstance.setup({
    file: atob(source),
    //file: "https://5caf24a595d94.streamlock.net:1937/8142/8142/playlist.m3u8",
    //file: source,
    //height: "50%",
    //width: "100%",
    aspectratio: "16:9",
    stretching: "bestfit",
    image: "#",
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
// Preview Hack
setTimeout(function() {
    jwplayer().setMute(false);
    jwplayer().setControls(true);
    },1000);
    jwplayer().onTime(function(object) {
        if (object.position > object.duration - 1) {
            jwplayer().pause();
        }
    });
    function goFullscreen(id) {
        // Get the element that we want to take into fullscreen mode
        var element = document.getElementById("jwp");
        // These function will not exist in the browsers that don't support fullscreen mode yet,
        // so we'll have to check to see if they're available before calling them.
        if (element.mozRequestFullScreen) {
            // This is how to go into fullscren mode in Firefox
            // Note the "moz" prefix, which is short for Mozilla.
            element.mozRequestFullScreen();
        } else if (element.webkitRequestFullScreen) {
            // This is how to go into fullscreen mode in Chrome and Safari
            // Both of those browsers are based on the Webkit project, hence the same prefix.
            element.webkitRequestFullScreen();
        }
        // Hooray, now we're in fullscreen mode!
    }
