<?php

// definition d'une fonction

// mot cle function pour commencer
// un nom explicite en UpperCamelCase
// des () pour y mettre des paarmètres au (séparé par des ,)
// suivi {} pour y mettre nos instructions
    // et d'un return pour renvoyer une information

    function Addition($nbr1, $nbr2)
    {
        $resultat = $nbr1 + $nbr2;
        return $resultat;
    }

echo Addition(5, 10);
echo "<br>"; 
echo Addition(25, 10);
echo "<br>";

// fonction sans paramètre

function Hello()
{
    return 'Hello tout le monde';
}

echo Hello();
echo "<br>";
echo Hello();
echo "<br>";
echo Hello();
echo "<br>";
