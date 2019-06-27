<!-- Clase para mapear y acceder a los datos de la tabla Basura -->
<?php


//Incluimos nuestra conexión a la BD
include_once("../Modelo/Conexion/Connection.php");

class BasuraDAO
{

//Se mapean los atributos de la tabla junto con unas variables para la conexión,
//los mensajes que se devolverán y el tipo de alerta(succes o danger)
    private $idBas;
    private $idCat;
    private $nomBas;
    private $opcion;
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
        $pSqlQuery = $mysqliC->prepare("call bd_ari.CRUDBasura(?,?,?,?);");

        //Se mandan los paramátros a la sentencia parametrizada
        $pSqlQuery->bind_param("iiss",$this->idBas,$this->idCat,$this->nomBas,$this->opcion);


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

        //Se cierra la sentencia parametrizada
        $pSqlQuery->close();
        //Se cierra la conexión con la BD
        //Se cierra la conexión con la BD
        $conexion->closeConnection();
    }
    


    /* #region Setters y Getters*/
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