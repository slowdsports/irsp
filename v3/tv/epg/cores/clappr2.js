var playerElement = document.getElementById("jwp");

var player = new Clappr.Player({
    source: atob(source),
    watermark: "https://eduveel1.github.io/baleada/img/iRTVW_PLAYER.png",
    position: "top-left",
    autoPlay: true,
    mute: false,
    height: '100%',
    width: '100%'
});

player.attachTo(playerElement);