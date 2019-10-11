<?php
namespace App\database;

use App\Exception\NotFoundException;
use App\Annonce;


class AnnonceLoader
{
    public function __construct(DataBaseConnexion $connection)
    {
        // connexion à BD
         
         $this->connection = $connection->getPdo();
    }
    public function load(int $id): Annonce
    {
        // preparation de la requete avec un parametre :id
        $statement = $this->connection->prepare(
            "SELECT id, title, content, publishedAt FROM Annonce where id=:id"
        );
        $statement->bindValue(':id', $id, \PDO::PARAM_INT);
        $statement->execute();

        $annonce = $statement->fetchObject(Annonce::class);

        if (!$annonce) {
            throw new NotFoundException ('Cette annonce n\'existe pas');
        }

        return $annonce;
    }
        public function loadAll(): array
        {
            // preparation de la requete avec un parametre :id
            $statement = $this->connection->prepare(
                "SELECT id, title, content, publishedAt FROM Annonce "
            );

            $statement->execute();

            $annonces = $statement->fetchAll(\PDO::FETCH_CLASS, Annonce::class);
            return $annonces;
        }

        public function loadRest(): array
        {
            // preparation de la requete avec un parametre :id
            $statement = $this->connection->prepare(
                "SELECT id, title, CONCAT('/annonce/', id) AS url FROM Annonce"
            );

            $statement->execute();

            $annonces = $statement->fetchAll(\PDO::FETCH_ASSOC);

            return $annonces;
        }
    }