<div class="card">
    <div class="card-body">
        <fieldset>
            <legend class="titulobloco d-flex align-items-center">
                <span class="me-2 d-flex align-items-center">
                    <iconify-icon icon="system-uicons:create" class="fs-7 text-muted icone-registro"
                        data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="tooltip-success"
                        data-bs-title="Traffic Overview"></iconify-icon>
                </span>
                Criar Questão
            </legend>
            <div class="row align-items-end">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="tipo_questao" class="cadastrotitulo">Tipo de questão</label>
                        <select class="form-control custom-placeholder" id="tipo_questao">
                            <option value="">Selecione o tipo de questão</option>
                            <option value="discursiva">Discursiva</option>
                            <option value="objetiva">Objetiva</option>
                        </select>
                    </div>
                </div>
            </div>

        </fieldset>
    </div>
</div>

<div id="discursiva" class="tipo-questao" style="display: none ;">
    <div class="card">
        <div class="card-body">
            <fieldset>
                <legend class="titulobloco d-flex align-items-center">
                    <span class="me-2 d-flex align-items-center">
                        <iconify-icon icon="game-icons:talk" class="fs-7 text-muted icone-registro"
                            data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="tooltip-success"
                            data-bs-title="Traffic Overview"></iconify-icon>
                    </span>
                    Questão Discursiva
                </legend>
                <div class="row align-items-end">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="rua" class="cadastrotitulo">Enunciado da Questão</label>
                            <input type="text" class="form-control custom-placeholder" id="rua" placeholder="Digite o Enunciado da Questão">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <label for="tipo_questao" class="cadastrotitulo">Nivel da questão</label>
                        <select class="form-control custom-placeholder" id="tipo_questao">
                            <option value="">Nivel</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                    <div class="col-md-2 text-end mt-3">
                        <button type="submit" class="btn btn-login " onclick="aceitarQuestao(event)">Criar Questão</button>
                    </div>
                </div>


            </fieldset>
        </div>
    </div>
</div>
<div id="objetiva" class="tipo-questao" style="display:none ;">
    <div class="card">
        <div class="card-body">
            <fieldset>
                <legend class="titulobloco d-flex align-items-center">
                    <span class="me-2 d-flex align-items-center">
                        <iconify-icon icon="mdi:target" class="fs-7 text-muted icone-registro"
                            data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="tooltip-success"
                            data-bs-title="Traffic Overview"></iconify-icon>
                    </span>
                    Questão Objetiva
                </legend>
                <div class="row align-items-end">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="rua" class="cadastrotitulo">Enunciado da Questão</label>
                            <input type="text" class="form-control custom-placeholder" id="rua" placeholder="Digite o Enunciado da Questão">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <label for="tipo_questao" class="cadastrotitulo">Nivel da questão</label>
                        <select class="form-control custom-placeholder" id="tipo_questao">
                            <option value="">Nivel</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label for="tipo_questao" class="cadastrotitulo">Alternativa correta</label>
                        <select class="form-control custom-placeholder" id="tipo_questao">
                            <option value="1">A</option>
                            <option value="2">B</option>
                            <option value="3">C</option>
                            <option value="4">D</option>
                        </select>
                    </div>

                </div>
                <div class="row align-items-end">
                    <div class="col-md-12 mt-lg-8">
                        <div class="form-group d-flex align-items-center mt-3">
                            <label for="rua" class="me-2 mb-0 d-flex align-items-center">A)</label>
                            <input type="text" class="form-control custom-placeholder" id="rua" placeholder="Digite o Enunciado da alternativa A">
                        </div>
                    </div>
                    <div class="col-md-12 mt-lg-8 mt-3">
                        <div class="form-group d-flex align-items-center">
                            <label for="rua" class="me-2 mb-0 d-flex align-items-center">B)</label>
                            <input type="text" class="form-control custom-placeholder" id="rua" placeholder="Digite o Enunciado da alternativa B">
                        </div>
                    </div>
                    <div class="col-md-12 mt-lg-8 mt-3">
                        <div class="form-group d-flex align-items-center">
                            <label for="rua" class="me-2 mb-0 d-flex align-items-center">C)</label>
                            <input type="text" class="form-control custom-placeholder" id="rua" placeholder="Digite o Enunciado da alternativa C">
                        </div>
                    </div>
                    <div class="col-md-12 mt-lg-8 mt-3">
                        <div class="form-group d-flex align-items-center">
                            <label for="rua" class="me-2 mb-0 d-flex align-items-center">D)</label>
                            <input type="text" class="form-control custom-placeholder" id="rua" placeholder="Digite o Enunciado da alternativa D">
                        </div>
                    </div>
                    <div class="col-md-12 text-end align-items-end mt-lg-8 mt-3">
                        <button type="submit" class="btn btn-login" onclick="aceitarQuestao(event)">Criar Questão</button>
                    </div>

                </div>
        </div>

        </fieldset>
    </div>
</div>
</div>

<script>
    // Referências aos elementos
    const tipoQuestao = document.getElementById('tipo_questao');
    const discursivaDiv = document.getElementById('discursiva');
    const objetivivaDiv = document.getElementById('objetiva');

    // Evento para mostrar/ocultar as divs com base na seleção
    tipoQuestao.addEventListener('change', function() {
        const selectedValue = tipoQuestao.value;

        // Ocultar ambas as divs inicialmente
        discursivaDiv.style.display = 'none';
        objetivivaDiv.style.display = 'none';

        // Exibir a div correspondente ao tipo de questão selecionado
        if (selectedValue === 'discursiva') {
            discursivaDiv.style.display = 'block';
        } else if (selectedValue === 'objetiva') {
            objetivivaDiv.style.display = 'block';
        }
    });
</script>