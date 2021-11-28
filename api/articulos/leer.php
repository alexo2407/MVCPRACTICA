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

$articulos = new GestorArticulosModels($db);

//obtenemos la consulta con el metodo leer
$resultado = $articulos->leer();

//contar las filas
$contador = $resultado->rowCount();

//validamos si existe el articulo

if ($contador > 0) 
{
    // $articulo_array = array();
    $articulo_array['data'] = array();

    //volcamos la informacion 
    while($row = $resultado->fetch(PDO::FETCH_ASSOC))
    {
        //extraemos la fila
        extract($row);
        
        //creamos una variable asociativa
        $articulo_item = array('id_articulo' => $id_articulo, 'fk_categoria' => $fk_categoria, 'titulo_articulo' => $titulo_articulo, 'contenido_articulo' => $contenido_articulo, 'imagen_articulo' => $imagen_articulo, 'fecha_publicacion' => $fecha_publicacion);


        //enviar datos
        array_push($articulo_array['data'], $articulo_item);

    }

    //enviar en formato json
    echo json_encode($articulo_array);

}
else {
    echo json_encode(array('message' => 'No encontramos articulos'));
}