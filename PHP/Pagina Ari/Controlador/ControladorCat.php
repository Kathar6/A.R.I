<?php

include "../Modelo/DAOS/CategoriaDAO.php";

$dao = new CategoriaDAO();

$opcion = $_POST['Opcion'];

switch ($opcion) {
    case "guardar":
        $idcat = $_POST['idCat'];
        $nomCat = $_POST['nomCat'];

        $dao->setIdCat($idcat);
        $dao->setNombre($nomCat);
        $dao->setOpcion($opcion);

        $dao->ejecutarCRUD();

        $alerta = $dao->alerta;
        $resp = $dao->mensaje;

        session_start();

        $_SESSION["respuesta"] = $resp;
        $_SESSION["alerta"] = $alerta;

        header("Location: ../Vista/HTML/GestionCategorias.php");

        
        break;
    case "actualizar":
        $idcat = $_POST['idCat'];
        $nomCat = $_POST['nomCat'];

        $dao->setIdCat($idcat);
        $dao->setNombre($nomCat);
        $dao->setOpcion($opcion);
                
        $dao->ejecutarCRUD();

        $alerta = $dao->alerta;
        $resp = $dao->mensaje;

        session_start();

        $_SESSION["respuesta"] = $resp;
        $_SESSION["alerta"] = $alerta;

        header("Location: ../Vista/HTML/GestionCategorias.php");
            
        break;
    case "eliminar":
        $idcat = $_POST['idCat'];

        $dao->setIdCat($idcat);
        $dao->setOpcion($opcion);

        $dao->ejecutarCRUD();

        $alerta = $dao->alerta;
        $resp = $dao->mensaje;

        session_start();

        $_SESSION["respuesta"] = $resp;
        $_SESSION["alerta"] = $alerta;

        header("Location: ../Vista/HTML/GestionCategorias.php");



     
        break;
}