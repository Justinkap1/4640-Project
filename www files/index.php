<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

spl_autoload_register(function ($classname) {
    // include "/opt/src/Project/$classname.php";
    include "/students/jrk5ak/students/jrk5ak/Project/$classname.php";
    
});
        

$controller = new pokerController($_GET);

$controller->run();

