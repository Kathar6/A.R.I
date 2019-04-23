<?php


include_once("../Modelo/Conexion/Connection.php");

class CategoriaDAO
{
    private $idCat;
    private $nomCat;
    private $opcion;
    private $conexion;
    public $mensaje;
    public $alerta;

    public function ejecutarCRUD()
    {

        $conexion = new Connection();
        $mysqliC = $conexion->getConnection();

        $pSqlQuery = $mysqliC->prepare("call bd_ari.CRUDCategoria(?,?,?);");

        $pSqlQuery->bind_param("iss",$this->idCat,$this->nomCat,$this->opcion);

        $pSqlQuery->execute();

        $res = $pSqlQuery->get_result();
        $opcionVal = $this->opcion;

        switch($opcionVal){
            case "guardar":
                if($res->field_count > 1){
                 $this->mensaje = "La categoría ha sido guardada correctamente";
                 $this->alerta = "success";
                }else{            
                 $this->mensaje = $res->fetch_row()[0];
                 $this->alerta = "danger";
                }
                break;
            case "actualizar":
                if($res->field_count > 1){
                    $this->mensaje = "La categoría ha sido actualizada correctamente";
                    $this->alerta = "success";
                }else{
            
                    $this->mensaje = $res->fetch_row()[0];
                    $this->alerta = "danger";
                }
               break;
            case "eliminar":
                if($res->field_count > 1){
                    $this->mensaje = "La categoría ha sido eliminada correctamente";
                    $this->alerta = "success";
                }else{
                    $this->mensaje = "La categoría no se encuentra registrada o no ha podido ser eliminada";
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
        $this->nomCat = $nom;
    }

    public function getNomBas()
    {
        return $this->nomCat;
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