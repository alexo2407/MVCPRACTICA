<?php 

//modelos
require_once "model/enlaces.php";
require_once "model/usuario.php";

//controladores
require_once "controller/enlaces.php";
require_once "controller/template.php";
require_once "controller/usuario.php";

$plantilla = new TemplateController();
$plantilla->template();


?>