<?php
// Valores padrão caso nenhuma variável seja passada
$tipoAtividade = $tipoAtividade ?? "Atividade";
$titulo = $titulo ?? "Introdução às Frações primeiro Grau";
$visualizacoes = $visualizacoes ?? "0";
$data = $data ?? "Data Indisponível";
$imagem = $imagem ?? "../assets/images/blog/blog-img1.jpg"; // Caminho padrão
$professorNome = $professorNome ?? "Nome do Professor";
$professorImagem = $professorImagem ?? "../assets/images/profile/default-user.jpg";
$questao1 = $questao1 ?? "#34";
$questao2 = $questao2 ?? "#34";
$questao3 = $questao3 ?? "#34";
$questao4 = $questao4 ?? "#34";
$questao5 = $questao5 ?? "#34";
$questao6 = $questao6 ?? "#34";
$questao7 = $questao7 ?? "#34";
$questao8 = $questao8 ?? "#34";
$questao9 = $questao9 ?? "#34";
$questao10 = $questao10 ?? "#34";
$materia = $materia ?? "Matéria Indisponível";
?>

<div class="col-lg-12">
    <div class="card overflow-hidden hover-img">
        <div class="position-relative">
            <a href="javascript:void(0)" onclick="openModal('<?php echo htmlspecialchars($tipoAtividade); ?>', '<?php echo htmlspecialchars($materia); ?>', '<?php echo htmlspecialchars($professorNome); ?>', '<?php echo htmlspecialchars($titulo); ?>', '<?php echo htmlspecialchars($data); ?>', '<?php echo htmlspecialchars($questao1); ?>', '<?php echo htmlspecialchars($questao2); ?>', '<?php echo htmlspecialchars($questao3); ?>', '<?php echo htmlspecialchars($questao4); ?>', '<?php echo htmlspecialchars($questao5); ?>', '<?php echo htmlspecialchars($questao6); ?>', '<?php echo htmlspecialchars($questao7); ?>', '<?php echo htmlspecialchars($questao8); ?>', '<?php echo htmlspecialchars($questao9); ?>', '<?php echo htmlspecialchars($questao10); ?>')">
                <img src="<?php echo htmlspecialchars($imagem); ?>" class="card-img-top" alt="matdash-img">
            </a>
        </div>
        <div class="card-body p-3">
            <span class="badge text-bg-light fs-2 py-1 px-2 lh-sm mt-3"><?php echo htmlspecialchars($tipoAtividade); ?></span>
            <a href="javascript:void(0)" onclick="openModal('<?php echo htmlspecialchars($tipoAtividade); ?>', '<?php echo htmlspecialchars($materia); ?>', '<?php echo htmlspecialchars($professorNome); ?>', '<?php echo htmlspecialchars($titulo); ?>', '<?php echo htmlspecialchars($data); ?>', '<?php echo htmlspecialchars($questao1); ?>', '<?php echo htmlspecialchars($questao2); ?>', '<?php echo htmlspecialchars($questao3); ?>', '<?php echo htmlspecialchars($questao4); ?>', '<?php echo htmlspecialchars($questao5); ?>', '<?php echo htmlspecialchars($questao6); ?>', '<?php echo htmlspecialchars($questao7); ?>', '<?php echo htmlspecialchars($questao8); ?>', '<?php echo htmlspecialchars($questao9); ?>', '<?php echo htmlspecialchars($questao10); ?>')" class="d-block my-4 fs-5 text-dark fw-semibold link-primary">
                <?php echo htmlspecialchars($titulo); ?>
            </a>
            <div class="d-flex align-items-center gap-4">
                <div class="d-flex align-items-center gap-2">
                    <i class="ti ti-printer text-dark fs-5 icone-registro"></i><?php echo htmlspecialchars($visualizacoes); ?>
                </div>

                <div class="d-flex align-items-center fs-2 ms-auto">
                    <i class="ti ti-point text-dark"></i><?php echo htmlspecialchars($data); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div id="infoModal" class="modal" style="display: none;">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <div id="modalInfo" class="modal-info">
            <h3 id="modalTitle"></h3>
            <p><strong>Tipo de Atividade:</strong> <span id="modalTipoAtividade"></span></p>
            <p><strong>Matéria:</strong> <span id="modalMateria"></span></p>
            <p><strong>Professor:</strong> <span id="modalProfessor"></span></p>
            <p><strong>Assunto:</strong> <span id="modalAssunto"></span></p>
            <p><strong>Data da Aplicação:</strong> <span id="modalData"></span></p>
            <p><strong>Detalhamento das Questões:</strong></p>
            <ul>
                <li><strong>Questão 01:</strong> <span id="modalQuestao1"></span></li>
                <li><strong>Questão 02:</strong> <span id="modalQuestao2"></span></li>
                <li><strong>Questão 03:</strong> <span id="modalQuestao3"></span></li>
                <li><strong>Questão 04:</strong> <span id="modalQuestao4"></span></li>
                <li><strong>Questão 05:</strong> <span id="modalQuestao5"></span></li>
                <li><strong>Questão 06:</strong> <span id="modalQuestao6"></span></li>
                <li><strong>Questão 07:</strong> <span id="modalQuestao7"></span></li>
                <li><strong>Questão 08:</strong> <span id="modalQuestao8"></span></li>
                <li><strong>Questão 09:</strong> <span id="modalQuestao9"></span></li>
                <li><strong>Questão 10:</strong> <span id="modalQuestao10"></span></li>
            </ul>
        </div>
    </div>
</div>