<?php
$xmlstring = file_get_contents("https://iptv-org.github.io/epg/guides/au/beinsports.com.epg.xml");
// $xml_parse = simplexml_load_string($xmlstring);
// //echo "<pre>"; print_r($xml_parse);echo"</pre>";

// foreach ($xml_parse as $k=>$v){
//     echo "<pre>"; print_r($v);echo"</pre>";
//     echo "id: " . $v['id'] . "<br>";

// }

// student details xml data taken as an String
$xml = $xmlstring;

// Load xml data into xml data object
$xmldata = simplexml_load_string($xml);

// Encode this xml data into json 
// using json_encoe function
$jsondata = json_encode($xmldata);

// Display json data
print_r($jsondata);
?>