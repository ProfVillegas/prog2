<?php

include("database.class.php");
$nombre=$_GET['n'];
echo "Hola {$nombre}";

$conn= new Database('localhost','root','','oficina');
?>