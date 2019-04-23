<?php

session_start();

unset($_SESSION['login']);

header("Location: ../Vista/HTML/index.html.php");

?>