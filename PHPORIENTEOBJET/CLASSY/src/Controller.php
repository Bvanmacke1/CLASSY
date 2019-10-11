<?php


namespace App;


use App\database\AnnonceLoader;
use App\database\DataBaseConnexion;
use App\html\Annonce as AnnonceHtml;


class Controller
{

    private $connection;
    /**
     * @var AnnonceLoader
     */
    private $loader;
    private $annonceHtml;

    public function __construct(DataBaseConnexion $connection)

    {
           $this->connection = $connection;
           $this->loader = new AnnonceLoader($connection);
           $this->annonceHtml = new AnnonceHtml();
    }

    public function index()
    {
        $annonces = $this->loader->loadAll();

               return new Response($this->annonceHtml->loadTemplate(
                   '/templates/index.phtml', [
                   'annonces' => $annonces,
               ]
               ));

    }

    public function show(int $id): Response
    {
        $annonce = $this->loader->load($id);
                return new Response($this->annonceHtml->loadTemplate(
                '/templates/annonce.phtml', [
                'annonce' => $annonce,
        ]
    ));

    }
    public function indexRest()
    {
        $annonceArray = $this->loader->loadRest();

        return new Response(json_encode($annonceArray), 200, 'application/json');

    }
}