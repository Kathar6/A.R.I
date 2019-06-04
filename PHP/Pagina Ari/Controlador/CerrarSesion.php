<!-- Cierra la sesión y redirige a la página principal -->
<?php

session_start();

unset($_SESSION['login']);

header("Location: ../Vista/views/index.php");

?>