<?php

include_once "model/conexion.php";

class ArticulosModels
{
    public static function leerArticulosModels($tabla)
    {
        //Instanicamos la base de datos
        $database = new Conexion();
        $db = $database->conectar();

        //preparamos la consulta
        $stmt = $db->prepare("SELECT id_articulo, titulo_articulo, contenido_articulo, imagen_articulo, fecha_publicacion FROM $tabla");

        //ejecutamos la consulta

        $stmt->execute();

        $articulos = $stmt->fetchAll(PDO::FETCH_OBJ);

        return $articulos;

        $stmt = null;
    }


    public static function leerCategoriasModels($tabla)
    {
        //Instanicamos la base de datos
        $database = new Conexion();
        $db = $database->conectar();

        //preparamos la consulta
        $stmt = $db->prepare("SELECT id_categoria, nombre_categoria FROM $tabla");

        //ejecutamos la consulta

        $stmt->execute();

        $categorias = $stmt->fetchAll(PDO::FETCH_OBJ);

        return $categorias;

        $stmt = null;
    }

    public static function crearArticulosModels($datosModels, $tabla)
    {
        //Instanicamos la base de datos
        $database = new Conexion();
        $db = $database->conectar();

        //preparamos la consulta
        $stmt = $db->prepare("INSERT INTO $tabla (fk_categoria, titulo_articulo, contenido_articulo, imagen_articulo, fecha_publicacion) VALUES (:idcategoria, :titulo, :contenido, :imagen, :fecha)");

        //preparamos los valores

        $stmt->bindParam(":idcategoria", $datosModels["categoria"], PDO::PARAM_INT);
        $stmt->bindParam(":titulo", $datosModels["titulo"], PDO::PARAM_STR);
        $stmt->bindParam(":contenido", $datosModels["contenido"], PDO::PARAM_STR);
        $stmt->bindParam(":imagen", $datosModels["imagen"], PDO::PARAM_STR);
        $stmt->bindParam(":fecha", $datosModels["publicacion"], PDO::PARAM_STR);
        //ejecutamos la consulta


        if ($stmt->execute()) {
            # code...
            $resp = ["exitoso", $db->lastInsertId()];
            return $resp;
        } else {
            return "error";
        }

        $stmt = null;
    }


    public static function editarArticulosModels($idArticulo, $tabla)
    {
        //Instanicamos la base de datos
        $database = new Conexion();
        $db = $database->conectar();

        //preparamos la consulta
        $stmt = $db->prepare("SELECT a.id_articulo AS idArticulo, a.fk_categoria AS idCategoria, a.titulo_articulo AS titulo, a.contenido_articulo AS contenido, a.imagen_articulo AS imagen, a.fecha_publicacion AS publicacion, c.nombre_categoria AS categoria FROM $tabla AS a
        INNER JOIN categoria AS c
        ON a.fk_categoria = c.id_categoria
        WHERE a.id_articulo = :id");

        //preparamos los valores

        $stmt->bindParam(":id", $idArticulo, PDO::PARAM_INT);
        //ejecutamos la consulta


        $stmt->execute();

        $articulo = $stmt->fetch(PDO::FETCH_OBJ);

        return $articulo;


        $stmt = null;
    }


    public static function actualizarArticulosModels($datosModels, $tabla)
    {
        //Instanicamos la base de datos
        $database = new Conexion();
        $db = $database->conectar();

        //validamos que la imagen este vacia

        if ($datosModels["imagen"] == "") {
            //preparamos la consulta
            $stmt = $db->prepare("UPDATE $tabla SET fk_categoria = :idcategoria, titulo_articulo = :titulo, contenido_articulo = :contenido WHERE id_articulo = :id");

            //preparamos los valores

            $stmt->bindParam(":id", $datosModels["id"], PDO::PARAM_INT);
            $stmt->bindParam(":idcategoria", $datosModels["idcategoria"], PDO::PARAM_INT);
            $stmt->bindParam(":titulo", $datosModels["titulo"], PDO::PARAM_STR);
            $stmt->bindParam(":contenido", $datosModels["contenido"], PDO::PARAM_STR);
            //ejecutamos la consulta


            if ($stmt->execute()) {
                # code...
                $resp = ["exitoso", $datosModels["id"]];
                return $resp;
            } else {
                return "error";
            }
        } else {
            //preparamos la consulta
            $stmt = $db->prepare("UPDATE $tabla SET fk_categoria = :idcategoria, titulo_articulo = :titulo, contenido_articulo = :contenido, imagen_articulo = :imagen WHERE id_articulo = :id");

            //preparamos los valores

            $stmt->bindParam(":id", $datosModels["id"], PDO::PARAM_INT);
            $stmt->bindParam(":idcategoria", $datosModels["idcategoria"], PDO::PARAM_INT);
            $stmt->bindParam(":titulo", $datosModels["titulo"], PDO::PARAM_STR);
            $stmt->bindParam(":contenido", $datosModels["contenido"], PDO::PARAM_STR);
            $stmt->bindParam(":imagen", $datosModels["imagen"], PDO::PARAM_STR);

            //ejecutamos la consulta


            if ($stmt->execute()) {
                # code...
                $resp = ["exitoso", $datosModels["id"]];
                return $resp;
            } else {
                return "error";
            }
        }

        $stmt = null;
    }


    public static function borrarArticulosModels($idArticulo, $tabla)
    {
        //Instanicamos la base de datos
        $database = new Conexion();
        $db = $database->conectar();

        //preparamos la consulta
        $stmt = $db->prepare("DELETE FROM $tabla WHERE id_articulo = :id");

        //preparamos los valores

        $stmt->bindParam(":id",$idArticulo, PDO::PARAM_INT);
        //ejecutamos la consulta

        if ($stmt->execute()) {

            return "exitoso";
            # code...
        } else {
            return "error";
        }


        $stmt = null;
    }
}
