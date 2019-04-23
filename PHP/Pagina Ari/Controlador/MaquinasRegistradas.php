<?php

include_once("../../Modelo/Conexion/Connection.php");

        $conexion = new Connection();
        $mysqliC = $conexion->getConnection();

        $pSqlQuery = $mysqliC->prepare("select count(*)-1 from bd_ari.maquina where estado != 'Inactivada';");

        $pSqlQuery->execute();

        $res = $pSqlQuery->get_result();
          
        $fila = $res->fetch_row();

        echo '<h2 class="featurette-heading">Con nuestras más de '.$fila[0].' máquinas activas podemos aportar mas a la
        protección del medio ambiente</h2>';

        $pSqlQuery->close();
        $conexion->closeConnection();

?>