<!--
    Pagina Web A.R.I
    Pagina Inicio
    Ultima Actualización:04/06/2019
    Integrantes: Mateo Alonso Pabón García,David Agudelo,Juan David Correa García, Juan Esteban Cortés Goméz, Daniel Pineda
-->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto+Mono" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/app.css">
    <link rel="shortcut icon" href="../img/LOGO.ico">
    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <title>A.R.I</title>
</head>

<body style="background-color:#fafafa;">
    <!-- #region Ventana Modal-->
    <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm blq_modal">
            <div class="modal-content">
                <div class="pt-4 px-3">
                    <div class="col text-center">
                        <img src="../img/LOGO.svg" class="img-fluid" width="150" alt="">
                    </div>
                    <form action="../../Modelo/login.php" method="post" id="formLogin">
                        <h2 class="text-center text-dark mt-3 ">Ingreso</h2>
                        <hr>
                        <div class="form-label-group">
                            <input type="text" id="usuario" name="user" class="form-control"
                                placeholder="NickName de Usuario" required autofocus>
                            <label for="inputEmail">Usuario</label>
                        </div>
                        <div class="form-label-group">
                            <input type="password" id="Password" name="password" class="form-control"
                                placeholder="Password de Usuario" required>
                            <label for="inputPassword">Contraseña</label>
                        </div>

                        <div class="form-group text-center">
                            <input type="submit" value="Ingresar" class="btn btn-lg col-sm-6 btnIngresar text-white">
                            
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- #endregion -->
    <!--#region Bloque Error-->
    <div class="p-3 rounded mx-auto blq_error">
        Usuario o Contraseña incorrectos.
    </div>
    <!-- #endregion -->
    <!-- #region Nav Menu-->
    <nav class="container-fluid bg-dark menu1 text-white">
        <ul class="nav float-right pt-1 pb-1 ">
            <li class="nav-item">
                <a href="nosotros.html" class="nav-link">Nosotros</a>
            </li>
            <li class="nav-item">
                <a href="Contacto.html" class="nav-link">Contacto</a>
            </li>
            <li class="nav-item">
                <a href="#openModal" class="nav-link btnAbrirModal" data-toggle="modal"
                    data-target=".bd-example-modal-sm">Ingresar</a>
            </li>
        </ul>
    </nav>
    <!-- #endregion -->
    <section>
        <!-- #region  Carousel Pagina-->
        <div id="carouselExampleIndicators" class="carousel slide text-white blq_carousel" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner carIndex">
                <div class="carousel-item active imgCarousel img1 text-center">
                    <div class="txtCarousel mt-5 pt-5 mx-auto">
                        <h1>Asistente de Reciclaje Inteligente</h1>
                        <p>El proyecto ARI (Asistente de Reciclaje Inteligente) ayudará a reciclar de una manera fácil,
                            intuitiva y de manera automática a todas las personas.</p>
                    </div>
                </div>
                <div class="carousel-item imgCarousel img1">
                    <div class="txtCarousel  mt-5 p-5 mx-auto">
                        <h1>¿Como funciona ARI?</h1>
                        <p>Nuestras máquinas toman una foto de la basura ingresada, la procesan y la clasifican según su categoría.</p>
                    </div>
                </div>
                <div class="carousel-item imgCarousel img2">
                    <div class="txtCarousel  mt-5 p-5 mx-auto">
                        <h1>Contactenos</h1>
                        <p>Envienos un correo o un mensaje a nuestras redes sociales
                            <br>
                            <a href="Contacto.html" class="btn btn-secondary">Ver mas</a>
                        </p>

                    </div>
                </div>
                <div class="carousel-item imgCarousel img3">
                    <div class="txtCarousel  mt-5 p-5 mx-auto">
                        <h1>Nosotros</h1>
                        <p>¿Quieres saber mas sobre nosotros?
                            <br>
                            <a href="nosotros.html" class="btn btn-secondary">Ver mas</a>
                        </p>

                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- #endregion -->

        <!-- Marketing messaging and featurettes
  ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->

        <div class="container-fluid blq marketing pt-5" style="margin-top:10vh;">
            <!-- Three columns of text below the carousel -->
            <div class="row text-center">
                <div class="col-lg-4">
                    <a href="#basurasTotales"><i class="fas fa-recycle iconCarousel"></i></a>
                    <h2>Basuras totales</h2>
                    <p>Total de basuras registradas.</p>
                    <p><a class="btn btnIngresar" href="#basurasTotales" role="button">Ver mas &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <a href="#maquinasTotales"><i class="far fa-hdd iconCarousel"></i></a>
                    <h2>Total de máquinas</h2>
                    <p>Cantidad de máquinas en funcionamiento.</p>
                    <p><a class="btn btnIngresar" href="#maquinasTotales" role="button">Ver mas &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <a href="#empAsociadas"><i class="far fa-building iconCarousel"></i></a>
                    <h2>Entidades asociadas</h2>
                    <p>Entidades que nos apoyan.</p>
                    <p><a class="btn btnIngresar" href="#empAsociadas" role="button">Ver mas &raquo;</a></p>
                </div>

            </div><!-- /.row -->
            <hr class="featurette-divider">
        </div>
        <div class="container-fluid blq text-center">
            <div class="row featurette">
                <a name="basurasTotales"></a>
                <div class="col-md-12 blq_secciones">
                    <?php
                        //Se muestra el total de basuras registradas
                        include "../../Controlador/BasurasRegistradas.php";
                    ?>
                    <p class="align-middle lead">Nuestras máquinas usan estos registros para analizar y clasificar las basuras que se ingresan.</p>
                </div>
                <!-- <div class="col-md-5">
                    <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                        height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice"
                        focusable="false" role="img" aria-label="Placeholder: 500x500">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa"
                            dy=".3em">500x500</text>
                    </svg>
                </div> -->
            </div>
        </div>
        <hr class="featurette-divider blq">

        <div class="container-fluid featurette">
            <a name="maquinasTotales"></a>
            <div class="col-md-12 blq_secciones">
                <?php
                        //Se muestra el total de máquinas registradas y activadas
                        include "../../Controlador/MaquinasRegistradas.php";
                    ?>
                <p class="lead">Gracias a nuestras máquinas las personas pueden realizar un reciclaje automático y rápido. Nuestro objetivo es poder llevar nuestras máquinas a todos los lugares posibles para así poder brindar un servicio completo a todos</p>
            </div>
            <!-- <div class="col-md-5">
                    <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                        height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice"
                        focusable="false" role="img" aria-label="Placeholder: 500x500">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa"
                            dy=".3em">500x500</text>
                    </svg>
                </div> -->
        </div>
        <hr class="blq">
        <div class="container-fluid featurette">
            <a name="registroemp"></a>
            <div class="col-md-12 blq_secciones">
                <h2 class="featurette-heading">¿Quiéres tener una de nuestras máquinas en tu empresa?</h2>
                <a href="solicitud.html" class="btn btn-secondary">Ver mas &raquo;</a>
            </div>
            <!-- <div class="col-md-5">
                    <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                        height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice"
                        focusable="false" role="img" aria-label="Placeholder: 500x500">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa"
                            dy=".3em">500x500</text>
                    </svg>
                </div> -->
        </div>
        <hr class="featurette-divider blq">
        <!-- Nosotros -->
        <a name="nuestroequipo"></a>
        <h1 class="text-center">Nuestro equipo</h1>
        <div class="row mt-3 mb-5">
            <!--Aqui van la sección de los links-->
            <div class="container mt-5 mb-1 text-center">
                <div class="row justify-content-center">
                    <div class="col-sm-2 blqIcono">
                        <a href="http://instagram.com/Krathmo">
                            <img class="iconInt img-thumbnail" src="../img/David.jpg" alt="Foto integrante">
                        </a>
                        <h5 class="mt-3">David Agudelo</h5>
                    </div>
                    <div class="col-sm-2">
                        <a href="http://instagram.com/juan_n1410">
                            <img class="iconInt img-thumbnail" src="../img/Juanes.jpg" alt="Foto integrante">
                        </a>
                        <h5 class="mt-3">Juan Cortés</h5>
                    </div>
                    <div class="col-sm-2">
                        <a href="http://instagram.com/danielpineda199">
                            <img class="iconInt img-thumbnail" src="../img/Daniel.jpg" alt="Foto integrante">
                        </a>
                        <h5 class="mt-3">Daniel Pineda</h5>
                    </div>
                    <div class="col-sm-2">
                        <a href="http://instagram.com/juandastick">
                            <img class="iconInt img-thumbnail" src="../img/Juanda.jpg" alt="Foto integrante">
                        </a>
                        <h5 class="mt-3">Juan David Correa</h5>
                    </div>
                    <div class="col-sm-2">
                        <a href="http://instagram.com/tears_spirit">
                            <img class="iconInt img-thumbnail" src="../img/Mateo.jpg" alt="Foto integrante">
                        </a>
                        <h5 class="mt-3">Mateo Pabón</h5>
                    </div>
                    
                    
                    
                </div>
            </div>
        </div>
        <hr class="blq">
        <!-- Entidades que nos apoyan -->
        <a name="entidades"></a>
        <h1 class="text-center">Entidades que nos apoyan</h1>
        <div class="row mt-3 mb-5">
            <!--Aqui van la sección de los links-->
            <div class="container mt-5 text-center">
                <div class="row justify-content-center">
                    <div class="col-sm-2">
                        <img class="iconEmpresas img-thumbnail" src="../img/logoSena.png" alt="Foto empresa">
                        <h5 class="mt-3">SENA</h5>
                    </div>
                </div>
            </div>
        </div>
     
        <h1 class="text-center">Tecnologias que usamos</h1>
        <div class="row mt-5 justify-content-center">
            <div class="col-sm-3 text-center">
                <!-- <div class="bg-secondary iconEmpresas"></div> -->
                <i class="fab fa-html5 iconTec" style="color:#e65100;"></i>
            </div>
            <div class="col-sm-3 text-center">
                <i class="fab fa-css3-alt iconTec" style="color:#0d47a1;"></i>
            </div>
            <div class="col-sm-3 text-center">
                <i class="fab fa-js iconTec" style="color:#F7DF1E;"></i>
            </div>
            <div class="col-sm-3 text-center">
                <i class="fab fa-node-js iconTec" style="color:#8CC84B;"></i>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 text-center">
                <i class="fab fa-php iconTec" style="color:#3f51b5;"></i>
            </div>
        </div>
        <hr>
        <footer>
        <div class="container-fluid mt-5 pt-1 footer">
            <div class="container-fluid">
                <div class="row p-5">
                    <div class="col-sm-3 mx-auto">
                        <h6 class=" font-weight-bold">INICIO</h6>
                        <hr>
                        <small>
                            <a href="#basurasTotales" class="font-weight-light">Basuras totales</a>
                            <hr>
                            <a href="#maquinasTotales" class="font-weight-light">Máquinas totales</a>
                            <hr>
                            <a href="#registroemp" class="font-weight-light">Registro de empresa</a>
                            <hr>
                            <a href="#nuestroequipo" class="font-weight-light">Nuestro equipo</a>
                            <hr>
                            <a href="#entidades" class="font-weight-light">Entidades asociadas</a>
                        </small>
                    </div>
                    <div class="col-sm-3 mx-auto">
                        <h6 class="font-weight-bold">INFORMACIÓN</h6>
                        <hr>
                        <small>
                            <a href="Contacto.html" class="font-weight-light">Contacto</a>
                            <hr>
                            <a href="nosotros.html" class="font-weight-light">Nosotros</a>
                            <hr>
                        </small>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid bg-dark">
            <div class="row">
                <div class="col-sm-12 text-center text-white py-2">
                    <i class="far fa-copyright"></i>A.R.I 2019
                </div>
            </div>
        </div>
    </footer>
    </section>

    <script src="../js/script.js"></script>
    

</body>

</html>