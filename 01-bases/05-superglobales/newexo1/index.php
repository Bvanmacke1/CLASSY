// Avec l'url, récupérer deux paramètres (ou plus) un pour
// le prenom et un pour la langue 
// En fonction de la langue sélectionné, un message different doit s'afficher 
// exemple lan "fr" Bonjour mon prenom, lang = "en" Hello mon prenom

<?php
// var_dump ($_SERVER);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SuperGlobales exo get</title>
</head>
<body>
    <a href="kikoo1.php?name=Bruno&lang=fr">Francais</a> 
    <a href="kikoo1.php?name=Bruno&lang=en">Anglais</a>
     </body>

</html>