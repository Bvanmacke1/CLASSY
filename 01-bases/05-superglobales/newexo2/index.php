<?php
// faire un formulaire qui envoi des infos dans un fchier
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>POST</title>
</head>
<body>
    <form action="kikoo2.php" method="POST">
    <label for"nom">Votre nom:</label>
    <input type="text" id="nom" name="nom">
    <label for"age">Votre age:</label>
    <input type="number" id="age" name="age">
    <button type="submit">Valider</button> 
</form>
</body>
</html>
