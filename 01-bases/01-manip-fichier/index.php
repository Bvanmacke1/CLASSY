<?php
// lecture du fichier brut
$contenu = file_get_contents('./fichiers/CSV_sample.csv');
// echo $contenu;

// transformation du fichier en tableau
// $tableau = file("./fichiers/CSV_sample.csv");
//var_dump($tableau);
// ajout d'1 entree dans notre tableau
// $tableau[] = 'toto@gmail.com;Toto;Bidule;001234568';
//var_dump($tableau);

// lecture du fichier avec option lecture/ecriture a la suite
$fichier = fopen('./fichiers/CSV_sample.csv', "r+");
$ligne = 0;
while($tab=fgetcsv($fichier,1024,';'))
{    
    // nombre de champs dans le fichier en question
    // la 1ere ligne correspond aux noms des champs, 
    // les lignes suivantes seront les données de ces champs
    $champs = count($tab);	
    
    //echo " Les " . $champs . " champs de la ligne " . $ligne . " sont : ";
    $ligne ++;
    //affichage de chaque champ de la ligne en question
    for($i=0; $i<$champs; $i ++)
    {
       //  echo $tab[$i] . "<br>";
    }
}

// verifie l'existantce d'un fichier
if (file_exists('./fichiers/CSV_sample.csv')) {
    echo 'mon fichier existe';
}else {
     echo 'le fichier n\'existe pas.';
}

// suppression d'un fichier
//unlink('fichier.txt');

fclose($fichier);

