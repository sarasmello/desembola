<?php
$pageTitle = "Dashboard - Coordenador";
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

          <?php include 'assets/include/card-atividade-ia-grafico.php'; ?>

          <?php include 'assets/include/card-discord.php'; ?>

          <?php include 'assets/include/card-engajamento.php'; ?>

          <?php include 'assets/include/card-indice-cadastrados.php'; ?>

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
</body>

</html>