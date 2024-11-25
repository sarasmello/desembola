<div class="col-xs-12 col-sm-12 mb-12">
    <div class="card">
        <div class="card-body">
            <div class="row align-items-center">
                <div class="col">
                    <strong>
                        <span class="me-2 d-flex align-items-center">
                            <iconify-icon icon="hugeicons:question" class="fs-7 text-muted icone-registro"
                                data-bs-toggle="tooltip" data-bs-placement="top" style="margin-right: 5px;" data-bs-custom-class="tooltip-success"
                                data-bs-title="Traffic Overview"></iconify-icon>
                            Questão #<?php echo htmlspecialchars($questionId); ?></strong></span>
                </div>
                <div class="col-md-auto text-end">
                    <span class="badge bg-secondary">
                        <?php echo isset($materia) ? htmlspecialchars($materia) : 'Matéria não especificada'; ?>
                    </span>
                    <span class="badge bg-light text-dark ms-2">
                        <?php echo isset($professor) ? htmlspecialchars($professor) : 'Professor não especificado'; ?>
                    </span>
                </div>
                <div class="col-lg-2 dificuldadestar">
                    <span class="me-2">
                        <?php for ($i = 1; $i <= 5; $i++): ?>
                            <iconify-icon
                                icon="ic:twotone-star"
                                class="fs-7 <?= ($i <= $activeStars) ? 'icone-registro text-muted' : 'text-muted' ?>"
                                data-bs-toggle="tooltip"
                                data-bs-placement="top"
                                data-bs-custom-class="tooltip-success"
                                data-bs-title="Nível de Dificuldade">
                            </iconify-icon>
                        <?php endfor; ?>
                    </span>
                </div>
            </div>

            <div class="question mt-4">
                <h5 class="titulobloco2"><?php echo htmlspecialchars($titulo); ?></h5>
                <ul class="list-unstyled">
                    <?php foreach ($alternativas as $alternativa): ?>
                        <li class="cadastrotitulo <?= ($alternativa === $question['resposta_correta']) ? 'icone-registro' : '' ?>">
                            <?= htmlspecialchars($alternativa) ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</div>