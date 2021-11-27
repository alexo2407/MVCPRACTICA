  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">

            <?php

            if (isset($_SERVER['REQUEST_URI'])) 
            {
              // obtener el nombre del modulo
              $urlArray = explode('/', $_SERVER['REQUEST_URI']);
              # code...
              switch ($urlArray[2]) {
                case 'dashboard':
                  echo '<h1 class="m-0"> Dashboard </h1>';
                  break;
                case 'articulos':
                  echo '<h1 class="m-0"> Articulos </h1>';
                  break;
                case 'crearArticulo':
                  echo '<h1 class="m-0"> Crear Articulo</h1>';
                  break;
                case 'editarArticulo':
                    echo '<h1 class="m-0">' . strtoupper($urlArray[2]) . '</h1>';
                    break;
                default:
                  echo '<h1 class="m-0"> Desfault </h1>';
                  break;
              }
            } else {
              echo '<h1 class="m-0">Mi sitio WEB</h1>';
            }



            ?>

          </div><!-- /.col -->

          <!-- Inician los breadcrumbs -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item active">dashboard</li>
            </ol>
          </div><!-- /.col -->


        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->