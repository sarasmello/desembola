<div class="col-xs-12 col-sm-12 mb-12">
    <div class="card">
        <div class="card-body">
            <fieldset>
                <legend class="titulobloco d-flex align-items-center">
                    <span class="me-2 d-flex align-items-center">
                        <iconify-icon icon="line-md:upload-loop" class="fs-7 text-muted icone-registro"
                            data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="tooltip-success"
                            data-bs-title="Traffic Overview"></iconify-icon>
                    </span>
                    Carregar arquivos
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
                            <div class="form-group">
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
                    </div>
                    <div class="text-end mt-3">
                        <button type="submit" class="btn btn-login">Salvar Material Educativo</button>
                    </div>
                </div>
            </fieldset>
        </div>
    </div>
    <div class="p-7 mt-n7">
        <legend class="titulobloco d-flex align-items-center">
            <span class="me-2 d-flex align-items-center">
                <iconify-icon icon="ion:library" class="fs-7 text-muted icone-registro"
                    data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="tooltip-success"
                    data-bs-title="Traffic Overview"></iconify-icon>
            </span>
            Biblioteca
        </legend>


    </div>

</div>

<div class="carousel-container">
    <div class="carousel-page">
        <div class="container mt-lg-9" id="container1">
            <div class="row">
                <div class="col-xs-3 col-sm-3 mb-3">
                    <?php
                    $professorNome = "Prof. Fernando Carlos";
                    $professorImagem = "../assets/images/profile/user-3.jpg";
                    $titulo = "Introdução à Álgebra Linear";
                    $visualizacoes = "3.245";
                    $data = "Seg, Nov 20";

                    include '../assets/include/card-cartao.php';
                    ?>

                </div>
                <div class="col-xs-3 col-sm-3 mb-3">
                    <!-- Card 2 -->
                    <?php
                    $professorNome = "Matematicas";
                    $professorImagem = "../assets/images/profile/user-3.jpg";
                    $titulo = "Geometria Espacial e Planar";
                    $visualizacoes = "1.847";
                    $data = "Ter, Nov 21";

                    include '../assets/include/card-cartao.php';
                    ?>

                </div>
                <div class="col-xs-3 col-sm-3 mb-3">
                    <!-- Card 3 -->
                    <?php
                    $professorNome = "Prof. Fernando Carlos";
                    $professorImagem = "../assets/images/profile/user-3.jpg";
                    $titulo = "Probabilidade e Estatística Básica";
                    $visualizacoes = "5.281";
                    $data = "Qua, Nov 22";

                    include '../assets/include/card-cartao.php';
                    ?>

                </div>
                <div class="col-xs-3 col-sm-3 mb-3">
                    <!-- Card 4 -->
                    <?php
                    $professorNome = "Prof. Fernando Carlos";
                    $professorImagem = "../assets/images/profile/user-3.jpg";
                    $titulo = "Cálculo Diferencial Integral";
                    $visualizacoes = "4.362";
                    $data = "Qui, Nov 23";

                    include '../assets/include/card-cartao.php';
                    ?>

                </div>
            </div>

        </div>

        <div class="container mt-lg-9" id="container2">
            <div class="row">
                <div class="col-xs-3 col-sm-3 mb-3">
                    <!-- Card 1 -->
                    <?php
                    $professorNome = "Prof. Fernando Carlos";
                    $professorImagem = "../assets/images/profile/user-3.jpg";
                    $titulo = "Funções e Gráficos Avançado";
                    $visualizacoes = "2.954";
                    $data = "Sex, Nov 24";

                    include '../assets/include/card-cartao.php';
                    ?>

                </div>
                <div class="col-xs-3 col-sm-3 mb-3">
                    <!-- Card 2 -->
                    <?php
                    $professorNome = "Prof. Fernando Carlos";
                    $professorImagem = "../assets/images/profile/user-3.jpg";
                    $titulo = "Resolução de Sistemas Lineares";
                    $visualizacoes = "4.789";
                    $data = "Dom, Nov 26";

                    include '../assets/include/card-cartao.php';
                    ?>

                </div>
                <div class="col-xs-3 col-sm-3 mb-3">
                    <!-- Card 3 -->
                    <?php
                    $professorNome = "Prof. Fernando Carlos";
                    $professorImagem = "../assets/images/profile/user-3.jpg";
                    $titulo = "Lógica Matemática Aplicada";
                    $visualizacoes = "3.658";
                    $data = "Seg, Nov 27";

                    include '../assets/include/card-cartao.php';
                    ?>

                </div>
                <div class="col-xs-3 col-sm-3 mb-3">
                    <!-- Card 4 -->
                    <?php
                    $professorNome = "Prof. Fernando Carlos";
                    $professorImagem = "../assets/images/profile/user-3.jpg";
                    $titulo = "Introdução às Equações Diferenciais";
                    $visualizacoes = "2.550";
                    $data = "Ter, Nov 28";

                    include '../assets/include/card-cartao.php';
                    ?>

                </div>
            </div>

        </div>
    </div>

    <div class="carousel-page">
        <div class="container mt-lg-9" id="container3">
            <div class="row">
                <div class="col-xs-3 col-sm-3 mb-3">
                    <!-- Card 1 -->
                    <?php
                    $professorNome = "Prof. Fernando Carlos";
                    $professorImagem = "../assets/images/profile/user-3.jpg";
                    $titulo = "Análise Combinatória";
                    $visualizacoes = "4.034";
                    $data = "Qua, Nov 29";

                    include '../assets/include/card-cartao.php';
                    ?>

                </div>
                <div class="col-xs-3 col-sm-3 mb-3">
                    <!-- Card 2 -->
                    <?php
                    $professorNome = "Prof. Fernando Carlos";
                    $professorImagem = "../assets/images/profile/user-3.jpg";
                    $titulo = "Cálculo Integral II";
                    $visualizacoes = "3.124";
                    $data = "Qui, Nov 30";

                    include '../assets/include/card-cartao.php';
                    ?>

                </div>
                <div class="col-xs-3 col-sm-3 mb-3">
                    <!-- Card 3 -->
                    <?php
                    $professorNome = "Prof. Fernando Carlos";
                    $professorImagem = "../assets/images/profile/user-3.jpg";
                    $titulo = "Teoria dos Conjuntos";
                    $visualizacoes = "2.932";
                    $data = "Sex, Dez 1";

                    include '../assets/include/card-cartao.php';
                    ?>

                </div>
                <div class="col-xs-3 col-sm-3 mb-3">
                    <!-- Card 4 -->
                    <?php
                    $professorNome = "Prof. Fernando Carlos";
                    $professorImagem = "../assets/images/profile/user-3.jpg";
                    $titulo = "Transformadas de Fourier";
                    $visualizacoes = "5.341";
                    $data = "Sab, Dez 2";

                    include '../assets/include/card-cartao.php';
                    ?>

                </div>
            </div>

        </div>

        <div class="container mt-lg-9" id="container4">
            <div class="row">
                <div class="col-xs-3 col-sm-3 mb-3">
                    <!-- Card 1 -->
                    <?php
                    $professorNome = "Prof. Fernando Carlos";
                    $professorImagem = "../assets/images/profile/user-3.jpg";
                    $titulo = "Cálculo Vetorial do Básicoao Avançado";
                    $visualizacoes = "4.123";
                    $data = "Dom, Dez 3";

                    include '../assets/include/card-cartao.php';
                    ?>

                </div>
                <div class="col-xs-3 col-sm-3 mb-3">
                    <!-- Card 2 -->
                    <?php
                    $professorNome = "Prof. Fernando Carlos";
                    $professorImagem = "../assets/images/profile/user-3.jpg";
                    $titulo = "Equações Diferenciais Parcial";
                    $visualizacoes = "3.681";
                    $data = "Seg, Dez 4";

                    include '../assets/include/card-cartao.php';
                    ?>

                </div>
                <div class="col-xs-3 col-sm-3 mb-3">
                    <!-- Card 3 -->
                    <?php
                    $professorNome = "Prof. Fernando Carlos";
                    $professorImagem = "../assets/images/profile/user-3.jpg";
                    $titulo = "Geometria Analítica e Cônicas";
                    $visualizacoes = "5.155";
                    $data = "Ter, Dez 5";

                    include '../assets/include/card-cartao.php';
                    ?>

                </div>
                <div class="col-xs-3 col-sm-3 mb-3">
                    <!-- Card 4 -->
                    <?php
                    $professorNome = "Prof. Fernando Carlos";
                    $professorImagem = "../assets/images/profile/user-3.jpg";
                    $titulo = "Teorema Fundamental do Cálculo";
                    $visualizacoes = "2.812";
                    $data = "Qua, Dez 6";

                    include '../assets/include/card-cartao.php';
                    ?>

                </div>
            </div>

        </div>
    </div>

    <div class="carousel-page">
        <div class="container mt-lg-9" id="container5">
            <div class="row">
                <div class="col-xs-3 col-sm-3 mb-3">
                    <!-- Card 1 -->
                    <?php
                    $professorNome = "Prof. Fernando Carlos";
                    $professorImagem = "../assets/images/profile/user-3.jpg";
                    $titulo = "Funções Trigonométricas e Suas Aplicações";
                    $visualizacoes = "3.627";
                    $data = "Qui, Dez 7";

                    include '../assets/include/card-cartao.php';
                    ?>

                </div>
                <div class="col-xs-3 col-sm-3 mb-3">
                    <!-- Card 2 -->
                    <?php
                    $professorNome = "Prof. Fernando Carlos";
                    $professorImagem = "../assets/images/profile/user-3.jpg";
                    $titulo = "Estudo das Matrizes e Determinantes";
                    $visualizacoes = "4.875";
                    $data = "Sex, Dez 8";

                    include '../assets/include/card-cartao.php';
                    ?>

                </div>
                <div class="col-xs-3 col-sm-3 mb-3">
                    <!-- Card 3 -->
                    <?php
                    $professorNome = "Prof. Fernando Carlos";
                    $professorImagem = "../assets/images/profile/user-3.jpg";
                    $titulo = "Teoria dos Números Avançado";
                    $visualizacoes = "3.452";
                    $data = "Sab, Dez 9";

                    include '../assets/include/card-cartao.php';
                    ?>

                </div>
                <div class="col-xs-3 col-sm-3 mb-3">
                    <!-- Card 4 -->
                    <?php
                    $professorNome = "Prof. Fernando Carlos";
                    $professorImagem = "../assets/images/profile/user-3.jpg";
                    $titulo = "Cálculo Numérico e Algoritmos";
                    $visualizacoes = "6.011";
                    $data = "Dom, Dez 10";

                    include '../assets/include/card-cartao.php';
                    ?>

                </div>
            </div>

        </div>

        <div class="container mt-lg-9" id="container6">
            <div class="row">
                <div class="col-xs-3 col-sm-3 mb-3">
                    <!-- Card 1 -->
                    <?php
                    $professorNome = "Prof. Fernando Carlos";
                    $professorImagem = "../assets/images/profile/user-3.jpg";
                    $titulo = "Compreensão de Limites e Continuidade";
                    $visualizacoes = "2.712";
                    $data = "Seg, Dez 11";

                    include '../assets/include/card-cartao.php';
                    ?>

                </div>
                <div class="col-xs-3 col-sm-3 mb-3">
                    <!-- Card 2 -->
                    <?php
                    $professorNome = "Prof. Fernando Carlos";
                    $professorImagem = "../assets/images/profile/user-3.jpg";
                    $titulo = "Aplicações de Cálculo em Ciências";
                    $visualizacoes = "3.965";
                    $data = "Ter, Dez 12";

                    include '../assets/include/card-cartao.php';
                    ?>

                </div>
                <div class="col-xs-3 col-sm-3 mb-3">
                    <!-- Card 3 -->
                    <?php
                    $professorNome = "Prof. Fernando Carlos";
                    $professorImagem = "../assets/images/profile/user-3.jpg";
                    $titulo = "Métodos de Aproximação e Interpolação";
                    $visualizacoes = "5.462";
                    $data = "Qua, Dez 13";

                    include '../assets/include/card-cartao.php';
                    ?>

                </div>
                <div class="col-xs-3 col-sm-3 mb-3">
                    <!-- Card 4 -->
                    <?php
                    $professorNome = "Prof. Fernando Carlos";
                    $professorImagem = "../assets/images/profile/user-3.jpg";
                    $titulo = "Funções Trigonométricas e Suas Aplicações";
                    $visualizacoes = "3.627";
                    $data = "Qui, Dez 14";

                    include '../assets/include/card-cartao.php';
                    ?>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Botões de navegação -->
<div class="pagination-controls text-center mt-n8">
    <button onclick="prevPage()" class="btn btn-secondary btn-login" id="btn-prev">Anterior</button>
    <span id="page-numbers" class="mx-2"></span>
    <button onclick="nextPage()" class="btn btn-secondary btn-login" id="btn-next">Próximo</button>
</div>