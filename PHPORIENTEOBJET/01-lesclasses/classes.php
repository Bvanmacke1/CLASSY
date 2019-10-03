<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ClassePDO</title>
</head>

<body>
    <h1>Ma première Classes PHP</h1>
    <?php 
    class MaClasse{ 
        public $nom = "LaGrandeClasse"; 
    } 
    $a = new MaClasse(); 
    echo "l'attribut nom de MaClasse vaut : "; 
    echo $a->nom;
    $a->nom = "Jean"; 
    echo "<br>l'attribut nom de MaClasse vaut : ";
     echo $a->nom; 
    ?>
    <h1>Ma deuxième classe</h1>

    <?php class Client { 
        private $nom = 'Dupont'; 
        public function getNom(){ 
            return $this->nom; } 
            public function setNom($x){
                 $this->nom = $x; } 
                }
                 $b = new Client(); 
                 echo "Nom Client: ". $b->getNom(); 
                 $b->setNom("Jean");
                 echo "<br>Nom Client: ". $b->getNom(); 
                 ?>

                 <h1> Ma troisieme classe</h1>
                 <?php
// création d'une classe Client2

  class Client2 {
      public static $count = 0;
      public const TVA = 19.5;
      private $nom;

      public function getNom(){ 
        return $this->nom;
     } 
     public function setNom($x){
        $this->nom = $x; 
    } 
    public static function setcount ($x){
        self::$count = $x;

    }
    public static function getCount (){
        return self::$count;
    }

  }
// création objet

$c = new Client2();

$c->setNom("Toto");
$c->setcount(1);
echo "Nom client : ". $c->getNom();
echo " nbr de Clients2 : " . $c->getCount();

$d = new Client2();
$d -> setNom("Jean");
$d->setcount(2);

$e = new Client2();
$e -> setNom("Pierre");
$e->setcount(3);

echo "<br>Nom client : ". $d->getNom();
echo " nbr de Clients2 : " . $d->getCount();
echo "<br>Nom client : ". $e->getNom();
echo " nbr de Clients2 : " . $e->getCount();
echo"<br> nbr de Clients2 final : " . Client2::$count;
echo "<br> TVA : " . Client2::TVA;


?>

<h1> Ma quatrieme classe</h1>

<?php
class Client4 {
    private $nom;
    private $prenom;
    private $num;

    public function __construct ( $id, $n, $p ){
     echo "(Nouvelle instance de Client4)";
     $this->num = $id;
     $this->nom = $n;
     $this->prenom =$p;
    }

    public function __set($name, $value){
        echo " *set effectué *";
        $this->$name= $value;
    }
    public function __get($name){
        echo " *get effectué *";
        return $this->$name;

    }
   
    public function __destruct(){
        echo " * detruit * ";
    }
}
$c = new Client4(555, "VanM", "Bruno");
    echo " <br>Client Num : ". $c->num;
    echo "<br> Nom : ". $c->nom . " Prénom : " . $c->prenom;
    echo "<br>";

    $c->nom ="Tutu";
    $c->prenom="Bruno";

    echo "<br> Nom : ". $c->nom;
// destruction
    echo "<br>";

    unset ($c);
    echo "<br> Nom : ". $c->nom;


?>

</body>

</html>