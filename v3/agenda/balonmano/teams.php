<?php
// Pasamos a minúsculas
$local = strtolower($local); $visita = strtolower($visita);
// Eliminamos espacios en blanco
$local = str_replace(" ", "", $local); $visita = str_replace(" ", "", $visita);
//Locales
$local = str_replace('barabm', 'Barcelona', $local);
$local = str_replace('ksvivekielce', 'KS Vive Kielce', $local);
$local = str_replace('bidasoairn', 'Bidasoa Irún', $local);


//Visita