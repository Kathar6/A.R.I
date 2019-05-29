<?php

include "../Modelo/DAOS/BasuraDAO.php";

$dao = new BasuraDAO();

$opcion = $_POST['Opcion'];

switch ($opcion) {
    case "guardar":
        $idbas = $_POST['idBas'];
        $idcat = $_POST['idCat'];
        $nomBas = $_POST['nomBas'];

        $dao->setIdBas($idbas);
        $dao->setIdCat($idcat);
        $dao->setNombre($nomBas);
        $dao->setOpcion($opcion);

        $dao->ejecutarCRUD();

        $alerta = $dao->alerta;
        $resp = $dao->mensaje;

        session_start();

        $_SESSION["respuesta"] = $resp;
        $_SESSION["alerta"] = $alerta;

        header("Location: ../Vista/HTML/GestionBasuras.php");

        
        break;
    case "actualizar":
        $idbas = $_POST['idBas'];
        $idcat = $_POST['idCat'];
        $nomBas = $_POST['nomBas'];

        $dao->setIdBas($idbas);
        $dao->setIdCat($idcat);
        $dao->setNombre($nomBas);
        $dao->setOpcion($opcion);
                
        $dao->ejecutarCRUD();

        $alerta = $dao->alerta;
        $resp = $dao->mensaje;

        session_start();

        $_SESSION["respuesta"] = $resp;
        $_SESSION["alerta"] = $alerta;

        header("Location: ../Vista/HTML/GestionBasuras.php");
            
        break;
    case "eliminar":
        $idbas = $_POST['idBas'];

        $dao->setIdBas($idbas);
        $dao->setOpcion($opcion);

        $dao->ejecutarCRUD();

        $alerta = $dao->alerta;
        $resp = $dao->mensaje;

        session_start();

        $_SESSION["respuesta"] = $resp;
        $_SESSION["alerta"] = $alerta;

        header("Location: ../Vista/HTML/GestionBasuras.php");



     
        break;
}

?>