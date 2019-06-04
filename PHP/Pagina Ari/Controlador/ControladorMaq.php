<!-- Controlador del DAO de Máquina -->
<!-- Aquí se obtienen los datos mandados por los formularios y se ejecuta el CRUD dependiendo
de la opción que se mande -->
<?php

//Se incluye el DAO correspondiente
include "../Modelo/DAOS/MaquinaDAO.php";

//Instanciamos la clase del DAO
$dao = new MaquinaDAO();

//Obtenemos la opción que se requiere ejecutar
$opcion = $_POST['Opcion'];

switch ($opcion) {
    case "guardar":

        //Se obtienen los datos mandados por el formulario
        $idMaq = $_POST['idMaq'];
        $pesoOrg = $_POST['pesoOrg'];
        $pesoPlast = $_POST['pesoPlast'];
        $pesoPapel = $_POST['pesoPapel'];
        $ubicacion = $_POST['ubicacion'];

        //Se mandan los datos obtenidos al DAO
        $dao->setIdMaq($idMaq);
        $dao->setPesoOrg($pesoOrg);
        $dao->setPesoPlast($pesoPlast);
        $dao->setPesoPapel($pesoPapel);
        $dao->setUbicacion($ubicacion);
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
        header("Location: ../Vista/views/GestionMaquinas.php");

        
        break;
    case "actualizar":

        //Se obtienen los datos mandados por el formulario
        $idMaq = $_POST['idMaq'];
        $pesoOrg = $_POST['pesoOrg'];
        $pesoPlast = $_POST['pesoPlast'];
        $pesoPapel = $_POST['pesoPapel'];
        $ubicacion = $_POST['ubicacion'];

        //Se mandan los datos obtenidos al DAO
        $dao->setIdMaq($idMaq);
        $dao->setPesoOrg($pesoOrg);
        $dao->setPesoPlast($pesoPlast);
        $dao->setPesoPapel($pesoPapel);
        $dao->setUbicacion($ubicacion);
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
        header("Location: ../Vista/views/GestionMaquinas.php");
            
        break;
    case "eliminar":

        //Se obtienen los datos mandados por el formulario
        $idMaq = $_POST['idMaq'];
        $pesoOrg = $_POST['pesoOrg'];
        $pesoPlast = $_POST['pesoPlast'];
        $pesoPapel = $_POST['pesoPapel'];
       
        //Se mandan los datos obtenidos al DAO
        $dao->setIdMaq($idMaq);
        $dao->setPesoOrg($pesoOrg);
        $dao->setPesoPlast($pesoPlast);
        $dao->setPesoPapel($pesoPapel);
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
        header("Location: ../Vista/views/GestionMaquinas.php");
     
        break;
}
