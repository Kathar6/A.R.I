<!-- Controlador del DAO de Basura -->
<!-- Aquí se obtienen los datos mandados por los formularios y se ejecuta el CRUD dependiendo
de la opción que se mande -->
<?php

//Se incluye el DAO correspondiente
include "../Modelo/DAOS/BasuraDAO.php";

//Instanciamos la clase del DAO
$dao = new BasuraDAO();

//Obtenemos la opción que se requiere ejecutar
$opcion = $_POST['Opcion'];


switch ($opcion) {
    case "guardar":
        //Se obtienen los datos mandados por el formulario
        $idbas = $_POST['idBas'];
        $idcat = $_POST['idCat'];
        $nomBas = $_POST['nomBas'];

        //Se mandan los datos obtenidos al DAO
        $dao->setIdBas($idbas);
        $dao->setIdCat($idcat);
        $dao->setNombre($nomBas);
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
        header("Location: ../Vista/views/GestionBasuras.php");

        
        break;
    case "actualizar":
        //Se obtienen los datos mandados por el formulario
        $idbas = $_POST['idBas'];
        $idcat = $_POST['idCat'];
        $nomBas = $_POST['nomBas'];

        //Se mandan los datos obtenidos al DAO
        $dao->setIdBas($idbas);
        $dao->setIdCat($idcat);
        $dao->setNombre($nomBas);
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
        header("Location: ../Vista/views/GestionBasuras.php");
            
        break;
    case "eliminar":
        //Se obtienen los datos mandados por el formulario
        $idbas = $_POST['idBas'];

        //Se mandan los datos obtenidos al DAO
        $dao->setIdBas($idbas);
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
        header("Location: ../Vista/views/GestionBasuras.php");



     
        break;
}

?>