<?php
//bez nizova
$car1 = "BMW";
$car2 = "Volvo";
$car1 = "Toyota";

var_dump($car1);

//u nizu

$cars = array("BMW", "Volvo", "Toyota"); // $cars = ["BMW", "Volvo", "Toyota"];
//el niza su  "BMW", "Volvo", "Toyota"
//indexi ovog niza su 0, 1, 2
//br elemenata u nizu su 3.

var_dump($cars); //za ispis svih el niza najdetaljinije ispisuje

echo "<hr>";
print_r($cars);

$prviElement = $cars[0];
$DrugiElement = $cars[1];
$TreciElement = $cars[2];
echo "<hr>";
echo "$prviElement, $DrugiElement, $TreciElement";
echo "<p>Prvi element u nizu je $cars[0]</p>";
//echo"<p> Osmi element u nizu je $cars[7]</p>"; Undifined array key

//izmena elemenata

$cars[1] = "Peugeot";
print_r($cars);

$cars[30] = "Audi";
print_r($cars);
//////////////////////////////////////////////////////////
echo "<hr>";

$polaznici = []; //$polaznici = array();
$polaznici[] = "Aleksandar";
$polaznici[] = "Uros";
$polaznici[] = "Milijana";
$polaznici[] = "Andreja";
$polaznici[] = "Nikola";  //dodavanje u element

var_dump($polaznici);
$duzina = count($polaznici); //prebrojava el u nizu
echo "<p>U nizu ima $duzina polaznika.</p>";

for ($i = 0; $i < $duzina; $i++) {
    echo "<p>$polaznici[$i]</p>";
}

///////////zadaci///////////////


//2 Odrediti zbir elemenata celobrojnog niza.
$brojevi = [5, 14, -4, 0, 11, -7, 9];
$sum = 0;

for ($i = 0; $i < count($brojevi); $i++) {
    //echo"<p>$brojevi[$i]</p>";
    $sum += $brojevi[$i];
}
echo "<p>Suma elemenata je $sum</p>";

//ugradjena funkcija za racunanje sume je 
$zbir = array_sum($brojevi);  //VAZNO VAZNO VAZNO VAZNO VAZNO !!!!!!!!!!!!!!!!!!!
echo "<p>Zbir elemenata je $zbir</p>";


//3 Odrediti srednju vrednost elemenata celobrojnog niza.

$AritmetickaSredina = array_sum($brojevi) / count($brojevi);
echo "Aritmeticka sredina je $AritmetickaSredina";

$brElem = count($brojevi);   //provera da li je prazan niz, ako nije racunamo Aritmeticku sredinu
if ($brElem == 0) {           //moze i sa if(empty($brojevi)); if(!$brojevi)
    echo "Prazan niz- aritmeticka sredina je 0";
} else {
    echo "Aritmeticka sredina je $AritmetickaSredina";
}


//4  Odrediti maksimalnu vrednost u celobrojnom nizu.
$brojevi = [5, 14, -4, 0, 11, -7, 9, 91];
$maks = $brojevi[0];

for ($i = 0; $i < count($brojevi); $i++) {
    $TrenutniElement = $brojevi[$i];

    if ($TrenutniElement > $maks) {
        $maks = $TrenutniElement;
    }
}
echo "<p>Maksimalni broj u nizu je $maks</p>";

//5  Odrediti minimalnu vrednost u celobrojnom nizu. *



//6 Odrediti indeks najvećeg elementa celobrojnog niza.
$brojevi = [5, 14, -4, 14, 11, -7, 14]; //index 1,3,6


//echo array_search(14, $brojevi); 
//6.1 Odrediti prvi index /prvo pojavljivanja najvaceg broja



//GLAVNO RESENJE
$maks = $brojevi[0];
$indexMaks = 0;

for ($i = 0; $i < count($brojevi); $i++) {
    $TrenutniElement = $brojevi[$i];

    if ($TrenutniElement > $maks) {
        $maks = $TrenutniElement;
        $indexMaks = $i;
    }
}
echo "Najveci element ima vrednost $maks a indes njegovog prvog pojavljivanja je $indexMaks";

//echo array_search(14, $brojevi); //vraca vrednost index prvog najveceg broja

//6.2 Odrediti poslednji index pojavljivanja najveceg broja  //samo umesto > staviti >=
$maks = $brojevi[0];
$indexMaks = 0;

for ($i = 0; $i < count($brojevi); $i++) {
    $TrenutniElement = $brojevi[$i];

    if ($TrenutniElement >= $maks) {
        $maks = $TrenutniElement;
        $indexMaks = $i;
    }
}
echo "<p>Najveci element ima vrednost $maks a indes njegovo poslednjeg pojavljivanja je $indexMaks</p>";

//2 nacin
// $brojevi = [5,14,-4,14,11,-7,14];
// $maks=$brojevi[0];
// $indexMaks=count($brojevi)-1;

// for ($i=(count($brojevi)-1); $i > 0; $i--) { 
//     $TrenutniElement= $brojevi[$i];

//     if ($TrenutniElement > $maks) {
//         $maks = $TrenutniElement;
//         $indexMaks = $i;

//     }
// }
// echo "<p>Najveci element ima vrednost $maks a indes njegovo poslednjeg pojavljivanja je $indexMaks</p>";

///////////////////
//SVI indexi MAKSIMUMI
//Prvo idemo jedan loop da nadjemo koji je najveci broj
//zatim pravimo sledeci loop da vidimo koji je index.
$maks = $brojevi[0];
$indexMaks = 0;
$sviIndexiMax = [];

for ($i = 0; $i < count($brojevi); $i++) {
    $TrenutniElement = $brojevi[$i];

    if ($TrenutniElement > $maks) {
        $maks = $TrenutniElement;
    }
}
echo "Najveci element ima vrednost $maks. A indeksi pojavljivanja ovog elementa su: ";

for ($i = 0; $i < count($brojevi); $i++) {
    $TrenutniElement = $brojevi[$i];

    if ($TrenutniElement == $maks) {
        $sviIndexiMax[] = $i;
        echo "$i; ";
    }
}
//II nacin
// $maks=$brojevi[0];
// $indexMaks=0;
// $sviIndexiMax=[];

// for ($i=0; $i <count($brojevi) ; $i++) { 
//     $TrenutniElement= $brojevi[$i];

//     if ($TrenutniElement >$maks) {
//         $maks = $TrenutniElement;
//         $sviIndexiMax= [];
//         $sviIndexiMax=$i;  //posednje dve linije moug u jednoj liniji $sviIndexiMax = [$i];
//     }

//     elseif ($TrenutniElement == $maks) {
//         $sviIndexiMax[]= $i;
//     }
// }

// echo "<p>Najveci je $maks, a njegovi indexi su:</p>"; 
// for ($i=0; $i < count($sviIndexiMax); $i++) { 
//     echo '$SviIndexiMax[$i]';
// }


//7)Odrediti broj elemenata celobrojnog niza koji su veći od srednje vrednosti. *
$brojevi = [1, 2, 15];
$zbir = 0;
$brojac = 0;

for ($i = 0; $i < count($brojevi); $i++) {
    $zbir += $brojevi[$i];
}
echo "<br>$zbir";

$arsr = $zbir / count($brojevi);

for ($i = 0; $i < count($brojevi); $i++) {
    if ($brojevi[$i] > $arsr) {
        $brojac++;
    }
}
echo "<br>Broj brojeva vecih od srednje vrednosti je $brojac";

//8)Izračunati zbir pozitivnih elemenata celobrojnog niza. *
$brojevi = [1, 2, 15, -7];
$sum = 0;

for ($i = 0; $i < count($brojevi); $i++) {

    if ($brojevi[$i] > 0) {
        $sum += $brojevi[$i];
    }
}

echo "<br>Zbir pozitivnih elemenata niza je $sum";


//9)Odrediti broj parnih elemenata u celobrojnom nizu. *
$brojevi = [1, 2, 15, -7, -8];
$brojac = 0;

for ($i = 0; $i < count($brojevi); $i++) {

    if ($brojevi[$i] % 2 == 0) {
        $brojac++;
    }
}
echo "<p>U ovom nizu ima $brojac parnih borjeva</p>";

//10) Izračunati sumu elemenata u nizu sa parnim indeksom. *
$brojevi = [1, 2, 15, -7, -8];
$sum = 0;

for ($i = 0; $i < count($brojevi); $i++) {
    if ($i % 2 == 0) {
        $sum += $brojevi[$i];
    }
}
echo "<p>Suma niza sa pranim indexom je $sum</p>";

/// Izracunati srednju vrednost parnih elemenata celobrojnog niza.

$brojevi = [1, 2, 15, -7, -8];
$sum = 0;
$brojac = 0;

for ($i = 0; $i < count($brojevi); $i++) {
    if ($brojevi[$i] % 2 == 0) {
        $sum += $brojevi[$i];
        $brojac++;
    }
}

if ($brojac != 0) {
    $arsr = $sum / $brojac;
} else {
    $arsr = 0;
}
echo "<p>Srednja vrednost je $arsr</p>";

//11) Promeniti znak svakom elementu celobrojnog niza. *
$brojevi = [1, 2, 15, -7, -8];

for ($i = 0; $i < count($brojevi); $i++) {
    if ($brojevi[$i] >= 0) {
        $brojevi[$i] = $brojevi[$i] * -1;
        echo "$brojevi[$i]";
    } else {
        $brojevi[$i] = $brojevi[$i] * -1;
    }
}

echo "<hr>";
var_dump($brojevi);

$brojevi = [1, 2, 15, -7, -8];

for ($i = 0; $i < count($brojevi); $i++) {
    $brojevi[$i]=$brojevi[$i] * -1; //$brojevi[$i]*=-1; ili $brojevi[$i]=-$brojevi[$i]
    
    }

    echo "<hr>";
    var_dump($brojevi);

//12) Promeniti znak svakom neparnom elementu celobrojnog niza sa parnim indeksom. *
$brojevi = [1, 2, 15, -7, -8];

for ($i=0; $i < count($brojevi); $i++) { 
    if ($brojevi[$i]%2 !=0 && $i%2==0) {
        $brojevi[$i]=$brojevi[$i] *(-1);
    }
}
echo "<hr>";
var_dump($brojevi);

//13) Odrediti broj parnih elemenata sa neparnim indeksom. *
$brojevi = [1, 2, 15, -7, -8];
$brojac=0;

for ($i=0; $i <count($brojevi) ; $i++) { 
   if ($brojevi[$i] %2 ==0 && $i%2 !=0) {
    $brojac++;
    //echo"$brojevi[$i]";
   }
}
echo "<p>Parnih elemenata sa neparnim indexom u ovom nizu ima $brojac</p>";

//14) Ispisati dužinu svakog elementa u nizu stringova.

$niz =["jabuka", "banana", "kiwi"];

for ($i=0;  $i <count($niz); $i++) { 
   $voce=$niz[$i];
    $duzina=strlen($voce);
    echo "<p>Duzina stinga  $voce je $duzina</p>";
}


//15) Odrediti element u nizu stringova sa najvećom dužinom. 
$imena=["Stefan","Aleksandar", "Adam", "Marija", "Dunja", "Milijana", "Djordje"]; //za djordja  mb_strlen($ime,"UTF-8")

$stringMaxDuzine=$imena[0];
$MaxDuzina=strlen($imena[0]);

for ($i=1; $i <count($imena) ; $i++) { 
   if(strlen($imena[$i]) > $MaxDuzina) {
    $MaxDuzina = strlen($imena[$i]);
    $stringMaxDuzine= $imena[$i];
   }
}
echo "<p>Element niza sa max duzinom je $stringMaxDuzine</p>";

//16) Odrediti broj elemenata u nizu stringova čija je dužina veća od prosečne dužine svih stringova u nizu.
$imena=["Stefan","Aleksandar", "Adam", "Marija", "Dunja", "Milijana", "Djordje"];


//17) Odrediti broj elemenata u nizu stringova koji sadrže slovo 'a'. *
//Kako da odredimo da li se u nekom stringu nalazi neki podstring? koristimo f-ju strpos ($str1, $str2)
var_dump(strpos("Sreda", "s"));

if(strpos("Sreda", "S") !== false) {           //mora da bude !== posto je 0 false, 1 true
    echo "String S se nalazi u stringu Sreda";
}

else  {echo "String S se ne nalazi u stringu Sreda";}


//////////////////
$imena=["Stefan","Aleksandar", "Adam", "Marija", "Dunja", "Milijana", "Djordje"];
$brojSadrziA=0;
for ($i=0; $i < count($imena); $i++) { 
   if(strpos($imena[$i], "a") !== false) {
    $brojSadrziA++;
   }
}
echo "<p>Broj stringova koji sadrze slovo a je $brojSadrziA</p>";

//18) Odrediti broj elemenata u nizu stringova koji počinju na slovo 'a' ili 'A'. *
$imena=["Stefan","Aleksandar", "Adam", "Marija", "Dunja", "Milijana", "Djordje"];
$brojPocinjeA=0;
for ($i=0; $i < count($imena); $i++) { 
   //if(strpos($imena[$i], "a") === 0 || strpos($imena[$i],"A") ===0) 
   if ($imena[$i][0] == "a" || $imena[$i][0] == "A") 
   {
    $brojPocinjeA++;
   }
}

echo "<p>Broj stringova koji sadrze slovo a je  $brojPocinjeA</p>";

//19) Na osnovu celobrojnog niza $a[0], $a[1], … formirati niz $b[0], $b[1], ... koji sadrži samo pozitivne brojeve.
//20) Dati su nizovi 
//$a[0], $a[1], …, $a[n - 1] i  
//$b[0], $b[1], …, $b[n - 1]. 
//Formirati niz $c[0], $c[1], …, $c[2n – 1] čiji su elementi 
//$a[0], $b[0], $a[1], $b[1], …, $a[n - 1], $b[n - 1].


////////////////////asocijativni nizovi//////////////////////////////////////////////////////////////////////////









?>