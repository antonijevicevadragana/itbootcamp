<?php
require_once "vozilo.php";
require_once "automobil.php";

$v = new Vozilo("a", "b", "c");

$v->ispis();

//echo $v->privatnoPolje; GRESKA van klase ne mozemo pristupiti privatnim poljima i metodama
//echo $v->zasticenoPolje; Greska van klase i ne mozemo pristupiti zasticenim poljima i metodama
echo $v->javnoPolje; //ovo je ok, posto je public

$a = new Automobil("d", "e", "f", 5);
$a->ispis();
$a->ispisAuto();

?>