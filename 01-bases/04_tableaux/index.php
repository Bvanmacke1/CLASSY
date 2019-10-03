<?php

// declaration de tableaux
$tableau = array();
$tableau2 = [];

$tableau =array("Nantes", "Paris", "lyon");
$tableau2 = ["Nantes", "Paris", "Lyon", "Lille"];
var_dump ($tableaux);
echo "<br>";
var_dump ($tableaux2);


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
//  ajout


echo "<br>";
var_dump($tableau2);
echo "<br>";
var_dump( $tableau2[3]);

// Tableau associatuf
$associatif = [
    'nom' => 'Tournay',
    'prenom' => 'Gabriel',
    'age' => '25',
    'muscle' => True

];

echo "<br>";
var_dump($associatif);
echo "<br>";
var_dump ($associatif['prenom']);


// Tableau 2 dimensions

$dimension = [
    ['0.0', '0.1', '0.2'],
    ['1.0', '1.1', '1.2'],
    ['2.0', '2.1', '2.2'],

];
echo "<br>";
var_dump($dimension);
echo "<br>";
echo $dimension [1] [2];


echo "<br>";
echo $dimension [2] [2];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tableau</title>
</head>
<body>
    <table>
      <thead>
       <tr>
        <th> Nom de ville </th>
       </tr>
      </thead>
      <tbody> 
        <?php foreach ($tableau2 as $key => $value) {
            ?>
            <tr>
            <td><?php echo $value; ?></td>
            </tr>
        <?php } ?>
      </tbody>
    </table>
    //
    <table>
       <thead>
       <?php foreach ($listePersonnes as $key => $value) { ?>
           <tr> 
             <th><?php echo $key; ?></th>
           </tr>
       <?php } ?>
       </thead>
         <tbody>
         <?php foreach ($listePersonnes as $key => $value) { ?>
          <tr>
            <td><?= $value["prenom"]; ?></td>
          </tr>
          <?php } ?>
       </tbody>
    </table>
</body>
</html>



