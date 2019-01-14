<?php
include("oficina.php");


$oficina1= new Oficina();
$dato=array();
$dato['id_departamento']=null;
$dato['nombre']="Edicio D";
$dato['piso']="3";
$dato['linea']=8;
$dato['edificio']=3;
echo $oficina1->Guardar($dato);
?>