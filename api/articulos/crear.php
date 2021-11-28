<?php 

//configuraciones de los encabezados (HEADERS)
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');


require_once "../../backend/config/config.php";
require_once "../../backend/model/conexion.php";
include_once '../../model/articulos.php';

//Instanciar la base de datos

$baseDatos = new Conexion();
$db = $baseDatos->conectar();


//Instanicamos el objeto articulo

$articulo = new GestorArticulosModels($db);

//creamos una variable data
$data = json_decode(file_get_contents("php://input"));

//agregar la informacion a la variable data
$articulo->fk_categoria = $data->fk_categoria;
$articulo->titulo_articulo = $data->titulo_articulo;
$articulo->contenido_articulo = $data->contenido_articulo;
$articulo->imagen_articulo = $data->imagen_articulo;


if ($articulo->crear()) 
{
    echo json_encode(array('message' => 'Articulo Creado'));

}
else
{
    echo json_encode(array('message' => 'No se pudo crear el articulo'));

}

//setear postman con los siguientes parametros
//metodo POST
//en la pestaña body escogemos la opcion raw y tipo JSOn

/* 
{
    "fk_categoria": "3",
    "titulo_articulo": "Managua nicaragua",
    "contenido_articulo": "Capital de nicragua",
    "imagen_articulo": "../views/assets/galeria/3mangua.jpg"
}
 */

