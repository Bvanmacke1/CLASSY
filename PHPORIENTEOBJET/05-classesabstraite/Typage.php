<?php
// typage.php

function addition(float $x, float $y) : float {
     return $x + $y ;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Typage</title>
</head>
<body>
    <?php

    echo addition (2.2, 4.2);
    ?>

</body>
</html>