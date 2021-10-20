<?php
    include('../controller/controller.php');
    
    $var = "section_";
    $var .= basename($_SERVER['PHP_SELF']);
   
    echo template($var);
?>