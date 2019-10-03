<?php
// insert.php

// formulaire Login, nom, email methode (post) 
// INSERT INTO avec PDO 
$ok = true;
if(isset($_POST['login'])){
try {
    $pdo = new PDO ("mysql:host=localhost;dbname=poo", 'dawan', 'dawan', array(PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
}
catch(PDOException $e){
    $ok = false;
    echo "!! Connextion error ". $e->getMessage();
 }
if ($ok){
 // preparer la requete

 $sql = "INSERT INTO `utilisateur` VALUES (NULL, :login, :nom, :email)";

 $login = $_POST['login'];
 $nom = $_POST['nom'];
 $email = $_POST['email'];

 $stmt = $pdo->prepare($sql);

 $stmt->bindParam(':login', $login, PDO::PARAM_STR);
 $stmt->bindParam(':nom', $nom, PDO::PARAM_STR);
 $stmt->bindParam(':email', $email, PDO::PARAM_STR);

 // $res est un boolean
 $res = $stmt->execute();
   }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> 
    <title>Insertion</title>
</head>
<body>
<h2>Formulaire avec INSERT Insertion PDO</h2>
    <form action="insert.php" method="post">
<div>
    <label for="login">login</label>
    <input type="login" name="login" id="login" placeholder="votre login">
</div>
<div>
    <label for="nom">nom</label>
    <input type="nom" name="nom" id="nom" placeholder="votre nom">
</div>
<div>
    <label for="email">email</label>
    <input type="email" name="email" id="email" placeholder="votre email">
</div>


    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php
if(isset($res)){
      if($res){ echo "Insertion effectuée avec succès";}
      else {echo "Problème d'insertion";}
}

 ?> 
 
</body>
</html>
