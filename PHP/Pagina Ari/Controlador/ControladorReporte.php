<?php

    include "../Modelo/DAOS/CrearReporte.php";

    session_start();
     
    $reporte = new CrearReporte();
        
    $nomBas = $_POST['nomBas'];
    $nomCat = $_POST['nomCat'];
    $ubcMaq = $_POST['ubcMaq'];
    $fecha1 = $_POST['fecha1'];
    $fecha2 = $_POST['fecha2'];
    
    
    
    if($fecha1 != ""){
      $fecha1 = $fecha1." 00:00:00";
    }
    if($fecha2 != ""){
    $fecha2 = $fecha2." 23:59:59";
    }
    
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



    
    $reporte->setNomBas($nomBas);
    $reporte->setNomCat($nomCat);
    $reporte->setUbcMaq($ubcMaq);
    $reporte->setFecha1($fecha1);
    $reporte->setFecha2($fecha2);
    
    $res = $reporte->crearReporte();
    $result = array();
    while($row = mysqli_fetch_array($res)){
      $result[] = $row;
    }
   

    $_SESSION["modal"] = 1;
    $_SESSION["respuesta"] = $result;
    

    //echo $_SESSION["modal"];
    //var_dump($_SESSION["respuesta"]);
    header("Location: ../Vista/HTML/reportes.php");
  


        
?>