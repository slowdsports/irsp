<?php
// DF Pokal == Bundesliga
if ($result['ligaImg'] == 18){
    $result['ligaImg'] = 6;
}
// Equipos
    // LaLiga
    $local = str_replace('athletic', 'Athletic Club', $local);
    $local = str_replace('at.madrid', 'Atlético de Madrid', $local);
    $local = str_replace('osasuna', 'CA Osasuna', $local);
    $local = str_replace('cdiz', 'Cádiz CF', $local);
    $local = str_replace('elche', 'Elche CF', $local);
    $local = str_replace('barcelona', 'FC Barcelona', $local);
    $local = str_replace('getafe', 'Getafe CF', $local);
    $local = str_replace('girona', 'Girona FC', $local);
    $local = str_replace('rayo', 'Rayo Vallecano', $local);
    $local = str_replace('rayovallecano', 'Rayo Vallecano', $local);
    $local = str_replace('celta', 'RC Celta', $local);
    $local = str_replace('espanyol', 'RCD Espanyol', $local);
    $local = str_replace('mallorca', 'RCD Mallorca', $local);
    $local = str_replace('betis', 'Real Betis', $local);
    $local = str_replace('realmadrid', 'Real Madrid', $local);
    $local = str_replace('realsociedad', 'Real Sociedad', $local);
    $local = str_replace('valladolid', 'Real Valladolid CF', $local);
    $local = str_replace('sevilla', 'Sevilla FC', $local);
    $local = str_replace('almera', 'UD Almería', $local);
    $local = str_replace('valencia', 'Valencia CF', $local);
    $local = str_replace('villarrealb', 'Villarreal B', $local);
    $local = str_replace('villarreal', 'Villarreal CF', $local);

    $visita = str_replace('athletic', 'Athletic Club', $visita);
    $visita = str_replace('at.madrid', 'Atlético de Madrid', $visita);
    $visita = str_replace('osasuna', 'CA Osasuna', $visita);
    $visita = str_replace('cdiz', 'Cádiz CF', $visita);
    $visita = str_replace('elche', 'Elche CF', $visita);
    $visita = str_replace('barcelona', 'FC Barcelona', $visita);
    $visita = str_replace('getafe', 'Getafe CF', $visita);
    $visita = str_replace('girona', 'Girona FC', $visita);
    $visita = str_replace('rayo', 'Rayo Vallecano', $visita);
    $visita = str_replace('rayovallecano', 'Rayo Vallecano', $visita);
    $visita = str_replace('celta', 'RC Celta', $visita);
    $visita = str_replace('espanyol', 'RCD Espanyol', $visita);
    $visita = str_replace('mallorca', 'RCD Mallorca', $visita);
    $visita = str_replace('betis', 'Real Betis', $visita);
    $visita = str_replace('realmadrid', 'Real Madrid', $visita);
    $visita = str_replace('realsociedad', 'Real Sociedad', $visita);
    $visita = str_replace('valladolid', 'Real Valladolid CF', $visita);
    $visita = str_replace('sevilla', 'Sevilla FC', $visita);
    $visita = str_replace('almera', 'UD Almería', $visita);
    $visita = str_replace('valencia', 'Valencia CF', $visita);
    $visita = str_replace('villarrealb', 'Villarreal B', $visita);
    $visita = str_replace('villarreal', 'Villarreal CF', $visita);
    // LaLiga Smartbank
    $local = str_replace('albacete', 'Albacete BP', $local);
    $local = str_replace('burgos', 'Burgos CF', $local);
    $local = str_replace('legans', 'CD Leganés', $local);
    $local = str_replace('lugo', 'CD Lugo', $local);
    $local = str_replace('mirands', 'CD Mirandés', $local);
    $local = str_replace('tenerife', 'CD Tenerife', $local);
    $local = str_replace('alavs', 'Deportivo Alavés', $local);
    $local = str_replace('andorra', 'FC Andorra', $local);
    $local = str_replace('cartagena', 'FC Cartagena', $local);
    $local = str_replace('granada', 'Granada CF', $local);
    $local = str_replace('levante', 'Levante UD', $local);
    $local = str_replace('mlaga', 'Málaga CF', $local);
    $local = str_replace('racing', 'R. Racing Club', $local);
    $local = str_replace('realoviedo', 'Real Oviedo', $local);
    $local = str_replace('sporting', 'Real Sporting', $local);
    $local = str_replace('realzaragoza', 'Real Zaragoza', $local);
    $local = str_replace('eibar', 'SD Eibar', $local);
    $local = str_replace('huesca', 'SD Huesca', $local);
    $local = str_replace('ponferradina', 'SD Ponferradina', $local);
    $local = str_replace('ibiza', 'UD Ibiza', $local);
    $local = str_replace('laspalmas', 'UD Las Palmas', $local);

    $visita = str_replace('albacete', 'Albacete BP', $visita);
    $visita = str_replace('burgos', 'Burgos CF', $visita);
    $visita = str_replace('legans', 'CD Leganés', $visita);
    $visita = str_replace('lugo', 'CD Lugo', $visita);
    $visita = str_replace('mirands', 'CD Mirandés', $visita);
    $visita = str_replace('tenerife', 'CD Tenerife', $visita);
    $visita = str_replace('alavs', 'Deportivo Alavés', $visita);
    $visita = str_replace('andorra', 'FC Andorra', $visita);
    $visita = str_replace('cartagena', 'FC Cartagena', $visita);
    $visita = str_replace('granada', 'Granada CF', $visita);
    $visita = str_replace('levante', 'Levante UD', $visita);
    $visita = str_replace('mlaga', 'Málaga CF', $visita);
    $visita = str_replace('racing', 'R. Racing Club', $visita);
    $visita = str_replace('realoviedo', 'Real Oviedo', $visita);
    $visita = str_replace('sporting', 'Real Sporting', $visita);
    $visita = str_replace('realzaragoza', 'Real Zaragoza', $visita);
    $visita = str_replace('eibar', 'SD Eibar', $visita);
    $visita = str_replace('huesca', 'SD Huesca', $visita);
    $visita = str_replace('ponferradina', 'SD Ponferradina', $visita);
    $visita = str_replace('ibiza', 'UD Ibiza', $visita);
    $visita = str_replace('laspalmas', 'UD Las Palmas', $visita);
    //Premier
    $local = str_replace("bournemouth", "AFC Bournemouth", $local);
    $local = str_replace("astonvilla", "Aston Villa", $local);
    $local = str_replace("crystalpalace", "Crystal Palace", $local);
    $local = str_replace("leedsutd", "Leeds United", $local);
    $local = str_replace("laicestercity", "Leicester City", $local);
    $local = str_replace("manchestercity", "Manchester City", $local);
    $local = str_replace("manchester city", "Manchester City", $local);
    $local = str_replace("manchester utd.", "Manchester United", $local);
    $local = str_replace("manchesterutd.", "Manchester United", $local);
    $local = str_replace("newcastle", "Newcastle United", $local);
    $local = str_replace("nottingham forest", "Nothingham Forest", $local);
    $local = str_replace("nottinghamforest", "Nothingham Forest", $local);
    $local = str_replace("tottenham", "Tottenham Hotspur", $local);
    $local = str_replace("westham", "West Ham United", $local);
    $local = str_replace("wolves", "Wolverhampton", $local);

    $visita = str_replace("bournemouth", "AFC Bournemouth", $visita);
    $visita = str_replace("astonvilla", "Aston Villa", $visita);
    $visita = str_replace("crystal palace", "Crystal Palace", $visita);
    $visita = str_replace("crystalpalace", "Crystal Palace", $visita);
    $visita = str_replace("leedsutd", "Leeds United", $visita);
    $visita = str_replace("laicestercity", "Leicester City", $visita);
    $visita = str_replace("manchestercity", "Manchester City", $visita);
    $visita = str_replace("manchester city", "Manchester City", $visita);
    $visita = str_replace("manchester utd.", "Manchester United", $visita);
    $visita = str_replace("newcastle", "Newcastle United", $visita);
    $visita = str_replace("nottingham forest", "Nothingham Forest", $visita);
    $visita = str_replace("nottinghamforest", "Nothingham Forest", $visita);
    $visita = str_replace("tottenham", "Tottenham Hotspur", $visita);
    $visita = str_replace("westham", "West Ham United", $visita);
    $visita = str_replace("wolves", "Wolverhampton", $visita);
    //Liga PRO Ecuador
    $local = str_replace("FC Barcelonasc", "Barcelona", $local);
    $local = str_replace("lduquito", "LDU Quito", $local);
    $local = str_replace("ldu quito", "LDU Quito", $local);
    $local = str_replace("tcnicouniversitario", "Universitario", $local);
    $local = str_replace("tcnico universitario", "Universitario", $local);
    $local = str_replace("u.catlica", "U. Católica", $local);
    $local = str_replace("u. catlica", "U. Católica", $local);
    $local = str_replace("deportivocuenca", "Cuenca", $local);
    $local = str_replace("delfnsc", "Delfín SC", $local);
    $local = str_replace("delfn sc", "Delfín SC", $local);
    $local = str_replace("guayaquilcity", "Guayaquil", $local);
    $local = str_replace("guayaquil city", "Guayaquil", $local);
    $local = str_replace("macar", "Macará", $local);
    $local = str_replace("independientedelvalle", "Independiente", $local);
    $local = str_replace("independiente del valle", "Independiente", $local);
    $local = str_replace("mushucruna", "Mushuc Runa", $local);
    $local = str_replace("mushuc runa", "Mushuc Runa", $local);
    $local = str_replace("orensesc", "Orense SC", $local);
    $local = str_replace("orense sc", "Orense SC", $local);
    $local = str_replace("9deoctubre", "9 de Octubre", $local);
    $local = str_replace("cumbayfc", "Cumbayá FC", $local);
    $local = str_replace("cumbay fc", "Cumbayá FC", $local);

    $visita = str_replace("FC Barcelonasc", "Barcelona", $visita);
    $visita = str_replace("FC Barcelona sc", "Barcelona", $visita);
    $visita = str_replace("lduquito", "LDU Quito", $visita);
    $visita = str_replace("ldu quito", "LDU Quito", $visita);
    $visita = str_replace("tcnicouniversitario", "Universitario", $visita);
    $visita = str_replace("tcnico universitario", "Universitario", $visita);
    $visita = str_replace("u.catlica", "U. Católica", $visita);
    $visita = str_replace("u. catlica", "U. Católica", $visita);
    $visita = str_replace("deportivocuenca", "Cuenca", $visita);
    $visita = str_replace("delfnsc", "Delfín SC", $visita);
    $visita = str_replace("delfn sc", "Delfín SC", $visita);
    $visita = str_replace("guayaquilcity", "Guayaquil", $visita);
    $visita = str_replace("guayaquil city", "Guayaquil", $visita);
    $visita = str_replace("macar", "Macará", $visita);
    $visita = str_replace("independientedelvalle", "Independiente", $visita);
    $visita = str_replace("independiente del valle", "Independiente", $visita);
    $visita = str_replace("mushucruna", "Mushuc Runa", $visita);
    $visita = str_replace("mushuc runa", "Mushuc Runa", $visita);
    $visita = str_replace("orensesc", "Orense SC", $visita);
    $visita = str_replace("orense sc", "Orense SC", $visita);
    $visita = str_replace("9deoctubre", "9 de Octubre", $visita);
    $visita = str_replace("cumbayfc", "Cumbayá FC", $visita);
    $visita = str_replace("cumbay fc", "Cumbayá FC", $visita);

    // INTL
    $local = str_replace('mxico', 'México', $local);
?>