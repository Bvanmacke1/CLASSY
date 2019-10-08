<?php

require_once SRC_DIR.'/AnnonceLoader.php';
require_once SRC_DIR.'/ClassResponse.php';
require_once SRC_DIR.'/UrlReader.php';

class Application{

    public function run(): Response
    {
     // regarder dans l'url
    $reader = new urlReader();
    
       try{
         $id = $reader->parse();
         $loader = new AnnonceLoader();
         $annonce = $loader->load($id);
         $response = new Response('coucou ca marche');
     
         }
   catch(Exception $e){

    
    $response=new Response ('cette page n\'existe pas', 404);
    // tout est terminé j'arrete : die
    //die;
    }
        return $response;
    }
}
