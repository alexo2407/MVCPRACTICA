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


  <!-- DataTables -->
  <link rel="stylesheet" href="<?= RUTA_BACKEND ?>views/plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?= RUTA_BACKEND ?>views/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= RUTA_BACKEND ?>views/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= RUTA_BACKEND ?>views/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

     <!-- daterange picker -->
     <link rel="stylesheet" href="<?= RUTA_BACKEND ?>views/plugins/daterangepicker/daterangepicker.css">

  <!-- summernote -->
  <link rel="stylesheet" href="<?= RUTA_BACKEND ?>views/plugins/summernote/summernote-bs4.min.css">

</head>


<?php

$mvc = new EnlaceController();
$mvc->enlacesController();


?>


<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?= RUTA_BACKEND ?>views/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= RUTA_BACKEND ?>views/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>


<!-- DataTables  & Plugins -->
<script src="<?= RUTA_BACKEND ?>views/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= RUTA_BACKEND ?>views/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= RUTA_BACKEND ?>views/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= RUTA_BACKEND ?>views/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?= RUTA_BACKEND ?>views/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= RUTA_BACKEND ?>views/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?= RUTA_BACKEND ?>views/plugins/jszip/jszip.min.js"></script>
<script src="<?= RUTA_BACKEND ?>views/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?= RUTA_BACKEND ?>views/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?= RUTA_BACKEND ?>views/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?= RUTA_BACKEND ?>views/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?= RUTA_BACKEND ?>views/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->

<!-- Editor Summernote -->
<script src="<?= RUTA_BACKEND?>views/plugins/summernote/summernote-bs4.min.js"></script>
<!-- InputMask -->

<script src="<?= RUTA_BACKEND ?>views/plugins/moment/moment.min.js"></script>
<script src="<?= RUTA_BACKEND ?>views/plugins/inputmask/jquery.inputmask.min.js"></script>
<!-- date-range-picker -->
<script src="<?= RUTA_BACKEND ?>views/plugins/daterangepicker/daterangepicker.js"></script>


<script src="<?= RUTA_BACKEND ?>views/dist/js/adminlte.min.js"></script>

<script src="<?= RUTA_BACKEND ?>views/js/init.js"></script>

<script src="<?= RUTA_BACKEND ?>views/js/validarIngreso.js"></script>
</body>

</html>