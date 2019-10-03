<?php
// Chaise.php
namespace materiel;

/*require 'Pliable.php';
require 'Couleur.php';*/

class Chaise implements Pliable {

    use Couleur;
    public $matiere = "bois";

    public function plier(){
        echo "<br> Chaise en ". $this->matiere . " Pliée";

    }
    public function deplier(){
        echo "<br> Chaise depliee ";

    }
}