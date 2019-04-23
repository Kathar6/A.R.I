<?php
if(isset($_SESSION['login'])){
    
    echo '<div class="row usuario">';
    echo '<div class="col-sm-12">';
      echo '<ul class="nav pt-1 pb-1 float-right">';
        echo '<li class="nav-item">';
          echo '<span class="btn" style="color:var(--color1);"><i class="fas fa-user"></i></span>';
        echo '</li>';
        echo '<li class="nav-item">';
          echo '<a href="#" class="nav-link" style="color:var(--color1);">'.$_SESSION['login'].'</a>';
        echo '</li>';
        echo '<li class="nav-item">';
         echo '<button type="button" class="btn dropdown-toggle" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false" style="color:var(--color1);">';
            echo '<i class="fas fa-bars"></i>';
          echo '</button>';
          echo '<div class="dropdown-menu ddmPerfil">';
           echo '<a href="../../Controlador/CerrarSesion.php" style="all:unset;"><button class="dropdown-item" type="button">Cerrar
           Sesión</button></a>';
         echo '</div>';
        echo '</li>';
      echo '</ul>';
    echo '</div>';
    echo '</div>';

}



?>