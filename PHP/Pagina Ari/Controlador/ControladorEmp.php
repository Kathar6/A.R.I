<?php

include "../Modelo/DAOS/EmpresaDAO.php";

$dao = new EmpresaDAO();

$opcion = $_POST['Opcion'];

switch ($opcion) {
    case "guardar":
        $rut = $_POST['RUT'];
        $nom = $_POST['Nombre'];
        $web = $_POST['Website'];

        $dao->setIdEmpresa($rut);
        $dao->setNomEmp($nom);
        $dao->setWebsite($web);
        $dao->setOpcion($opcion);

        $dao->ejecutarCRUD();

        $alerta = $dao->alerta;
        $resp = $dao->mensaje;

        session_start();

        $_SESSION["respuesta"] = $resp;
        $_SESSION["alerta"] = $alerta;

        header("Location: ../Vista/HTML/GestionEmpresas.html.php");

        
        break;
    case "actualizar":
        $rut = $_POST['RUT'];
        $nom = $_POST['Nombre'];
        $web = $_POST['Website'];

        $dao->setIdEmpresa($rut);
        $dao->setNomEmp($nom);
        $dao->setWebsite($web);
        $dao->setOpcion($opcion);
          
                
        $dao->ejecutarCRUD();

        $alerta = $dao->alerta;
        $resp = $dao->mensaje;

        session_start();

        $_SESSION["respuesta"] = $resp;
        $_SESSION["alerta"] = $alerta;

        header("Location: ../Vista/HTML/GestionEmpresas.html.php");
            
        break;
    case "eliminar":
        $rut = $_POST['RUT'];

        $dao->setIdEmpresa($rut);
        $dao->setOpcion($opcion);

        $dao->ejecutarCRUD();

        $alerta = $dao->alerta;
        $resp = $dao->mensaje;

        session_start();

        $_SESSION["respuesta"] = $resp;
        $_SESSION["alerta"] = $alerta;

        header("Location: ../Vista/HTML/GestionEmpresas.html.php");



     
        break;
}

//
