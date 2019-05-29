<?php


include_once("../../Modelo/Conexion/Connection.php");

        $conexion = new Connection();
        $mysqliC = $conexion->getConnection();

        $estado = 'Activada';

        $pSqlQuery = $mysqliC->prepare("select * from bd_ari.maquina where estado = ?;");

        $pSqlQuery->bind_param("s",$estado);

        $pSqlQuery->execute();

        $res = $pSqlQuery->get_result();

        return $res;
        


?>