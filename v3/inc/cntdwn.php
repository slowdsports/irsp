<?php
$fecha = $result['fecha'];
if ($result['scraper'] == 1){
    $mm = substr($fecha, 5, 2);
    $dd = substr($fecha, 8, 2);
    // Restamos 8hrs para obtener h local
    $hh = substr($fecha, 11, 2)-8;
} else{
    $mm = substr($fecha, 5, 2);
    $dd = substr($fecha, 8, 2);
    $hh = substr($fecha, 11, 2);
}
?>
<script>
var yyyy = 2022;
var mm = '<?=$mm-1?>';
var dd = '<?=$dd?>';
var hh = '<?=$hh?>';

var textLive = "<p style='position: absolute;' class='live-text'>En Vivo <ion-icon class='faa-flash animated' name='ellipse'></ion-icon></p>";
var textEnd = "Finalizó";



    // Set the date we're counting down to
    // Year, Month ( 0 for January ), Day, Hour, Minute, Second, , Milliseconds
    //:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
    //::::::::::::                                       ::::::::::::
    //::::::::::::              12:00 AM                  ::::::::::::
    //::::::::::::                                       ::::::::::::
    //:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
    //                                   (AAAA, MM, DD, HH, MM, SS));
    var countDownDate<?=$index?> = new Date(Date.UTC(yyyy, mm, dd, hh, 00, 00));

    // Update the count down every 1 second
    var x<?=$index?> = setInterval(function () {

    // Get todays date and time
    var now<?=$index?> = new Date().getTime();

    // Find the distance between now an the count down date
    // GMT/UTC Adjustment at the end of the function. 0 = GMT/UTC+0; 1 = GMT/UTC+1.
    var distance<?=$index?> = countDownDate<?=$index?> - now<?=$index?> - (3600000 * -6);

    // Time calculations for days, hours, minutes and seconds
    var days<?=$index?> = Math.floor(distance<?=$index?> / (1000 * 60 * 60 * 24));
    var hours<?=$index?> = Math.floor((distance<?=$index?> % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes<?=$index?> = Math.floor((distance<?=$index?> % (1000 * 60 * 60)) / (1000 * 60));
    var seconds<?=$index?> = Math.floor((distance<?=$index?> % (1000 * 60)) / 1000);

    // Output the result in an element with id="demo"
    if (days<?=$index?> > 0){
        for (const ele of document.getElementsByClassName("cntdwn-<?=$index?>")){
            ele.innerHTML = (days<?=$index?> + "d " + hours<?=$index?> + "h "
            + minutes<?=$index?> + "m " + seconds<?=$index?> + "s")
        }
    } else if (hours<?=$index?> == 0){
        for (const ele of document.getElementsByClassName("cntdwn-<?=$index?>")){
            ele.innerHTML = (minutes<?=$index?> + "m " + seconds<?=$index?> + "s")
        }
    } else if (minutes<?=$index?> == 0){
        for (const ele of document.getElementsByClassName("cntdwn-<?=$index?>")){
            ele.innerHTML = (seconds<?=$index?> + "s")
        }
    } else {
        for (const ele of document.getElementsByClassName("cntdwn-<?=$index?>")){
            ele.innerHTML = (hours<?=$index?> + "h "
            + minutes<?=$index?> + "m " + seconds<?=$index?> + "s")
        }
    }
    // If the count down is over, write some text
    if (distance<?=$index?> < 0) {
        for (const ele of document.getElementsByClassName("cntdwn-<?=$index?>")) {
            ele.innerHTML = textLive;
        }
        if (distance<?=$index?> + 10800000 < 0) {
            for (const allEllements of document.getElementsByClassName("cntdwn-<?=$index?>")) {
                allEllements.innerHTML = textEnd;
            }
        }
    }
}, 1000);
</script>