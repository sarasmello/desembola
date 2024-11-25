<div class="col-xs-12 col-sm-6 mb-1">
    <div class="card">
        <div class="card-body d-flex flex-column flex-sm-row">
            <div class="me-1 d-flex flex-column align-items-center" style="flex-basis: 50%; flex-shrink: 0;">
                <legend class="titulobloco2 d-flex align-items-center">
                    <span class="me-2 d-flex align-items-center">
                        <iconify-icon icon="material-symbols:add-a-photo" class="fs-7 text-muted icone-registro"
                            data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="tooltip-success"
                            data-bs-title="Traffic Overview"></iconify-icon>
                    </span>Foto
                </legend>
                <img id="fotoPreview" src="<?php echo isset($fotoPath) ? $fotoPath : 'assets/images/profile/foto.jpg'; ?>"
                    alt="Foto" class="i" style="width: 223px; height: auto; object-fit: cover; border-radius: 10%;">
            </div>

            <div class="col align-self-center mt-2 mt-sm-0">
                <div class="form-group">
                    <label for="ultimaAtualizacao" class="cadastrotitulo">Última Atualização</label>
                    <input type="text" class="form-control custom-placeholder" id="ultimaAtualizacao" placeholder="15:34hr 21/10/2024" disabled>
                </div>
                <div class="form-group">
                    <label for="foto" class="cadastrotitulo">Anexar Foto</label>
                    <input type="file" class="form-control custom-placeholder" id="foto" accept="image/*">
                </div>
            </div>
        </div>
    </div>
</div>