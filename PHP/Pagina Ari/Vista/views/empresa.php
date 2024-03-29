<?php

//Se valida si el usuario está logeado. De no ser así, se le deniega el acceso a la página 
include "../../Controlador/validar.php";
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto+Mono" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../img/LOGO.ico">
    <title>Empresa</title>
</head>

<body class="bg-light">
    <!-- #region Barra de navegación-->
    <nav class="container-fluid menu1">
    <?php
        //Se crea el espacio para mostrar el usuario ingresado
        include "../../Controlador/Usuario.php";
    ?>
    </nav>
    <!-- #endregion -->
    <!-- #region Sección principal bloque empresa-->
    <section class="mt-5">
        <div class="container-fluid m-0">
            <div class="row">
                <div class="col-sm-10 container text-center">
                    <h1>Empresa</h1>
                    <hr class="bg-white">
                    <!--Flecha Atras-->
                    <a href="lobby.php" class="border-secondary rounded bg-secondary arrAtras"><i
                            class="fas fa-angle-left text-white" style="font-size:3vw;"></i></a>
                    <div class="row justify-content-center">
                        <div class="col-sm-3">
                            <div class="card-body">
                                <a href="GestionEmpresas.php" class="btn"><i
                                        class="fas fa-building card-img-top text-center iconCarousel mb-3"></i></a>
                                <h5 class="card-title">Empresa</h5>
                                <!--<a href="#openModal" class="btn btnIngresar text-white btnAbrirModal" onclick="abrirModal()">Ingresar</a>-->
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card-body">
                                <a href="GestionUsuarios.php" class="btn"><i
                                        class="fas fa-users card-img-top text-center iconCarousel mb-3"></i></a>
                                <h5 class="card-title">Usuarios</h5>
                                <!--<a href="#openModal" class="btn btnIngresar text-white btnAbrirModal" onclick="abrirModal()">Ingresar</a>-->
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card-body">
                                <a href="GestionContactos.php" class="btn"><i
                                        class="fas fa-phone card-img-top iconCarousel mb-3"></i></a>
                                <h5 class="card-title">Contactos</h5>
                                <!--<a href="#openModal" class="btn btnIngresar text-white btnAbrirModal" onclick="abrirModal()">Ingresar</a>-->

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- pie de pag-->

        <div class="container-fluid mt-5 pt-1 text-center mapaLobby">
            <div class="container-fluid">
                <div class="row pl-5">
                    <div class="col-sm-3 mx-auto">
                        <h6 class="text-center font-weight-bold">Empresa</h6>
                        <small>
                            <a href="empresa" class="font-weight-light">Empresa</a>
                            <br>
                            <a href="usuario" class="font-weight-light">Usuario</a>
                            <br>
                            <a href="contacto" class="font-weight-light">Contacto</a>
                        </small>
                    </div>
                    <div class="col-sm-1 py-2 mx-auto">
                        <div style="border-left:1px solid #bdbdbd;height:100%"></div>
                    </div>
                    <div class="col-sm-3 mx-auto">
                        <h6 class="font-weight-bold">Maquina</h6>
                        <small>
                            <a href="maquina" class="font-weight-light">Maquina</a>
                            <br>
                        </small>
                    </div>
                    <div class="col-sm-1 py-2 mx-auto">
                        <div style="border-right:1px solid #bdbdbd;height:100%"></div>
                    </div>
                    <div class="col-sm-3 mx-auto">
                        <h6 class="font-weight-bold">Reportes</h6>
                        <small>
                            <a href="reportes" class="font-weight-light">Reportes</a>
                            <br>
                        </small>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid bg-dark footer2">
            <div class="row">
                <div class="col-sm-12 text-white text-center bg-dark py-2">
                    A.R.I 2019
                </div>

            </div>
        </div>
    </section>
    <!-- #endregion -->
</body>

</html>