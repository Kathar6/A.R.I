<?php

include_once("../Modelo/Conexion/Connection.php");

class MaquinaDAO
{

    private $idMaq;
    //private $idEmp;
    private $pesoOrg;
    private $pesoPlast;
    private $pesoPapel;
    private $ubicacion;
    private $opcion;
    private $conexion;
    public $mensaje;
    public $alerta;

    public function ejecutarCRUD()
    {

        $conexion = new Connection();
        $mysqliC = $conexion->getConnection();

        $pSqlQuery = $mysqliC->prepare("call bd_ari.CRUDMaquina(?,?,?,?,?,?);");

        $pSqlQuery->bind_param("idddss",$this->idMaq,$this->pesoOrg,$this->pesoPlast,$this->pesoPapel,$this->ubicacion,$this->opcion);

        $pSqlQuery->execute();

        $res = $pSqlQuery->get_result();
        $opcionVal = $this->opcion;

        switch($opcionVal){
            case "guardar":
                if($res->field_count > 1){
                 $this->mensaje = "La máquina ha sido guardada correctamente";
                 $this->alerta = "success";
                }else{            
                 $this->mensaje = $res->fetch_row()[0];
                 $this->alerta = "danger";
                }
                break;
            case "actualizar":
                if($res->field_count > 1){
                    $this->mensaje = "La máquina ha sido actualizada correctamente";
                    $this->alerta = "success";
                }else{
            
                    $this->mensaje = $res->fetch_row()[0];
                    $this->alerta = "danger";
                }
               break;
            case "eliminar":
                if($res->field_count > 1){
                    $this->mensaje = "La máquina ha sido eliminada correctamente";
                    $this->alerta = "success";
                }else{
                    $this->mensaje = "La máquina no se encuentra registrada o no ha podido ser eliminada";
                    $this->alerta = "danger";
                }
                break;
            default:
               $this->mensaje = "Error al intentar ejecutar los procedimientos";
               $this->alerta = "danger";
        }

       
        $pSqlQuery->close();
        $conexion->closeConnection();
    }
    


    /* #region  */
    public function setIdMaq($id)
    {
        $this->idMaq = $id;
    }

    public function getIdMaq()
    {
        return $this->idMaq;
    }

    public function setPesoOrg($peso)
    {
        $this->pesoOrg = $peso;
    }

    public function getPesoOrg()
    {
        return $this->pesoOrg;
    }

    public function setPesoPlast($peso)
    {
        $this->pesoPlast = $peso;
    }

    public function getPesoPlast()
    {
        return $this->pesoPlast;
    }

    public function setPesoPapel($peso)
    {
        $this->pesoPapel = $peso;
    }

    public function getPesoPapel()
    {
        return $this->pesoPapel;
    }

    public function setUbicacion($ubi)
    {
        $this->ubicacion = $ubi;
    }

    public function getUbicacion()
    {
        return $this->ubicacion;
    }

    public function setOpcion($opcion)
    {
        $this->opcion = $opcion;
    }

    public function getOpcion()
    {
        return $this->opcion;
    } 
    /* #endregion */
}