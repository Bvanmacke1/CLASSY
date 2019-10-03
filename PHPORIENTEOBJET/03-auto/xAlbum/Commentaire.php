<?php

namespace Album {

    class Commentaire{
    public $texte;

    public function __toString(){
        return "Album : ". $this->texte;

    }
}
}

/* utilisation :

$c = new Commentaire ();
$c->texte = "xxx";
echo $c; //--> "Album : xxx"
*/


