<?php
if ($typeChannel == 3) {
    // Fuente Sin codificar
    $channel = $result['channelUrl'];
    echo '
    <script>
    window.location.href = "' . $channel . '";
    </script>
    ';
}
