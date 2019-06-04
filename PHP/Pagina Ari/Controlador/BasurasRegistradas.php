<?php

//Incluimos nuestra conexión con la BD
include_once("../../Modelo/Conexion/Connection.php");

        
//Se obtiene la conexión con la BD
$conexion = new Connection();
$mysqliC = $conexion->getConnection();

//Se prepara la sentencia parametrizada para traer la cantidad de basuras en la BD
$pSqlQuery = $mysqliC->prepare("select count(*)-1 from bd_ari.basura;");

//Se ejecuta la sentencia parametrizada
$pSqlQuery->execute();


//Se obtienen los resultados de la sentencia
$res = $pSqlQuery->get_result();
        
//Se extraen los registros traidos en la respuesta
$fila = $res->fetch_row();

//Se muestra la cantidad de basuras traídas por la respuesta
echo '<h2 class="align-middle">Tenemos más de '.$fila[0].' basuras registradas por nuestras máquinas</h2>';

//Se cierra la sentencia parametrizada
$pSqlQuery->close();
//Se cierra la conexión con la BD
$conexion->closeConnection();

?>