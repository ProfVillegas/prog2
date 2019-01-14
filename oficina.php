<?php
include_once("modelo.class.php");

class Oficina extends Modelo{

    public function Listar(){
        $sql="select * from departamento";

        return $this->db->consulta($sql);
    }
    public function Buscar($id=0){
        if($id==0){
            return false;
        } else {
            $sql="select * from departamento where id_departamento='{$id}'";
            return $this->db->consulta($sql);
        }
    }
    public function Guardar($datos=array()){
        if($this->Buscar($datos['id_departamento'])==false){
           if($datos['id_departamento']!=null){
               return "Operación inválida";
           } else {
             echo   $sql= "INSERT INTO `departamento`( `nombre`, `linea`, `edificio`, `piso`) VALUES ('{$datos['nombre']}','{$datos['linea']}','{$datos['edificio']}','{$datos['piso']}')";
                return $this->db->consulta($sql);
           } 
        } else{
            echo $sql="UPDATE `departamento` SET `nombre`='".$datos['nombre']."',
            `linea`=".$datos['linea'].",
            `edificio`=".$datos['edificio'].",
            `piso`=".$datos['piso']." 
            WHERE id_departamento=".$datos['id_departamento'];
             return $this->db->consulta($sql);
        }
    }

}

?>