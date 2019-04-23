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

  <link rel="stylesheet" href="../Vista/CSS/gestiones.css">
  <link rel="stylesheet" href="../Vista/CSS/modalesAñadir.css">
  <title>Reporte</title>
</head>
<body>
<table class="table table-dark tablagest table-bordered">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">ID basura</th>
              <th scope="col">Nombre</th>
              <th scope="col">Categoría</th>
              <th scope="col">ID Máquina</th>
              <th scope="col">Ubicación</th>
              <th scope="col">Fecha de ingreso</th>
              <th scope="col">Cantidad</th>
            </tr>
          </thead>
<?php

include "../Modelo/DAOS/CrearReporte.php";


$reporte = new CrearReporte();

$nomBas = $_POST['nomBas'];
$nomCat = $_POST['nomCat'];
$ubcMaq = $_POST['ubcMaq'];
$fecha1 = $_POST['fecha1'];
$fecha2 = $_POST['fecha2'];



if($fecha1 != ""){
  $fecha1 = $fecha1." 00:00:00";
}
if($fecha2 != ""){
$fecha2 = $fecha2." 23:59:59";
}


$reporte->setNomBas($nomBas);
$reporte->setNomCat($nomCat);
$reporte->setUbcMaq($ubcMaq);
$reporte->setFecha1($fecha1);
$reporte->setFecha2($fecha2);

$res = $reporte->crearReporte();




$cont = 1;

echo '<tbody>';
 while($row = $res->fetch_assoc()){
                
              echo '<tr id="tr'.$cont.'">';
              echo'<th scope="row" id="contador">'.$cont.'</th>';
                echo '<td id="IdBasT'.$cont.'">'.$row['idbasura'].'</td>';
                echo '<td id="NomBasT'.$cont.'">'.$row['nombasura'].'</td>';
                echo '<td id="NomCatT'.$cont.'">'.$row['nombrecat'].'</td>';
                echo '<td id="IdMaqT'.$cont.'">'.$row['idmaquina'].'</td>';
                echo '<td id="UbcMaqT'.$cont.'">'.$row['ubicacion'].'</td>';
                echo '<td id="fechaT'.$cont.'">'.$row['fecha'].'</td>';
                echo '<td id="CantT'.$cont.'">'.$row['cant'].'</td>';
              echo'</tr>';
            
              $cont = $cont + 1;
              }
              echo '</tbody>'; 
?> 
 
</table>
<div class="blqBoton">
    <button class="btn btnExportar">Exportar</button>
    <a href="../Vista/HTML/Reportes.html"><button class="btn btn-danger ml-5">Volver</button></a>
</div>
     


   
</body>
</html>


















