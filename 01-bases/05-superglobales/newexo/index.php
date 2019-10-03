
<?php

$listePersonnes = [
0 => [
      "prenom" => "Jon",
      "nom" => "Snow",
      "admin" => false,
      "info" => "balaise",
      "valeur" => 15
],
1 => [
     "prenom" => "Cersei",
     "nom" => "Lannister",
     "admin" => true,
     "info" => "pas balaise",
     "valeur" => 16
],
2 => [
     "prenom" => "Arya",
     "nom" => "Stark",
     "admin" => true,
     "info" => "balaise",
     "valeur" => 17.1
],
3 => [
     "prenom" => "Daenerys",
     "nom" => "Targaryen",
     "admin" => false,
     "info" => "pas balaise",
],
];

// afficher la liste des personnes sur la liste
var_dump($listePersonnes);

foreach ($listePersonnes as $key => $value) {
      var_dump($key);
      echo "<br>";
      var_dump($value);
      echo $value["prenom"]."<br>";
 }

// Récupérer uniquement les personnes ayant admin à true et / ou balaise en info
foreach ($listePersonnes as $key => $value) {
      if (($value["admin"] == true)||($value["info"] === "balaise"))
      echo $value["nom"]."<br>";
}

//
// afficher les prenoms des personnes qui ont des valeurs
foreach ($listePersonnes as $key => $value) {
      if ($value["valeur"])
      echo $value["nom"].$value["prenom"]."<br>";
}

// afficher les prenoms des personnes qui ont des valeurs de type float
foreach ($listePersonnes as $key => $value) {
     // 
      if (is_float($value['valeur'])){
            echo $value["nom"].$value["prenom"].'a une valeur<br>';
      }
 
     
}

// autre solution
foreach ($listePersonnes as $key => $value) {
      // 
       if (gettype($value['valeur']) =='double'){
             echo $value["nom"].' '.$value["prenom"].' a une valeur utilisation gettype<br>';
       }
  
      
 }

 