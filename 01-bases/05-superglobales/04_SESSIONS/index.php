<?php

session_start();

$_SESSION['nom'] = $_POST['nom'];
$_SESSION['prenom'] = $_POST['prenom'];
$_SESSION['age'] = $_POST['age'];
var_dump($_SESSION);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Session</title>
</head>
        <body>
            <form action="" method="POST">
            <label for="nom">Votre nom:</label>
            <input type="text" id="nom" name="nom">
            <label for="prenom">Votre Prenom:</label>
            <input type="text" id="prenom" name="prenom">
            <label for="age">Votre age:</label>
            <input type="number" id="age" name="age">
            <button type="submit">Valider</button>


                
            </form>

            <p> 
                <a href="session.php">Session</a>

            </p>
            <p>
                <a href="session_stop.php">Kill</a>
            </p>    
        </body>
</html>