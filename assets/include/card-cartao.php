<?php
$professorNome = $professorNome ?? "Nome do Professor";
$professorImagem = $professorImagem ?? "../assets/images/profile/default-user.jpg";
$titulo = $titulo ?? "Título do Curso";
$visualizacoes = $visualizacoes ?? "0";
$data = $data ?? "Data Indisponível";
?>

<div class="col-lg-12">
    <div class="card overflow-hidden hover-img">
        <div class="position-relative">
            <a href="javascript:void(0)">
                <img src="../assets/images/blog/blog-img1.jpg" class="card-img-top" alt="matdash-img">
            </a>
            <img src="<?php echo htmlspecialchars($professorImagem); ?>" alt="professor-img"
                class="img-fluid rounded-circle position-absolute bottom-0 start-0 mb-n9 ms-9" width="40" height="40"
                data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="<?php echo htmlspecialchars($professorNome); ?>">
        </div>
        <div class="card-body p-3">
            <span class="badge text-bg-light fs-2 py-1 px-2 lh-sm mt-3"><?php echo htmlspecialchars($professorNome); ?></span>
            <a class="d-block my-4 fs-5 text-dark fw-semibold link-primary" href=""><?php echo htmlspecialchars($titulo); ?></a>
            <div class="d-flex align-items-center gap-4">
                <div class="d-flex align-items-center gap-2">
                    <i class="ti ti-eye text-dark fs-5"></i><?php echo htmlspecialchars($visualizacoes); ?>
                </div>

                <div class="d-flex align-items-center fs-2 ms-auto">
                    <i class="ti ti-point text-dark"></i><?php echo htmlspecialchars($data); ?>
                </div>
            </div>
        </div>
    </div>
</div>