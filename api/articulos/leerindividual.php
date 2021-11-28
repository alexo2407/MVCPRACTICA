<?php 

//configuraciones de los encabezados (HEADERS)
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

require_once "../../backend/config/config.php";
require_once "../../backend/model/conexion.php";
include_once '../../model/articulos.php';

//Instanciar la base de datos

$baseDatos = new Conexion();
$db = $baseDatos->conectar();


//Instanicamos el objeto articulo

$articulo = new GestorArticulosModels($db);

//obtener el id del articulo
$articulo->id_articulo = isset($_GET['id']) ? $_GET['id'] : die();

//obtenemos la consulta con el metodo leer
$articulo->leerIndividual();

//contar las filas
$articulo_array = array('id_articulo' => $articulo->id_articulo, 'titulo_articulo' => $articulo->titulo_articulo, 'contenido_articulo' => $articulo->contenido_articulo, 'imagen_articulo' => $articulo->imagen_articulo, 'fecha_publicacion' => $articulo->fecha_publicacion);

//crear el json
print_r(json_encode($articulo_array));




