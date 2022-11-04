<?php
$base = "https://www.movistarplus.es/liga-santander/calendario-liga-santander";
$file = $base;
$file = file_get_contents($base);
// REGEX
preg_match_all('(fecha-calendar[\w\W]*?day">(.*?)<[\w\W]*?week">(.*?)<[\w\W]*?hour">(.*?)<[\w\W]*?src="(.*?)"[\w\W]*?alt="Escudo(.*?)"[\w\W]*?src="(.*?)"[\w\W]*?alt="Escudo(.*?)"[\w\W]*?class="channels"([\w\W]*?)<\/ul>)', $file, $datos, PREG_SET_ORDER);

foreach ($datos as $dato){
    // CONDITIONS
    $dia = $dato[1];
    $dia = str_replace(' ', '', $dia);
    $dia = ucfirst($dia);
    $fecha = str_replace("/", "-", $dato[2]);
        $dd = substr($fecha, 3,2);
        $mm = substr($fecha, 0,2);
        $hora = str_replace("h", "", $dato[3]) ;
        // Formato
        //2022-04-18 00:00:00
        $fecha = date("Y") . "-" . $dd. "-". $mm . " " .$hora . ":00";
    $logoL = $dato[4];
    $LogoL = str_replace(' ', '', $LogoL);
    $local = $dato[5];
    $local = strtolower($local);
    $local = str_replace(' ', '', $local);
    $LogoV = $dato[6];
    $LogoV = str_replace(' ', '', $LogoV);
    $visita = $dato[7];
    $visita = strtolower($visita);
    $visita = str_replace(' ', '', $visita);
        // Canales
        preg_match_all('(alt="(.*?)")', $dato[8], $canales);
        $canal = $canales[1][0];
        $canal2 = $canales[1][1];

//Limpiar entradas con caracteres desconocidosS
$encoding = mb_detect_encoding($local);
if($encoding !== 'ASCII') {
    $enc = mb_detect_encoding($local);
    $local = iconv('UTF-8', 'ASCII//IGNORE', $local);
}
$encoding2 = mb_detect_encoding($visita);
if($encoding2 !== 'ASCII') {
    $enc2 = mb_detect_encoding($visita);
    $visita = iconv('UTF-8', 'ASCII//IGNORE', $visita);
}

// Equipos & Canales Custom
include('teams.php');
// include('channels.php');

// Agregamos los campos a la DB
if (isset($_POST['create'])){
    $sql = "INSERT INTO agenda(local,visita,logoL,logoV,canal,canal2,fecha,liga,status) VALUES('".$local."','".$visita."','".$logoL."','".$LogoV."','".$canal."','".$canal2."','".$fecha."','$liga','1')";
mysqli_query($conn,$sql);
}
}
// Obtenemos los campos agregados
$ret=mysqli_query($conn,"select * from agenda");
$cnt=1;
while($row=mysqli_fetch_array($ret))
{
?>
<!-- HTML PRINT -->
<tr>
<td><?php echo $row['id'];?></td>
<td><?php echo $row['local'];?> <img width="50px" src="<?php echo $row['logoL'];?>" alt=""></td>
<td><?php echo $row['visita'];?> <img width="50px" src="<?php echo $row['logoV'];?>" alt=""></td>
<td><?php echo $row['canal'];?></td>
<td><?php echo $row['canal2'];?></td>
</tr>

<?php $cnt=$cnt+1; }
?>