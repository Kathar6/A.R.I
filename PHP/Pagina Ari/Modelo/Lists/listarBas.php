<!-- Lista de la tabla Basura -->
<?php

//Incluimos nuestra conexión con la BD
include_once("../../Modelo/Conexion/Connection.php");
    
//Se obtiene la conexión con la BD
$conexion = new Connection();
$mysqliC = $conexion->getConnection();

//Se prepara la sentencia parametrizada para traer la lista
$pSqlQuery = $mysqliC->prepare("select * from bd_ari.basura order by idcat;");

//Se ejecuta la sentencia parametrizada
$pSqlQuery->execute();

//Se obtienen los resultados de la sentencia
$res = $pSqlQuery->get_result();

//Se retorna la respuesta de la sentencia
return $res;

?>