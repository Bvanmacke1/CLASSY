
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Php Objet</title>
</head>
<body>
    <?php
        require 'autoload.php'; 
       /* require "Livre.php";
        require "Chaise.php"; */

        use materiel\Livre;
        use materiel\Chaise;

        $livre = new Livre();
        $livre->setTitre("PhpFacile");
        $livre->imprimer();

        echo"<hr>";
        $chaise = new Chaise();
        $chaise->plier();
        $chaise->deplier();
        $chaise->peindre("blanc");
        echo "<br> Couleur de la chaise : " . $chaise->couleur;  

        echo "<hr>";
        Chaise::deplier();
        Chaise::deplier();
        Chaise::deplier();
        echo "<hr>";
        echo Chaise::PIED;


        

    ?>
</body>
</html>


