<div class="col-xs-12 col-sm-6 mb-3">
    <div class="card">
        <div class="card-body">
            <fieldset>
                <legend class="titulobloco d-flex align-items-center">
                    <span class="me-2 d-flex align-items-center">
                        <iconify-icon icon="ic:baseline-school" class="fs-7 text-muted icone-registro"
                            data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="tooltip-success"
                            data-bs-title="Traffic Overview"></iconify-icon>
                    </span>
                    Dados do Colaborador
                </legend>

                <div class="form-group">
                    <label for="tipoColaborador" class="cadastrotitulo">Tipo de Colaborador</label>
                    <select class="form-control" id="tipoColaborador" onchange="toggleFields()">
                        <option value="">Selecione</option>
                        <option value="colaborador">Colaborador</option>
                        <option value="professor" selected>Professor</option>
                    </select>
                </div>

                <div id="colaboradorFields" style="display:none;">
                    <div class="form-group">
                        <label for="turnoColaborador" class="cadastrotitulo">Turno</label>
                        <input type="text" class="form-control custom-placeholder" id="turnoColaborador" placeholder="Digite o turno">
                    </div>
                    <div class="form-group">
                        <label for="funcaoColaborador" class="cadastrotitulo">Função</label>
                        <input type="text" class="form-control custom-placeholder" id="funcaoColaborador" placeholder="Digite a função">
                    </div>
                </div>

                <div id="professorFields">
                    <div class="form-group">
                        <label for="materiaProfessor" class="cadastrotitulo">Matéria</label>
                        <input type="text" class="form-control custom-placeholder" id="materiaProfessor" placeholder="Digite a matéria">
                    </div>
                    <div class="form-group">
                        <label for="turnoProfessor" class="cadastrotitulo">Turno</label>
                        <input type="text" class="form-control custom-placeholder" id="turnoProfessor" placeholder="Digite o turno">
                    </div>
                </div>
            </fieldset>
        </div>
    </div>
</div>