
<script type="text/javascript">
function getParameterByName(name) {
	name = name.replace(/[\[]/, "\[").replace(/[\]]/, "\]");
	var regex = new RegExp("[\?&]" + name + "=([^&#]*)"),
	results = regex.exec(location.search);
	return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}

// var getURL = getParameterByName('get');
// var getIMG = getParameterByName('img');
// var getKEY  = getParameterByName('key');
// var getKEY2  = getParameterByName('key2');

var getURL = "aHR0cHM6Ly9jcnl0b25lcC5oZXJva3VhcHAuY29tL2h0dHBzOi8vbWxhbGlnYS1kYXNoLW1vdmlzdGFycGx1cy5lbWlzaW9uZG9mNi5jb20vZGFzaC9tbGFsaWdhLmlzbWwvbWFuaWZlc3QubXBk";
var getIMG
var getKEY = "MjU1Zjg3OTE1NzE0NGNlYTkyMzliM2M4M2RmZjUxODI=";
var getKEY2 = "ZWU3OTg0Y2M2OWEzMTUyYzMxMjU5ZmFlMTZiZjk2YzM=";
</script>
<script src='https://content.jwplatform.com/libraries/KB5zFt7A.js'></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.0.0/crypto-js.min.js"></script>
<script> jwplayer.key='XSuP4qMl+9tK17QNb+4+th2Pm9AWgMO/cYH8CI0HGGr7bdjo';</script>
<div id="player"></div>
<script type="text/javascript">
var playerInstance=jwplayer("player");

playerInstance.setup({

    playlist: [{
    "title": "REPRODUCTOR | Mega Televisi&oacute;n",
    "description": "EN VIVO",
    "image": getIMG,
      "sources": [
        {
          "default": false,
          "type": "dash",
          "file": atob(getURL),
          "drm": {
            "clearkey": {"keyId": atob(getKEY), "key": atob(getKEY2)}
          },
          "label": "0"
        }
      ]
    }],
    width: "100%",
    height: "100%",
    aspectratio: "16:9",
    autostart: false,
    cast: {},
    sharing: {}
});
</script>
</html>