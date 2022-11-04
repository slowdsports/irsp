<?php
include('../scraper.php');
$base = "https://www.gatotv.com/canal/{$_GET['url']}";
$html = file_get_html($base);
$imgCanal = $html ->find ('div.div_MainPicture a picture img',0)->src;
$horaInicio = $html ->find ('tr.tbl_EPG_row_selected div.tbl_EPG_TimesColumn time',0)->plaintext;
$horaFinal = $html ->find ('tr.tbl_EPG_row_selected div.tbl_EPG_TimesColumn time',1)->plaintext;
$evento = $html ->find ('tr.tbl_EPG_row_selected td div.div_program_title_on_channel span',0)->plaintext;
$eventoImg = $html ->find ('tr.tbl_EPG_row_selected td a[title] img',0)->src;
if ($eventoImg == null){
    $eventoImg = $imgCanal;
    if ($imgCanal == null){
        $epgStatus = "hidden";
    }
}
$tipo = $html ->find ('tr.tbl_EPG_row_selected td div.div_episode_deporte_on_channel',0)->plaintext;
if ($tipo == null){
    $tipo = $html ->find ('tr.tbl_EPG_row_selected td div.div_episode_programa_on_channel',0)->plaintext;
}
$enVivo = $html ->find ('tr.tbl_EPG_row_selected td div.div_program_title_on_channel span',1)->plaintext;
// Condición En Vivo
if ($enVivo == null){
    $enVivo = 'Presentando Ahora:';
} else {
$enVivo = '<i class="fa fa-circle text-danger faa-flash animated"></i> En Vivo';
}