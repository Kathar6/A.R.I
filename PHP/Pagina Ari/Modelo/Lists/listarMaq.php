<!-- Lista de la tabla Máquina -->
<?php

//Incluimos nuestra conexión con la BD
include_once("../../Modelo/Conexion/Connection.php");
     
//Se obtiene la conexión con la BD
$conexion = new Connection();
$mysqliC = $conexion->getConnection();

//Se crea una variable para traer sólo las máquinas activadas
$estado = 'Activada';

//Se prepara la sentencia parametrizada para traer la lista de las máquinas activas
$pSqlQuery = $mysqliC->prepare("select * from bd_ari.maquina where estado = ?;");

//Se manda el parámetro para traer sólo las máquinas activadas
$pSqlQuery->bind_param("s",$estado);

//Se ejecuta la sentencia parametrizada
$pSqlQuery->execute();

//Se obtienen los resultados de la sentencia
$res = $pSqlQuery->get_result();

//Se retorna la respuesta de la sentencia
return $res;
        
?>