<?php

//require_once "osoba.php"; osoba vec pozvana u zaposelni
require_once "zaposleni.php";

$o = new Osoba("Pera", "Peric", "10.10.1990");

$o->ispis();
echo "<hr>";

//pravimo podklasu zaposleni

$z = new Zaposleni("Mika", "Mikic", "18.10.1990", 90999, "programer");


$z->ispis(); //nasledjena fja iz osobe
echo "<hr>";
$z->ispisZaposleni();


$z1 = new Zaposleni("Pera", "Mikic", "28.10.1990", 80999, "ekonomista");
$z2 = new Zaposleni("Mara", "Maric", "11.11.1989", 50900, "kuvarica");

$zaposleni = [$z, $z1, $z2];

function prosekPlate($niz)
{
    $zbir = 0;
    
    foreach ($niz as $plata) {
       
        $zbir +=  $plata->getPlata();
    }
    return round($zbir/count($niz),2);
   
    
}
$prosek=prosekPlate($zaposleni);
echo $prosek;


// function natprosecnaPlata($niz, $zaposlen) {
//    $max=$niz[0];
//    $prosek=$niz->prosekPlate($niz);

    

//     foreach ($niz as $plata) {
//         if ($prosek > $max) {
            
//         }
        
//     }
// }

function natprosecnaPlata($niz, $zaposlen) {
$prosek=prosekPlate($niz);

    if ($zaposlen->getPlata() > $prosek) {
        return true;
    }
    else {
        false;
    }
}