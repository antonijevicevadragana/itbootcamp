<?php
require_once "trougao.php";
require_once "kvadrat.php";
require_once "pravougaonik.php";

$t1=new Trougao(7,6,8);
echo $t1->obimTrougla();
echo "<br>";
echo $t1->povrsinaTrougla();


echo "<hr>";
$k1=new Kvadrat(4);
echo $k1->obimKvadrata();
echo "<br>";
$p1=new Pravougaonik(2,3);
echo $p1->obimPravougaonika();



?>