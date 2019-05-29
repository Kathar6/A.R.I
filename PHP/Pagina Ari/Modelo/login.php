<?php

include_once("Conexion\Connection.php");


$conexion = new Connection();

$mysqliC = $conexion->getConnection();

$user = $_POST['user'];

$pass = $_POST['password'];

$pSqlQuery = $mysqliC->prepare("call bd_ari.Login(?,?);"); 

$pSqlQuery->bind_param("ss",$user,$pass);

$pSqlQuery->execute();

$res = $pSqlQuery->get_result();

if($res->num_rows == 1){
    session_start();
    $_SESSION['login'] = $res->fetch_row()[1];
    header("Location: ../Vista/HTML/lobby.php");
}else{
    header("Location: ../Vista/HTML/index.php?error=true");
}

$conexion->closeConnection();

?>