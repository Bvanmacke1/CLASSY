<?php
// DataBaseConne .php

class DatabaseConnexion {
    public function connect(){
        $this->pdo = new PDO ("mysql:host=localhost;dbname=classy", 'dawan', 'dawan', array(PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
    }
   /* public $id;
    public $login;
    public $nom;
    public $email;

    public $pdo;

    public function __construct(){
        //  créer le lien avec la DB et initialiser $pdo
        $this->pdo = new PDO ("mysql:host=localhost;dbname=classy", 'dawan', 'dawan', array(PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
    }
    public function Lire(){
        // requete pour l'utilisateur id = $this->id
        $sql="SELECT * FROM utilisateur where id=:id";
        $stmt = $this->pdo->prepare($sql);

        $id = $this->id;
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
// $stmt

 $row = $stmt->fetch();
 $this->login = $row['login'];
 $this->nom = $row['nom'];
 $this->email = $row['email'];*/


    
}