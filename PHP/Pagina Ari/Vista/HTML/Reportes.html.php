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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="../Funciones/Reporte.js"></script>

  <link rel="stylesheet" href="../CSS/gestiones.css">
  <link rel="stylesheet" href="../CSS/modalesAñadir.css">
  <title>Reportes</title>
</head>

<body>
  <!-- #region Barra de navegación-->
  <nav class="container-fluid barraNav">

  <ul class="menuDesp justify-content-center pt-1 pb-1">
      <li>
        <a href="lobby.html.php" class="nav-link">Inicio</a>
      </li>
      <li>
        <a href="empresa.html.php" class="nav-link">Empresa</a>
        <ul>
          <li><a href="GestionEmpresas.html.php">Gestión empresas</a></li>
          <li><a href="GestionUsuarios.html.php">Gestión usuarios</a></li>
          <li><a href="GestionContactos.html.php">Gestión contactos</a></li>
        </ul>
      </li>
      <li>
        <a href="GestionMaquinas.html.php" class="nav-link">Máquinas</a>
      </li>
      <li>
        <a href="registros.html.php" class="nav-link">Registros</a>
        <ul>
          <li><a href="GestionBasuras.html.php">Gestión basuras</a></li>
          <li><a href="GestionCategorias.html.php">Gestión categorías</a></li>
          <li><a href="#">Reportes</a></li>
        </ul>
      </li>

  <?php
  include "../../Controlador/Usuario.php";
  ?>
  </ul>
</nav>
  <!-- #endregion -->

  <section>
    <!--#Region del formulario-->
    <form action="../../Controlador/ControladorReporte.1.php" method="POST">
      <div class="PanelReportes1 p-5 bg-light">
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
    <div class="col-sm-2">
            <button id="BtnMostrar" data-toggle="modal" data-target="#modalGest" class="btn btn-danger">Mostrar</button>
          </div>
        </div>
    <!--#endregion-->


  </section>
  <!--  #region  Modal -->
  <?php

  if(isset($_SESSION['modal']) && isset($_SESSION['respuesta'])){

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
          echo '<table class="table table-dark tablagest table-bordered">';
            echo '<thead>';
              echo '<tr>';
                echo '<th scope="col">#</th>';
                echo '<th scope="col" class="'.$_SESSION['idBasC'].'" >ID basura</th>';
                echo '<th scope="col" class="'.$_SESSION['nomBasC'].'" >Nombre</th>';
                echo '<th scope="col" class="'.$_SESSION['catC'].'" >Categoría</th>';
                echo '<th scope="col" class="'.$_SESSION['idMaqC'].'" >ID Máquina</th>';
                echo '<th scope="col" class="'.$_SESSION['ubcMaqC'].'" >Ubicación</th>';
                echo '<th scope="col" class="'.$_SESSION['fechaC'].'" >Fecha</th>';
                echo '<th scope="col" class="'.$_SESSION['cantC'].'" >Cantidad</th>';
              echo '</tr>';
            echo '</thead>';
             
               
        
             
       
               $res = $_SESSION['respuesta'];

               
                  $cont = 1;
        
                  echo '<tbody>';
                  foreach($res as $row){
                                  
                                echo '<tr id="tr'.$cont.'">';
                                echo'<th scope="row" id="contador">'.$cont.'</th>';
                                  echo '<td id="IdBasT'.$cont.'" class="'.$_SESSION['idBasC'].'" >'.$row['idbasura'].'</td>';
                                  echo '<td id="NomBasT'.$cont.'" class="'.$_SESSION['nomBasC'].'" >'.$row['nombasura'].'</td>';
                                  echo '<td id="NomCatT'.$cont.'" class="'.$_SESSION['catC'].'" >'.$row['nombrecat'].'</td>';
                                  echo '<td id="IdMaqT'.$cont.'" class="'.$_SESSION['idMaqC'].'" >'.$row['idmaquina'].'</td>';
                                  echo '<td id="UbcMaqT'.$cont.'" class="'.$_SESSION['ubcMaqC'].'" >'.$row['ubicacion'].'</td>';
                                  echo '<td id="fechaT'.$cont.'" class="'.$_SESSION['fechaC'].'" >'.$row['fecha'].'</td>';
                                  echo '<td id="CantT'.$cont.'" class="'.$_SESSION['cantC'].'" >'.$row['cant'].'</td>';
                                echo'</tr>';
                              
                                $cont = $cont + 1;
                                }
                                echo '</tbody>'; 
                                echo '<input type="hidden" id="VerModal" value="'.$_SESSION['modal'].'">';
                                unset($_SESSION['modal']); 
                                unset($_SESSION['respuesta']);
                          
                    }
                
              ?>
          </table>
          <div class="blqBoton">
            <button class="btn btnExportar">Exportar</button>
          </div>
        </div> 


      </div>
    </div>
  </div>
  <!-- #endregion -->


</body>


</html>