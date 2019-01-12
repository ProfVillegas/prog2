<?php
include("oficina.php");


$oficina1= new Oficina();
print_r( $oficina1->Listar() );
echo $oficina1->Buscar();

print_r($oficina1->Buscar(23));
?>