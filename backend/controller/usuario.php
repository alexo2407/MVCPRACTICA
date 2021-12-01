<?php 


class UsuarioController
{

    /**
     * ACCESO AL BACKEND
     */
    public function loginController()
    {   
        //validamos que recibimos algo del formulario
        if(isset($_POST["ingresar"]) && $_POST["usuarioIngreso"] != "")
        {
           $datosController = array(
                                    "usuario" => $_POST["usuarioIngreso"],
                                    "password"  => $_POST["passwordIngreso"]);

           $respuesta = UsuarioModel::loginModel($datosController,"usuario");

        //    var_dump($repuesta);

           if($respuesta == TRUE)
           {
            
                if($respuesta->nick_user == $_POST["usuarioIngreso"] && $respuesta->password_usuario == $_POST["passwordIngreso"])
                {

                    session_start();
                    $_SESSION['validar'] = true;
                    $_SESSION['usuarioID'] = $respuesta->id_usuario;
                    $_SESSION['usuarioNombre'] = $respuesta->nombre_usuario;
                    $_SESSION['usuarioImagen'] = $respuesta->imagen_usuario;

                    header("location:".RUTA_BACKEND."dashboard");
                }
                else
                {
                    echo "Password Incorrecto";
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
        if(isset($_POST["registrar"]))
        {
           $datosController = array("nickname" => $_POST["nickRegistro"],
                                    "usuario" => $_POST["usuarioRegistro"],
                                  "email" => $_POST["emailRegistro"],
                                  "descripcion" => $_POST["descripcionRegistro"],
                                   "password"  => $_POST["passwordRegistro"]);

           $repuesta = UsuarioModel::registroModel($datosController,"usuario");


           if($repuesta == TRUE)
           {           
            header("location:".RUTA_BACKEND."login/$repuesta");  
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
