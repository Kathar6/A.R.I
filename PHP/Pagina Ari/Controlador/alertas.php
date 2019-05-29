<?php
if(isset($_SESSION['respuesta']) && isset($_SESSION['alerta'])){
    echo '<div class="alertas alert alert-'.$_SESSION['alerta'].' alert-dismissible">';
    echo'<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
    echo'<strong>'.$_SESSION['respuesta'].'</strong>';
    echo '</div>';
    
    unset($_SESSION['respuesta']);
    unset($_SESSION['alerta']); 
    
  }
?>