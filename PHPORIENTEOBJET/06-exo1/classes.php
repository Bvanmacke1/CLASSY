<?php
// class personnage - nom vie attaque et fonction attaque
class Personnage{
    protected $nom;
    protected $vie;
    protected $attaque;
    protected $defense;

    public function __construct($nom, $vie, $attaque, $defense){
        $this->nom = $nom;
        $this->vie = $vie;
        $this->attaque = $attaque;
        $this->defense = $defense; 
    }

    public function __toString(){
           return "[" .$this->nom . " PV : " . $this->vie ." Att : " . $this->attaque . " Def : " . $this->defense. "]";
    }

    public function attaque($adversaire){
           
           echo "<br> Attaque <br>";
          // cette fonction sera redefinie dans la fonction Guerrier
           
    } 
    // soit les 2 set et get vie
    public function setVie($vie){
        $this->vie = $vie;
    }

    public function getVie(){
        return $this->vie;
    }
    // ou 1 fonction diminue
    public function diminueVie($valeur){
        $this->vie = $this->vie - $valeur;
    }

    
}
// class Arme nom attaque
class Arme{
    public $nom;
    public $attaque;

    public function __construct($nom, $attaque){
        $this->nom = $nom;
        $this->attaque = $attaque;
    }
}
// class Armure nom defense
class Armure{
    public $nom;
    public $defense;

    public function __construct($nom, $defense){
        $this->nom = $nom;
        $this->defense=$d;
    }
}
// class magicien 
class Magicien extends Personnage{

    private $arme;
    private $armure;

    public function __construct($nom, $vie, $attaque, $defense){
        parent::__construct($nom, $vie, $attaque, $defense);

        $this->arme = new Arme('baton', 10);
        $this->armure = new Armure('Cape invisibilité', 50);

    }
    public function getAttaque(){
        return $this->attaque; + $this->arme->attaque;
    }
    public function getDefense(){
        return $this->defense; + $this->armure->defense;
    }

    
}



// création de merlin
// $merlin = new Magicien ("merlin", 50 ,12 ,14)
class Guerrier extends Personnage{

    private $arme;
    private $armure;

    public function __construct($nom, $vie, $attaque, $defense){
        parent::__construct($nom, $vie, $attaque, $defense);

        $this->arme = new Arme('epée', 10);
        $this->armure = new Armure('cote de maille', 15);

    }
    public function getAttaque(){
        return $this->attaque + $this->arme->attaque;
    }
    public function getDefense(){
        return $this->defense + $this->armure->defense;
    }
    public function attaque($adversaire){
        //$v = $adversaire->getVie()- $this->getAttaque();
        //$adversaire->setVie($v);
        // ou
        $pvperdu = max(0, $this->getAttaque() - $adversaire->getDefense());
                    
         $adversaire->diminueVie($pvperdu);
    } 
    
}

$merlin = new Magicien("Merlin", 50, 12, 14);
$hercule = new Guerrier("Hercule", 150, 20, 15);

echo $merlin . " VS " . $hercule;

$hercule->attaque($merlin);
echo "<br> Hercule attaque Merlin <br>";
echo $merlin . " VS " . $hercule;


$hercule->attaque($merlin);
echo "<br> Nouvel assaut 1 Hercule attaque Merlin <br>";
echo $merlin . " VS " . $hercule;

$hercule->attaque($merlin);
echo "<br> Nouvel assaut 2 Hercule attaque Merlin <br>";
echo $merlin . " VS " . $hercule;

// verifier si une méthode existe : renvoie un boolean
echo "<br>";
var_dump(method_exists($merlin, "toto"));
echo "<br>";
var_dump(method_exists($merlin, "getDefense"));

if ($merlin instanceof Magicien){
    echo "<br>";
    echo "Merlin est magicien";
}
if ($hercule instanceof Guerrier){
    echo "<br>";
    echo " Hercule est guerrier";
}
if ($hercule instanceof Personnage){
    echo "<br>";
    echo " Hercule = Perso";
}

// manuellement 

$arr = array(1,2,3);
function addition($x,$y,$z){
    return $x+$y+$z;
}
echo "<br>";
echo addition($arr[0],$arr[1],$arr[2]);
// avec la fonction call_user_func_array
echo "<br>";
echo call_user_func_array('addition',$arr);




