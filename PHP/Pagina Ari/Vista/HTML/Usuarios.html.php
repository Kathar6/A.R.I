<?php 
include "../../Controlador/validar.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto+Mono" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/style.css">
    <script src="../Funciones/Botones.js"></script>
    <title>Contacto</title>
</head>

<body>
    <!-- #region Barra de navegación-->
    <nav class="container-fluid menu1">
        <ul class="nav justify-content-center pt-1 pb-1">
            <li class="nav-item">
                <br>
                <br>
            </li>
            <li class="nav-item">
                <br>
                <br>
            </li>
            <li class="nav-item">
                <br>
                <br>
            </li>
        </ul>
    </nav>
    <!-- #endregion -->
    <!-- #region Seccion principal-->
    <section>
        <div class="container-fluid blq_2">
            <div class="row">
                <div class="col-sm-8 bg-light rounded mx-auto blq_principal px-5">
                    <h1 class="text-center">Usuario</h1>
                    <hr>
                    <form action="../../Controlador/ControladorUser.php" method="POST">
                        <div class="form-group">
                            <label for="Cedula">Cedula</label>
                            <input type="text" name="Cedula" id="Cedula" class="form-control campos" disabled>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="Nombres">Nombres</label>
                                <input type="text" name="Nombres" id="Nombres" class="form-control campos" disabled>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="Apellidos">Apellidos</label>
                                <input type="text" name="Apellidos" id="Apellidos" class="form-control campos" disabled>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="Apellidos">Usuario</label>
                                <input type="text" name="Usuario" id="Usuario" class="form-control campos" disabled>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="Apellidos">Contraseña</label>
                                <input type="password" name="Contraseña" id="Contraseña" class="form-control campos"
                                    disabled>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="hidden" name="Opcion" id="Opcion">
                            </div>

                        </div>
                        <div class="container-fluid mt-3 mb-3">
                            <div class="row">
                                <div class="col-sm-6 container">
                                    <div class="row justify-content-center">
                                        <div class="col-sm-3">
                                            <button id="guardar" type="button" class="boton btn btn-primary">Guardar</button>
                                        </div>
                                        <div class="col-sm-3">
                                            <button id="actualizar" type="button" class="boton btn btn-primary">Actualizar</button>
                                        </div>
                                        <div class="col-sm-3">
                                            <button id="eliminar" type="button" class="boton btn btn-primary ml-3">Borrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <div align="mensaje">
                              <?php if(isset($_GET['mensaje'])): 
                                echo "<br>";
                                echo "<center><h2>{$_GET['mensaje']}</h2></center>";
                              endif; ?>
                            </div> 
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input id="enviar" type="submit" class="form-control btn btnIngresar text-white">
                            </div>
                            <div class="form-group col-md-6">
                                <button id="cancelar" type="button" class="form-control btn btn-danger text-white">
                                    Cancelar </button>
                            </div>
                        </div>
                </div>

                </form>
            </div>
        </div>
        </div>
    </section>
    <!-- #endregion -->



</body>