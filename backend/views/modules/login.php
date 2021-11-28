<?php 

session_start();

if(isset($_SESSION["validar"])){
  header("location:dashboard");
  exit();
}



?>





  <body class="hold-transition login-page">

  <div class="row">
    <div class="col-sm-12">
        <?php 
        
          //intanciamos el controlador del login 
          $login = new UsuarioController();
          $login->loginController();
        
        ?>
      </div>
  </div>



  <div class="login-box">
  <div class="login-logo">
    <img src="views/dist/img/login.png" class="img-fluid" width="200">
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Ingrese sus datos para iniciar sesión</p>

      <form method="POST">

        <div class="input-group mb-3">
          <input type="text" class="form-control" name="usuarioIngreso" id="usuarioIngreso" placeholder="Ingrese el Nombre de Usuario">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
          <div class="valid-feedback">Dato correcto</div>
          <div class="invalid-feedback">Porfavor rellene el campo.</div>
        </div>

        <div class="input-group mb-3">
          <input type="password" class="form-control" type="password" name="passwordIngreso" id="passwordIngreso" placeholder="Ingresa el password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
          <div class="valid-feedback">Dato correcto</div>
          <div class="invalid-feedback">Porfavor rellene el campo.</div>
        </div>
        <div class="row">
          
          <!-- /.col -->
          <div class="col-sm-12">
            <button type="submit" name="ingresar" id="login"  class="btn btn-primary d-block w-100"><i class="fas fa-user"></i> Ingresar</button>
          </div>
          <!-- /.col -->
        </div>

      </form>  
     <div class="form-group col-12">
     <a href="registrar" class="text-center">Registrate</a>
     </div>

    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->


