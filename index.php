<?php 


require_once "backend/config/config.php";

//helpers
require_once "backend/helpers/helpers.php";


//modelos
require_once "model/enlaces.php";
require_once "model/articulos.php";

//controladores
require_once "controller/enlaces.php";
require_once "controller/template.php";
require_once "controller/articulos.php";


$plantilla = new FrontTemplateController();
$plantilla->template();

