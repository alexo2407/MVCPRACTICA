<?php 

class EnlaceModel
{

    public static function enlacesModel($link)
    {
        if(
            $link == "dashboard" ||
            $link == "login"
        )
        {
            $modulo = "views/modules/".$link.".php";

        }
        elseif( $link == "index")
        {
            $modulo = "views/modules/login.php";
        }
        else {
            # code...
            $modulo = "views/modules/login.php";
        }

        return $modulo;

    }


}



?>