<?php


namespace App;

use App\database\AnnonceLoaderListe;
use App\database\AnnonceLoader;
use App\database\DataBaseConnexion;
use App\html\Annonce as AnnonceHtml;
use App\html\AnnonceListe as AnnonceHtml1;

class Controller
{

    private $connection;

    public function __construct(DataBaseConnexion $connection)

    {
           $this->connection = $connection;
    }

    public function index()
    {

        $loader = new AnnonceLoader($this->connection);
        $annonces = $loader->loadAll();
        //var_dump($annonceListe);
        $annonceHtml = new AnnonceHtml();

       return new Response($annonceHtml->buildAll($annonces));

    }

    public function show(int $id): Response
    {
        $loader = new AnnonceLoader($this->connection);
        $annonce = $loader->load($id);
        $annonceHtml = new AnnonceHtml();
        return new Response($annonceHtml->build($annonce));

    }
}