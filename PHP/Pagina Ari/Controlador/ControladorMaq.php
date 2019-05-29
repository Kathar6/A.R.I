<?php

include "../Modelo/DAOS/MaquinaDAO.php";

$dao = new MaquinaDAO();

$opcion = $_POST['Opcion'];

switch ($opcion) {
    case "guardar":
        $idMaq = $_POST['idMaq'];
        $pesoOrg = $_POST['pesoOrg'];
        $pesoPlast = $_POST['pesoPlast'];
        $pesoPapel = $_POST['pesoPapel'];
        $ubicacion = $_POST['ubicacion'];

        $dao->setIdMaq($idMaq);
        $dao->setPesoOrg($pesoOrg);
        $dao->setPesoPlast($pesoPlast);
        $dao->setPesoPapel($pesoPapel);
        $dao->setUbicacion($ubicacion);
        $dao->setOpcion($opcion);

        $dao->ejecutarCRUD();

        $alerta = $dao->alerta;
        $resp = $dao->mensaje;

        session_start();

        $_SESSION["respuesta"] = $resp;
        $_SESSION["alerta"] = $alerta;

        header("Location: ../Vista/HTML/GestionMaquinas.php");

        
        break;
    case "actualizar":
        $idMaq = $_POST['idMaq'];
        $pesoOrg = $_POST['pesoOrg'];
        $pesoPlast = $_POST['pesoPlast'];
        $pesoPapel = $_POST['pesoPapel'];
        $ubicacion = $_POST['ubicacion'];

        $dao->setIdMaq($idMaq);
        $dao->setPesoOrg($pesoOrg);
        $dao->setPesoPlast($pesoPlast);
        $dao->setPesoPapel($pesoPapel);
        $dao->setUbicacion($ubicacion);
        $dao->setOpcion($opcion);

        $dao->ejecutarCRUD();

        $alerta = $dao->alerta;
        $resp = $dao->mensaje;

        session_start();

        $_SESSION["respuesta"] = $resp;
        $_SESSION["alerta"] = $alerta;

        header("Location: ../Vista/HTML/GestionMaquinas.php");
            
        break;
    case "eliminar":
        $idMaq = $_POST['idMaq'];
        $pesoOrg = $_POST['pesoOrg'];
        $pesoPlast = $_POST['pesoPlast'];
        $pesoPapel = $_POST['pesoPapel'];
       

        $dao->setIdMaq($idMaq);
        $dao->setPesoOrg($pesoOrg);
        $dao->setPesoPlast($pesoPlast);
        $dao->setPesoPapel($pesoPapel);
        $dao->setOpcion($opcion);

        $dao->ejecutarCRUD();

        $alerta = $dao->alerta;
        $resp = $dao->mensaje;

        session_start();

        $_SESSION["respuesta"] = $resp;
        $_SESSION["alerta"] = $alerta;

        header("Location: ../Vista/HTML/GestionMaquinas.php");



     
        break;
}
