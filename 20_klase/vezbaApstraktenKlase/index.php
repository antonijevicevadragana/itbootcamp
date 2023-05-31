<?php
require_once "kredit.php";
require_once "autoKredit.php";
require_once "stmbeniKredit.php";

$auto=new AutoKredit("auto Kredit", 12000, 2.5, 10, 1.3);
$stan= new StambeniKredit("stambeni Kredit", 35000, 2.8, 25);

$krediti = [$auto, $stan];

foreach ($krediti as $kredit) {
    $kredit->ispis1();
}




?>