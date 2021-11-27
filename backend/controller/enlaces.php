<?php 

class EnlaceController
{

    public static function enlacesController(){

        if(isset($_GET["enlace"]))
        {
            $link = $_GET["enlace"];
        }
        else
        {
            $link= "index";
        }

        $respuesta = EnlaceModel::enlacesModel($link);


        // var_dump($_GET["enlace"]);


        include $respuesta;


    }


}




?>