<?php
require_once "kredit.php";
require_once "autoKredit.php";
require_once "stmbeniKredit.php";

$s1=new SamofinansirajuciStudent("Mka", 180, 7.5, 40);
$s2= new SamofinansirajuciStudent("Mla", 180, 7, 50);
$b1= new BudzetskiStudent("Jana",240, 6.3 );

$studenti = [$s1, $s2, $b1];

foreach ($studenti as $s) {
    $s->ispis();
}




?>