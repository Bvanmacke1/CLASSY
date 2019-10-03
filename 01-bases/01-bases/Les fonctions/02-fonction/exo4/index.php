<?php

echo "jeux à 4";

 // SELECT * FROM `jeux_video` WHERE nbre_joueurs_max = 4
echo "les possesseurs";

// SELECT DISTINCT possesseur FROM `jeux_video` 
echo "nombre de console de jeu differentes ";

// SELECT  COUNT(DISTINCT console) FROM `jeux_video` 
echo "tous les jeux de moins de 15 €";
// SELECT * FROM `jeux_video` WHERE prix < 15
