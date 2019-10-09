<?php

namespace App;

use App\Exception\NotFoundException;
use App\html\Annonce as AnnonceHtml;
use App\database\AnnonceLoader;
use App\database\DataBaseConnexion;



class Application{

    public function run(): Response
    {
         // decoder du json 
        $config = json_decode(file_get_contents(__DIR__.'/../config/database.json'));
        // creation de l'objet de connexionuse App\Exception\NotFoundException;
        $connexion = new DataBaseConnexion(
             $config->dsn,
             $config->username, 
             $config->password
            );

     // regarder dans l'url
         $reader = new UrlReader();
    
       try{

         $id = $reader->parse();
         $loader = new AnnonceLoader($connexion);
         // chargement de l'annonce
         $annonce = $loader->load($id);
         $annonceHtml = new AnnonceHtml();
         // function build pour affic le code html

         $response = new Response($annonceHtml->build($annonce));
          }
         catch(NotFoundException $e)
         {
          $response = new Response ($e->getMessage(), 404);
          // tout est terminé j'arrete : die
          //die;
          }
        return $response;
    }
}
