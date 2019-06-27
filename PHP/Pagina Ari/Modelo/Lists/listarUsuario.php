<!-- Lista de la tabla Usuario -->
<?php

//Incluimos nuestra conexión con la BD
include_once("../../Modelo/Conexion/Connection.php");
            
//Se obtiene la conexión con la BD
$conexion = new Connection();
$mysqliC = $conexion->getConnection();

//Se crea una variable para traer sólo los usuarios activos
$estado = 'Activo';

//Se prepara la sentencia parametrizada para traer la lista
$pSqlQuery = $mysqliC->prepare("select cedula,nombres,apellidos,usuario from bd_ari.usuario where estado = ?;");

//Se manda el parámetro para traer sólo los usuarios activos
$pSqlQuery->bind_param("s",$estado);

//Se ejecuta la sentencia parametrizada
$pSqlQuery->execute();

//Se obtienen los resultados de la sentencia
$res = $pSqlQuery->get_result();

//Se retorna la respuesta de la sentencia
return $res;
        
?>