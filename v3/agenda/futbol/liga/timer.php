<?php
// $yyyy = substr($time, 0, 4);
// $mm = substr($time, 5, 2);
// $dd = substr($time, 8, 2);
?>
<!-- Timer -->
<script>
    //var yyyy = 2022; var mm = 07; var dd = 22;
    //var idGame="";
    let idGame = [];
    idGame.push("<?php
    while($result=mysqli_fetch_array($ligas)){ echo $result['id'] ; }
    ?>")
    var yyyy = "<?php echo $yyyy; ?>";
    var mm = "<?php echo $mm; ?>";
    var dd = "<?php echo $dd; ?>";
    var i; var i2;

    var myTime = yyyy+mm+dd;
    var textLive = "<p class='live-text'>En Vivo <ion-icon class='faa-flash animated' name='ellipse'></ion-icon></p>";
    var textEnd = "Finalizó";

    var funcName = idGame;


    function caseTime() {
        // Set the date we're counting down to
        // Year, Month ( 0 for January ), Day, Hour, Minute, Second, , Milliseconds
        //:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
        //::::::::::::                                       ::::::::::::
        //::::::::::::              12:00 AM                  ::::::::::::
        //::::::::::::                                       ::::::::::::
        //:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
        //                                   (AAAA, MM, DD, HH, MM, SS));
        var countDownDate = new Date(Date.UTC(yyyy, mm, dd, 03, 00, 00));

        // Update the count down every 1 second
        var x = setInterval(function () {

        // Get todays date and time
        var now = new Date().getTime();

        // Find the distance between now an the count down date
        // GMT/UTC Adjustment at the end of the function. 0 = GMT/UTC+0; 1 = GMT/UTC+1.
        var distance = countDownDate - now - (3600000 * -6);

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Output the result in an element with id="demo"
        for (const ele of document.getElementsByClassName(idGame)){
            ele.innerHTML = (hours + "<span>h</span> "
            + minutes + "<span>m</span> " + seconds + "<span>s</span><br />")
        }
        // If the count down is over, write some text
        if (distance < 0) {
            for (const ele of document.getElementsByClassName(idGame)) {
                ele.innerHTML = textLive;
            }
            if (distance + 10800000 < 0) {
                countDownDate = new Date(countDownDate.getTime() + 86400000)
            } else if (distance + 7200000 < 0) {
                for (const allEllements of document.getElementsByClassName(idGame)) {
                    allEllements.innerHTML = textEnd;
                }
            }
        }
    }, 1000);
}
caseTime()
</script>
<!-- *Timer -->