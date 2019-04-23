<?php

include_once("../../Modelo/Conexion/Connection.php");

class listarUsuario{

    public function listar(){
            $conexion = new Connection();
            $mysqliC = $conexion->getConnection();

            $estado = 'Activo';

            $pSqlQuery = $mysqliC->prepare("select cedula,nombres,apellidos,usuario from bd_ari.usuario where estado = ?;");

            $pSqlQuery->bind_param("s",$estado);

            $pSqlQuery->execute();

            $res = $pSqlQuery->get_result();

            return $res;
        
    }
}

?>