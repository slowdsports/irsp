<div class="section full mt-3 mb-3">
    <div class="carousel-multiple owl-carousel owl-theme">
        <?php
        $html = file_get_html($base);
        $imgCanal = $html->find('div.div_MainPicture a picture img', 0)->src;
        $nombreCanal = $html->find('div.div_MainInformation h1 a span', 0)->plaintext;
        $programas = $html->find('table.tbl_EPG tr');
        $index = 0;
        foreach ($programas as $programa) :
            $index++;
            $horaInicio = $programa->find('td div time', 0)->plaintext;
            $horaFinal = $programa->find('td div time', 1)->plaintext;
            $evento = $programa->find('td div.div_program_title_on_channel span', 0)->plaintext;
            $eventoImg = $programa->find('td a[title] img', 0)->src;
            if ($eventoImg == null) {
                $eventoImg = $imgCanal;
            }
            $tipo = $programa->find('td div.div_episode_deporte_on_channel', 0)->plaintext;
            if ($tipo == null) {
                $tipo = $programa->find('td div.div_episode_programa_on_channel', 0)->plaintext;
            }
            $enVivo = $programa->find('tr.tbl_EPG_row_selected td div.div_program_title_on_channel span', 1)->plaintext;
            // Condición En Vivo
            if ($enVivo == null) {
                $enVivo = 'Presentando Ahora';
            } else {
                $enVivo = '<i class="fa fa-circle text-danger faa-flash animated"></i> En Vivo';
            }
            //General
            if ($evento == null) {
                $evento = $nombreCanal;
            } else {
                $hidden = "show";
            }
        ?>
            <a href="javascript:void(0)">
                <div class="item">
                    <div class="card">
                        <center>
                            <img src="<?= $eventoImg ?>" class="image" alt="image">
                            <div class="card-body">
                                <p class="text text-center">
                                    <?= $evento; ?>
                                </p>
                            </div>
                            <div class="card-footer text-muted">
                                De <?= $horaInicio; ?> a <?= $horaFinal; ?>
                            </div>
                        </center>
                    </div>
                </div>
            </a>
        <?php endforeach; ?>
    </div>
</div>