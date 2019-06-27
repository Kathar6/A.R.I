<!-- Genera el espacio para mostrar las alertas y muestra la alerta 
     dependiendo del texto y el tipo de alerta que se mande-->
<?php
//La variable respuesta contiene el texto y la variable alerta contiene el tipo de alerta
//Se crea la alerta sólo si las variables están instanciadas
if(isset($_SESSION['respuesta']) && isset($_SESSION['alerta'])){
    echo '<div class="alertas alert alert-'.$_SESSION['alerta'].' alert-dismissible">';
    echo'<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
    echo'<strong>'.$_SESSION['respuesta'].'</strong>';
    echo '</div>';
    
    unset($_SESSION['respuesta']);
    unset($_SESSION['alerta']); 
    
  }
?>