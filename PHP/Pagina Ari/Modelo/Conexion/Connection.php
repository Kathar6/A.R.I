<?php


class Connection {



private $user;
private $pass;
private $server;
private $baseD;
private $conexion;


public function __construct(){
    $this->user = "equipoARI";
    $this->pass = "ari12345";
    $this->server = "localhost";
    $this->baseD = "bd_ari";
}

public function getConnection(){

   $this->conexion= new mysqli($this->server,$this->user,$this->pass,$this->baseD);
   
    return $this->conexion;
}
    

public function closeConnection(){
    $this->conexion->close();
}

}
?>