<?php 

// require_once "backend/model/conexion.php";

class GestorArticulosModels
{
    private $conn;
    private $table = "articulo"; 

    public $id_articulo;
    public $fk_categoria;
    public $titulo_articulo;
    public $contenido_articulo;
    public $imagen_articulo;
    public $fecha_publicacion;

    //creamos un constructor

    public function __construct($db)
    {
        $this->conn = $db;
    }

    
    /**
     * Listar los articulos desde el API
     */


    public function leer()
    {
        // realizamos el query
        $query = "SELECT id_articulo, fk_categoria, titulo_articulo, contenido_articulo, imagen_articulo, fecha_publicacion, date_update_articulo FROM $this->table ORDER BY fecha_publicacion DESC";

        //preparamos la sentencia
        $stmt = $this->conn->prepare($query);

        //ejecutamos la consulta
        $stmt->execute();

        return $stmt;

    }

    
    /**
     * Listar un articulo desde el API
     */


    public function leerIndividual()
    {
        // realizamos el query
        $query = "SELECT id_articulo, fk_categoria, titulo_articulo, contenido_articulo, imagen_articulo, fecha_publicacion, date_update_articulo FROM $this->table WHERE id_articulo = ? LIMIT 1";

        //preparamos la sentencia
        $stmt = $this->conn->prepare($query);

        //vinculamos el parametro
        $stmt->bindParam(1,$this->id_articulo,PDO::PARAM_INT);

        //ejecutamos la consulta
        $stmt->execute();


        //obtener los registros
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        $this->id_articulo = $row['id_articulo'];
        $this->titulo_articulo = $row['titulo_articulo'];
        $this->contenido_articulo = $row['contenido_articulo'];
        $this->imagen_articulo = $row['imagen_articulo'];
        $this->fecha_publicacion = $row['fecha_publicacion'];

    }

    /**
     * Crear un articulo desde el API
     */


    public function crear()
    {
        // realizamos el query
        $query = "INSERT INTO $this->table (fk_categoria, titulo_articulo, contenido_articulo, imagen_articulo) VALUE (:id_categoria, :titulo, :contenido ,:imagen)";


        //limpiar los datos
        $this->titulo_articulo = htmlspecialchars(strip_tags($this->titulo_articulo));
        $this->contenido_articulo = htmlspecialchars(strip_tags($this->contenido_articulo));

        //preparamos la sentencia
        $stmt = $this->conn->prepare($query);

        //vinculamos el parametro
        $stmt->bindParam(":id_categoria",$this->fk_categoria,PDO::PARAM_INT);
        $stmt->bindParam(":titulo",$this->titulo_articulo,PDO::PARAM_STR);
        $stmt->bindParam(":contenido",$this->contenido_articulo,PDO::PARAM_STR);
        $stmt->bindParam(":imagen",$this->imagen_articulo,PDO::PARAM_STR);

        //ejecutamos la consulta
       if ( $stmt->execute()) {
           return true;
       }
       else
       {
           printf("Error \n", $stmt->error);
           return false;
       }
      

    }

    /**
     * actualizar un articulo desde el API
     */


    public function actualizar()
    {
        // realizamos el query
        $query = "UPDATE $this->table SET fk_categoria = :id_categoria, titulo_articulo = :titulo, contenido_articulo = :contenido, imagen_articulo = :imagen  WHERE id_articulo = :id";


        //limpiar los datos
        $this->titulo_articulo = htmlspecialchars(strip_tags($this->titulo_articulo));
        $this->contenido_articulo = htmlspecialchars(strip_tags($this->contenido_articulo));
        $this->id_articulo = htmlspecialchars(strip_tags($this->id_articulo));
        $this->fk_categoria = htmlspecialchars(strip_tags($this->fk_categoria));
        

        //preparamos la sentencia
        $stmt = $this->conn->prepare($query);

        //vinculamos el parametro
        $stmt->bindParam(":id_categoria",$this->fk_categoria,PDO::PARAM_INT);
        $stmt->bindParam(":titulo",$this->titulo_articulo,PDO::PARAM_STR);
        $stmt->bindParam(":contenido",$this->contenido_articulo,PDO::PARAM_STR);
        $stmt->bindParam(":imagen",$this->imagen_articulo,PDO::PARAM_STR);
        $stmt->bindParam(":id",$this->id_articulo,PDO::PARAM_INT);

        //ejecutamos la consulta
       if ( $stmt->execute()) {
           return true;
       }
       else
       {
           printf("Error \n", $stmt->error);
           return false;
       }
      

    }

    
    /**
     * borrar un articulo desde el API
     */


    public function borrar()
    {
        // realizamos el query
        $query = "DELETE FROM $this->table WHERE id_articulo = :id";


        //limpiar los datos      
        $this->id_articulo = htmlspecialchars(strip_tags($this->id_articulo));
   
        

        //preparamos la sentencia
        $stmt = $this->conn->prepare($query);

        //vinculamos el parametro    
        $stmt->bindParam(":id",$this->id_articulo,PDO::PARAM_INT);

        //ejecutamos la consulta
       if ( $stmt->execute()) {
           return true;
       }
       else
       {
           printf("Error \n", $stmt->error);
           return false;
       }
      

    }




    /**
     * Listar los articulos en el fronend
     */

    public static function leerArticulosModels($tabla)
    {
        $dataBase = new Conexion();
        $db = $dataBase->conectar();

        $stmt = $db->prepare("SELECT a.id_articulo AS id, a.titulo_articulo AS titulo, a.contenido_articulo AS contenido, a.imagen_articulo AS imagen, a.fecha_publicacion AS publicacion, c.nombre_categoria AS categoria FROM $tabla AS a INNER JOIN categoria AS c ON a.fk_categoria = c.id_categoria
        WHERE a.fecha_publicacion = (SELECT MAX(fecha_publicacion) FROM articulo) 
        ORDER BY a.id_articulo DESC LIMIT 4");

        $stmt->execute();

        $respuesta = $stmt->fetchAll(PDO::FETCH_OBJ);

       return $respuesta;

       $stmt = null;
    }


    public static function detalleArticuloModel($idArticulo, $tabla)
    {
        $dataBase = new Conexion();
        $db = $dataBase->conectar();

        $stmt = $db->prepare("SELECT a.id_articulo AS idArticulo, a.fk_categoria AS idCategoria, a.titulo_articulo AS titulo, a.contenido_articulo AS contenido, a.imagen_articulo AS imagen, a.fecha_publicacion AS publicacion, c.nombre_categoria AS categoria FROM $tabla AS a INNER JOIN categoria AS c ON a.fk_categoria = c.id_categoria WHERE a.id_articulo = :id");
        
        $stmt->bindParam(":id",$idArticulo,PDO::PARAM_INT);

        $stmt->execute();

        $respuesta = $stmt->fetch(PDO::FETCH_OBJ);

       return $respuesta;

       $stmt = null;
    }

}