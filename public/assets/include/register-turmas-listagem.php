<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <legend class="titulobloco d-flex align-items-center mb-lg-9">
                <span class="me-2 d-flex align-items-center">
                    <iconify-icon icon="iconoir:group" class="fs-7 text-muted icone-registro"
                        data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="tooltip-success"
                        data-bs-title="Traffic Overview"></iconify-icon>
                </span>
                Listagem de Turmas
            </legend>

            <div class="table-responsive mb-lg-9">
                <table class="table text-nowrap align-middle mb-0">
                    <thead>
                        <tr class="border-2 border-bottom border-primary border-0">
                            <th scope="col" class="ps-0">Filtros:</th>
                        </tr>
                    </thead>
                </table>
            </div>

            <div class="row ">
                <div class="col-lg-3 col-md-6 mb-3">
                    <label for="filterSerie" class="icone-registro">Série</label>
                    <select id="filterSerie" class="form-control custom-placeholder" onchange="filterTable()">
                        <option value="">Todas</option>
                        <option value="1º Ano">1º Ano</option>
                        <option value="2º Ano">2º Ano</option>
                        <option value="3º Ano">3º Ano</option>
                    </select>
                </div>
                <div class="col-lg-3 col-md-6 mb-3">
                    <label for="filterTurma" class="icone-registro">Turma</label>
                    <select id="filterTurma" class="form-control custom-placeholder" onchange="filterTable()">
                        <option value="">Todas</option>
                        <option value="Turma A">Turma A</option>
                        <option value="Turma B">Turma B</option>
                        <option value="Turma C">Turma C</option>
                        <option value="Turma D">Turma D</option>
                        <option value="Turma E">Turma E</option>
                    </select>
                </div>
                <div class="col-lg-3 col-md-6 mb-3">
                    <label for="filterTurno" class="icone-registro">Turno</label>
                    <select id="filterTurno" class="form-control custom-placeholder" onchange="filterTable()">
                        <option value="">Todos</option>
                        <option value="Matutino">Matutino</option>
                        <option value="Vespertino">Vespertino</option>
                        <option value="Noturno">Noturno</option>
                    </select>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table text-nowrap align-middle mb-0">
                    <thead>
                        <tr class="border-2 border-bottom border-primary border-0">
                            <th scope="col" class="ps-0">Série</th>
                            <th scope="col" class="ps-0">Turmas</th>
                            <th scope="col" class="ps-0">Turno</th>
                        </tr>
                    </thead>
                    <tbody id="tableBody" class="table-group-divider">
                        <tr>
                            <td class="ps-0 fw-medium">1º Ano</td>
                            <td class="ps-0 fw-medium">Turma A</td>
                            <td class="ps-0 fw-medium">Matutino</td>
                        </tr>
                        <tr>
                            <td class="ps-0 fw-medium">1º Ano</td>
                            <td class="ps-0 fw-medium">Turma B</td>
                            <td class="ps-0 fw-medium">Vespertino</td>
                        </tr>
                        <tr>
                            <td class="ps-0 fw-medium">1º Ano</td>
                            <td class="ps-0 fw-medium">Turma C</td>
                            <td class="ps-0 fw-medium">Noturno</td>
                        </tr>
                        <tr>
                            <td class="ps-0 fw-medium">1º Ano</td>
                            <td class="ps-0 fw-medium">Turma D</td>
                            <td class="ps-0 fw-medium">Matutino</td>
                        </tr>
                        <tr>
                            <td class="ps-0 fw-medium">1º Ano</td>
                            <td class="ps-0 fw-medium">Turma E</td>
                            <td class="ps-0 fw-medium">Vespertino</td>
                        </tr>
                        <tr>
                            <td class="ps-0 fw-medium">2º Ano</td>
                            <td class="ps-0 fw-medium">Turma A</td>
                            <td class="ps-0 fw-medium">Matutino</td>
                        </tr>
                        <tr>
                            <td class="ps-0 fw-medium">2º Ano</td>
                            <td class="ps-0 fw-medium">Turma B</td>
                            <td class="ps-0 fw-medium">Vespertino</td>
                        </tr>
                        <tr>
                            <td class="ps-0 fw-medium">2º Ano</td>
                            <td class="ps-0 fw-medium">Turma C</td>
                            <td class="ps-0 fw-medium">Noturno</td>
                        </tr>
                        <tr>
                            <td class="ps-0 fw-medium">2º Ano</td>
                            <td class="ps-0 fw-medium">Turma D</td>
                            <td class="ps-0 fw-medium">Matutino</td>
                        </tr>
                        <tr>
                            <td class="ps-0 fw-medium">2º Ano</td>
                            <td class="ps-0 fw-medium">Turma E</td>
                            <td class="ps-0 fw-medium">Vespertino</td>
                        </tr>
                        <tr>
                            <td class="ps-0 fw-medium">3º Ano</td>
                            <td class="ps-0 fw-medium">Turma A</td>
                            <td class="ps-0 fw-medium">Matutino</td>
                        </tr>
                        <tr>
                            <td class="ps-0 fw-medium">3º Ano</td>
                            <td class="ps-0 fw-medium">Turma B</td>
                            <td class="ps-0 fw-medium">Vespertino</td>
                        </tr>
                        <tr>
                            <td class="ps-0 fw-medium">3º Ano</td>
                            <td class="ps-0 fw-medium">Turma C</td>
                            <td class="ps-0 fw-medium">Noturno</td>
                        </tr>
                        <tr>
                            <td class="ps-0 fw-medium">3º Ano</td>
                            <td class="ps-0 fw-medium">Turma D</td>
                            <td class="ps-0 fw-medium">Matutino</td>
                        </tr>
                        <tr>
                            <td class="ps-0 fw-medium">3º Ano</td>
                            <td class="ps-0 fw-medium">Turma E</td>
                            <td class="ps-0 fw-medium">Vespertino</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script src="../assets/js/filtro-listagem-turmas.js"></script>