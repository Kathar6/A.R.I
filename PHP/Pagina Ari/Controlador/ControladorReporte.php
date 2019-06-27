<!-- Este controlador se encarga de crear el reporte y de generar las variables
que deshabilitan los campos para así mostrar sólo los datos que el usuario requiera -->
<?php

    //Se incluye el DAO de los reportes
    include "../Modelo/DAOS/CrearReporte.php";

    //Se inicia una sesión para mandar las variables generadas por el controlador
    session_start();
     
    //Se instancia la clase del DAO
    $reporte = new CrearReporte();
    
    //Se traen los datos que filtran el reporte 
    $nomBas = $_POST['nomBas'];
    $nomCat = $_POST['nomCat'];
    $ubcMaq = $_POST['ubcMaq'];
    $fecha1 = $_POST['fecha1'];
    $fecha2 = $_POST['fecha2'];
    
    //Se concatenan las horas de todo el día al rango de fechas seleccionado por el usuario 
    //para así filtrar sólo por días, meses y años
    if($fecha1 != ""){
      $fecha1 = $fecha1." 00:00:00";
    }
    if($fecha2 != ""){
    $fecha2 = $fecha2." 23:59:59";
    }

    //Se pregunta por cada checkbox que se encuentra en la página y de no estar seleccionados
    //se creará una variable que tendrá el valor deshabilitar para que así,
    //en la página, este campo no se muestre en la tabla
    //si el checkbox está seleccionado la variable tendrá un valor vacío 
    if(!isset($_POST['idBasC'])){
      $_SESSION['idBasC'] = "deshabilitar";
    }else{
      $_SESSION['idBasC'] = "";
    }

    if(!isset($_POST['idMaqC'])){
      $_SESSION['idMaqC'] = "deshabilitar";
    }else{
      $_SESSION['idMaqC'] = "";
    }

    if(!isset($_POST['ubcMaqC'])){
      $_SESSION['ubcMaqC'] = "deshabilitar";
    }else{
      $_SESSION['ubcMaqC'] = "";
    }
    
    if(!isset($_POST['nomBasC'])){
      $_SESSION['nomBasC'] = "deshabilitar";
    }else{
      $_SESSION['nomBasC'] = "";
    }

    if(!isset($_POST['catC'])){
      $_SESSION['catC'] = "deshabilitar";
    }else{
      $_SESSION['catC'] = "";
    }

    if(!isset($_POST['fechaC'])){
      $_SESSION['fechaC'] = "deshabilitar";
    }else{
      $_SESSION['fechaC'] = "";
    }

    if(!isset($_POST['cantC'])){
      $_SESSION['cantC'] = "deshabilitar";
    }else{
      $_SESSION['cantC'] = "";
    }



    //Se mandan los datos que filtran el reporte
    $reporte->setNomBas($nomBas);
    $reporte->setNomCat($nomCat);
    $reporte->setUbcMaq($ubcMaq);
    $reporte->setFecha1($fecha1);
    $reporte->setFecha2($fecha2);
    
    //Se crea el reporte y se guarda la respuesta de este
    $res = $reporte->crearReporte();

    //Se guarda cada registro traído en la respuesta en un arreglo para así poder mandarlo en una 
    //variable de sesión
    $result = array();
    while($row = mysqli_fetch_array($res)){
      $result[] = $row;
    }
   

    //Se crean unas variables de sesión para mandar el valor que hará aparecer el modal
    //y los datos del reporte
    $_SESSION["modal"] = 1;
    $_SESSION["respuesta"] = $result;
    

    //Se redirige a la página de reportes
    header("Location: ../Vista/views/reportes.php");
      
?>