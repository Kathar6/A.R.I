<?php

include_once("../../Modelo/Conexion/Connection.php");

        $conexion = new Connection();
        $mysqliC = $conexion->getConnection();

        $pSqlQuery = $mysqliC->prepare("select count(*)-1 from bd_ari.basura;");

        $pSqlQuery->execute();

        $res = $pSqlQuery->get_result();
          
        $fila = $res->fetch_row();

        echo '<h2 class="align-middle">Tenemos más de '.$fila[0].' basuras registradas por nuestras máquinas</h2>';

        $pSqlQuery->close();
        $conexion->closeConnection();

?>