<div class="col-xs-12 col-sm-6 mb-3">
    <div class="card">
        <div class="card-body">
            <fieldset>
                <legend class="titulobloco d-flex align-items-center">
                    <span class="me-2 d-flex align-items-center">
                        <iconify-icon icon="ic:baseline-school" class="fs-7 text-muted icone-registro"
                            data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="tooltip-success"
                            data-bs-title="Traffic Overview"></iconify-icon>
                    </span>Alunos Dependentes
                </legend>

                <div id="dependentes-container">
                    <div class="container mb-2">
                        <div class="row g-2">
                            <div class="col-7">
                                <select class="form-control custom-placeholder">
                                    <option>Aluno</option>
                                    <option>Caio Brito</option>
                                    <option>Felipe Oliveira</option>
                                </select>
                            </div>

                            <div class="col-3">
                                <select class="form-control custom-placeholder">
                                    <option>Parentesco</option>
                                    <option>Pai</option>
                                    <option>Mãe</option>
                                    <option>Avô/Avó</option>
                                    <option>Tio/Tia</option>
                                </select>
                            </div>

                            <div class="col-2 d-flex justify-content-start">
                                <button class="btn-add ms-2" onclick="addSelect()">
                                    <iconify-icon icon="mingcute:add-fill" class="fs-7 icone-registro"
                                        data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="tooltip-success"
                                        data-bs-title="Adicionar dependente"></iconify-icon>
                                </button>
                                <div class="btn-add ms-2">

                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </fieldset>
        </div>
    </div>
</div>