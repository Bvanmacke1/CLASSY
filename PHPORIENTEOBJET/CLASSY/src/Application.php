<?php

require_once SRC_DIR.'/AnnonceLoader.php';
require_once SRC_DIR.'/ClassResponse.php';
require_once SRC_DIR.'/UrlReader.php';

class Application{

    public function run(): Response
    {
         // decoder du json 
        $config = json_decode(file_get_contents(SRC_DIR.'/../config/database.json'));
        // creation de l'objet de connexion
        $connexion = new DataBaseConnexion(
             $config->dsn,
             $config->username, 
             $config->password
            );

     // regarder dans l'url
    $reader = new urlReader();
    
       try{
         $id = $reader->parse();
         $loader = new AnnonceLoader($connexion);
         // chargement de l'annonce
         $annonce = $loader->load($id);
         $response = new Response('coucou ca marche');
     
         }
         catch(Exception $e)
         {

          $response = new Response ('cette page n\'existe pas', 404);
          // tout est terminé j'arrete : die
          //die;
          }
        return $response;
    }
}
