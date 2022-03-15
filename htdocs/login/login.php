<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <?php

?>
 

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plantilla/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../plantilla/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../plantilla/dist/css/adminlte.min.css">

  <style>
    .login-logo #isysa{
      filter:brightness(1,1);
      mix-blend-mode: multiply;
    }
  </style>

</head>

<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <img src="../plantilla/dist/img/isysa.png" alt="" id='isysa'>
  </div>

  <div class="login-logo">

    <a>Sistema de Gestión de Mantenimiento</a>
  </div>
  <form action="validar.php" method= "POST"  ></form>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">      
      <form action="validar.php" method="post">
        <div class="input-group mb-3">
          <input type="user" class="form-control" placeholder="Usuario" name="usuario">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Contraseña" name="contraseña">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
       
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>    
<!-- /.login-box -->
<!--sweetalert2 -->
<script src="../login/sweetalert2/sweetalert211.js"></script>
<!-- jQuery -->
<script src="../plantilla/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plantilla/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../plantilla/dist/js/adminlte.min.js"></script>
</body>

</html>
