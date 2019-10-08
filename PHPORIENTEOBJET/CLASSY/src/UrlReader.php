<?php

class UrlReader
{

    public function parse(): int
    {
        
        // découpe de l'url sur les "/" trim pour les / du milieu explode pour ceux à l'exterieur
        $uriParts = explode('/', trim($_SERVER['REQUEST_URI'],'/'));

        // passage de paramètre : apple de la fonction match
        $this->match($uriParts);
         
        if ($this->match($uriParts)) {
            return intval($uriParts[1]);
        }

            // pas de format d'url trouvé
        throw new Exception('URL non reconnue');
    }

       private function match(array $parts)
   {
    // url de la forme 'annonce/<numéro>" ?

         return count($parts) === 2
         && $parts[0] === 'annonce'
         && is_numeric($parts[1]);
   }

}