<?php
// connexion.php contient la fonction connectDB 
require_once 'functions/connexion.php';

// connexion à la DB

$connect = connectDB();

/*
Créer une page d'accueil 
un menu avec liens vers accueil / candidature / à propos (page à créer)
faire apparaitre la liste de poste a pourvoir (majuscule au depart et par ordre alphabétique)(fonction)

Créer un formulaire de candidature :

    ➥ Nom, Prénom, Ville, E-mail,
    ➥ Poste recherché (liste), Message,
    ➥ CV (fichier), Acceptation règles

Créer le formulaire dans formulaire.php

Ajouter les vérifications : (fonction)
Si un champ est vide: on affiche un message d'erreur
Si tout est rempli : on affiche les données du formulaire
Envoi par email (simulation bien sur ;)(fonction)
dans le formulaire, gérer l’enregistrement du CV(plus tard)

*/


include_once 'data/data.php';$result = mysqli_query($connect, $sql_jeux);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Librairie</title>
</head>
<body>
    <header>
        <?php
        include_once 'includes/menu.php';
        ?>
    </header>
    <div> 
        <h2> Contenu de News :</h2>
        <?php 

$sql = "SELECT user_name, user_password, user_age FROM users";
//var_dump($sql);
$result = mysqli_query($connect, $sql); 
//var_dump($result);
echo "<br>fetch row tableau associatif<br>";
while($row= mysqli_fetch_assoc($result) ){
  echo 'nom: ' . $row["user_name"] . ', pwd : ' . $row["user_password"].', age : '.$row["user_age"] .'<br>';
}
       // AfficheTableau($news);
       
        ?> 
    </div>
</body>
</html>