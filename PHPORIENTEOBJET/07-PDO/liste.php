<?php
// liste.php

// connexion

$ok=true;
try {
    $pdo = new PDO ("mysql:host=localhost;dbname=poo", 'dawan', 'dawan', array(PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
}
catch(PDOException $e){
    $ok = false;
    echo "!! Connextion error ". $e->getMessage();
}
// requete

if($ok){

$sql="SELECT * FROM utilisateur ";
  $stmt = $pdo->prepare($sql);
  $res = $stmt->execute();
  
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste utilisateur</title>
</head>
<body>
    <h1> Liste Utilisateurs</h1>
    <?php if ( $ok && $stmt->rowCount( )> 0 ) { ?>

    <table>
        <tr>
            <th>Id</th>
            <th>Login</th>
            <th>Nom</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
<?php
// afficher liste
while( $row = $stmt->fetch()){
    extract($row);

    echo "<tr>";
    echo "<td>$id</td>";
    echo "<td>$login</td>";
    echo "<td>$nom</td>"; 
    echo "<td>$email</td>";
    echo "<td> 
    <a href ='voir.php?id=$id'>Voir</a>
    <a href ='update.php?id=$id'>Modifier</a>
    <a href ='delete.php?id=$id'>Supprimer</a>
    </td>";
    echo "</tr>";
}

?>

    </table>
<?php }
   else echo "pas d utilisateur" ?>
</body>
</html>