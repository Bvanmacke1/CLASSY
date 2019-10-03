<?php
// $_GET[id]
$ok = true;

try {
    $pdo = new PDO ("mysql:host=localhost;dbname=poo", 'dawan', 'dawan', array(PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
}
catch(PDOException $e){
    $ok = false;

}

  if($ok){

 $sql="SELECT * FROM utilisateur where id=:id";
 $stmt = $pdo->prepare($sql);

 $id = $_GET['id'];
 $stmt->bindParam(':id', $id, PDO::PARAM_INT);
 $stmt->execute();
// $stmt

 $row = $stmt->fetch();
  
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Utilisateur</title>
</head>
<body>
    Id : <?php echo $row['id']; ?>
    <br>
    Login : <?php echo $row['login']; ?>
    <br>
    Nom :  <?php echo $row['nom']; ?>
    <br>
    Email :  <?php echo $row['email']; ?>
    <hr>
    <a href="liste.php">Liste</a>
</body>
</html>