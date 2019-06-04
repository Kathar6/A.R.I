<!-- Se verifica que el usuario esté logeado, en caso de no ser así se redirigirá a la página principal -->
<?php
session_start();
if(!isset($_SESSION['login'])){
header("Location: index.php");
}
?>