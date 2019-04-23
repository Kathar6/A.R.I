<?php


include_once("../Modelo/Conexion/Connection.php");

class ContactoDAO
{
    private $idCont;
    private $idEmp;
    private $cedU;
    private $email;
    private $tel;
    private $dir;
    private $conexion;
    public $mensaje;
    public $alerta;

    public function ejecutarCRUD()
    {

        $conexion = new Connection();
        $mysqliC = $conexion->getConnection();

        $pSqlQuery = $mysqliC->prepare("call bd_ari.CRUDContacto(?,?,?,?,?,?);");

        $pSqlQuery->bind_param("isssss",$this->idCont,$this->cedU,$this->email,$this->tel,$this->dir,$this->opcion);

        $pSqlQuery->execute();

        $res = $pSqlQuery->get_result();
        $opcionVal = $this->opcion;

        switch($opcionVal){
            case "guardar":
                if($res->field_count > 1){
                 $this->mensaje = "Los datos de contacto han sido guardados correctamente";
                 $this->alerta = "success";
                }else{            
                 $this->mensaje = $res->fetch_row()[0];
                 $this->alerta = "danger";
                }
                break;
            case "actualizar":
                if($res->field_count > 1){
                    $this->mensaje = "La datos de contacto han sido actualizados correctamente";
                    $this->alerta = "success";
                }else{
            
                    $this->mensaje = $res->fetch_row()[0];
                    $this->alerta = "danger";
                }
               break;
            case "eliminar":
                if($res->field_count > 1){
                    $this->mensaje = "Los datos de contacto han sido eliminados correctamente";
                    $this->alerta = "success";
                }else{
                    $this->mensaje = "Los datos de contacto no se encuentran registrados o no han podido ser eliminados";
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
   
    public function setIdCont($id)
    {
        $this->idCont = $id;
    }

    public function getIdCont()
    {
        return $this->idCont;
    }

    public function setIdEmp($id)
    {
        $this->idEmp = $id;
    }

    public function getIdEmp()
    {
        return $this->idEmp;
    }
    public function setCedU($id)
    {
        $this->cedU = $id;
    }

    public function getCedU()
    {
        return $this->cedU;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setTel($tel)
    {
        $this->tel = $tel;
    }

    public function getTel()
    {
        return $this->tel;
    }

    
    public function setDir($dir)
    {
        $this->dir = $dir;
    }

    public function getDir()
    {
        return $this->dir;
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