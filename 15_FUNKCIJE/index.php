<?php

function mojaFunkcija()
{
    echo "<p>Zdravo svete</p>";
}

mojaFunkcija();   //pozivanje funkcije

function mojaFunkcija2($tekst)
{
    $b = "nova promenljiva";
    global $c;
    echo "<p>F-ja sa parametrom: $tekst i $b i $c</p>";
}

mojaFunkcija2("1.nacin");        //parametra je u zagradi
$a = "2. nacin";                  //globalna promenljiva


$c = "globalni";
mojaFunkcija2($a);
$b = "van funkcije";
mojaFunkcija2($a);
///////////////////////////////////////


function IspisImena($ime, $Prezime)
{
    echo "<p>Ime i prezime je: $ime $Prezime</p>";
}

IspisImena("Petar", "Petrovic");
$i = "Lazar";
$p = "Lazic";
IspisImena($i, $p);

function IspisImena2($ime, $Prezime = null, $godine)
{
    echo "<p>Ime je: $ime</p>";
    if ($Prezime) {
        echo "Prezime je: $Prezime ";
    }
    echo "Ima $godine godina";
}

IspisImena2("Mika", null, 58);
IspisImena2("Mika", "Mikic", 58);

function zbir($a, $b)
{
    $c = $a + $b;
    // echo"<p>$c</p>";
    return $c;
}
/** 
 * funkija koja sabira dva broja
 * @param int $a -prvi broj
 * @param int $b - drugi broj
 * @return int $c - zbir brojeva


 */
function zbir1(int $a, int $b)
{
    $c = $a + $b;
    // echo"<p>$c</p>";
    return $c;
}

echo zbir1(5, 5);

$pom = zbir(3, 8);
echo $pom;
echo zbir(3, "8");
//zbir(3, "a"); ovo nije moguce
echo zbir(zbir(3, 5), 10);

$a = zbir(4, 9);              //zbir 4 cifre preko funkcije zbir koja je gore definisana
$b = zbir(4, 10);
$c = zbir($a, $b);

echo "<p>$c</p>";
echo "<hr>";

echo zbir(zbir(4, 9), zbir(4, 10));
///////////////

//include() or require() za uvoz eksternog fajla php-a

function uvecaj(&$vrednost, $korak)
{
    $vrednost = $vrednost + $korak;
    return $vrednost;
}
echo "<hr>";
$a = 10;
uvecaj($a, 2);
echo $a;
echo "<hr>";
echo "<hr>";
echo "<hr>";
/////////////////////////////////////////ZADACI//////////////////////////////////

//1 Napisati funkciju neparan koja za uneti ceo broj n vraća tačno ukoliko je neparan ili netačno ukoliko nije neparan.Pozvati funkciju i testirati njen rad.

/*function neparan($broj) {
    echo "<p>Pocetak f-je</p>";

    if ($broj %2 ==0) {
        return= false;
    }

    else { return= true;}
    echo "<p>Kraj f-je</p>"; //ovaj deo se ne izvrsava posto je ispod RETURN
    
} */

function neparan($broj)
{
    //echo "<p>Pocetak f-je</p>";
    $rez = true;
    if ($broj % 2 == 0) {
        $rez = false;
    }
    //echo "<p>Kraj f-je</p>";
    return $rez;
}


$a = 15;
if (neparan($a)) {
    echo "<p>Broj $a je neparan</p>";
} else {
    echo "<p>Broj $a je paran</p>";
}


//2) Napisati funkciju maks2 koja vraća veći od dva prosleđena realna broja. Zatim napisati funkciju maks4 koja vraća najveći od četiri realna broja.Pozvati funkcije i testirati njihov rad.

function maks2($a, $b)
{
    if ($a > $b) {
        return $a;
    } else {
        return $b;
    }
}
$broj1 = 55;
$broj2 = 45;
$veci = maks2($broj1, $broj2);
echo "<p>Veci od brojeva $broj1 i $broj2 je $veci</p>";


// function maks4($a, $b, $c, $d) {
//     $maksAB= maks2($a, $b);
//     $maksCD= maks2($c, $d);

//     $maks=maks2($maksAB, $maksCD);
//     return $maks;

// } ovaj iskaz moze krace resenje ispod maks4

function maks4($a, $b, $c, $d)
{
    return maks2(maks2($a, $b), maks2($c, $d));
}

$br1 = 10;
$br2 = 25;
$br3 = 0;
$br4 = 10;
$r = maks4($br1, $br2, $br3, $br4);
echo "<p>Maksimalni od brojeva $br1, $br2 $br3 i $br4 max je $r</p>";

//
function kub($a)
{
    return $a ** 3;
}

$broj = 10;
$broj = kub($broj);
echo "<p>$broj</p>";


// function proba($a=null, $b=3, $c=10) {
//     if (is_null($a)) {
//         $a=1;
//     }
//     return $a+$b+$c;
// }
//  echo proba(null, $b);


//3) Napisati funkciju slika kojoj se prosleđuje url adresa slike, a funkcija prikazuje sliku za prosleđenu adresu slike.Pozvati funkciju i testirati je za različite url adrese. 


function slika($url)
{
    echo "<img src='$url'></img>";
}

slika("https://www.slike.co.rs/img/cms/art.jpg"); //image adress

//4) Napraviti funkciju obojenaRec kojoj se prosleđuje boja na engleskom jeziku i prosleđuje se proizvoljna reč. Prosleđenu reč ispisati u paragarfu bojom koja je prosleđena. Pozvati funkciju i testirati je.

function obojenaRec($boja, $tekst)
{
    echo "<p style='color:$boja'>$tekst</p>";
}


obojenaRec('red', "Ovo je tekst crvene boje");
obojenaRec('blue', "Ovo je tekst crvene boje");


//5 Napraviti funkciju recenica1 koja pet puta ispisuje istu rečenicu u paragrafu, a veličina fonta rečenice treba da bude jednaka vrednosti iteratora (sami odredite startnu vrednost iteratora i za koliki korak ćete iterator povećavati). Testirati funkciju


function recenica1()
{

    for ($i = 10; $i <= (10 + 5 * 5); $i += 5) {
        echo "<p style='font-size:$i'>Recenica</p>";  //da bi dodali u px {$i}px
    }
}

recenica1();

//6) Napraviti funkciju recenica2 kojoj se prosleđuje veličina fonta a ona u paragrafu ispisuje proizvoljnu rečenicu. Pozvati funkciju pet puta za različite prosleđene vrednosti. Testirati funkciju.



function recenica2($font)
{
    echo "<p style='font-size:$font'>Text</p>";
}

for ($i = 1; $i <= 35; $i += 5) {
    recenica2($i);                        //naziv f=je od $i
}
// recenica2(10);
// recenica2(15);
// recenica2(20);
// recenica2(25);
// recenica2(30);


//7 Napraviti funkciju aritmeticka koja vraća aritmetičku sredinu brojeva od n do m. Brojeve n i m proslediti kao parametre funkciji. Testirati funkciju.

function arsr($n, $m)
{



    if ($n <= $m) {
        $zbir = 0;
        $brojac = 0;

        for ($i = $n; $i <= $m; $i++) {
            $zbir += $i;
            $brojac++;
        }
        return $zbir / $brojac;
        //return $zbir /($m-$n+1);
    } else {
        return "Uneli ste neispravne parametre";
    }
}

echo arsr(2, 5);

//8) Napisati funkciju aritmetickaCifre koja vraća aritmetičku sredinu brojeva kojima je poslednja cifra 3 u intervalu od n do m.Brojeve n i m proslediti kao parametre funkciji. Testirati funkciju.

//resenje

function aritmetickaCifre($n, $m)
{
    $zbir = 0;
    $brojac = 0;
    for ($i = $n; $i <= $m; $i++) {
        if ($i % 10 == 3) {
            $zbir += $i;
            $brojac++;
        }
    }
    if ($brojac > 0) {  //moze i ovako da se zapise If($brojac) to znaci da je vrednost brojaca true
        return $zbir / $brojac;
    } else {
        return "<p>U opsegu nema brojeva koji zadovoljavaju uslov</p>";
    }
}
echo "<hr>";
echo aritmetickaCifre(5, 13);

//9) Dobili ste plaćenu programersku praksu u trajanju od n meseci. Prvog meseca, plata će biti a dinara. Ako budete vredno radili, svakog narednog meseca ćete dobiti povišicu od d dinara. Brojeve n, a i d određujete sami.
//Napišite funkciju praksa kojoj se prosleđuju brojevi n,a i d. Funkcija treba da vrati vrednost koliko ćete ukupno navca zaraditi, ukoliko svakog meseca budete dobijali povišicu.
//Testirati zadatak (pozvati funkciju i ispisati vrednost koju ona vraća).

function praksa($n, $a, $d)
{
    $ukupno = $a;
    for ($i = 2; $i <= $n; $i++) {
        $ukupno += $a + $d;
    }
    return number_format($ukupno, 2, ",", ".");  //$a+ ($n-1)*($a+$d)
}

function praksa2($n, $a, $d)
{
    $ukupno = 0;
    for ($i = 1; $i <= $n; $i++) {
        $ukupno += $a + $d;
    }
    return $ukupno - $d;  //$m*($a+$d)-$d
}

echo "<hr>";
$n = 10;
$a = 1000;
$d = 120;
echo praksa($n, $a, $d);


//10* Napraviti niz celih brojeva. 
//Ispisati sve neparne brojeve ovog niza koristeći funkciju neparan iz 1. zadatka.
//Pozvati funkciju i testirati je.

$brojevi = [1, 3, 5, -4, 7, 9];

foreach ($brojevi as $broj) {
    if (neparan($broj)) {
        echo "<p>Broj $broj je neparan</p>";
    }
}

//resenje 2
$niz = [1, 3, 5, -4, 7, 9];

for ($i=0; $i < count($niz) ; $i++) { 
   if (neparan($niz[$i])) {
    echo "<p>". $niz[$i]. "</p>";
   }
}


//11* Napraviti funkciju brojNeparnih kojoj se kao parametar prosleđuje niz celih brojeva, a funkcija prebrojava i vraća koliko neparnih brojeva ima prosleđeni niz.
//Pozvati funkciju i testirati je.

function brojNeparnih($arr) {
    $brojNeparnih=0;
    //$str="";
        for ($i=0; $i < count($arr) ; $i++) { 
            if(neparan($arr[$i])) {
                $brojNeparnih++;
                //$str=
            }
        }
        return $brojNeparnih;
}

echo "<p>Broj neparnih u nizu je:" .brojNeparnih($niz). "</p>";

//12 U jednom gradu je od ponedeljka do petka, tačno u podne, merena temperatura vazduha. Izmerene temperature su zapisane u obliku asocijativnog niza datum/temperatura. Osmisliti funkciju (ili više njih) koja će na ekranu plavom bojom ispisati dan, datum i temperaturu kada je temperatura bila najniža, a crvenom bojom ispisati dan, datum i temperaturu kada je temperatura bila najviša. 
//Testirati implementirani kod.

$niz = [
    "01.05.2023." => 19,
    "02.05.2023." => 22,
    "03.05.2023." => 18,
    "04.05.2023." => 15,
    "05.05.2023." => 25,
];

function najnizaTemperatura($arr) {
    $minTem=100;
    $minDatum="";
    $minDan=0;
    $dan=1;
    foreach($arr as $datum=>$temp) {
        if ($minTem >$temp) {
           $minTem=$temp;
           $minDatum=$datum;
           $minDan=$dan;
        }
        $dan++;
    }
    $dani=["Pondeljak", "uto", "Sre", "Cet", "Pet"];
    echo "<p style='color:blue'>" .$dani[$minDan-1]." ".$minTem."</p>";
}

najnizaTemperatura($niz);