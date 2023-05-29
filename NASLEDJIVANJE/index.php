<?php
require_once "automobil.php";
 //ovako kad je sve bilo public
// $v= new Vozilo();
// //$v->boja="bela";
// //$v->tip="BMW";

// //echo "<p>$v->boja, $v->tip</p>";
// $v->voziVozilo();
// //$v->voziAutomobil(); ovo nije metoda vozila, vec samo automobila
// //osnovna kalsa nema polja i metode iz izvedenih klasa

// $a = new Automobil();
// //$a->boja = "zuta";
// //$a->tip="peugeout";

// //echo "<p>$a->boja, $a->tip</p>";
// $a->voziVozilo(); //izvedena klasa je nasledila polja i metode osnovne klase
// $a->voziAutomobil();


$v= new Vozilo("bela", "BMW");
$v->voziVozilo();

$a = new Automobil("zuta","peugeout");
//$a->boja='plava'; protected polje
$a->voziVozilo();
$a->voziAutomobil();

?>