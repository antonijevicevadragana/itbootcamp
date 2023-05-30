<?php
require_once "trougao_metod.php";
require_once "kvadrat.php";
require_once "pravougaonik.php";
require_once "romb.php";

// $t1=new Trougao(7,6,8);
// echo $t1->obimTrougla();
// echo "<br>";
// echo $t1->povrsinaTrougla();


// echo "<hr>";
// $k1=new Kvadrat(4);
// echo $k1->obimKvadrata();
// echo "<br>";
// $p1=new Pravougaonik(2,3);
// echo $p1->obimPravougaonika();
//

$t=new Trougao(3, 4, 5);
//echo "<p>" . $t->obimTrougla() . ", " .$t->povrsinaTrougla() . "</p>";
$p=new Pravougaonik(5, 9);
//echo "<p>" . $p->obimPravougaonika() . ", " .$p->povrsinaPravougaonika() . "</p>";
$k=new Kvadrat(3);
//echo "<p>" . $k->obimKvadrata() . ", " .$k->povrsinaKvadrata() . "</p>";
$r=new Romb(6, 15);

$oblici=[$t, $p, $k, $r];

foreach ($oblici as $oblik) {
    //echo "<p>" . $oblik->obim() . ", " .$oblik->povrsina() . "</p>"; 
    $oblik->ispis();
}



?>