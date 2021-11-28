<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>San Payo Tour | Admin</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?= RUTA_BACKEND ?>views/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= RUTA_BACKEND ?>views/dist/css/adminlte.min.css">

<!-- metodo para cargar los articulos necesarios -->
  <?php cargarCss(); ?>


</head>


<?php

$mvc = new EnlaceController();
$mvc->enlacesController();


?>


<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script async  src="<?= RUTA_BACKEND ?>views/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script async  src="<?= RUTA_BACKEND ?>views/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- AdminLTE App -->

<script async  src="<?= RUTA_BACKEND ?>views/dist/js/adminlte.min.js"></script>

<!-- <script src="<?= RUTA_BACKEND ?>views/js/init.js"></script> -->
<?php    cargarScript();  ?>

<script src="<?= RUTA_BACKEND ?>views/js/validarIngreso.js"></script>
</body>

</html>