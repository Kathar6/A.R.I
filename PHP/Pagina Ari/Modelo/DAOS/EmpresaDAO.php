<?php


include_once("../Modelo/Conexion/Connection.php");

class EmpresaDAO
{

    private $idEmp;
    private $nomEmp;
    private $website;
    private $opcion;
    private $conexion;
    public $mensaje;
    public $alerta;

    public function ejecutarCRUD()
    {

        $conexion = new Connection();
        $mysqliC = $conexion->getConnection();

        $pSqlQuery = $mysqliC->prepare("call bd_ari.CRUDEmpresa(?,?,?,?);");

        $pSqlQuery->bind_param("ssss",$this->idEmp,$this->nomEmp,$this->website,$this->opcion);

        $pSqlQuery->execute();

        $res = $pSqlQuery->get_result();
        $opcionVal = $this->opcion;

        switch($opcionVal){
            case "guardar":
                if($res->field_count > 1){
                 $this->mensaje = "La empresa ha sido guardada correctamente";
                 $this->alerta = "success";
                }else{            
                 $this->mensaje = $res->fetch_row()[0];
                 $this->alerta = "danger";
                }
                break;
            case "actualizar":
                if($res->field_count > 1){
                    $this->mensaje = "La empresa ha sido actualizada correctamente";
                    $this->alerta = "success";
                }else{
            
                    $this->mensaje = $res->fetch_row()[0];
                    $this->alerta = "danger";
                }
               break;
            case "eliminar":
                if($res->field_count > 1){
                    $this->mensaje = "La empresa ha sido eliminada correctamente";
                    $this->alerta = "success";
                }else{
                    $this->mensaje = "La empresa no se encuentra registrada o no ha podido ser eliminada";
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
    public function setIdEmpresa($id)
    {
        $this->idEmp = $id;
    }

    public function getIdEmp()
    {
        return $this->idEmp;
    }

    public function setNomEmp($nombre)
    {
        $this->nomEmp = $nombre;
    }

    public function getNomEmp()
    {
        return $this->nomEmp;
    }

    public function setWebsite($website)
    {
        $this->website = $website;
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
