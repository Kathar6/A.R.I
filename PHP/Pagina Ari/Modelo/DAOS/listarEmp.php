<?php


include_once("../../Modelo/Conexion/Connection.php");

class listarEmp{

    public function listar(){
        $conexion = new Connection();
        $mysqliC = $conexion->getConnection();

        $pSqlQuery = $mysqliC->prepare("select * from bd_ari.empresa;");

        $pSqlQuery->execute();

        $res = $pSqlQuery->get_result();

        return $res;
        
    }
}

?>