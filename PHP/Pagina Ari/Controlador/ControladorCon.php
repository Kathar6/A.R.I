<?php

include "../Modelo/DAOS/ContactoDAO.php";

$dao = new ContactoDAO();

$opcion = $_POST['Opcion'];

switch ($opcion) {
    case "guardar":
        $idCon = $_POST['idCon'];
        $idEmp = "";
        $cedU = $_POST['cedula'];
        $email = $_POST['email'];
        $tel = $_POST['tel'];
        $dir = $_POST['dir'];

        $dao->setIdCont($idCon);
        $dao->setIdEmp($idEmp);
        $dao->setCedU($cedU);
        $dao->setEmail($email);
        $dao->setTel($tel);
        $dao->setDir($dir);
        $dao->setOpcion($opcion);

        $dao->ejecutarCRUD();

        $alerta = $dao->alerta;
        $resp = $dao->mensaje;

        session_start();

        $_SESSION["respuesta"] = $resp;
        $_SESSION["alerta"] = $alerta;

        header("Location: ../Vista/HTML/GestionContactos.html.php");

        
        break;
    case "actualizar":
        $idCon = $_POST['idCon'];
        $idEmp = "";
        $cedU = $_POST['cedula'];
        $email = $_POST['email'];
        $tel = $_POST['tel'];
        $dir = $_POST['dir'];

        $dao->setIdCont($idCon);
        $dao->setIdEmp($idEmp);
        $dao->setCedU($cedU);
        $dao->setEmail($email);
        $dao->setTel($tel);
        $dao->setDir($dir);
        $dao->setOpcion($opcion);
                
        $dao->ejecutarCRUD();

        $alerta = $dao->alerta;
        $resp = $dao->mensaje;

        session_start();

        $_SESSION["respuesta"] = $resp;
        $_SESSION["alerta"] = $alerta;

        header("Location: ../Vista/HTML/GestionContactos.html.php");
            
        break;
    case "eliminar":
        $idCon = $_POST['idCon'];

        $dao->setIdCont($idCon);
        $dao->setOpcion($opcion);

        $dao->ejecutarCRUD();

        $alerta = $dao->alerta;
        $resp = $dao->mensaje;

        session_start();

        $_SESSION["respuesta"] = $resp;
        $_SESSION["alerta"] = $alerta;

        header("Location: ../Vista/HTML/GestionContactos.html.php");



     
        break;
}

?>