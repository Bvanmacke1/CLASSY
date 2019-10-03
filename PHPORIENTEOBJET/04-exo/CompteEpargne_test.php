<?php 
require 'CompteEpargne.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Test CompteEpargne</title>
</head>
<body>
    <?php 
    echo "Je crée un compte Bancaire : ";
    $compte = new CompteEpargne(2,"X555",1000);
    echo "<br>Compte : " . $compte->getNumero(); 
    echo "<br>Solde : " . $compte->getSolde();
    echo "<br>depot 50 -400 + 500";
    $compte->depot(50)->retrait(400)->depot(500); 
    echo "<br>Solde : " . $compte->getSolde();
    
    ?>
</body>
</html>




