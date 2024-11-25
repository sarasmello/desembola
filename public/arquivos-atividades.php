<?php
$pageTitle = "Arquivos de Atividades";
include 'assets/include/header.php';

$perPage = 5;
$totalQuestions = 0;
$currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$currentPage = max(1, $currentPage);

require_once 'assets/include/helpers.php';

$totalQuestions = count($questions);
$totalPages = ceil($totalQuestions / $perPage);
$currentPage = max(1, min($totalPages, $currentPage));
$start = ($currentPage - 1) * $perPage;

$filterStars = isset($_GET['stars']) ? (int)$_GET['stars'] : 0;
$filterMateria = isset($_GET['materia']) ? $_GET['materia'] : '';
$filterProfessor = isset($_GET['professor']) ? $_GET['professor'] : '';
$searchText = isset($_GET['search']) ? $_GET['search'] : '';

$materiasDisponiveis = array_unique(array_map(function ($question) {
  return $question['materia'];
}, $questions));
sort($materiasDisponiveis);
$professoresDisponiveis = array_unique(array_filter(array_map(function ($question) {
  return isset($question['professor']) ? $question['professor'] : '';
}, $questions)));
sort($professoresDisponiveis);

$filteredQuestions = array_filter($questions, function ($question) use ($filterStars, $filterMateria, $filterProfessor, $searchText) {
  $matchesStars = $filterStars == 0 || $question['stars'] == $filterStars;
  $matchesMateria = empty($filterMateria) || stripos($question['materia'], $filterMateria) !== false;
  $matchesProfessor = empty($filterProfessor) || (isset($question['professor']) && stripos($question['professor'], $filterProfessor) !== false); // Verificação adicionada
  $matchesSearch = empty($searchText) || stripos($question['titulo'], $searchText) !== false;

  return $matchesStars && $matchesMateria && $matchesProfessor && $matchesSearch;
});

$totalFilteredQuestions = count($filteredQuestions);
$totalPages = ceil($totalFilteredQuestions / $perPage);
$currentPage = max(1, min($totalPages, $currentPage));
$start = ($currentPage - 1) * $perPage;
$filteredQuestions = array_slice($filteredQuestions, $start, $perPage);
?>

<body>
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">

    <?php include 'assets/include/sidebar.php'; ?>

    <div class="body-wrapper">

      <?php include 'assets/include/perfil.php'; ?>

      <div class="container-fluid">

        <div class="card">
          <div class="card-body">
            <legend class="titulobloco2 d-flex align-items-center">
              <span class="me-2 d-flex align-items-center">
                <iconify-icon icon="icon-park-twotone:filter" class="fs-7 text-muted icone-registro"
                  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="tooltip-success"
                  data-bs-title="Traffic Overview"></iconify-icon>
              </span>Filtros
            </legend>
            <form method="GET" class="row mb-3">
              <div class="col-md-3 mb-2">
                <label for="stars">Quantidade de Estrelas:</label>
                <select id="stars" name="stars" class="form-control">
                  <option value="0" <?= ($filterStars == 0) ? 'selected' : '' ?>>Todas</option>
                  <option value="1" <?= ($filterStars == 1) ? 'selected' : '' ?>>1 Estrela</option>
                  <option value="2" <?= ($filterStars == 2) ? 'selected' : '' ?>>2 Estrelas</option>
                  <option value="3" <?= ($filterStars == 3) ? 'selected' : '' ?>>3 Estrelas</option>
                  <option value="4" <?= ($filterStars == 4) ? 'selected' : '' ?>>4 Estrelas</option>
                  <option value="5" <?= ($filterStars == 5) ? 'selected' : '' ?>>5 Estrelas</option>
                </select>
              </div>
              <div class="col-md-3 mb-2">
                <label for="materia">Matéria:</label>
                <select id="materia" name="materia" class="form-control">
                  <option value="">Todas</option>
                  <?php foreach ($materiasDisponiveis as $materia): ?>
                    <option value="<?= htmlspecialchars($materia) ?>" <?= ($filterMateria === $materia) ? 'selected' : '' ?>>
                      <?= htmlspecialchars($materia) ?>
                    </option>
                  <?php endforeach; ?>
                </select>
              </div>
              <div class="col-md-3 mb-2">
                <label for="professor">Professor:</label>
                <select id="professor" name="professor" class="form-control">
                  <option value="">Todos</option>
                  <?php foreach ($professoresDisponiveis as $professor): ?>
                    <option value="<?= htmlspecialchars($professor) ?>" <?= ($filterProfessor === $professor) ? 'selected' : '' ?>>
                      <?= htmlspecialchars($professor) ?>
                    </option>
                  <?php endforeach; ?>
                </select>
              </div>
              <div class="col-md-3 mb-2">
                <label for="search">Pesquisar:</label>
                <input type="text" id="search" name="search" class="form-control" value="<?= htmlspecialchars($searchText) ?>">
              </div>
              <div class="col-md-3 d-flex align-items-end mb-2">
                <button type="submit" class="btn btn-login">Filtrar</button>
              </div>
            </form>
          </div>
        </div>

        <?php if ($filteredQuestions): ?>
          <?php foreach ($filteredQuestions as $index => $question): ?>
            <?php
            $materia = $question['materia'];
            $activeStars = $question['stars'];
            $questionId = 1 + $start + $index;
            $professor = $question['professor'];
            $titulo = $question['titulo'];
            $alternativas = $question['alternativas'];
            include 'assets/include/card-questao.php';
            ?>
          <?php endforeach; ?>
        <?php else: ?>
          <div class="alert alert-warning text-center" style="margin-top: 20px;">Nenhuma questão encontrada para os critérios de filtro aplicados.</div>
        <?php endif; ?>

        <nav aria-label="Page navigation">
          <ul class="pagination justify-content-center">
            <?php for ($i = 1; $i <= $totalPages; $i++): ?>
              <li class="page-item <?= ($i === $currentPage) ? 'active' : '' ?>">
                <a class="paginacao" href="?page=<?= $i ?>&stars=<?= $filterStars ?>&materia=<?= urlencode($filterMateria) ?>&professor=<?= urlencode($filterProfessor) ?>&search=<?= urlencode($searchText) ?>"><?= $i ?></a>
              </li>
            <?php endfor; ?>
          </ul>
        </nav>

      </div>

    </div>
  </div>
  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="../assets/libs/simplebar/dist/simplebar.js"></script>
  <script src="../assets/js/sidebarmenu.js"></script>
  <script src="../assets/js/app.min.js"></script>
  <script src="../assets/js/dashboard.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
  <script>
    // Inicializa todos os tooltips na página
    document.addEventListener('DOMContentLoaded', function() {
      var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
      var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
      })
    });
  </script>
</body>

</html>