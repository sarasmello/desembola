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
                        <div class="col-12 col-md-6">
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
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="informacoesAdicionais" class="cadastrotitulo">Descrição</label>
                                <textarea class="form-control custom-placeholder" id="DescricaoUpload" placeholder="Descreva o conteúdo do arquivo"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="serie" class="cadastrotitulo">Série</label>
                                <input type="text" class="form-control custom-placeholder" id="serie" placeholder="Digite a série">
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
                    <!-- Card 1 -->
                    <?php include 'assets/include/card-cartao-1.php'; ?>
                </div>
                <div class="col-xs-3 col-sm-3 mb-3">
                    <!-- Card 2 -->
                    <?php include 'assets/include/card-cartao-2.php'; ?>
                </div>
                <div class="col-xs-3 col-sm-3 mb-3">
                    <!-- Card 3 -->
                    <?php include 'assets/include/card-cartao-3.php'; ?>
                </div>
                <div class="col-xs-3 col-sm-3 mb-3">
                    <!-- Card 4 -->
                    <?php include 'assets/include/card-cartao-4.php'; ?>
                </div>
            </div>

        </div>

        <div class="container mt-lg-9" id="container2">
            <div class="row">
                <div class="col-xs-3 col-sm-3 mb-3">
                    <!-- Card 1 -->
                    <?php include 'assets/include/card-cartao-4.php'; ?>
                </div>
                <div class="col-xs-3 col-sm-3 mb-3">
                    <!-- Card 2 -->
                    <?php include 'assets/include/card-cartao-1.php'; ?>
                </div>
                <div class="col-xs-3 col-sm-3 mb-3">
                    <!-- Card 3 -->
                    <?php include 'assets/include/card-cartao-2.php'; ?>
                </div>
                <div class="col-xs-3 col-sm-3 mb-3">
                    <!-- Card 4 -->
                    <?php include 'assets/include/card-cartao-3.php'; ?>
                </div>
            </div>

        </div>
    </div>

    <div class="carousel-page">
        <div class="container mt-lg-9" id="container3">
            <div class="row">
                <div class="col-xs-3 col-sm-3 mb-3">
                    <!-- Card 1 -->
                    <?php include 'assets/include/card-cartao-3.php'; ?>
                </div>
                <div class="col-xs-3 col-sm-3 mb-3">
                    <!-- Card 2 -->
                    <?php include 'assets/include/card-cartao-4.php'; ?>
                </div>
                <div class="col-xs-3 col-sm-3 mb-3">
                    <!-- Card 3 -->
                    <?php include 'assets/include/card-cartao-1.php'; ?>
                </div>
                <div class="col-xs-3 col-sm-3 mb-3">
                    <!-- Card 4 -->
                    <?php include 'assets/include/card-cartao-2.php'; ?>
                </div>
            </div>

        </div>

        <div class="container mt-lg-9" id="container4">
            <div class="row">
                <div class="col-xs-3 col-sm-3 mb-3">
                    <!-- Card 1 -->
                    <?php include 'assets/include/card-cartao-1.php'; ?>
                </div>
                <div class="col-xs-3 col-sm-3 mb-3">
                    <!-- Card 2 -->
                    <?php include 'assets/include/card-cartao-2.php'; ?>
                </div>
                <div class="col-xs-3 col-sm-3 mb-3">
                    <!-- Card 3 -->
                    <?php include 'assets/include/card-cartao-3.php'; ?>
                </div>
                <div class="col-xs-3 col-sm-3 mb-3">
                    <!-- Card 4 -->
                    <?php include 'assets/include/card-cartao-4.php'; ?>
                </div>
            </div>

        </div>
    </div>

    <div class="carousel-page">
        <div class="container mt-lg-9" id="container5">
            <div class="row">
                <div class="col-xs-3 col-sm-3 mb-3">
                    <!-- Card 1 -->
                    <?php include 'assets/include/card-cartao-1.php'; ?>
                </div>
                <div class="col-xs-3 col-sm-3 mb-3">
                    <!-- Card 2 -->
                    <?php include 'assets/include/card-cartao-2.php'; ?>
                </div>
                <div class="col-xs-3 col-sm-3 mb-3">
                    <!-- Card 3 -->
                    <?php include 'assets/include/card-cartao-3.php'; ?>
                </div>
                <div class="col-xs-3 col-sm-3 mb-3">
                    <!-- Card 4 -->
                    <?php include 'assets/include/card-cartao-4.php'; ?>
                </div>
            </div>

        </div>

        <div class="container mt-lg-9" id="container6">
            <div class="row">
                <div class="col-xs-3 col-sm-3 mb-3">
                    <!-- Card 1 -->
                    <?php include 'assets/include/card-cartao-4.php'; ?>
                </div>
                <div class="col-xs-3 col-sm-3 mb-3">
                    <!-- Card 2 -->
                    <?php include 'assets/include/card-cartao-3.php'; ?>
                </div>
                <div class="col-xs-3 col-sm-3 mb-3">
                    <!-- Card 3 -->
                    <?php include 'assets/include/card-cartao-2.php'; ?>
                </div>
                <div class="col-xs-3 col-sm-3 mb-3">
                    <!-- Card 4 -->
                    <?php include 'assets/include/card-cartao-1.php'; ?>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="pagination-controls text-center mt-n8">
    <button onclick="prevPage()" class="btn btn-secondary btn-login" id="btn-prev">Anterior</button>
    <span id="page-numbers" class="mx-2"></span>
    <button onclick="nextPage()" class="btn btn-secondary btn-login" id="btn-next">Próximo</button>
</div>