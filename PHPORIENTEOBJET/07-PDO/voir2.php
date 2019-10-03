<?php
// voir2.php?id=2
require 'User.php';

$user = new User();
$user->id = $_GET['id'];
$user->Lire();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Utilisateur</title>
</head>
<body>
    Id : <?php echo $user->id; ?>
    <br>
    Login : <?php echo $user->login; ?>
    <br>
    Nom :  <?php echo $user->nom; ?>
    <br>
    Email :  <?php echo $user->email; ?>
    <hr>
    <a href="liste.php">Liste</a>
</body>
</html>