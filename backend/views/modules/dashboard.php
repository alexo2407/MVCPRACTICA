<?php 

session_start();

if(!isset($_SESSION["validar"])){
  header("location:login");
  exit();
}


include "views/includes/header.php";
include "views/includes/navbar.php";
include "views/includes/siderbar.php";
include "views/includes/content-wrapper.php";


?>





<?php include "views/includes/footer.php"; ?>