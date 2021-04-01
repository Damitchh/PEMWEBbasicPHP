<?php
    session_start();  
    print_r( $_SESSION["array1"]);
    session_destroy();
?>
