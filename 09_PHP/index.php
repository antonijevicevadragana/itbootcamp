<?php 
$a ="Zdravo svete";
echo $a; // ovo prikazuje string

$a=28;
echo $a;
echo "<br>";
$a = 28+2;
echo $a;
echo "<br>";
$a = 2.5+8.2;
echo $a;
echo "<br>";
$a=100;
echo $a;
echo "<br>";
$b=$a-20;
echo $b;
var_dump($b);
echo "<br>";
echo "Vrednost promenjive b je $b";
//PRVI zadatak
$h=20;
$m=35;

$rez = $h*60 +$m;
echo "<br>";
echo "Rezultat zadatka je " . $rez . " minuta.";
echo "<hr>";
// Drugi zadatak
//date_default_timezone_set('Europe/Belgrade');
$sati =date("G");
$minuti = date("i");
echo "<br>";
echo 'Tenutno veme je ' . $sati  . ' i ' .$minuti . ' minuta';
echo "<br>";
$rez = $sati * 60 + $minuti;
echo "Rezultat zadatka dva je" . $rez;
echo "<br>";
echo "Rezultat zadatka dva je" . number_format($rez, 0, ",", "."); // 0 znaci bez decimala, pa onda da , menjamo .

?>

