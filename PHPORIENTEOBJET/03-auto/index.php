<?php

function chargeClass($className){
    $className = str_replace('\\','/', $className);
    

  include "x".$className.".php";   

}

spl_autoload_register("chargeClass");

// Blog\Commentaire --> xBlog\Commentaire.php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AutoLoad</title>
</head>
<body>
<?php
 echo "C'est parti ! <br>";
 $a = new Blog\Commentaire();
 $a->texte = "aaa aaaa";
 echo $a;
 // echo "<br>chargement $className";
 
 $b = new Album\Commentaire();
 $b->texte = "<br>oh le joli commentaire aaaa";
 echo $b;

?>    
</body>
</html>