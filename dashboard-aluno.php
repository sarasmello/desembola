<?php
$pageTitle = "Dashboard - Aluno";
include 'assets/include/header.php';
?>
<script
  src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">
</script>

<body>
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">

    <aside class="left-sidebar">
      <div>
        <div class="brand-logo d-flex justify-content-center align-items-center">
          <a href="./index.html" class="text-nowrap logo-img">
            <img src="../assets/images/logos/logodash.svg" alt="" width="218" height="70" />
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <?php include 'assets/include/aluno/sidebar-aluno.php'; ?>
      </div>
    </aside>

    <div class="body-wrapper">

      <?php include 'assets/include/perfil.php'; ?>

      <div class="container-fluid">
        <div class="row">

          <?php include 'assets/include/aluno/aluno-mensagem.php'; ?>

          <?php include 'assets/include/aluno/alunos-notas.php'; ?>

          <?php include 'assets/include/card-discord.php'; ?>

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
      const chartCanvas = document.getElementById('myChart');
      chartCanvas.style.minHeight = '336px';
      chartCanvas.style.maxHeight = '336px';
      chartCanvas.style.width = '100%';
    </script>
</body>

</html>