<?php


class UsuarioController
{

    /**
     * ACCESO AL BACKEND
     */
    public function loginController()
    {
        //validamos que recibimos algo del formulario
        if (isset($_POST["ingresar"]) && $_POST["usuarioIngreso"] != "") 
        {
             //validamos a traves de una expresion regular

            if (preg_match('/^[a-zA-Z0-9]*$/', $_POST["usuarioIngreso"]) && preg_match('/^[a-zA-Z0-9]*$/', $_POST["passwordIngreso"])) 
            {


                $datosController = array(
                    "usuario" => $_POST["usuarioIngreso"],
                    "password"  => $_POST["passwordIngreso"]
                );

                $respuesta = UsuarioModel::loginModel($datosController, "usuario");

                //    var_dump($repuesta);

                if ($respuesta == TRUE) {

                    if ($respuesta->nick_user == $_POST["usuarioIngreso"] && password_verify($_POST["passwordIngreso"],$respuesta->password_usuario)) {

                        session_start();
                        $_SESSION['validar'] = true;
                        $_SESSION['usuarioID'] = $respuesta->id_usuario;
                        $_SESSION['usuarioNombre'] = $respuesta->nombre_usuario;
                        $_SESSION['usuarioImagen'] = $respuesta->imagen_usuario;

                        header("location:" . RUTA_BACKEND . "dashboard");
                    } else {
                        echo "Password Incorrecto";
                    }
                }
            }
        }
    }


    /**
     * ACCESO AL BACKEND
     */
    public function registroController()
    {
        //validamos que recibimos algo del formulario
        if (isset($_POST["registrar"])) 
        {
            if (preg_match('/^[a-zA-Z0-9]*$/', $_POST["nickRegistro"]) && preg_match('/^[a-zA-Z0-9]*$/', $_POST["passwordRegistro"]) && filter_var($_POST["emailRegistro"],FILTER_VALIDATE_EMAIL)) 
            {
                $encriptarPass = password_hash($_POST["passwordRegistro"],PASSWORD_DEFAULT,['cost' => 10]);

                $datosController = array(
                    "nickname" => $_POST["nickRegistro"],
                    "usuario" => $_POST["usuarioRegistro"],
                    "email" => $_POST["emailRegistro"],
                    "descripcion" => $_POST["descripcionRegistro"],
                    "password"  => $encriptarPass
                );
    
                $repuesta = UsuarioModel::registroModel($datosController, "usuario");
    
    
                if ($repuesta == TRUE) {
                    header("location:" . RUTA_BACKEND . "login/$repuesta");
                }
            }
            
        }
    }


    /**
     * OBTENER LOS USUARIOS DEL BACKEND
     */
    public function obtenerusuariosController()
    {
        $repuesta = UsuarioModel::obtenerusuarioModels("usuario");

        return $repuesta;
    }
}
