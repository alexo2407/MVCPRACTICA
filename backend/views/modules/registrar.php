<?php 

session_start();

if(isset($_SESSION["validar"])){
  header("location:dashboard");
  exit();
}



?>

<body class="hold-transition register-page">

<div class="row">
    <div class="col-sm-12">
        <?php 
        
          //intanciamos el controlador del login 
          $registrar = new UsuarioController();
          $registrar->registroController();
        
        ?>
      </div>
  </div>



<div class="register-box">
  <div class="register-logo">
    <a href="registrar"><b>Regsitro de </b>usuarios</a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Ingrese sus datos</p>

      <form method="POST">
      <div class="input-group mb-3">
          <input type="text" class="form-control" name="nickRegistro" placeholder="Nickname">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="usuarioRegistro" placeholder="Nombre Completo">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="emailRegistro" placeholder="Correo Electronico">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="passwordRegistro" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <label for="">Descripcion del usuario</label>
          <textarea name="descripcionRegistro" id="editor">
          </textarea>
        </div>
        <div class="row">
          
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block" name="registrar">Registrate</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
