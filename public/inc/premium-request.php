<div class="modal fade modalbox show" id="ModalBasic" data-bs-backdrop="static" tabindex="-1" role="dialog" aria-modal="true" style="display: block;">
    <div class="modal-dialog" role="document">
        <div style="background: #0c1624;" class="modal-content">
            <div style="background: #0c1624; border-bottom-color: #0c1624;" class="modal-header">
                <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="login-form">
                    <div class="section mt-2">
                        <h1>Contratar Premium</h1>
                        <h4>Rellena el formulario</h4>
                        <?php
                        if ($premiumRequested){
                        echo '
                        <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                            Se ha notificado a los administradores tu alta
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        ';
                        unset($_SESSION['message']);
                        }
                        ?>
                    </div>
                    <div class="section mt-4 mb-5">
                        <form method="post">
                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="form-label" for="username">Usuario</label>
                                    <input readonly type="text" class="form-control" id="username" name="username" id="username" placeholder="Usuario" value="<?=$row['username']?>" />
                                    <i class="clear-input">
                                        <ion-icon name="close-circle" role="img" class="md hydrated" aria-label="close circle"></ion-icon>
                                    </i>
                                </div>
                            </div>

                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="form-label" for="contacto">Método de contacto</label>
                                    <select class="form-control form-select" id="contacto" name="contacto">
                                        <option id="0" value="0">Telegram</option>
                                        <option id="1" value="1">WhatsApp</option>
                                        <option id="2" value="2">Email</option>
                                    </select>
                                </div>
                            </div>

                            <div class="mt-2">
                                <button type="submit" id="contratar" name="contratar" class="btn btn-primary btn-block btn-lg" data-bs-dismiss="modal">CONTRATAR</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>