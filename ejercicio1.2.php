<?php
include("oficina.php");


$oficina1= new Oficina();
$dato=array();
$dato['id_departamento']=2;
$dato['nombre']="Edificio D Planta Baja";
$dato['piso']="1";
$dato['linea']=7;
$dato['edificio']=3;
echo $oficina1->Guardar($dato);
echo $oficina1->Eliminar(2);
?>