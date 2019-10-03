<?php
//SupportDeCours.php

namespace materiel;

abstract class SupportDeCours{
    protected $auteur;
    protected $titre;

    abstract function imprimer();
    
    public function setTitre ($t){
        $this->titre = $t;
    }
}


