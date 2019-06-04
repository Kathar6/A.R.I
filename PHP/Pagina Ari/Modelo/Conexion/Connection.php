<!-- Clase para realizar la conexión con la BD -->

<?php


class Connection {

//Atributos necesarios para la conexión
private $user;
private $pass;
private $server;
private $baseD;
private $conexion;

//Se setean los atributos para realizar la conexión con la BD. Aquí se deben cambiar los valores
//para realizar una conexión a otro servidor
public function __construct(){
    $this->user = "equipoARI";
    $this->pass = "ari12345";
    $this->server = "localhost";
    $this->baseD = "bd_ari";
}

//Método para realizar y devolver la conexión con la BD
public function getConnection(){

   $this->conexion= new mysqli($this->server,$this->user,$this->pass,$this->baseD);
   
    return $this->conexion;
}
    
//Método para cerrar la conexión con la BD
public function closeConnection(){
    $this->conexion->close();
}

}
?>