<?php
session_start();
session_destroy();

var_dump($_SESSION)
?>

<br>Vous etes déloggé : <a href="index.php">Index</a>