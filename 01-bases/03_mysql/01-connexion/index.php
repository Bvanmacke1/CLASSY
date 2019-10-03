<?php

// connexion.php contient la fonction connectDB 
require_once 'functions/connexion.php';

// connexion à la DB

$connect = connectDB();

// requete SQL
$sql = "INSERT INTO users (user_name, user_password) VALUES ('qsdsqqsdsdq','qsdqsd')";

// envoi de la requete


//if (mysqli_query($connect, $sql)) {
  //  echo 'Requete bien envoyée';
//} else {
  //  echo 'Requete non envoyée';
//}
$sql2 = "INSERT INTO users (user_name, user_password, user_age) VALUES ('Bruno','unknown', 25)";
//mysqli_query($connect, $sql2);

//mysqli_close($connect);

$sql_jeux = "SELECT nom, possesseur FROM jeux_video WHERE console LIKE '%NES%' ";
$result = mysqli_query($connect, $sql_jeux);
//var_dump($result);
//echo "fetch row tableau indexé<br>";
//var_dump(mysqli_fetch_row($result));
//while ($row= mysqli_fetch_row($result)){
    //var_dump($row);
  //  echo "nom: $row[0], possesseur $row[1]<br>";


//}

//$result = mysqli_query($connect, $sql_jeux);
//echo "fetch row tableau associatif<br>";
//while($row = mysqli_fetch_assoc($result) ){
    //
    //var_dump($row);


//echo 'nom: ' . $row["nom"] . ', possesseur' . $row["possesseur"] .'<br>';
//}

echo 'Fetch_array -> tableau indexe<br>';
while ($row = mysqli_fetch_array($result)){
    //var_dump($row);
    echo 'nom: ' . $row["nom"] . ', possesseur: ' . $row["possesseur"] .'<br>';
}

mysqli_close($connect);


