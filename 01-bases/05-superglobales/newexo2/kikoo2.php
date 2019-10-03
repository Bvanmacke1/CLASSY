<?php
 // var_dump($_POST);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Bonjour, je m'appelle <?= $_POST['nom']; ?> <h1>
    <p> Et je suis super jeune <?= $_POST['age']; ?> </p>

</body>
</html>