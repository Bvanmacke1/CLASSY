<?php
namespace App;
use App\Exception\NotFoundException;

class UrlReader
{

    public function parse(): PageConfig
    {
        
        // découpe de l'url sur les "/" trim pour les / du milieu explode pour ceux à l'exterieur
        $uriParts = explode('/', trim($_SERVER['REQUEST_URI'],'/'));

        // passage de paramètre : appel de la fonction match
        return $this->match($uriParts);

    }
       private function match(array $parts): PageConfig
   {
    // url de la forme 'annonce" ?
         if (count ($parts)=== 1
            && $parts[0] === 'annonce'
         ){
             return new PageConfig([
                 'method' => 'index',
                 'args' => [],
             ]);

         }
       // url de la forme 'annonce/<numéro>" ?
       if (count($parts) === 2
           && $parts[0] === 'annonce'
           && is_numeric($parts[1])
       ){
           return new PageConfig([
               'method' => 'show',
               'args' => ['id' => intval($parts[1])],
                ]);
       }
       // pas de format trouve

       throw new NotFoundException('URL non reconnue');
   }

}