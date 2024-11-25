<?php
// Valores padrão caso nenhuma variável seja passada
$tipoAtividade = $tipoAtividade ?? "Atividade";
$titulo = $titulo ?? "Introdução às Frações primeiro Grau";
$visualizacoes = $visualizacoes ?? "0";
$data = $data ?? "Data Indisponível";
$imagem = $imagem ?? "../assets/images/blog/blog-img1.jpg"; // Caminho padrão
$professorNome = $professorNome ?? "Nome do Professor";
$professorImagem = $professorImagem ?? "../assets/images/profile/default-user.jpg";
$materia = $materia ?? "Matéria Indisponível";
$photo = $photo ?? "../assets/images/profile/user-3.jpg";
$visualizado = $visualizado ?? true; // Variável para definir se foi visualizado ou não
?>

<div class="col-lg-12">
    <div class="card overflow-hidden hover-img">
        <div class="position-relative">
            <a href="javascript:void(0)" onclick="openModal('<?php echo htmlspecialchars($tipoAtividade); ?>', '<?php echo htmlspecialchars($materia); ?>', '<?php echo htmlspecialchars($professorNome); ?>', '<?php echo htmlspecialchars($titulo); ?>', '<?php echo htmlspecialchars($data); ?>', '<?php echo htmlspecialchars($questao1); ?>', '<?php echo htmlspecialchars($questao2); ?>', '<?php echo htmlspecialchars($questao3); ?>', '<?php echo htmlspecialchars($questao4); ?>', '<?php echo htmlspecialchars($questao5); ?>', '<?php echo htmlspecialchars($questao6); ?>', '<?php echo htmlspecialchars($questao7); ?>', '<?php echo htmlspecialchars($questao8); ?>', '<?php echo htmlspecialchars($questao9); ?>', '<?php echo htmlspecialchars($questao10); ?>')">
                <img src="<?php echo htmlspecialchars($imagem); ?>" class="card-img-top" alt="matdash-img">
            </a>
            <img src="<?php echo htmlspecialchars($photo); ?>" alt="matdash-img" class="img-fluid rounded-circle position-absolute bottom-0 start-0 mb-n9 ms-9" width="40" height="40" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Georgeanna Ramero">
        </div>
        <div class="card-body p-3">
            <span class="badge text-bg-light fs-2 py-1 px-2 lh-sm mt-3"><?php echo htmlspecialchars($tipoAtividade); ?></span>
            <a href="javascript:void(0)" onclick="openModal('<?php echo htmlspecialchars($tipoAtividade); ?>', '<?php echo htmlspecialchars($materia); ?>', '<?php echo htmlspecialchars($professorNome); ?>', '<?php echo htmlspecialchars($titulo); ?>', '<?php echo htmlspecialchars($data); ?>', '<?php echo htmlspecialchars($questao1); ?>', '<?php echo htmlspecialchars($questao2); ?>', '<?php echo htmlspecialchars($questao3); ?>', '<?php echo htmlspecialchars($questao4); ?>', '<?php echo htmlspecialchars($questao5); ?>', '<?php echo htmlspecialchars($questao6); ?>', '<?php echo htmlspecialchars($questao7); ?>', '<?php echo htmlspecialchars($questao8); ?>', '<?php echo htmlspecialchars($questao9); ?>', '<?php echo htmlspecialchars($questao10); ?>')" class="d-block my-4 fs-5 text-dark fw-semibold link-primary">
                <?php echo htmlspecialchars($titulo); ?>
            </a>
            <div class="d-flex align-items-center gap-4">
                <div class="d-flex align-items-center gap-2">
                    <?php if ($visualizado): ?>
                        <iconify-icon icon="streamline:eye-optic-solid" class="fs-7 text-muted icone-registro"
                        data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="tooltip-success"
                        data-bs-title="Traffic Overview"></iconify-icon>
                    <?php else: ?>
                        <iconify-icon icon="mingcute:eye-close-fill" class="fs-7 text-muted icone-registro"
                        data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="tooltip-success"
                        data-bs-title="Traffic Overview"></iconify-icon>
                    <?php endif; ?>
                    <?php echo htmlspecialchars($visualizacoes); ?>
                </div>

                <div class="d-flex align-items-center fs-2 ms-auto">
                    <i class="ti ti-point text-dark"></i><?php echo htmlspecialchars($data); ?>
                </div>
            </div>
        </div>
    </div>
</div>