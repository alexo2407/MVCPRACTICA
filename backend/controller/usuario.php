<?php 


class UsurioController
{

    /**
     * ACCESO AL BACKEND
     */
    public function loginController()
    {   
        //validamos que recibimos algo del formulario
        if(isset($_POST["ingresar"]))
        {
           $datosController = array("usuario" => $_POST["usuarioIngreso"], "password"  => $_POST["passwordIngreso"]);

           $repuesta = UsuarioModel::loginModel($datosController,"usuario");

           var_dump($repuesta);

           if($repuesta == TRUE)
           {
            
                if($repuesta->nick_user == $_POST["usuarioIngreso"] && $repuesta->password_usuario == $_POST["passwordIngreso"])
                {

                    $_SESSION['validar'] = true;
                    $_SESSION['usuarioID'] = $repuesta->id_usuario;
                    $_SESSION['usuarioNombre'] = $repuesta->nombre_usuario;
                    $_SESSION['usuarioImagen'] = $repuesta->imagen_usuario;

                    header("location:dashboard");
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

           var_dump($repuesta);

           if($repuesta == TRUE)
           {           

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
