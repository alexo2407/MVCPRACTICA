 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href=" <?php echo RUTA_BACKEND; ?> " class="brand-link text-center">
      <!-- <img src="dist/img/AdminLTELogo.png" alt="San Payo Tour Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
      <span class="brand-text font-weight-light"> <strong>BACKEND SPYT</strong> </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php if (isset($_SESSION['usuarioImagen'])){ echo $_SESSION['usuarioImagen']; } ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php if(isset($_SESSION['usuarioNombre'])){ echo $_SESSION['usuarioNombre']; } ?></a>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="dashboard" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>            
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-newspaper"></i>
              <p>
                Usuarios
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="usuarios" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ver los usuarios</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="crearusuario" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Crear usuario</p>
                </a>
              </li>
            </ul>
          </li>
        
          <li class="nav-item">
            <a href="articulos" class="nav-link">
                <i class="nav-icon fas fa-tasks"></i>
                <p>
                  Categroias
                </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon far fa-images"></i>
                <p>
                  Galeria
                </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="salir" class="nav-link">
                <i class="nav-icon far fas fa-sign-out-alt"></i>
                <p>
                  Salir
                </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link" target="__blank">
                <i class="nav-icon fas fa-external-link-alt"></i>
                <p>
                  Sitio WEB
                </p>
            </a>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
