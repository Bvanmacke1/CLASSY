<?php

require_once 'CompteB.php';

class CompteEpargne extends CompteB {
    private $tauxInteret;
    
    public function __construct($tx,$num,$s){
        parent::__construct($num);
        $this->tauxInteret = $tx;
        $this->setSolde($s);
    }
    
    public function getTauxInteret(){
        return $this->tauxInteret;
    }
    public function setTauxInteret($tx){
        $this->tauxInteret = $tx;
        return $this;
    }
    
    public function depot($x){
        $this->setSolde($this->getSolde() + $x + 5);
        return $this;
    }
}
  

