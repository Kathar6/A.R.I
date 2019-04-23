<?php


include_once("../Modelo/Conexion/Connection.php");

class BasuraDAO
{

    private $idBas;
    private $idCat;
    private $nomBas;
    private $opcion;
    private $conexion;
    public $mensaje;
    public $alerta;

    public function ejecutarCRUD()
    {

        $conexion = new Connection();
        $mysqliC = $conexion->getConnection();

        $pSqlQuery = $mysqliC->prepare("call bd_ari.CRUDBasura(?,?,?,?);");

        $pSqlQuery->bind_param("iiss",$this->idBas,$this->idCat,$this->nomBas,$this->opcion);

        $pSqlQuery->execute();

        $res = $pSqlQuery->get_result();
        $opcionVal = $this->opcion;

        switch($opcionVal){
            case "guardar":
                if($res->field_count > 1){
                 $this->mensaje = "La basura ha sido guardada correctamente";
                 $this->alerta = "success";
                }else{            
                 $this->mensaje = $res->fetch_row()[0];
                 $this->alerta = "danger";
                }
                break;
            case "actualizar":
                if($res->field_count > 1){
                    $this->mensaje = "La basura ha sido actualizada correctamente";
                    $this->alerta = "success";
                }else{
            
                    $this->mensaje = $res->fetch_row()[0];
                    $this->alerta = "danger";
                }
               break;
            case "eliminar":
                if($res->field_count > 1){
                    $this->mensaje = "La basura ha sido eliminada correctamente";
                    $this->alerta = "success";
                }else{
                    $this->mensaje = "La basura no se encuentra registrada o no ha podido ser eliminada";
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
    public function setIdBas($id)
    {
        $this->idBas = $id;
    }

    public function getIdBas()
    {
        return $this->idBas;
    }

    public function setIdCat($id)
    {
        $this->idCat = $id;
    }

    public function getIdCat()
    {
        return $this->idCat;
    }

    public function setNombre($nom)
    {
        $this->nomBas = $nom;
    }

    public function getNomBas()
    {
        return $this->nomBas;
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