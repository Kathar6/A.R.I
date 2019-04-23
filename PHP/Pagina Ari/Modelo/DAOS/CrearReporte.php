<?php

include_once("../Modelo/Conexion/Connection.php");

class CrearReporte
{

    private $nomBas;
    private $nomCat;
    private $ubcMaq;
    private $fecha1;
    private $fecha2;
    private $conexion;


    public function crearReporte()
    {

        $conexion = new Connection();
        $mysqliC = $conexion->getConnection();

        $pSqlQuery = $mysqliC->prepare("call bd_ari.CrearReporte(?,?,?,?,?);");


        $pSqlQuery->bind_param("sssss",$this->nomBas,$this->nomCat,$this->ubcMaq,$this->fecha1,$this->fecha2);

        

        $pSqlQuery->execute();

        $res = $pSqlQuery->get_result();
       
        

        $pSqlQuery->close();
        $conexion->closeConnection();

        return $res;
    }
    


    /* #region  */
    public function setNomBas($nom)
    {
        $this->nomBas = $nom;
    }

    public function getNomBas()
    {
        return $this->nomBas;
    }

    public function setNomCat($nom)
    {
        $this->nomCat = $nom;
    }

    public function getNomCat()
    {
        return $this->nomCat;
    }

    public function setUbcMaq($ubc)
    {
        $this->ubcMaq = $ubc;
    }

    public function getUbcMaq()
    {
        return $this->ubcMaq;
    }

    public function setFecha1($fecha)
    {
        $this->fecha1 = $fecha;
    }

    public function getFecha1()
    {
        return $this->fecha1;
    } 

    public function setFecha2($fecha)
    {
        $this->fecha2 = $fecha;
    }

    public function getFecha2()
    {
        return $this->fecha2;
    } 
    /* #endregion */
}