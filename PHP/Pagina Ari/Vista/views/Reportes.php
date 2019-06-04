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
  <link rel="stylesheet" href="../css/bootstrap.css">
  <link rel="stylesheet" href="../css/gestiones.css">
  <link rel="stylesheet" href="../css/modalesAñadir.css">
  <link rel="shortcut icon" href="../img/LOGO.ico">
  <script src="../js/jquery.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <title>Reportes</title>
</head>

<body>
  <!-- #region Barra de navegación-->
  <nav class="container-fluid barraNav">

  <ul class="menuDesp justify-content-center pt-1 pb-1">
      <li>
        <a href="lobby.php" class="nav-link">Inicio</a>
      </li>
      <li>
        <a href="empresa.php" class="nav-link">Empresa</a>
        <ul>
          <li><a href="GestionEmpresas.php">Gestión empresas</a></li>
          <li><a href="GestionUsuarios.php">Gestión usuarios</a></li>
          <li><a href="GestionContactos.php">Gestión contactos</a></li>
        </ul>
      </li>
      <li>
        <a href="GestionMaquinas.php" class="nav-link">Máquinas</a>
      </li>
      <li>
        <a href="registros.php" class="nav-link">Registros</a>
        <ul>
          <li><a href="GestionBasuras.php">Gestión basuras</a></li>
          <li><a href="GestionCategorias.php">Gestión categorías</a></li>
          <li><a href="#">Reportes</a></li>
        </ul>
      </li>

  <?php
//Se crea el espacio para mostrar el usuario ingresado
        include "../../Controlador/Usuario.php";
?>
  </ul>
</nav>
  <!-- #endregion -->

  <section>
    <!--#Region del formulario-->
    <form action="../../Controlador/ControladorReporte.php" method="POST">
      <div class="PanelReportes1 p-5">
        <div class="form-row">

          <h2>Mostrar:</h1>

        </div>
        <div class="form-row mt-3 ml-5">

          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="IdBasC" name="idBasC" value="">
            <label class="form-check-label" for="Checkbox1">ID de basura</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="IdMaqC" name="idMaqC" value="option2">
            <label class="form-check-label" for="inlineCheckbox2">ID de máquina</label>
          </div>

        </div>
        <div class="form-row mt-5 ml-5">
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="UbcMaqC" name="ubcMaqC" value="">
            <label class="form-check-label" for="Checkbox3">Ubicación máquina</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="NomBasC" name="nomBasC" value="option2">
            <label class="form-check-label" for="inlineCheckbox4">Nombre basura</label>
          </div>
          <div class="form-check form-check-inline ml-5">
            <input class="form-check-input" type="checkbox" id="TodoC" name="todoC" value="option2">
            <label class="form-check-label" for="inlineCheckbox5">Todo</label>
          </div>
        </div>
        <div class="form-row mt-5 ml-5">
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="CatC" name="catC" value="">
            <label class="form-check-label" for="Checkbox6">Categoría</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="FechaC" name="fechaC" value="option2">
            <label class="form-check-label" for="inlineCheckbox7">Fecha</label>
          </div>
        </div>
        <div class="form-row mt-5 ml-5">
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="CantC" name="cantC" value="">
            <label class="form-check-label" for="Checkbox7">Cantidad</label>
          </div>
        </div>

        <div class="form-row mt-5">

          <h2>Filtrar por:</h1>

        </div>
        <div class="form-row mt-3 ml-5">
          <div class="col-sm-3">
            <label>Nombre de basura:</label>
          </div>
          <div class="col-sm-4">
            <input type="text" id="NomBasI" name="nomBas" class="form-control">
          </div>
        </div>
        <div class="form-row mt-5 ml-5">
          <div class="col-sm-3">
            <label>Categoria:</label>
          </div>
          <div class="col-sm-4">
            <input type="text" id="NomCatI" name="nomCat" class="form-control">
          </div>
        </div>

        <div class="form-row mt-5 ml-5">
          <div class="col-sm-3">
            <label>Ubicación máquina:</label>
          </div>
          <div class="col-sm-4">
            <input type="text" id="UbcMaqI" name="ubcMaq" class="form-control">
          </div>
        </div>
        <div class="form-row mt-5 ml-5">
          <div class="col-sm-2">
            <label>Fechas entre:</label>
          </div>
          <div class="col-sm-3">
            <input type="date" id="Fecha1I" name="fecha1" class="form-control">
          </div>
          <div class="col-sm-1 ml-5">
            <label>y</label>
          </div>
          <div class="col-sm-3">
            <input type="date" id="Fecha2I" name="fecha2" class="form-control">
          </div>
        </div>

        <div class="form-row mt-5 BotonesReportes">

          <div class="col-sm-2">
            <button  type="submit" class="btn btnReportes"> Generar </button>
          </div>

          <div class="col-sm-2">
            <button type="button" id="Limpiar" class="btn btn-danger">Limpiar</button>
          </div>
        </div>


    </div>
    </form>
    <!-- Se crea el botón para mostrar el modal (Estará escondido) -->
    <div class="col-sm-2">
            <button id="BtnMostrar" data-toggle="modal" data-target="#modalGest" class="btn btn-danger">Mostrar</button>
          </div>
        </div>
    <!--#endregion-->


  </section>
  <!--  #region  Modal -->
  <?php

      //En caso de que las variables de modal y respuesta estén instanciadas se mostrará el modal
      //con los registros filtrados
      if (isset($_SESSION['modal']) && isset($_SESSION['respuesta'])) {

          echo '<div class="modal fade" id="modalGest" tabindex="-1" role="dialog" aria-labelledby="tituloModal" aria-hidden="true">';
          echo '<div class="modal-dialog" role="document">';
          echo '<div class="modal-content blq_modalA">';
          echo '<div class="modal-header">';
          echo '<h2 class="text-center text-dark mt-3" id="tituloModal">Reporte</h2>';
          echo '<button type="button" class="close mr-1" data-dismiss="modal" aria-label="Close">';
          echo '<span aria-hidden="true">&times;</span>';
          echo '</button>';
          echo '</div>';
          echo '<div class="modal-body">';
      
          //Se guarda en la variable content la estructura de la tabla que se desea mostrar en el PDF
          $content = "<table class='table tablagest table-bordered'>\n
                          <thead class='table-dark'>\n
                          <tr>\n
                    <th scope='col'>#</th>\n
                    <th scope='col' class='" . $_SESSION['idBasC'] . "'>ID basura</th>\n
                    <th scope='col' class='" . $_SESSION['nomBasC'] . "' >Nombre</th>\n
                    <th scope='col' class='" . $_SESSION['catC'] . "'>Categoría</th>\n
                    <th scope='col' class='" . $_SESSION['idMaqC'] . "'>ID Máquina</th>\n
                    <th scope='col' class='" . $_SESSION['ubcMaqC'] . "' >Ubicación</th>\n
                    <th scope='col' class='" . $_SESSION['fechaC'] . "' >Fecha</th>\n
                    <th scope='col' class='" . $_SESSION['cantC'] . "' >Cantidad</th>\n
                    </tr>\n
                  </thead>
            <!-- Se crea la tabla donde se muestra la lista de datos -->\n";

          //Se guardan los registros traidos por la respuesta
          $res = $_SESSION['respuesta'];

          //Se inicia un contador para llevar el conteo de los registros
          $cont = 1;

          $content = $content . '<tbody>';

          $content2 = "";

          //Se recorre cada registro que se encuentra en la respuesta
          foreach ($res as $row) {

              //Se guarda en la variable content2 los datos de la tabla que se desean mostrar en el PDF
              //Se muestra cada registro con sus respectivos datos
              //El contador se usa para asignarle un ID diferente a cada dato
              //Así, por ejemplo, el primer registro tendrá en sus datos un id con un 1
              //Mientras que el segundo registro que entre tendrá en sus datos un id con un 2
              //Así luego se podrán tomar los datos del registro 1, el 2, el 3, etc...
              //Luego, la variable de sesión que tiene cada dato traera 2 opciones, estará vacía o tendrá la palabra "deshabilitar"
              //Así, cuando el valor de la variable sea deshabilitar no se mostrará ese campo ya que el dato tendrá la clase deshabilitar
              //Revisar la clase deshabilitar en el css para entender como funciona
              $content2 = $content2 . "<tr id='tr'" . $cont . "''>
                                      <th scope='row' id='contador'>" . $cont . "</th>\n
                                        <td id='IdBasT" . $cont . "' class='" . $_SESSION['idBasC'] . "' >" . $row['idbasura'] . "</td>\n
                                        <td id='NomBasT" . $cont . "' class='" . $_SESSION['nomBasC'] . "' >" . $row['nombasura'] . "</td>\n
                                        <td id='NomCatT" . $cont . "' class='" . $_SESSION['catC'] . "' >" . $row['nombrecat'] . "</td>\n
                                        <td id='IdMaqT" . $cont . "' class='" . $_SESSION['idMaqC'] . "' >" . $row['idmaquina'] . "</td>\n
                                        <td id='UbcMaqT" . $cont . "' class='" . $_SESSION['ubcMaqC'] . "' >" . $row['ubicacion'] . "</td>\n
                                        <td id='fechaT" . $cont . "' class='" . $_SESSION['fechaC'] . "' >" . $row['fecha'] . "</td>\n
                                        <td id='CantT" . $cont . "' class='" . $_SESSION['cantC'] . "' >" . $row['cant'] . "</td>\n
                                      </tr>";

              $cont = $cont + 1;
          }
          $content2 = $content2 . '</tbody>';

          //Se muestra la tabla contenida en las variables
          echo $content;
          echo $content2;

          //Se crea un input escondido para que cuando su valor sea 1 se muestre el modal
          echo '<input type="hidden" id="VerModal" value="' . $_SESSION['modal'] . '">';

          //Se destruyen las variables de modal y respuesta y se manda la variable de PDF que contiene la tabla
          unset($_SESSION['modal']);
          unset($_SESSION['respuesta']);
          $_SESSION['PDF'] = $content . $content2;
      }

?>
          </table>
          <div class="blqBoton">
            <a href="../../Controlador/GenerarPDF.php" class="btn btnExportar">Exportar</a>
          </div>
        </div>


      </div>
    </div>
  </div>
  <!-- #endregion -->

  <script src="../js/Reporte.js"></script>
</body>


</html>