<?php 

require_once "model/conexion.php";
// ob_start — Activa el almacenamiento en búfer de la salida
ob_start();

class UsuarioModel
{

    public static function loginModel($datosModel, $tabla)
    {
    
        //Instanciamos la conexión a la BD
        $database = new Conexion();
        $db = $database->conectar();
        
        $stmt = $db->prepare("SELECT id_usuario, nick_user, nombre_usuario, email_usuario, password_usuario, imagen_usuario FROM $tabla WHERE nick_user = :usuario");

        $stmt->bindParam(":usuario", $datosModel["usuario"], PDO::PARAM_STR);

        $stmt->execute();

        $resultado = $stmt->fetch(PDO::FETCH_OBJ);

        return $resultado;

        //cerramos la conexión
        $stmt = null;

    }


    public static function registroModel($datosModel, $tabla)
    {
    
        //Instanciamos la conexión a la BD
        $database = new Conexion();
        $db = $database->conectar();
        
        $stmt = $db->prepare("INSERT INTO $tabla (nick_user, nombre_usuario, email_usuario, descripcion, password_usuario) VALUES (:nickname, :nombre, :email, :descripcion, :password)");

        $stmt->bindParam(":nickname", $datosModel["nickname"], PDO::PARAM_STR);
        $stmt->bindParam(":nombre", $datosModel["usuario"], PDO::PARAM_STR);
        $stmt->bindParam(":email", $datosModel["email"], PDO::PARAM_STR);
        $stmt->bindParam(":descripcion", $datosModel["descripcion"], PDO::PARAM_STR);
        $stmt->bindParam(":password", $datosModel["password"], PDO::PARAM_STR);


        if ($stmt->execute()) {
            return "exitoso";
        }
        else
        {
            return "error";
        }


        //cerramos la conexión
        $stmt = null;

    }


    public static function obtenerusuarioModels($tabla): array
    {
    
        //Instanciamos la conexión a la BD
        $database = new Conexion();
        $db = $database->conectar();
        
        $stmt = $db->prepare("SELECT id_usuario, nick_user, nombre_usuario, email_usuario, descripcion, password_usuario, telefono, imagen_usuario FROM $tabla");

        $stmt->execute();

        $usuarios = $stmt->fetchAll(PDO::FETCH_OBJ);

        return $usuarios;

        //cerramos la conexión
        $stmt = null;

    }





}




?>