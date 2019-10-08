<?php
require_once SRC_DIR.'/Annonce.php'; 
require_once SRC_DIR.'/DataBaseConnexion.php';

class AnnonceLoader
{
    public function __construct(DataBaseConnexion $connexion) 
    {
        // connexion à BD
         $connexion->connect();
         $this->connexion = $connexion->getPdo();
    }
    public function load(int $id): Annonce
    {
        // preparation de la requete avec un parametre :id
        $statement = $this->connexion->prepare(
            "SELECT id, title, content, publishedAt FROM Annonce where id=:id"
        );
        $statement->bindValue(':id', $id, PDO::PARAM_INT);
        $statement->execute();

        $annonce = $statement->fetchObject(Annonce::class); 
        var_dump($annonce);
        return $annonce;
    }
}