<?php
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "ancafe.versailles@gmail.com";
    $to = "juan.e.cortes1204@gmail.com";
    $subject = "Checking PHP mail";
    $message = "PHP mail works just fine";
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);
    echo "The email message was sent.";
    
    ?>