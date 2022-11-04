<hr>
<div class="container <?= $epgStatus ?>">
    <a href="javascript:void(0)">
        <div class="item">
            <div class="card">
                <center>
                    <img src="https://i.ibb.co/w0qg9JF/trans.png" style="background-image: url('<?= $eventoImg ?>'); background-size: contain; background-repeat: no-repeat" class="image" alt="image" />
                    <div class="card-body">
                        <h6 class="text text-center">
                            <?= $enVivo ?>
                        </h6>
                        <p class="text text-center">
                            <?= $evento ?>
                        </p>
                    </div>
                    <div class="card-footer text-muted">
                        De <?= $horaInicio; ?> a <?= $horaFinal; ?>
                    </div>

                </center>
            </div>
        </div>
    </a>
</div>