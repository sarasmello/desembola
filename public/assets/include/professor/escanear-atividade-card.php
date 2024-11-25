<div class="col-xs-12 col-sm-12 mb-12 ">
    <div class="card">
        <div class="card-body">
            <fieldset>
                <legend class="titulobloco d-flex align-items-center">
                    <span class="me-2 d-flex align-items-center">
                        <iconify-icon icon="carbon:scan-alt" class="fs-7 text-muted icone-registro"
                            data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="tooltip-success"
                            data-bs-title="Traffic Overview"></iconify-icon>
                    </span>
                    Carregar arquivos da atividade Escaneada
                </legend>

                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-6"> <!-- Alterado para col-12 em telas pequenas -->
                            <div class="form-group d-flex align-items-center">
                                <span class="me-2 d-flex align-items-center">
                                    <img src="../../assets/images/backgrounds/upload.svg" alt="Ícone de upload" width="80" height="80" class="uploadicon mt-sm-9"
                                        data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="tooltip-success"
                                        data-bs-title="Traffic Overview">
                                </span>
                                <input type="file" class="form-control custom-placeholder mt-sm-9" id="uploadArquivo" accept=".pdf">
                            </div>
                            <div class="form-group">
                                <label for="serie" class="cadastrotitulo">Título do Material</label>
                                <input type="text" class="form-control custom-placeholder" id="serie" placeholder="Digite o Título do Material">
                            </div>
                        </div>
                        <div class="col-12 col-md-6"> <!-- Alterado para col-12 em telas pequenas -->
                            <div class="form-group">
                                <label for="informacoesAdicionais" class="cadastrotitulo">Descrição</label>
                                <textarea class="form-control custom-placeholder" id="DescricaoUpload" placeholder="Descreva o conteúdo do arquivo"></textarea>
                            </div>
                            <label for="professor" class="cadastrotitulo">Turmas</label>
                            <select class="form-control custom-placeholder" id="professor">
                                <option value="">Selecione uma Turma</option>
                                <option value="1º Ano - A">1º Ano - A</option>
                                <option value="1º Ano - A">1º Ano - B</option>
                                <option value="1º Ano - A">1º Ano - C</option>
                                <option value="1º Ano - A">1º Ano - D</option>
                                <option value="1º Ano - A">1º Ano - E</option>
                                <option value="1º Ano - A">1º Ano - F</option>
                                <option value="1º Ano - A">2º Ano - A</option>
                                <option value="1º Ano - A">2º Ano - B</option>
                                <option value="1º Ano - A">2º Ano - C</option>
                                <option value="1º Ano - A">2º Ano - D</option>
                                <option value="1º Ano - A">2º Ano - E</option>
                                <option value="1º Ano - A">2º Ano - F</option>
                                <option value="1º Ano - A">3º Ano - A</option>
                                <option value="1º Ano - A">3º Ano - B</option>
                                <option value="1º Ano - A">3º Ano - C</option>
                                <option value="1º Ano - A">3º Ano - D</option>
                                <option value="1º Ano - A">3º Ano - E</option>
                                <option value="1º Ano - A">3º Ano - F</option>
                                <option value="1º Ano - A">4º Ano - A</option>
                                <option value="1º Ano - A">4º Ano - B</option>
                                <option value="1º Ano - A">4º Ano - C</option>
                                <option value="1º Ano - A">4º Ano - D</option>
                                <option value="1º Ano - A">4º Ano - E</option>
                                <option value="1º Ano - A">4º Ano - F</option>
                                <option value="1º Ano - A">5º Ano - A</option>
                                <option value="1º Ano - A">5º Ano - B</option>
                                <option value="1º Ano - A">5º Ano - C</option>
                                <option value="1º Ano - A">5º Ano - D</option>
                                <option value="1º Ano - A">5º Ano - E</option>
                                <option value="1º Ano - A">5º Ano - F</option>
                            </select>
                        </div>
                    </div>
                    <div class="text-end mt-3">
                        <button type="submit" class="btn btn-login">Corrigir Material Educativo</button>
                    </div>
                </div>
            </fieldset>
        </div>
    </div>