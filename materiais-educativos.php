<?php
$pageTitle = "Materiais Educativos";
include 'assets/include/header.php';
?>

<body>
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">

    <?php include 'assets/include/sidebar.php'; ?>

    <div class="body-wrapper">

      <?php include 'assets/include/perfil.php'; ?>

      <div class="container-fluid">
        <div class="row">

          <?php include 'assets/include/register-carregar-arquivos.php'; ?>




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
    <script src="../assets/js/registro-turmas.js"></script>
    <script>
      let currentPage = 0;
      const containers = document.querySelectorAll('.carousel-page');

      function showPage(page) {
        const totalPages = containers.length;
        currentPage = Math.max(0, Math.min(page, totalPages - 1));
        const offset = -currentPage * 100.4;
        containers.forEach((container) => {
          container.style.transform = `translateX(${offset}%)`;
        });
      }

      function nextPage() {
        const totalPages = containers.length;
        if (currentPage + 1 < totalPages) {
          showPage(currentPage + 1);
        }
      }

      function prevPage() {
        if (currentPage > 0) {
          showPage(currentPage - 1);
        }
      }

      showPage(currentPage);
    </script>
</body>

</html>