<?php


include_once("../Modelo/Conexion/Connection.php");

class UsuarioDAO
{

    private $ced;
    private $nom;
    private $apell;
    private $user;
    private $pass;
    private $opcion;
    private $conexion;
    public $mensaje;
    public $alerta;

    public function ejecutarCRUD()
    {

        $conexion = new Connection();
        $mysqliC = $conexion->getConnection();

        $pSqlQuery = $mysqliC->prepare("call bd_ari.CRUDUsuario(?,?,?,?,?,?);");

        $pSqlQuery->bind_param("ssssss",$this->ced,$this->nom,$this->apell,$this->user,$this->pass,$this->opcion);

        $pSqlQuery->execute();

        $res = $pSqlQuery->get_result();
        $opcionVal = $this->opcion;

        switch($opcionVal){
            case "guardar":
                if($res->field_count > 1){
                 $this->mensaje = "El usuario se ha guardado correctamente";
                 $this->alerta = "success";
                }else{            
                 $this->mensaje = $res->fetch_row()[0];
                 $this->alerta = "danger";
                }
                break;
            case "actualizar":
                if($res->field_count > 1){
                    $this->mensaje = "El usuario se ha actualizado correctamente";
                    $this->alerta = "success";
                }else{
            
                    $this->mensaje = $res->fetch_row()[0];
                    $this->alerta = "danger";
                }
               break;
            case "eliminar":
                if($res->field_count > 1){
                    $this->mensaje = "El usuario se ha eliminado correctamente";
                    $this->alerta = "success";
                }else{
                    $this->mensaje = "El usuario no se encuentra registrado o no ha podido ser eliminado";
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
    public function setCedula($cedula)
    {
        $this->ced = $cedula;
    }

    public function getCedula()
    {
        return $this->ced;
    }

    public function setNombres($nombres)
    {
        $this->nom = $nombres;
    }

    public function getNombres()
    {
        return $this->nom;
    }

    public function setApellidos($apellidos)
    {
        $this->apell = $apellidos;
    }

    public function getApellidos()
    {
        return $this->apell;
    }

    public function setUser($user)
    {
        $this->user = $user;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function setPassword($password)
    {
        $this->pass = $password;
    }

    public function getPassword()
    {
        return $this->pass;
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
