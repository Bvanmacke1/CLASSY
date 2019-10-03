<?php
var_dump($_FILES)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FILES</title>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
    <label for="file"> Choisissez votre fichier</label>
    <input type="file" name="file" id="file">
    <button type="submit">Envoi</button>

</body>
</html>