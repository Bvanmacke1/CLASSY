<?php
//delete.php

//supprimer un utilisateur 
//http://localhost/poo/J3/delete.php?id=2
//$_GET['id']
if(isset($_GET['id'])){
$msg = "Suppression effectuée";

//connexion
    $ok = true;
    try{            
        $pdo = new PDO("mysql:host=localhost;dbname=poo", 'dawan', 'dawan', 
        array(PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION ));
    }
    catch(PDOException $e){
        $ok = false;
        $msg = "Connection Erreur";
    }  

    if($ok){
    //preparer la requete
        $sql = "DELETE FROM utilisateur WHERE id=:id";

        $stmt = $pdo->prepare($sql);
        $id = $_GET['id'];
        $stmt->bindParam(':id',$id,PDO::PARAM_INT);

        $res = $stmt->execute();
        //nombre de ligne affectée ou supprimée
        $nb = $stmt->rowCount(); 
        
        if(!$res){
            $msg =" Problème Delete ";
        }
        elseif($nb!=1){
            $msg = "Utilisateur non existant " . $nb;
        }
    }
}
else { $msg = "Pas d'id donné"; }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Suppresion</title>
</head>
<body>
    <?php echo $msg;  ?>
    <hr>
    <a href="liste.php">Liste</a>
</body>
</html>