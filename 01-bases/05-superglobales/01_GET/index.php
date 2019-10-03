<?php
// var_dump ($_SERVER);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SuperGlobales</title>
</head>
<body>
    <a href="kikoo.php?nameGabriel&age=43">Vers la page Kikoo</a>
    <h1> Bonjour <?= $_GET['name']; ?></h1>
    <p> Tu as <?= $_GET['age']; ?> ans </p>
</body>
</html>
