<?php
class CompteB {
    private $numero;
    private $solde;

    public function __construct ($num){
        
        $this->numero = $num;
        $this->solde= 0;
        
}
    public function getNumero(){
          return $this->numero;
    }
    public function setNumero ($num){
        $this->numero = $num;
        return $this;
           
        }

        public function getSolde(){
            return $this->solde;
        }

        public function setSolde($x){
            $this->solde = $x;
            return $this;
        }
  // methode depot

  public function depot($x){
      $this->solde = $this->solde + $x;
      return $this;
  }

public function retrait($x){
    $this->solde = $this->solde - $x;
    if ($this->solde <0){
        echo "solde negatif ! ";
    }
     return $this; 
  }
      
}
?>