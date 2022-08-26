<!DOCTYPE html>
<html lang="es">
<style type="text/css">
body {
   margin: 0;
   padding: 0;
}
</style>

<head>
<script type='text/javascript' src='//recordingfilessuperintend.com/19/c2/82/19c282c073dbed4583595244454d9ac6.js'></script>
</head>
      
    
<script src="https://ssl.p.jwpcdn.com/player/v/8.24.0/jwplayer.js"></script>
<script> jwplayer.key='XSuP4qMl+9tK17QNb+4+th2Pm9AWgMO/cYH8CI0HGGr7bdjo';</script>
 
<body>
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
var getURL = "LmN2YXR0di5jb20uYXIvbGl2ZS9jM2Vkcy9FU1BOMkhEL1NBX0xpdmVfZGFzaF9lbmMvRVNQTjJIRC5tcGQ=";
var getKEY = "ZTg4NGI3MTFhYjExMWJlYjhhN2JhMWU3YmNiZGM5YmY=";
var getKEY2 = "Y2I4OWVlMzk2MTU5OWUzZTY0OGE1YWFkNjA4OTVmMzQ=";
</script>
<div id="player"></div>
<script>
var mt = '//edge-live15-sl';
var playerInstance=jwplayer("player");
playerInstance.setup( {

	playlist: [ {
	title : "REPRODUCTOR | Mega Deportes",
	description: "EN VIVO",
		"sources": [ {
			"default": false, "file": mt+atob(getURL), "drm": {
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