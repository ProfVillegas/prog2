<?php
class Database{

    protected $conexion;

    public function __construct($host,$usuario,$psw,$db){
        $this->conexion= new mysqli($host,$usuario,$psw,$db);
        if(mysqli_connect_error()){
            throw new Exception("No se puede conectar a {$db}");
        }
        $this->conexion->set_charset("utf8");

    }

    public function consulta($sql){
        //Verificar que exista la conexion a la bd
        if(!$this->conexion){
            return false;
        }

        //Ejecutamos la consulta
        $resultado= $this->conexion->query($sql);

        //Identificamos que exista error y ejecutamos el mensaje
        if(mysqli_error($this->conexion)){
            throw new Exception(mysqli_connect_error($this->conexion));
        }
        //Si la consulta regresa un valor booleano
        if(is_bool($resultado)){
            return $resultado;
        }

        $datos =array();
        while($row=mysqli_fetch_assoc($resultado)){
            $datos[]=$row;
        }

        return $datos;



    }

}


?>