<?php
// Couleur.php

namespace materiel;

trait Couleur{

    public $couleur;

    public function peindre($c){
        $this->couleur = $c;

    }
}