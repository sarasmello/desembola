<?php
$pageTitle = "Faça seu login no Desembola";
include 'assets/include/header.php';
?>

<body>
  <div class="page-wrapper body-login" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6"
    data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
    <div class="position-relative overflow-hidden min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-4 col-lg-5 col-xxl-7 ms-auto img-container align-self-center d-none d-md-block">
            <img src="../assets/images/logos/logofull.svg" alt="Imagem Inicial" class="img-fluid logo-login">
          </div>

          <div class="col-12 col-md-6 col-lg-4 col-xxl-login mx-auto align-self-center">
            <div class="card mb-0">
              <div class="card-body">
                <a href="./index.html" class="text-nowrap logo-img text-center d-block pb-3 w-100">
                  <img id="logo" src="../assets/images/logos/logo.svg" alt="Logo">
                </a>
                <form>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label fw-semibold">Login</label>
                    <input type="email" class="form-control custom-placeholder" id="exampleInputEmail1"
                      aria-describedby="emailHelp" placeholder="nome@desembola.digital">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label fw-semibold">Senha</label>
                    <input type="password" class="form-control custom-placeholder" id="exampleInputPassword1"
                      placeholder="Insira sua senha">
                  </div>
                  <div class="mb-3">
                    <a class="text-primary fs-2 ms-0 uderlinelink" href="./authentication-login.html">Esqueci minha
                      senha</a>
                  </div>
                  <a href="./index.html" class="btn btn-login m-1 w-100 py-8 fs-4 mb-1">Entrar</a>
                </form>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>

  <script>
    function updateLogo() {
      const logo = document.getElementById('logo');
      if (window.innerWidth < 768) {
        logo.src = "../assets/images/logos/logomovel.svg";
        logo.style.width = "300px";
        logo.style.marginLeft = "15px";
        logo.style.height = "auto";
      } else {
        logo.src = "../assets/images/logos/logo.svg";
        logo.style.width = "100px";
        logo.style.height = "auto";
      }
    }
    window.addEventListener('load', updateLogo);
    window.addEventListener('resize', updateLogo);
  </script>
</body>

</html>