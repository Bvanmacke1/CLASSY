<?php 
namespace Fruit;
require('orange.php');
require('pomme.php');

use Oranges;
use Pommes;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Manger</title>
</head>
<body>
   <?php    
   // besoin de use si on est dans un namespace particulier (Fruit)
      Oranges\manger();
      Pommes\manger();
   // pas besoin de use
      \Oranges\manger();
      \Pommes\manger();

?>
</body>
</html>