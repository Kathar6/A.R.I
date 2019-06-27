<!-- Clase para mapear y acceder a los datos de la tabla Datoscont -->
<?php


//Incluimos nuestra conexión a la BD
include_once("../Modelo/Conexion/Connection.php");

class ContactoDAO
{
    //Se mapean los atributos de la tabla junto con unas variables para la conexión,
    //los mensajes que se devolverán y el tipo de alerta(succes o danger)
    private $idCont;
    private $idEmp;
    private $cedU;
    private $email;
    private $tel;
    private $dir;
    private $conexion;
    public $mensaje;
    public $alerta;

    
//Método para ejecutar el CRUD dependiendo de la opción que se mande
    public function ejecutarCRUD()
    {

        
        //Se obtiene la conexión con la BD
        $conexion = new Connection();

        $mysqliC = $conexion->getConnection();

        //Se prepara la sentencia parametrizada para ejecutar el CRUD
        $pSqlQuery = $mysqliC->prepare("call bd_ari.CRUDContacto(?,?,?,?,?,?);");

        //Se mandan los paramátros a la sentencia parametrizada
        $pSqlQuery->bind_param("isssss",$this->idCont,$this->cedU,$this->email,$this->tel,$this->dir,$this->opcion);

        //Se ejecuta la sentencia parametrizada
        $pSqlQuery->execute();


        //Se obtienen los resultados de la sentencia
        $res = $pSqlQuery->get_result();
        //Condiciones para mostrar los mensajes y alertas dependiendo de cual opción se ejecutó 
        //Si se trae más de un resultado se mostrará un mensaje y alerta de succes
        //de lo contrario se traera el mensaje de error de la BD y se mostrará como alerta danger
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

       
        //Se cierra la sentencia parametrizada
        $pSqlQuery->close();
        //Se cierra la conexión con la BD
        $conexion->closeConnection();
    }
    


    /* #region Setters y Getters*/
   
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