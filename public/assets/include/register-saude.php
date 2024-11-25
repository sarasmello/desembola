
<div class="col-xs-12 col-sm-6 mb-3">
    <div class="card">
        <div class="card-body">
            <fieldset>
                <legend class="titulobloco d-flex align-items-center">
                    <span class="me-2 d-flex align-items-center">
                        <iconify-icon icon="solar:health-bold" class="fs-7 text-muted icone-registro"
                            data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="tooltip-success"
                            data-bs-title="Traffic Overview"></iconify-icon>
                    </span>Saúde
                </legend>
                <div class="form-group">
                    <label for="tipoSanguineo" class="cadastrotitulo">Tipo Sanguíneo</label>
                    <input type="text" class="form-control custom-placeholder" id="tipoSanguineo" placeholder="Tipo sanguíneo">
                </div>
                <div class="form-group">
                    <label class="cadastrotitulo">Neurodivergente?</label>
                    <div>
                        <label class="form-check-label custom-placeholder">
                            <input type="radio" class="form-check-input " name="neurodivergente" value="sim"> Sim
                        </label>
                        <label class="form-check-label custom-placeholder">
                            <input type="radio" class="form-check-input" name="neurodivergente" value="nao"> Não
                        </label>
                    </div>
                </div>
                <div class="form-group" id="descricaoNeurodivergenteContainer" style="display: none;">
                    <label for="descricaoNeurodivergente" class="cadastrotitulo">Descrição (se aplicável)</label>
                    <input type="text" class="form-control custom-placeholder" id="descricaoNeurodivergente" placeholder="Descreva se necessário">
                </div>
                <div class="form-group">
                    <label for="informacoesAdicionais" class="cadastrotitulo">Informações Adicionais</label>
                    <textarea class="form-control custom-placeholder" id="informacoesAdicionais" placeholder="Alergias etc..."></textarea>
                </div>
            </fieldset>
        </div>
    </div>
</div>