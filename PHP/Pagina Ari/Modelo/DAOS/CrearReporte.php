<!-- Clase crear el reporte-->
<?php

//Incluimos nuestra conexión a la BD
include_once("../Modelo/Conexion/Connection.php");

class CrearReporte
{

    //Se mapean los atributos del reporte junto con unas variables para la conexión
    private $nomBas;
    private $nomCat;
    private $ubcMaq;
    private $fecha1;
    private $fecha2;
    private $conexion;

//Método para crear el reporte
    public function crearReporte()
    {

        
        //Se obtiene la conexión con la BD
        $conexion = new Connection();

        $mysqliC = $conexion->getConnection();

        //Se prepara la sentencia parametrizada para crear el reporte
        $pSqlQuery = $mysqliC->prepare("call bd_ari.CrearReporte(?,?,?,?,?);");


        //Se mandan los paramátros a la sentencia parametrizada
        $pSqlQuery->bind_param("sssss",$this->nomBas,$this->nomCat,$this->ubcMaq,$this->fecha1,$this->fecha2);

        

        //Se ejecuta la sentencia parametrizada
        $pSqlQuery->execute();


        //Se obtienen los resultados de la sentencia
        $res = $pSqlQuery->get_result();
       
        

        //Se cierra la sentencia parametrizada
        $pSqlQuery->close();
        //Se cierra la conexión con la BD
        $conexion->closeConnection();

        //Se retorna la respuesta de la sentencia
        return $res;
    }
    


    /* #region Setters y Getters*/
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