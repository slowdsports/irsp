<a onclick="divrefresh()">Refresh it!</a>
<div id="content"><p>Some Stuff!</p></div>

<script>
    function divrefresh() {
        document.getElementById('content').innerHTML = "Some new stuff!"
        }
</script>