<?php 

class EnlacesFrontController
{

    public static function enlacesFrontController(){

        if(isset($_GET["enlacefront"]))
        {
            $link = $_GET["enlacefront"];
        }
        else
        {
            $link= "index";
        }

        $respuesta = EnlaceFrontModel::enlacesModel($link);


        // var_dump($_GET["enlace"]);


        include $respuesta;


    }


}




?>