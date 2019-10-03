 <?php
 // afficher un prix ttc à partir d'un hors taxe
// Pour un prix HT de : ... le montant TTC sera de :

$horsTaxe = 60;
// ici je n ai pas utiliser le taux
$taux ="1.2";
$result = $horsTaxe *20/100 + $horsTaxe;

echo "<p> pour un prix hors taxe : " .$horsTaxe. ", le ttc est de ". $result. "</p>"; 

//  Afficher 6 balises h1, avec contenu un titre suivi du nombre d'itération

for ($ii=1; $ii <7 ; $ii++) { 
    echo '<h1>Hello, on est sur la boucle n° ' .$ii . '</h1>';
}

// Afficher 4 balises h2 (toujours avec le nombre d'itération et 6 balises p 
// avec le nombre d'itération)
$jj = 1;
while ($jj <=4) {
    
    echo '<h2>Hello, on est sur la boucle n° ' .$jj . '</h2>';
        $jj++;

        $jja = 1;
        while ($jja <=6) {
            
            echo '<p>Hello, on est sur la boucle n° ' .$jja . '</p>';
                $jja++; 
}
}
// nouvel essai Bruno

for ($gga=1; $gga < 8; $gga++) { 
    echo '<p>Hello, on est sur la boucle P  n° ' .$gga . '</p>';

    if ($gga < 5) {
           echo '<h2>Hello, on est sur la boucle H2 n° ' .$gga . '</h2>';
    }
}
//
// Vraie correction Gabriel
for ($ii=1; $ii <7 ; $ii++) { 
    echo '<p>Hello, on est sur la P boucle n° ' .$ii . '</p>';
    if ($ii >= 3) {
     echo '<h2>Hello, on est sur la boucle H2 n° ' .$ii . '</h2>';
    }
}
// voici un algorythme a afficher
/* Si je suis jaune, c'est vert,
si je suis vert, c'est rouge,
si je rouge alors c'est noir
autrement c'est rose
*/

$color = 'vert';
switch ($color) {
    case 'jaune' :
    echo 'je suis jaune donc c vert';
    break;
    case 'vert' :
    echo 'je suis vert donc c rouge';
        break;
        case 'vert' :
    echo 'je suis rouge donc c noir';
        break;
    default:
    echo 'Alors c rose';
    break;
    
}

// *
// **
// les motifs boucle for 
echo "<br>";

$etoile ="*";
for ($i=0; $i <6; $i++) { 
    echo $etoile. "<br>";
    $etoile .="*";
}

// boucle do while
$nbreEtoile = 1;
$etoile ="*";
do {
    echo $etoile."<br>";
    $etoile .="*";
    $nbreEtoile++; 
} while ($nbreEtoile <=6);

