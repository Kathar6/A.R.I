<?php

include_once("../../Modelo/Conexion/Connection.php");

class listarBas{

    public function listar(){
        $conexion = new Connection();
        $mysqliC = $conexion->getConnection();

        $pSqlQuery = $mysqliC->prepare("select * from bd_ari.basura order by idcat;");

        $pSqlQuery->execute();

        $res = $pSqlQuery->get_result();

        return $res;
        
    }
}

?>