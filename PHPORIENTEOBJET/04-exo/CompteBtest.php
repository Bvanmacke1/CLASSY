<?php

require 'CompteB.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <met$this->solde = $this->solde + $x;
      return $this;a http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test CompteB</title>
</head>
<body>
    <?php
     
     echo "Je crée un compte bancaire : ";
     $compte = new CompteB("xx55555");
     echo "<br>Compte : ".$compte->getNumero();
     echo "<br> Solde : ".$compte->getSolde();
     echo "<br>depot 50 - 40 + 50 ";
     $compte->depot(50)->retrait(40)->depot(150);
     echo "<br> Solde :  ".$compte->getSolde();

    
    ?>
</body>
</html>