<?php 

// zadatak 3

$cena = 1400;
$nov = 2000;

$kusur = $nov-$cena; 
echo $kusur;

// zadatak 4
$eur =100;
$kurs_eur =117.5;
$din = $eur * $kurs_eur;
echo "<br>";
echo $din;


// zadatak 5
$din =10000;
$kurs_eur = 117.5;
$eur = $din/$kurs_eur;
echo "<br>";
echo $eur;

//zadatak 6
$eur =100;
$kursEurDin = 117.5;
$kursDolDin=106.7;
$din = $eur *$kursEurDin;
$dol =$din/$kursDolDin;
echo "<hr>";
echo $dol;
//zadatak 10

$cena = 70;
$popust = 20;
$cenaBezPopusta = $cena *100 / (100-$popust);
echo "<hr>";
echo $cenaBezPopusta;

// zadatak 11
//ako bocica ima 3 tableta pije jedan dan, 0 neiskoriscenih
//ako bocica 4-1 dab 1 nesikoriscena
//           5 - 1dan 2 nesikoriscene
$n = 56;
$dan = $n/3;
$k = $n%3;
echo "<hr>";
echo "Broj dana " . $dan;
echo "<br>";
echo "Broj neiskoriscenih tableta " . $k;
echo "<br>";
echo floor($dan);

?>