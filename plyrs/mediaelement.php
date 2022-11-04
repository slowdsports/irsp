<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mediaelement/2.13.2/css/mediaelementplayer.min.css">
<video id="video-player" preload="preload" autoplay="autoplay">
    <source type="video/youtube" controls src="https://www.youtube.com/watch?v=c1-jFLlHLPw" />
</video>
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script>
    jQuery(document).ready(function($) {
        player = new MediaElementPlayer('#video-player', {
            features: ['fullscreen'],
            success: function(mediaElement, domObject) {
                mediaElement.load();
                mediaElement.play();
            }
        });
    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/mediaelement/2.13.2/js/mediaelement-and-player.min.js"></script>