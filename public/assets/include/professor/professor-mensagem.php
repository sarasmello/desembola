<div>
    <div>
        <fieldset>
            <legend class="titulobloco d-flex align-items-center">
                <span class="me-2 d-flex align-items-center">
                    <iconify-icon icon="line-md:email-alert-twotone" class="fs-7 text-muted icone-registro"
                        data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="tooltip-success"
                        data-bs-title="Traffic Overview"></iconify-icon>
                </span>
                Caixa de entrada - Feedback / Avisos
            </legend>

            <div class="row align-items-end">
                <!-- Card 1 -->
                <div class="col-md-4">
                    <?php
                    $imagem = "../assets/images/blog/blog-img3.jpg";
                    $tipoAtividade = "Carlos Andrade Jesus";
                    $titulo = "Reunião de encerramento";
                    $visualizacoes = "Não Lido";
                    $data = "Qua, Nov 22";
                    $materia = "Matematica";
                    $professor = "Prof. Fernando Carlos";
                    $photo = "../assets/images/profile/user-3.jpg";
                    $visualizado = false;
                    include 'card-mensagens.php';
                    ?>
                </div>
                <!-- Card 2 -->
                <div class="col-md-4">
                    <?php
                    $imagem = "../assets/images/blog/blog-img4.jpg";
                    $tipoAtividade = "Maria Lima da Silva";
                    $titulo = "Debate sobre Aula 4";
                    $visualizacoes = "Lido";
                    $data = "Sex, Nov 24";
                    $materia = "Matematica";
                    $professor = "Prof. Fernando Carlos";
                    $photo = "../assets/images/profile/user-2.jpg";
                    $visualizado = true;
                    include 'card-mensagens.php';
                    ?>
                </div>
                <!-- Card 3 -->
                <div class="col-md-4">
                    <?php
                    $imagem = "../assets/images/blog/blog-img5.jpg";
                    $tipoAtividade = "Francisco Fernandes Augusto";
                    $titulo = "Sugestão de melhoria";
                    $visualizacoes = "Não Lido";
                    $data = "Seg, Dez 02";
                    $materia = "Matematica";
                    $professor = "Prof. Fernando Carlos";
                    $photo = "../assets/images/profile/user-1.jpg";
                    $visualizado = false;
                    include 'card-mensagens.php';
                    ?>
                </div>
            </div>
        </fieldset>
    </div>
</div>
