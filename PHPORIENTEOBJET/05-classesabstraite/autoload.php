<?php
// autoload.php

function autoloader($className){

    $parts =explode("\\", $className);
    // materiel\chaise --> Chaise.php
    include end($parts) . '.php';

}
spl_autoload_register('autoloader');
