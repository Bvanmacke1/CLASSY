<?php
// CollectionCompteB.php
require 'CompteB.php';

class CollectionCompteB implements Iterator{
    private $liste = array();
    private $position = 0;  

    public function current() { return $this->liste[$this->position];}
    public function rewind() { $this->position = 0;}
    public function key() { return $this->position;}
    public function next() { $this->position++;}
    public function valid() { return isset($this->liste[$this->position]);}
     
    public function add($x){
        $this->liste[] = $x;
    }
  }

  $a = new CompteB("Fr_1"); $a->setSolde (1000);
  $b = new CompteB("Fr_2"); $b->setSolde (1001);
  $c = new CompteB("Fr_3"); $c->setSolde (1002);

  $d = new CollectionCompteB();
  $d->add($a);
  $d->add($b);
  $d->add($c);

  ?>

  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Collection</title>
  </head>
  <body>
       <?php
       foreach ($d as $compte) {

           echo "<br> Compte " . $compte->getNumero();
           echo " solde : " . $compte->getSolde();
       }

?>

  </body>
  </html>
  
