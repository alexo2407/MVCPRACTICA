<?php 

include_once "backend/config/config.php";

class Conexion
{
    //paramétros de la BD
    private $host = DB_HOST;
    private $dataBase = DB_SCHEMA;
    private $userName = DB_USER;
    private $password = DB_PASSWORD;
    private $enconding = DB_ENCONDING;
    private $conexion;
    
    //creamos el método de conexión

    public function conectar()
    {
        $this->conexion = null;

        try {
            
            //Instanciamos la conexión con las propiedades privadas con PDO
            $this->conexion = new PDO("mysql:host=".$this->host.";dbname=".$this->dataBase, $this->userName, $this->password);

            //pasamos la codificacion de la BD
            $this->conexion->exec($this->enconding);

            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            
        } catch (PDOException $e) {
            
            echo "Error en la conexión a la base de datos". $e->getMessage();
        }

        //retornamos la conexión
        return $this->conexion;

    }

}



?>