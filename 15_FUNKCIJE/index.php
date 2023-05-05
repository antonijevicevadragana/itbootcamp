<?php

function mojaFunkcija() {
    echo "<p>Zdravo svete</p>";
}

mojaFunkcija();   //pozivanje funkcije

function mojaFunkcija2($tekst) {
    $b= "nova promenljiva";
    global $c;
    echo "<p>F-ja sa parametrom: $tekst i $b i $c</p>";  
}

mojaFunkcija2("1.nacin");        //parametra je u zagradi
$a="2. nacin";                  //globalna promenljiva


$c="globalni";
mojaFunkcija2($a);
$b="van funkcije";
mojaFunkcija2($a);
///////////////////////////////////////


function IspisImena($ime, $Prezime) {
    echo "<p>Ime i prezime je: $ime $Prezime</p>";

}

IspisImena("Petar", "Petrovic");
$i = "Lazar";
$p="Lazic";
IspisImena($i, $p);

function IspisImena2($ime, $Prezime=null, $godine) {
    echo "<p>Ime je: $ime</p>";
    if ($Prezime) {
        echo "Prezime je: $Prezime ";
    }
    echo "Ima $godine godina";
}

IspisImena2("Mika", null, 58);
IspisImena2("Mika", "Mikic", 58);

function zbir($a, $b) {
    $c=$a+$b;
   // echo"<p>$c</p>";
   return $c;     
}
/** 
 * funkija koja sabira dva broja
 * @param int $a -prvi broj
 * @param int $b - drugi broj
 * @return int $c - zbir brojeva


*/
function zbir1(int $a, int $b) {
    $c=$a+$b;
   // echo"<p>$c</p>";
   return $c;     
}

echo zbir1(5,5);

$pom = zbir(3, 8);
echo $pom;
 echo zbir(3, "8");
//zbir(3, "a"); ovo nije moguce
echo zbir(zbir(3,5),10);

$a=zbir(4,9);              //zbir 4 cifre preko funkcije zbir koja je gore definisana
$b=zbir(4,10);
$c=zbir($a,$b);

echo "<p>$c</p>";
echo"<hr>";

echo zbir(zbir(4,9), zbir(4,10));
///////////////

//include() or require() za uvoz eksternog fajla php-a

function uvecaj(&$vrednost, $korak){
	$vrednost=$vrednost+$korak;
    return $vrednost;
}
echo"<hr>";
$a=10;
uvecaj($a,2);
echo $a;







?>