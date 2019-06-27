<?php

//Incluimos nuestra conexión con la BD
include_once("../../Modelo/Conexion/Connection.php");

//Se obtiene la conexión con la BD
$conexion = new Connection();
$mysqliC = $conexion->getConnection();

//Se prepara la sentencia parametrizada para traer la cantidad de máquinas registradas en la BD
//Sólo se traen las máquinas que estén activadas
$pSqlQuery = $mysqliC->prepare("select count(*)-1 from bd_ari.maquina where estado != 'Inactivada';");

//Se ejecuta la sentencia parametrizada
$pSqlQuery->execute();


//Se obtienen los resultados de la sentencia
$res = $pSqlQuery->get_result();

//Se extraen los registros traidos en la respuesta
$fila = $res->fetch_row();

//Se muestra la cantidad de máquinas traídas por la respuesta
echo '<h2 class="featurette-heading">Con nuestras más de '.$fila[0].' máquinas activas podemos aportar mas a la
        protección del medio ambiente</h2>';

//Se cierra la sentencia parametrizada
$pSqlQuery->close();
//Se cierra la conexión con la BD
$conexion->closeConnection();

?>