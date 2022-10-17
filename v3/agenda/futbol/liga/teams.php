<?php
// DF Pokal == Bundesliga
if ($result['ligaImg'] == 18){
    $result['ligaImg'] = 6;
}
// Para Eventos
if ($result['liga'] == 32){
    $isEventoHidden = 'style="display: none;"';
} else {
    $isEventoHidden = "";
}

// Equipos
    // LaLiga
    $local = str_replace('athletic', 'Athletic Club', $local);
    $local = str_replace('at.madrid', 'Atlético de Madrid', $local);
    $local = str_replace('osasuna', 'CA Osasuna', $local);
    $local = str_replace('cdiz', 'Cádiz CF', $local);
    $local = str_replace('elche', 'Elche CF', $local);
    if ($result['liga'] == 1){
        $local = str_replace('barcelona', 'FC Barcelona', $local);
        $visita = str_replace('barcelona', 'FC Barcelona', $visita);
    }
    $local = str_replace('getafe', 'Getafe CF', $local);
    $local = str_replace('girona', 'Girona FC', $local);
    $local = str_replace('rayovallecano', 'Rayo Vallecano', $local);
    $local = str_replace('rayo', 'Rayo Vallecano', $local);
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
    $visita = str_replace('getafe', 'Getafe CF', $visita);
    $visita = str_replace('girona', 'Girona FC', $visita);
    $visita = str_replace('rayovallecano', 'Rayo Vallecano', $visita);
    $visita = str_replace('rayo', 'Rayo Vallecano', $visita);
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
    if ($result['liga'] == 2){
        $local = str_replace('racing', 'R. Racing Club', $local);
        $visita = str_replace('racing', 'R. Racing Club', $visita);
    }
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
    $local = str_replace("leicestercity", "Leicester City", $local);
    $local = str_replace("man.city", "Manchester City", $local);
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
    $visita = str_replace("leicestercity", "Leicester City", $visita);
    $visita = str_replace("man.city", "Manchester City", $visita);
    $visita = str_replace("manchestercity", "Manchester City", $visita);
    $visita = str_replace("manchester city", "Manchester City", $visita);
    $visita = str_replace("manchester utd.", "Manchester United", $visita);
    $visita = str_replace("newcastle", "Newcastle United", $visita);
    $visita = str_replace("nottingham forest", "Nothingham Forest", $visita);
    $visita = str_replace("nottinghamforest", "Nothingham Forest", $visita);
    $visita = str_replace("tottenham", "Tottenham Hotspur", $visita);
    $visita = str_replace("westham", "West Ham United", $visita);
    $visita = str_replace("wolves", "Wolverhampton", $visita);

    //Bundesliga
    $local = str_replace("eintrachtfrankfurt", "Eintracht", $local);
    $visita = str_replace("eintrachtfrankfurt", "Eintracht", $visita);

    //Europa & Conference
    if ($result['liga'] == 4 || $result['liga'] == 16){
        $local = str_replace('bodoglimt', 'Bodo Glimt', $local);
        $local = str_replace('dynamokiev', 'Dynamo Kiev', $local);
        $local = str_replace('aek larnaca', 'AEK Larnaca', $local);
        $local = str_replace('saintgilloise', 'Saint Gilloise', $local);
        $local = str_replace('man.united', 'Manchester United', $local);
        $local = str_replace('sturmgraz', 'Sturm Graz', $local);
        $local = str_replace('zrich', 'Zürich', $local);
        $local = str_replace('mnaco', 'Mónaco', $local);
        $local = str_replace('unionberlin', 'Unión Berlín', $local);
        $local = str_replace('malm', 'Malmö', $local);
        $local = str_replace('estrellaroja', 'Estrella Roja', $local);
        $local = str_replace('slovanbratislava', 'Bratislava', $local);
        $local = str_replace('slaviapraga', 'Slavia Praga', $local);
        $local = str_replace('hapoelbeersheva', 'Hapoel Beer', $local);
        $local = str_replace('lechpoznan', 'Lech Poznan', $local);
        $local = str_replace('shamrockrovers', 'Shamrock Rovers', $local);
        $local = str_replace('fcsb', 'FCSB', $local);

        $visita = str_replace('bodoglimt', 'Bodo Glimt', $visita);
        $visita = str_replace('dynamokiev', 'Dynamo Kiev', $visita);
        $visita = str_replace('aek larnaca', 'AEK Larnaca', $visita);
        $visita = str_replace('saintgilloise', 'Saint Gilloise', $visita);
        $visita = str_replace('man.united', 'Manchester United', $visita);
        $visita = str_replace('sturmgraz', 'Sturm Graz', $visita);
        $visita = str_replace('zrich', 'Zürich', $visita);
        $visita = str_replace('mnaco', 'Mónaco', $visita);
        $visita = str_replace('uniónberlin', 'Unión Berlín', $visita);
        $visita = str_replace('malm', 'Malmö', $visita);
        $visita = str_replace('estrellaroja', 'Estrella Roja', $visita);
        $visita = str_replace('slovanbratislava', 'Bratislava', $visita);
        $visita = str_replace('slaviapraga', 'Slavia Praga', $visita);
        $visita = str_replace('hapoelbeersheva', 'Hapoel Beer', $visita);
        $visita = str_replace('lechpoznan', 'Lech Poznan', $visita);
        $visita = str_replace('shamrockrovers', 'Shamrock Rovers', $visita);
        $visita = str_replace('fcsb', 'FCSB', $visita);
    }

    //Liga PRO Ecuador
    $local = str_replace("FC Barcelonasc", "Barcelona", $local);
    $local = str_replace("lduquito", "LDU Quito", $local);
    $local = str_replace("ldu quito", "LDU Quito", $local);
    $local = str_replace("ligadequito", "LDU Quito", $local);
    $local = str_replace("tcnicouniversitario", "Universitario", $local);
    $local = str_replace("tecnicouniversitario", "Universitario", $local);
    $local = str_replace("tcnico universitario", "Universitario", $local);
    $local = str_replace("u.catlica", "U. Católica", $local);
    $local = str_replace("u. catlica", "U. Católica", $local);
    $local = str_replace("u.catolica(e)", "U. Católica", $local);
    $local = str_replace("deportivocuenca", "Cuenca", $local);
    $local = str_replace("delfnsc", "Delfín SC", $local);
    $local = str_replace("delfin", "Delfín SC", $local);
    $local = str_replace("delfn sc", "Delfín SC", $local);
    $local = str_replace("guayaquilcity", "Guayaquil", $local);
    $local = str_replace("guayaquil city", "Guayaquil", $local);
    $local = str_replace("macara", "Macará", $local);
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
    $local = str_replace("cumbayafc", "Cumbayá FC", $local);

    $visita = str_replace("FC Barcelonasc", "Barcelona", $visita);
    $visita = str_replace("FC Barcelona sc", "Barcelona", $visita);
    $visita = str_replace("lduquito", "LDU Quito", $visita);
    $visita = str_replace("ldu quito", "LDU Quito", $visita);
    $visita = str_replace("ligadequito", "LDU Quito", $visita);
    $visita = str_replace("tcnicouniversitario", "Universitario", $visita);
    $visita = str_replace("tecnicouniversitario", "Universitario", $visita);
    $visita = str_replace("tcnico universitario", "Universitario", $visita);
    $visita = str_replace("u.catlica", "U. Católica", $visita);
    $visita = str_replace("u. catlica", "U. Católica", $visita);
    $visita = str_replace("u.catolica(e)", "U. Católica", $visita);
    $visita = str_replace("deportivocuenca", "Cuenca", $visita);
    $visita = str_replace("delfnsc", "Delfín SC", $visita);
    $visita = str_replace("delfin", "Delfín SC", $visita);
    $visita = str_replace("delfn sc", "Delfín SC", $visita);
    $visita = str_replace("guayaquilcity", "Guayaquil", $visita);
    $visita = str_replace("guayaquil city", "Guayaquil", $visita);
    $visita = str_replace("macara", "Macará", $visita);
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
    $visita = str_replace("cumbayafc", "Cumbayá FC", $visita);

    // INTL
    $local = str_replace('mxico', 'México', $local);
    $local = str_replace('kazajistn', 'Kazajistán', $local);
    $local = str_replace('blgica', 'Bélgica', $local);
    $local = str_replace('azerbaiyn', 'Azerbaiyán', $local);
    $local = str_replace('turqua', 'Turquía', $local);
    $local = str_replace('islasferoe', 'Islas Feroe', $local);
    $local = str_replace('macedonianorte', 'Macedonia del Norte', $local);
    $local = str_replace('rumana', 'Rumanía', $local);
    $local = str_replace('hungra', 'Hungría', $local);
    $local = str_replace('irlandadelnorte', 'Irlanda del Norte', $local);
    $local = str_replace('espaa', 'España', $local);
    $local = str_replace('repblicacheca', 'República Checa', $local);
    $local = str_replace('repblicairlanda', 'República de Irlanda', $local);
    $local = str_replace('sanmarino', 'San Marino', $local);
    $local = str_replace('coreadelsur', 'Corea del Sur', $local);
    $local = str_replace('camern', 'Camerún', $local);
    $local = str_replace('japn', 'Japón', $local);
    $local = str_replace('canad', 'Canadá', $local);
    $local = str_replace('tnez', 'Túnez', $local);
    $local = str_replace('per', 'Perú', $local);
    $local = str_replace('elsalvador', 'El Salvador', $local);

    $visita = str_replace('mxico', 'México', $visita);
    $visita = str_replace('kazajistn', 'Kazajistán', $visita);
    $visita = str_replace('blgica', 'Bélgica', $visita);
    $visita = str_replace('azerbaiyn', 'Azerbaiyán', $visita);
    $visita = str_replace('turqua', 'Turquía', $visita);
    $visita = str_replace('islasferoe', 'Islas Feroe', $visita);
    $visita = str_replace('macedonianorte', 'Macedonia del Norte', $visita);
    $visita = str_replace('rumana', 'Rumanía', $visita);
    $visita = str_replace('hungra', 'Hungría', $visita);
    $visita = str_replace('irlandadelnorte', 'Irlanda del Norte', $visita);
    $visita = str_replace('espaa', 'España', $visita);
    $visita = str_replace('repblicacheca', 'República Checa', $visita);
    $visita = str_replace('repblicairlanda', 'República de Irlanda', $visita);
    $visita = str_replace('sanmarino', 'San Marino', $visita);
    $visita = str_replace('coreadelsur', 'Corea del Sur', $visita);
    $visita = str_replace('camern', 'Camerún', $visita);
    $visita = str_replace('japn', 'Japón', $visita);
    $visita = str_replace('canad', 'Canadá', $visita);
    $visita = str_replace('tnez', 'Túnez', $visita);
    $visita = str_replace('per', 'Perú', $visita);
    $visita = str_replace('elsalvador', 'El Salvador', $visita);

    // Liga MX
    $local = str_replace('america', 'América', $local);
    $local = str_replace('cruzazul', 'Cruz Azul', $local);
    $local = str_replace('juarez', 'Juárez', $local);
    $local = str_replace('leon', 'León', $local);
    $local = str_replace('mazatlan', 'Mazatlán', $local);
    $local = str_replace('queretaro', 'Querétaro', $local);
    $local = str_replace('sanluis', 'San Luis', $local);

    $visita = str_replace('america', 'América', $visita);
    $visita = str_replace('cruzazul', 'Cruz Azul', $visita);
    $visita = str_replace('juarez', 'Juárez', $visita);
    $visita = str_replace('leon', 'León', $visita);
    $visita = str_replace('mazatlan', 'Mazatlán', $visita);
    $visita = str_replace('queretaro', 'Querétaro', $visita);
    $visita = str_replace('sanluis', 'San Luis', $visita);

    // Betplay CO
    $local = str_replace('santafe', 'Santa Fé', $local);
    $local = str_replace('at.nacional', 'Atlético Nacional', $local);
    $local = str_replace('independientemedellin', 'Independiente', $local);
    $local = str_replace('alianzapetrolera', 'Alianza', $local);
    $local = str_replace('oncecaldas', 'Once Caldas', $local);
    $local = str_replace('laequidad', 'La Equidad', $local);
    $local = str_replace('Aguilasdoradasrionegro', 'A.G. Río Negro', $local);
    $local = str_replace('Americadecali', 'América de Cali', $local);
    $local = str_replace('Américadecali', 'América de Cali', $local);
    $local = str_replace('deportivocali', 'Deportivo Cali', $local);
    $local = str_replace('patriotasfc', 'Patriotas FC', $local);
    $local = str_replace('u.magdalena', 'U Magdalena', $local);

    $visita = str_replace('santafe', 'Santa Fé', $visita);
    $visita = str_replace('at.nacional', 'Atlético Nacional', $visita);
    $visita = str_replace('independientemedellin', 'Independiente', $visita);
    $visita = str_replace('alianzapetrolera', 'Alianza', $visita);
    $visita = str_replace('oncecaldas', 'Once Caldas', $visita);
    $visita = str_replace('laequidad', 'La Equidad', $visita);
    $visita = str_replace('aguilasdoradasrionegro', 'A.G. Río Negro', $visita);
    $visita = str_replace('Americadecali', 'América de Cali', $visita);
    $visita = str_replace('Américadecali', 'América de Cali', $visita);
    $visita = str_replace('deportivocali', 'Deportivo Cali', $visita);
    $visita = str_replace('patriotasfc', 'Patriotas FC', $visita);
    $visita = str_replace('u.magdalena', 'U Magdalena', $visita);

    // LFP AR
    $local = str_replace('barracascentral', 'Barracas Central', $local);
    $local = str_replace('colon', 'Colón', $local);
    $local = str_replace('union', 'Unión', $local);
    $local = str_replace('Newell`s', 'NOB', $local);
    $local = str_replace('rosariocentral', 'Rosario Central', $local);
    $local = str_replace('centralcordoba(se)', 'Central Córdoba', $local);
    $local = str_replace('defensayjusticia', 'Defensa y Justicia', $local);
    $local = str_replace('sanlorenzo', 'San Lorenzo', $local);
    $local = str_replace('huracan', 'Huracán', $local);
    $local = str_replace('godoycruz', 'Godoy Cruz', $local);
    $local = str_replace('lanus', 'Lanús', $local);
    $local = str_replace('atleticotucuman', 'Atlético Tucumán', $local);
    $local = str_replace('bocajuniors', 'Boca JRS', $local);
    $local = str_replace('riverplate', 'River Plate', $local);
    $local = str_replace('rosariocentral', 'Rosario Central', $local);
    $local = str_replace('argentinosjuniors', 'Argentinos JRS', $local);
    $local = str_replace('velez', 'Velez Sarsfield', $local);
    if ($result['liga'] == 27){
        $local = str_replace('racing', 'Racing Club', $local);
        $visita = str_replace('racing', 'Racing Club', $visita);
    }

    $visita = str_replace('barracascentral', 'Barracas Central', $visita);
    $visita = str_replace('colon', 'Colón', $visita);
    $visita = str_replace('union', 'Unión', $visita);
    $visita = str_replace('Newell`s', 'NOB', $visita);
    $visita = str_replace('rosariocentral', 'Rosario Central', $visita);
    $visita = str_replace('centralcordoba(se)', 'Central Córdoba', $visita);
    $visita = str_replace('defensayjusticia', 'Defensa y Justicia', $visita);
    $visita = str_replace('sanlorenzo', 'San Lorenzo', $visita);
    $visita = str_replace('huracan', 'Huracán', $visita);
    $visita = str_replace('godoycruz', 'Godoy Cruz', $visita);
    $visita = str_replace('lanus', 'Lanús', $visita);
    $visita = str_replace('atleticotucuman', 'Atlético Tucumán', $visita);
    $visita = str_replace('bocajuniors', 'Boca JRS', $visita);
    $visita = str_replace('riverplate', 'River Plate', $visita);
    $visita = str_replace('rosariocentral', 'Rosario Central', $visita);
    $visita = str_replace('argentinosjuniors', 'Argentinos JRS', $visita);
    $visita = str_replace('velez', 'Velez Sarsfield', $visita);

    // Sudamericana
    $local = str_replace('saopaulo', 'Sao Paulo', $local);
    $local = str_replace('independientedelvalle', 'Independiente', $local);

    // Betcris Honduras
    if ($result['liga'] == 21){
        $local = str_replace('hondurasprogreso', 'CD Honduras', $local);
        $visita = str_replace('hondurasprogreso', 'CD Honduras', $visita);
    }

    $visita = str_replace('saopaulo', 'Sao Paulo', $visita);
    $visita = str_replace('independientedelvalle', 'Independiente', $visita);

    // Otros
    $local = str_replace('maccabihaifa', 'Maccabi Haifa', $local);
    $local = str_replace("dinamozagreb", "Dinamo Zagreb", $local);

    $visita = str_replace('maccabihaifa', 'Maccabi Haifa', $visita);
    $visita = str_replace("dinamozagreb", "Dinamo Zagreb", $visita);


?>