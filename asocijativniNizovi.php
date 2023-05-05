<?php
// $godine=array(
//     "Pera" => 28,
//     "Lazar" => 26,
//     "Violeta" => 35
// );

// echo $godine["Pera"];
// echo $godine["Violeta"];

//naknadno dodavanje u niz 
$godine["x"]=48;
/// moze i ovako da se dodaje u niz
$godine=[];
$godine["Pera"]=28;
$godine["Lazar"]=26;
$godine["Violeta"]=35;
$godine["Marko"]=35;

var_dump($godine);

//za asocijativne nizove se koriste foreach petlja
echo"<hr>";
foreach ($godine as $i => $g) {
    echo "<p>Osoba $i ima $g godina.</p>";
}

foreach ($godine as $g) {
    echo"<p> Osoba ima $g godina</p>";
}

//moze foreach i za indexne nizove
$brojevi = [5, -6, 3.3, 17.8, 0];
$brojevi[100]=50;
$brojevi[2]=4;

foreach ($brojevi as $broj) {
   echo"$broj &nbsp";
}

foreach ($brojevi as $index => $broj) {
  echo"<p>Element sa indeksom $index ima vrednost $broj</p>";
}


//zadatak 1 Ispisati sve automobile, kao i njihova godišta.

$automobili =["Audi A3"=>2004,
"Opel Corsa"=>2018,
"Opel Astra"=> 2016,
"Pegeot"=>2004,
"Ford Focus"=>2008
];

foreach ($automobili as $marka => $god) {
    echo"<br>Automobil $marka proizveden $god<br>";
}
//Ispisati automobile koji su stariji od 10 godina.

$TrenutnaGodina=date("Y");

foreach ($automobili as $marka => $god) {
    if (($TrenutnaGodina-$god)>10) {
        echo "<p>Automobili $marka je stariji od 10 godina</p>";
    }
}

//Ispisati automobile čija Marka sarži string “Opel”, a proizvedena su posle 2000. godine.
$automobili =["Audi A3"=>2004,
"Opel Corsa"=>1998,
"Opel Astra"=> 2016,
"Pegeot"=>2004,
"Ford Focus"=>2008
];


foreach ($automobili as $marka => $god) {
    
    if (strpos($marka, "Opel") !== false && $god >=2000) {
        echo"<p>Automobil $marka je proizveden posle 2000 godine</p>";
    }

}

//2 Ispisati sve osobe sa njihovim visinama.
$Osoba = [
"Perica" =>1.70,
"Ljubica" => 1.63,
"Milan" => 1.80,
"Radica"=>1.60
];

foreach ($Osoba as $ime => $visina) {
   echo "<p>$ime je visok/a $visina.</p>";
}

// 3 Ispisati sve natprosečno visoke osobe.

$sumaVisine=0;
$brojac=0;
foreach ($Osoba as $ime=> $visina) {         //moze i foreach bez imena, samo visina
    $sumaVisine+=$visina;
    $brojac++;                               //umesto brojac mozemo da koristimo count($Osoba);
    
}
//echo "$sumaVisine"; 
$SrednjaVisina= $sumaVisine/$brojac;
//echo"$SrednjaVisina"; //1.68

foreach ($Osoba as $ime => $visina) {
    if ($visina > $SrednjaVisina) {
        echo "<p>$ime je visine iznad proseka ovog niza</p>";
    }
}

// Ispisati sve osobe koje imaju maksimalnu visinu.

$Osoba = [
    "Perica" =>1.70,
    "Ljubica" => 1.63,
    "Milan" => 1.80,
    "Radica"=>1.60
    ];

    $max = 0; 
    //$max=PHP_INT_MIN; ovo moze umesto 0
    foreach ($Osoba as $visina) {

       if ($visina > $max) {
        $max=$visina;
       }
    }

    foreach ($Osoba as $ime => $visina) {
        if ($visina == $max) {
            echo "<p>$ime imaju najvecu visinu u nizu, a to je $visina</p>";
        }
    }

    //Ispisati sve osobe sa visinom ispod proseka, a čije ime počinje na slovo 'V'.
    $Osoba = [
        "Perica" =>1.70,
        "Ljubica" => 1.63,
        "Milan" => 1.80,
        "Radica"=>1.60,
        "Voja"=>1.53
        ];
        $sumaVisine=0;
        $brojac=0;
        foreach ($Osoba as $ime=> $visina) {
            $sumaVisine+=$visina;
            $brojac++;
            
        }
        //echo "$sumaVisine"; 
        $SrednjaVisina= $sumaVisine/$brojac;
        //echo"$SrednjaVisina"; //1.68

   foreach ($Osoba as $ime => $visina) {
    if (strpos($ime, 'V') === 0 && $visina < $SrednjaVisina) {            //moze i $ime[0]=='V'
        echo "<p>$ime su ispod proseka i cije ime pocinje na V</p>";
    }
   }
?>