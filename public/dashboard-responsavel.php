<?php
$pageTitle = "Dashboard - Responsável";
include 'assets/include/header.php';
?>
<script
  src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">
</script>

<body>
  <div class="page-wrapper" id="main-wrapper" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">

   
    <div class="body-wrapper">

      <?php include 'assets/include/perfilresponsavel.php'; ?>

      <div class="container-fluid">
        <div class="row">

          <?php include 'assets/include/aluno-mensagem.php'; ?>

          

          <?php include 'assets/include/card-discord.php'; ?>

          <?php include 'assets/include/aluno/alunos-notas.php'; ?>
          
          <?php include 'assets/include/gestao-responsavel-frequencia.php'; ?>

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