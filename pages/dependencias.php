<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1a/Logo_de_la_UAEMex.svg/1200px-Logo_de_la_UAEMex.svg.png">
  <link rel="icon" type="image/png" href="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1a/Logo_de_la_UAEMex.svg/1200px-Logo_de_la_UAEMex.svg.png">
  <title>
    Dependencias
  </title>
  <?php include '../recursos/recursos.php' ?>
</head>

<body class="g-sidenav-show bg-gray-100">
  <?php include '../templates/Menu/menu.php' ?>
  <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg bg-transparent shadow-none position-absolute px-4 w-100 z-index-2">
      <div class="container-fluid py-1">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 ps-2 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="text-white opacity-5" href="javascript:;">Formularios</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Dependencias</li>
          </ol>
          <h6 class="text-white font-weight-bolder ms-2">Dependencias</h6>
        </nav>
        <div class="collapse navbar-collapse me-md-0 me-sm-4 mt-sm-0 mt-2" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            
          </div>
          <ul class="navbar-nav justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none">Cerrar sesión</span>
              </a>
            </li>
            <li class="nav-item d-xl-none ps-3 pe-0 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0">
                <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                  <div class="sidenav-toggler-inner">
                    <i class="sidenav-toggler-line bg-white"></i>
                    <i class="sidenav-toggler-line bg-white"></i>
                    <i class="sidenav-toggler-line bg-white"></i>
                  </div>
                </a>
              </a>
            </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid">
      <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('../assets/img/curved-images/fondoDep.jpg'); background-position-y: 95%;">
        <!--<div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('../assets/img/curved-images/fondoAlumnos.jpg'); background-position-y: 95%;">-->
        <span class="mask bg-gradient-primary2 opacity-7"></span>
        <!--<span class="mask bg-gradient-primary opacity-7"></span>-->
      </div>
      <div class="card card-body blur shadow-blur mx-4 mt-n6 overflow-hidden">
        <div class="row gx-4">
          <div class="col-auto">
            <div class="avatar avatar-xl position-relative">
              <img src="https://cdn-icons-png.flaticon.com/512/602/602182.png" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
            </div>
          </div>
          <div class="col-auto my-auto">
            <div class="h-100">
              <h5 class="mb-1">
                Agregar dependencias
              </h5>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid py-4">
      <div class="row">

        <div class="col-12 mt-4">
          <div class="card mb-4">
            <div class="card-header pb-0 p-3">
              <h6 class="mb-1">Llene todos los campos para continuar</h6>
            </div>
            <div class="card-body p-3">
              <div class="row">
                <div class="col-xl-12 col-md-6 mb-xl-0 mb-4">
                  <div class="card card-blog card-plain">
                  <form>
  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <label for="exampleFormControlInput1">Nombre</label>    
        <input type="text" class="form-controlDep" id="exampleFormControlInput1" placeholder="Juzgado Civil">
      </div>
    </div>

    
    <div class="col-md-6">
      <div class="form-group">
      <label for="exampleFormControlInput1">Correo</label>
        <input type="text" class="form-controlDep" id="exampleFormControlInput1" placeholder="Juzgado Civil">
      </div>
    </div>

    <div class="col-md-6">
      <div class="form-group">
      <label for="exampleFormControlInput1">Numero Telefonico</label>  
        <input type="text" class="form-controlDep" id="exampleFormControlInput1" placeholder="Juzgado Civil">
      </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
        <label for="exampleFormControlInput1">Sector</label> 
        <select class="form-selectDep text-uppercase" aria-label="Default select example">
          <option selected>-- Selecciona --</option>
          <option value="1">Publico</option>
          <option value="2">Privado</option>
          </select>
        </div>
      </div>


      <div class="col-md-6">
        <div class="form-group">
        <label for="exampleFormControlInput1">Jefe de la Dependencia</label>
        <select class="form-selectDep2 text-uppercase" aria-label="Default select example">
        <option value="1">Dr.</option>
        <option value="2">Lic.</option>
        <option value="3">Ing.</option>
        <option value="4">Mtr.</option>
        </select>
        <div>
        <label for="exampleFormControlInput1"></label>
        <input type="text" class="form-controlDep2" id="exampleFormControlInput1" placeholder="Ej. Armando Guzman">
        </div>
      </div>
    </div>


</div>

  <button class="btn btn-icon btn-3 btn-primary" type="button" id="btnDep">
	<span class="btn-inner--icon"><i class="fa-solid fa-circle-check"></i></span>
  <span class="btn-inner--text"> Agregar</span>
</button>
</form>
                    
                  </div>
                </div>                    
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer pt-3">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-beetwen">
            <div class="col-lg-12 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                <script>
                  document.write(new Date().getFullYear())
                </script>,
                Software creado por
                <a href="#" class="font-weight-bold">ICO y LIA</a>           
              </div>
        </div>
      </footer>
    </div>
  </div>
  
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/soft-ui-dashboard.min.js?v=1.0.7"></script>
</body>

</html>