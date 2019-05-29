<?php


include_once("../../Modelo/Conexion/Connection.php");


        $conexion = new Connection();
        $mysqliC = $conexion->getConnection();

        $pSqlQuery = $mysqliC->prepare("select * from bd_ari.categoria order by idcat;");

        $pSqlQuery->execute();

        $res = $pSqlQuery->get_result();

        return $res;
        

?>