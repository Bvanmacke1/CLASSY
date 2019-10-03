<?php
$a = 15;
$b = 10;

echo "addition de a + b = " .($a + $b) . "<br>";
echo "soustraction de a - b = " .($a - $b) . "<br>";
echo "multiplication de a * b = " .($a * $b) . "<br>";
echo "division de a / b = " .($a / $b) . "<br>";
echo "modulo de a % 4  = " .($a%4) . "<br>";
echo "exponentielle de **5 " .($a**5) ."<br>";

var_dump($a == $b);
var_dump($a === $b);

$c = 25;
var_dump('supérieur à ' ,$a > $c);
var_dump('inférieur ou égal' , $a <= $c);
var_dump($a !== $b);

// opérateurs logiques
$e = 5;
$f = 10;
$bidule = 25;
echo "<br>";
// ET logique
// comparaison si $e est à 5 ET $f =11
var_dump( $e == 5 && $f == 11);
// OU logique 
echo "<br>";
var_dump( $e == 5 || $f == 11);
echo "<br>";

// les raccourcis
$e += 3;
echo $e;
echo "<br>";
$e *= 3;
echo "<br>";
echo $e;
$e .= 'une super journée';
echo "<br>";
echo $e;


echo "<br>";
//IF ELSEIF ELSE
$e = 5;
$f = 7;
$kikoo = "Hello";

if ($e >= $f) {
echo "$e est supérieur a $f";
}else {
    echo "$e est inférieur a $f";
}
echo "<br>";

if ($e > 6){
    echo "$e est supérieur a 6";

}elseif ($f < 9) {
    echo "$f inférieur à 9";

}else {
    echo $kikoo;
}

echo "<br>";

$prenom = "Gabriel";
switch ($prenom) {
    case 'lori' :
    echo 'hello lori';
    break;
    case 'Gabriel' :
    echo 'hello '.$prenom;
    break;
    default:
    echo 'Bonjour tout le monde';
    break;
    
}
// operation ternaire si condition ? vrai 34 else 56
$y = 23;
$x =($y>10 ? 34 : 56); // $x sera égal à 34
echo "<br>";
// tenaire
$g = 35;
$bidon = ($g > 34) ? $g : 172.2;
echo $bidon;

// avec un if else c'est la mem chose
if ($g > 34) {
    $bidon= $g;
}else {
    $bidon= 172.2;
}
echo "<br>";
echo $bidon;
// la boucle For décrementation
for ($ii=10; $ii >=1 ; $ii--) { 
    echo '<p>Hello, on est sur la boucle n° ' .$ii . '</p>';
}

// la boucle While (tant que) ne pas oublier l'indexation ici $gg++
$gg =7;
while ($gg <=10) {
    echo "Boucle =" .$gg; 
    $gg++;
    echo "<br>";
}
// boucle do while = s'execute au moins une foi
echo "<br>";

$gg = 0;
do {
    echo "kikoo";
    $gg +=4;
} while ($gg <=2);








