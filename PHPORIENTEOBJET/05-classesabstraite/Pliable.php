<?php
// Pliable.php

namespace materiel;

interface Pliable{

    // public $x = 1;  // interdit pour les interfaces
    // mais on definir des constantes
    const PIED = 4;
    
    // méthode
    public function plier();

    public function deplier();

}