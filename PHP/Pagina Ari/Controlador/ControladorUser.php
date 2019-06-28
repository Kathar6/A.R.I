<!-- Controlador del DAO de Usuario -->
<!-- Aquí se obtienen los datos mandados por los formularios y se ejecuta el CRUD dependiendo
de la opción que se mande -->
<?php

//Se incluye el DAO correspondiente
include "../Modelo/DAOS/UsuarioDAO.php";

//Se incluye el DAO de contacto
include "../Modelo/DAOS/ContactoDAO.php";

//Instanciamos la clase del DAO
$dao = new UsuarioDAO();
$daoCon = new ContactoDAO();

//Obtenemos la opción que se requiere ejecutar
$opcion = $_POST['Opcion'];

switch ($opcion) {
    case "guardar":

        //Se obtienen los datos mandados por el formulario
        $ced = $_POST['cedula'];
        $nom = $_POST['Nombres'];
        $apell = $_POST['Apellidos'];
        $user = $_POST['Usuario'];
        $pass = $_POST['Contraseña'];
        $passConf = $_POST['Confirmar'];

        //Se obtienen los datos para el contacto mandados por el formulario
        $idCon = "";
        $idEmp = "";
        $email = $_POST['email'];
        $tel = $_POST['tel'];
        $dir = $_POST['dir'];


    //Se hace una condición para verificar que la contraseña y la confirmación sean iguales
    //De ser correcto se procede a guardar al usuario en la BD
    if ($pass == $passConf) {


            //Se mandan los datos obtenidos al DAO
            $dao->setCedula($ced);
            $dao->setNombres($nom);
            $dao->setApellidos($apell);
            $dao->setUser($user);
            $dao->setPassword($pass);
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

            if($email != '' || $tel != '' || $dir != ''){

                print("Guardando contacto");

                //Se mandan los datos obtenidos al DAO
                $daoCon->setIdCont($idCon);
                $daoCon->setIdEmp($idEmp);
                $daoCon->setCedU($ced);
                $daoCon->setEmail($email);
                $daoCon->setTel($tel);
                $daoCon->setDir($dir);
                $daoCon->setOpcion($opcion);

                //Se ejecuta el CRUD
                $daoCon->ejecutarCRUD();
            }

            //Se redigire a la página de gestión correspondiente
            header("Location: ../Vista/views/GestionUsuarios.php");
        
        //En caso de que no sean iguales no se guardará al usuario y se mostrará un mensaje de error
        } else {
            
            //Se inicia una sesión para mandar la alerta
            session_start();

            //Se crea el mensaje de error junto con un tipo de alerta danger
            $_SESSION["respuesta"] = "Las contraseñas son inválidas";
            $_SESSION["alerta"] = "danger";

            //Se redigire a la página de gestión correspondiente
            header("Location: ../Vista/views/GestionUsuarios.php");
        }

        break;
    case "actualizar":

        //Se obtienen los datos mandados por el formulario
        $ced = $_POST['cedula'];
        $nom = $_POST['Nombres'];
        $apell = $_POST['Apellidos'];
        $pass = $_POST['Contraseña'];
        $passConf = $_POST['Confirmar'];
        $usuario = $_POST['Usuario'];

        //Se hace una condición para verificar que el usuario ingresado no sea nulo
        //En caso de ser nulo no se actualizará al usuario y se mostrará un mensaje de error
        if ($usuario != '') {

            //Se inicia una sesión para mandar la alerta
            session_start();

            //Se crea el mensaje de error junto con un tipo de alerta danger
            $_SESSION["respuesta"] = "El campo de usuario no puede ser actualizado";
            $_SESSION["alerta"] = "danger";

            //Se redigire a la página de gestión correspondiente
            header("Location: ../Vista/views/GestionUsuarios.php");


        } else {
            //Se hace una condición para verificar que la contraseña y la confirmación sean iguales
            //De ser correcto se procede a actualizar al usuario en la BD
            if ($pass == $passConf) {

                //Se mandan los datos obtenidos al DAO
                $dao->setCedula($ced);
                $dao->setNombres($nom);
                $dao->setApellidos($apell);
                $dao->setPassword($pass);
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
                header("Location: ../Vista/views/GestionUsuarios.php");


            //En caso de que no sean iguales no se guardará al usuario y se mostrará un mensaje de error
            } else {

                //Se inicia una sesión para mandar la alerta
                session_start();

                //Se crea el mensaje de error junto con un tipo de alerta danger
                $_SESSION["respuesta"] = "Las contraseñas son inválidas";
                $_SESSION["alerta"] = "danger";
    
                //Se redigire a la página de gestión correspondiente
                header("Location: ../Vista/views/GestionUsuarios.php");

            }
        }
        break;
    case "eliminar":
        
        //Se obtienen los datos mandados por el formulario
        $ced = $_POST['cedula'];

        //Se mandan los datos obtenidos al DAO
        $dao->setCedula($ced);
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
        header("Location: ../Vista/views/GestionUsuarios.php");

     
        break;
}

//
