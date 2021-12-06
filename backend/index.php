<?php 


//helpers
require_once "helpers/helpers.php";

//modelos
require_once "model/enlaces.php";
require_once "model/usuario.php";
require_once "model/articulos.php";

//controladores
require_once "controller/enlaces.php";
require_once "controller/template.php";
require_once "controller/usuario.php";
require_once "controller/articulos.php";

$plantilla = new TemplateController();
$plantilla->template();


?>