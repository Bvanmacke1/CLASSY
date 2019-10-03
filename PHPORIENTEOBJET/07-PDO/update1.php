<?php
// update.php

// formulaire Login, nom, email methode (post) 
// INSERT INTO avec PDO 
$ok = true;

try {
    $pdo = new PDO ("mysql:host=localhost;dbname=poo", 'dawan', 'dawan', array(PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
}
catch(PDOException $e){
    $ok = false;
    echo "!! Connextion error ". $e->getMessage();
 }
 if(isset($_POST['login'])){
if ($ok){
 // preparer la requete

 $sql = "UPDATE utilisateur SET (login=:login, nom=:nom, email=:email) WHERE id=:id";
 
 $login = $_POST['login'];
 $nom = $_POST['nom'];
 $email = $_POST['email'];
 $id = $_GET['id'];

 $stmt = $pdo->prepare($sql);

 $stmt->bindParam(':login', $login, PDO::PARAM_STR);
 $stmt->bindParam(':nom', $nom, PDO::PARAM_STR);
 $stmt->bindParam(':email', $email, PDO::PARAM_STR);
 $stmt->bindParam(':id', $id, PDO::PARAM_INT);

 // $res est un boolean
 $res = $stmt->execute();
   }
}

$sql="SELECT * FROM utilisateur where id=:id";
 $stmt = $pdo->prepare($sql);

 $id = $_GET['id'];
 $stmt->bindParam(':id', $id, PDO::PARAM_INT);
 $stmt->execute();
// $stmt

 $row = $stmt->fetch();
  
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
<h2>Formulaire avec mMdification PDO</h2>
    <form action="update.php?id=<?php echo $_GET['id'] ?>" method="post">
<div>
    <label for="login">login</label>
    <input type="login" name="login" id="login" placeholder="votre login" value='<?php echo $row['login']; ?>'>
</div>
<div>
    <label for="nom">nom</label>
    <input type="nom" name="nom" id="nom" placeholder="votre nom" value ='<?php echo $row['login']; ?>'><br>
</div>
<div>
    <label for="email">email</label>
    <input type="email" name="email" id="email" placeholder="votre email" value ='<?php echo $row['login']; ?>'><br>
</div>


    <button type="submit" class="btn btn-primary">Modifier</button>
</form>

<?php
if(isset($res)){
      if($res){ echo "modification effectuée avec succès";}
      else {echo "Problème de modification";}
}

 ?> 
</body>
</html>
