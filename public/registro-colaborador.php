<?php
$pageTitle = "Cadastro Colaborador";
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

          <div class="container">
            <div class="row">

              <?php
              $fotoPath = 'assets/images/profile/professor.jpg';
              include 'assets/include/register-foto.php';
              ?>
              <?php include 'assets/include/register-colaborador-turma.php'; ?>
              <?php include 'assets/include/register-dados-pessoais.php'; ?>
              <?php include 'assets/include/register-endereco.php'; ?>
              <?php include 'assets/include/register-acesso.php'; ?>
              <?php include 'assets/include/register-turmas.php'; ?>

              <div class="text-end">
                <button type="submit" class="btn btn-login">Registrar Colaborador</button>
              </div>
            </div>

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
      <script src="../assets/js/efeito-sidebar.js"></script>
      <script src="../assets/js/registro-responsaveis-turma.js"></script>
</body>

</html>