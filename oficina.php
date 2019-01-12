<?php
include_once("modelo.class.php");

class Oficina extends Modelo{

    public function Listar(){
        $sql="select * from departamento";

        return $this->db->consulta($sql);
    }
    public function Buscar($id=0){
        if($id==0){
            return "<b>Clave inexistente</b>";
        } else {
            $sql="select * from departamento where id_departamento='{$id}'";
        }
    }

}

?>