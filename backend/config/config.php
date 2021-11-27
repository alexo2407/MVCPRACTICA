<?php 

//agregamos las rutas principales
// define('RUTA_BACKEND','http://app.gestor.com/backend/');

//obtenemos dinamicamente el dominio del servidor
define('RUTA_FRONTEND','//'.$_SERVER['SERVER_NAME'].'/');
define('RUTA_BACKEND', '//'.$_SERVER['SERVER_NAME'].'/backend/');


//definimos los parametros de conexión a la BD
define('DB_HOST', 'localhost');
define('DB_SCHEMA', 'gestorweb');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_ENCONDING', 'SET NAMES utf8');


?>