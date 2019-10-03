<?php
//insert.php

//formulaire Login, nom, email (POST) 
//INSERT INTO (pdo).


//Connexion DB
$ok = true;
try{            
    $pdo = new PDO("mysql:host=localhost;dbname=poo", 'dawan', 'dawan', 
    array(PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION ));
}
catch(PDOException $e){
    $ok = false;
    echo "!! Connection error: " . $e->getMessage();
}  
 
if(isset($_POST['login'])){
    if($ok){
    //Preparer la requete
    $sql = "UPDATE utilisateur SET login=:login, nom=:nom, email=:email WHERE id=:id";
    $login = $_POST['login'];
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $id = $_GET['id'];
    
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':login', $login, PDO::PARAM_STR);
    $stmt->bindParam(':nom', $nom, PDO::PARAM_STR);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    
    $res = $stmt->execute(); 
    }
    
}

// Récupération données utilisateur
    $sql="SELECT * FROM utilisateur WHERE id=:id";
    $stmt = $pdo->prepare($sql);    
    $id = $_GET['id'];    
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();        

    $row = $stmt->fetch();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Insertion</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
   <h1> Modification </h1>
    <form action="update.php?id=<?php echo $_GET['id'];?>" method="post">
        Login : <input type='text' name="login" value='<?php echo $row['login']; ?>'><br>
        Nom : <input type='text' name="nom" value='<?php echo $row['nom']; ?>'><br>
        Email : <input type='text' name="email" value='<?php echo $row['email']; ?>'><br>
        <input type="submit" value="Modifier">
    </form>
    <?php 
        if (isset($res)){
            if($res){ echo "Modification effectuée !"; }
            else { echo "Problème de modification !"; }
        }
    ?>
    <hr>
    <a href="liste.php">Liste</a>
</body>
</html>