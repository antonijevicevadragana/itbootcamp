<?php

require_once "krug.php";
echo "<p>Broj krugova do sada je ". Krug::getBrojKrugova() ."</p>";

$k1=new Krug(10); //$k1->r=10;
//$k1->pi=3.14159; //posto je public moze da se desfinise
//$k1->setPi(3.14159);

$k2=new Krug(3);

echo $k1->obimKruga();
echo "<hr>";
echo $k1->povrsinaKruga();
echo "<hr><hr><hr>";
//novi krug
$c =new Krug(2);
$c->setPi(3.14159);
echo $c->obimKruga();
echo "<hr>";
echo $c->povrsinaKruga();

Krug::setPi(3.14159);
echo "<hr><hr><hr>";

$d=new Krug(2.8);
Krug::setBrojDecimala(4);  //setovali smo broj decimala na 4
echo "<br>";
echo $d->obimKruga();
echo "<br>";
echo $d->povrsinaKruga();
echo "<hr><hr><hr>";
echo "<p>Broj krugova do sada je ". Krug::getBrojKrugova() ."</p>"; //da je public bilo bi Krug::$brojKrugova;

?>