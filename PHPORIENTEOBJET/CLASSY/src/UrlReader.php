<?php

class UrlReader
{

    public function parse(): int
    {
        
        // découpe de l'url sur les "/" trim pour les / du milieu explode pour ceux à l'exterieur
        $uriParts = explode('/', trim($_SERVER['REQUEST_URI'],'/'));

        // passage de paramètre : appel de la fonction match
                 
        if ($this->match($uriParts)) {
            return intval($uriParts[1]);
        }
            // pas de format d'url trouvé
        throw new Exception('URL non reconnue');
    }
       private function match(array $parts): bool
   {
    // url de la forme 'annonce/<numéro>" ?

         return count($parts) === 2
         && $parts[0] === 'annonce'
         && is_numeric($parts[1]);
   }

}