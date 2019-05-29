<?php
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="../CSS/gestiones.css">
  <link rel="stylesheet" href="../CSS/modalesAñadir.css">
  <link rel="shortcut icon" href="../img/LOGO.ico">
  <title>Gestión categorías</title>
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
          <li><a href="#">Gestión categorías</a></li>
          <li><a href="reportes.php">Reportes</a></li>
        </ul>
      </li>



  <?php
  include "../../Controlador/Usuario.php";
  ?>
  </ul>

</nav>
  <!-- #endregion -->

  <section>
    <!-- #region alertas -->
    <?php
        include "../../Controlador/alertas.php";
     ?>

    <!-- #endregion -->

    <!-- #region boton añadir -->
    <div class="añadir">
      <a class="btnAñadir" data-toggle="modal" data-target="#modalGest" onclick="guardar()">
        <i class="fas fa-user-plus iconoPlus"></i>
      </a>
    </div>
    <!-- #endregion -->

    <!-- #region tabla -->
    <div class="buscar form-row">
      <div class="col-3 border rounded border-secondary contenedorBus">

        <input type="text" class="form-control" id="search" placeholder="Buscar por nombre" onkeyup="buscar()" />
        <button class="icon"><i class="fa fa-search"></i></button>
      </div>
    </div>
    <table class="table tablagest table-bordered">
      <thead class="table-dark">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nombre</th>
          <th scope="col">Editar</th>
          <th scope="col">Eliminar</th>
        </tr>
      </thead>
      <?php 
        
        include "../../Modelo/lists/listarCat.php";



        $cont = 1;

        echo '<tbody>';
        while($row = $res->fetch_assoc()){
          
        echo '<tr id="tr'.$cont.'">';
         echo'<th scope="row" id="contador">'.$cont.'</th>';
          echo '<td class="deshabilitar" id="IdCatT'.$cont.'">'.$row['idcat'].'</td>';
          echo '<td id="NomCatT'.$cont.'" class="nombres">'.$row['nombrecat'].'</td>';
          echo '<td><a href="#" id="btnEditar'.$cont.'" data-num="'.$cont.'" data-toggle="modal" data-target="#modalGest" onclick="actualizar(this)"><i
                class="fas fa-edit iconoTabla"></i></a></td>';
          echo'<td><a href="#" id="btnEliminar'.$cont.'" data-num="'.$cont.'" onclick="eliminar(this)"><i class="fas fa-trash-alt iconoTabla"></i></a></td>';
        echo'</tr>';
       
        $cont = $cont + 1;
        }
        echo '</tbody>';
      ?>
    </table>
    <!-- #endregion -->
    <!-- #region  Modal -->
    <div class="modal fade" id="modalGest" tabindex="-1" role="dialog" aria-labelledby="tituloModal" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content blq_modalA">
          <div class="modal-header">
            <h2 class="text-center text-dark mt-3" id="tituloModal">Nueva categoría</h2>
            <button type="button" class="close mr-1" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form id="formulario" action="../../Controlador/ControladorCat.php" method="POST">
              <div class="panelModal">
                <div class="form-row text-center">
                  <h3 class="text-center text-dark mt-5">Datos de la categoría</h3>
                </div>
                <i id="recicle" class="fas fa-recycle"></i>
                <div class="form-row ml-5 mt-5 mb-5">
                  <div class="col-sm-1">
                    <label>Nombre:</label>
                  </div>
                  <div class="col-sm-2">
                    <input type="text" name="nomCat" id="NomCat" class="form-control campos" required>
                  </div>
                </div>

                <div class="col-sm-2">
                  <input type="hidden" name="Opcion" id="Opcion" class="form-control campos">
                </div>
                <div class="col-sm-2">
                  <input type="hidden" name="idCat" id="IdCat" class="form-control campos">
                </div>


                <div class="modal-footer">
                  <input type="submit" id="btnSubmit" class="btn btnSubmit">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                </div>

            </form>
          </div>


        </div>
      </div>
    </div>
    <!-- #endregion -->
  </section>
  <script src="../Funciones/ControladorbotonesCat.js"></script>

</body>

</html>