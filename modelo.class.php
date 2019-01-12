<?php
include("database.class.php");

class Modelo{
    protected $db;

    public function __construct(){
        $this->db= new Database('localhost','root','','oficina');
    }

}

?>