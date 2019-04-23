<?php

include "../Modelo/DAOS/UsuarioDAO.php";

$dao = new UsuarioDAO();

$opcion = $_POST['Opcion'];

switch ($opcion) {
    case "guardar":
        $ced = $_POST['Cedula'];
        $nom = $_POST['Nombres'];
        $apell = $_POST['Apellidos'];
        $user = $_POST['Usuario'];
        $pass = $_POST['Contraseña'];
        $passConf = $_POST['Confirmar'];
    if ($pass == $passConf) {
            $dao->setCedula($ced);
            $dao->setNombres($nom);
            $dao->setApellidos($apell);
            $dao->setUser($user);
            $dao->setPassword($pass);
            $dao->setOpcion($opcion);

            $dao->ejecutarCRUD();

            $alerta = $dao->alerta;
            $resp = $dao->mensaje;

            session_start();

            $_SESSION["respuesta"] = $resp;
            $_SESSION["alerta"] = $alerta;

            header("Location: ../Vista/HTML/GestionUsuarios.html.php");

        } else {
            
            session_start();

            $_SESSION["respuesta"] = "Las contraseñas son inválidas";
            $_SESSION["alerta"] = "danger";

            header("Location: ../Vista/HTML/GestionUsuarios.html.php");
        }

        break;
    case "actualizar":
        $ced = $_POST['Cedula'];
        $nom = $_POST['Nombres'];
        $apell = $_POST['Apellidos'];
        $pass = $_POST['Contraseña'];
        $passConf = $_POST['Confirmar'];
        $usuario = $_POST['Usuario'];
        if ($usuario != '') {

            session_start();

            $_SESSION["respuesta"] = "El campo de usuario no puede ser actualizado";
            $_SESSION["alerta"] = "danger";

            header("Location: ../Vista/HTML/GestionUsuarios.html.php");


        } else {
            if ($pass == $passConf) {
                $dao->setCedula($ced);
                $dao->setNombres($nom);
                $dao->setApellidos($apell);
                $dao->setPassword($pass);
                $dao->setOpcion($opcion);

                $dao->ejecutarCRUD();

                $alerta = $dao->alerta;
                $resp = $dao->mensaje;

                session_start();

                $_SESSION["respuesta"] = $resp;
                $_SESSION["alerta"] = $alerta;

             header("Location: ../Vista/HTML/GestionUsuarios.html.php");
                
            } else {

                session_start();

                $_SESSION["respuesta"] = "Las contraseñas son inválidas";
                $_SESSION["alerta"] = "danger";
    
                header("Location: ../Vista/HTML/GestionUsuarios.html.php");

            }
        }
        break;
    case "eliminar":
        $ced = $_POST['Cedula'];

        $dao->setCedula($ced);
        $dao->setOpcion($opcion);

        $dao->ejecutarCRUD();

        $alerta = $dao->alerta;
        $resp = $dao->mensaje;

        session_start();

        $_SESSION["respuesta"] = $resp;
        $_SESSION["alerta"] = $alerta;

        header("Location: ../Vista/HTML/GestionUsuarios.html.php");

     
        break;
}

//
