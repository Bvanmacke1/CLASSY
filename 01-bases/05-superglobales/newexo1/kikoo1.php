<?php

//var_dump($_GET);

if ($_GET['lang'] == 'fr') {
    echo 'Salut '.$_GET['name'];
} else {
    echo 'hello mister '.$_GET['name'];
}

