<?php
require_once('geoplugin.class.php');
$geoplugin = new geoPlugin();
$geoplugin -> locate();
$geoCountry_data = $geoplugin->countryCode;
// Países
$countries = array("AR", "BZ", "BO", "BR", "CL", "CO", "CR", "CU", "DM", "DO", "EC", "SV", "GD", "GT", "HT", "HN", "JM", "MQ", "MX", "NI", "PA", "PY", "PE", "PR", "UY", "VE");