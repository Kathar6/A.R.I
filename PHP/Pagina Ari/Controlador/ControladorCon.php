<!-- Controlador del DAO de Datosdecontacto -->
<!-- Aquí se obtienen los datos mandados por los formularios y se ejecuta el CRUD dependiendo
de la opción que se mande -->
<?php

//Se incluye el DAO correspondiente
include "../Modelo/DAOS/ContactoDAO.php";

//Instanciamos la clase del DAO
$dao = new ContactoDAO();

//Obtenemos la opción que se requiere ejecutar
$opcion = $_POST['Opcion'];

switch ($opcion) {
    case "guardar":
        //Se obtienen los datos mandados por el formulario
        $idCon = $_POST['idCon'];
        $idEmp = "";
        $cedU = $_POST['cedula'];
        $email = $_POST['email'];
        $tel = $_POST['tel'];
        $dir = $_POST['dir'];

        //Se mandan los datos obtenidos al DAO
        $dao->setIdCont($idCon);
        $dao->setIdEmp($idEmp);
        $dao->setCedU($cedU);
        $dao->setEmail($email);
        $dao->setTel($tel);
        $dao->setDir($dir);
        $dao->setOpcion($opcion);

        //Se ejecuta el CRUD
        $dao->ejecutarCRUD();

        //Se obtiene el tipo de alerta y el mensaje que surgió al ejectuar el CRUD
        $alerta = $dao->alerta;
        $resp = $dao->mensaje;

        //Se inicia una sesión para mandar la alerta
        session_start();

        //Se crean las variables para mandar el mensaje y el tipo de alerta
        $_SESSION["respuesta"] = $resp;
        $_SESSION["alerta"] = $alerta;

        //Se redigire a la página de gestión correspondiente
        header("Location: ../Vista/views/GestionContactos.php");

        
        break;
    case "actualizar":
        //Se obtienen los datos mandados por el formulario
        $idCon = $_POST['idCon'];
        $idEmp = "";
        $cedU = $_POST['cedula'];
        $email = $_POST['email'];
        $tel = $_POST['tel'];
        $dir = $_POST['dir'];

        //Se mandan los datos obtenidos al DAO
        $dao->setIdCont($idCon);
        $dao->setIdEmp($idEmp);
        $dao->setCedU($cedU);
        $dao->setEmail($email);
        $dao->setTel($tel);
        $dao->setDir($dir);
        $dao->setOpcion($opcion);
                
        //Se ejecuta el CRUD
        $dao->ejecutarCRUD();

        //Se obtiene el tipo de alerta y el mensaje que surgió al ejectuar el CRUD
        $alerta = $dao->alerta;
        $resp = $dao->mensaje;

        //Se inicia una sesión para mandar la alerta
        session_start();

        //Se crean las variables para mandar el mensaje y el tipo de alerta
        $_SESSION["respuesta"] = $resp;
        $_SESSION["alerta"] = $alerta;

        //Se redigire a la página de gestión correspondiente
        header("Location: ../Vista/views/GestionContactos.php");
            
        break;
    case "eliminar":
        //Se obtienen los datos mandados por el formulario
        $idCon = $_POST['idCon'];

        //Se mandan los datos obtenidos al DAO
        $dao->setIdCont($idCon);
        $dao->setOpcion($opcion);

        //Se ejecuta el CRUD
        $dao->ejecutarCRUD();

        //Se obtiene el tipo de alerta y el mensaje que surgió al ejectuar el CRUD
        $alerta = $dao->alerta;
        $resp = $dao->mensaje;

        //Se inicia una sesión para mandar la alerta
        session_start();

        //Se crean las variables para mandar el mensaje y el tipo de alerta
        $_SESSION["respuesta"] = $resp;
        $_SESSION["alerta"] = $alerta;

        //Se redigire a la página de gestión correspondiente
        header("Location: ../Vista/views/GestionContactos.php");



     
        break;
}

?>