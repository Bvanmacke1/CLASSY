<?php
include_once 'data/data.php';
include_once 'functions/function.php';
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
        include_once 'include/menu.php';
        ?>
    </header>
    <div> 
        <?php 
        RetourTableau(USERS);
        ?>

    </div>
</body>
</html>