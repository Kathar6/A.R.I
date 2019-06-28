<?php

//Se requiere la librería necesaria para generar el PDF
require_once 'dompdf/autoload.inc.php';

//Se usa la clase para generar el PDF
use Dompdf\Dompdf;

//Se inicia una sesión para traer el contenido del PDF
session_start();

//En caso de que el contenido exista, se generará el PDF
if (isset($_SESSION['PDF'])) {


    //Se crea la estructura necesaria para generar el PDF del reporte
    $content = "<!doctype html>\n
    <html>\n
    <head>

    <link rel='stylesheet' href='../css/bootstrap.css'>
    </head>\n
    <body>\n
    <h1>Reporte ". date("Y/m/d h:i") ."</h1>\n
    <table border='1'>" 
    . $_SESSION['PDF'] . 
    "
    </table>\n
    </body>\n
    </html>";

    //Se crea un nombre para el archivo
    $nombre = "Reporte de ".date("Y-m-d h-i");

    //Se instancia la clase para generar el PDF
    $dompdf = new Dompdf();

    //Se le pasa a la instancia la ubicación de los estilos 
    $dompdf->set_base_path("../Vista/css/");

    //Se carga el HTML contenido en la variable 
    $dompdf->loadHtml($content);

    //Se escoge el tamaño del papel y orientación del PDF
    $dompdf->setPaper('A4', 'landscape');

    //Se renderiza el PDF
    $dompdf->render();

    //Se extrae el PDF renderizado
    $pdf = $dompdf->output();

    //Se le coloca el nombre al PDF y se ejecuta la acción para guardarlo en el computador
    $dompdf->stream($nombre);
}

