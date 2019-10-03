<?php
// Classé un tableau par ordre alphabétique
$sports = ["foot", "kayak", "tennis", "ping-pong", "rally", "rugby"];
asort($sports);
foreach ($sports as $key => $val) {
    echo "$key = $val\n";
}

// Fonction qui retourne un nom aléatoirement
$listeNoms = ["Gabriel", "Pierre", "Mary", "Gautier", "Mathilde", "Jean", "Patrice", "Marc"];

function NomAleatoire($array)
{
    $max = count($array)-1;
    return $array[rand(0, $max)];
   // $rand_keys = array_rand($var);
  
    
}
echo NomAleatoire($listeNoms)."<br>";