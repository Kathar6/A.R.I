<!-- Inicio de sesión -->
<?php

//Incluimos nuestra conexión con la BD
include_once("Conexion\Connection.php");



//Se obtiene la conexión con la BD
$conexion = new Connection();
$mysqliC = $conexion->getConnection();

//Se obtienen los datos del usuario que trata de ingresar 
$user = $_POST['user'];
$pass = $_POST['password'];

//Se prepara una sentencia parametrizada para verificar si el usuario existe
$pSqlQuery = $mysqliC->prepare("call bd_ari.Login(?,?);"); 

//Se mandan los datos del usuario que trata de ingresar
$pSqlQuery->bind_param("ss",$user,$pass);

//Se ejecuta la sentencia parametrizada
$pSqlQuery->execute();


//Se obtienen los resultados de la sentencia
$res = $pSqlQuery->get_result();

//Si la sentencia nos trajo un registro quiere decir que el usuario existe y por ende dejamos que ingrese
//de lo contrario será devuelto a la página principal
if($res->num_rows == 1){
    session_start();
    $_SESSION['login'] = $res->fetch_row()[1];
    header("Location: ../Vista/views/lobby.php");
}else{
    header("Location: ../Vista/views/index.php?error=true");
}

//Se cierra la conexión con la BD
$conexion->closeConnection();

?>