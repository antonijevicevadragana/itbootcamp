<?php

$destinacije = [
    "Rim" => 65,
    "Milano" => 73,
    "Madrid" => 54,
    "Isanbul" => 75, //max
    "Zagreb" => 56,
    "Bec" => 54,
    "Podgorica" => 54,
    "Atina" => 75 //max  506/8=63,25
];
//2) Napisati funkciju maxBrojPutnika($letovi) kojoj se prosleđuje niz letova, a funkcija vraća maksimalan broj putnika na nekom od letova.

function maxBrojPutnika($letovi)
{
    $max = 0;
    $svi = 0;
    foreach ($letovi as $grad => $putinci) {
        if ($putinci > $max) {
            $max = $putinci;
        }
    }
    // foreach ($letovi as $grad => $putinci){
    //     if($max==$putinci) {
    //         $svi=$grad;
    //         echo "$svi ";
    //     }
    // }
    return "$max ";
}

echo maxBrojPutnika($destinacije);

//3) Napisati funkciju brojMax($letovi) kojoj se prosleđuje niz letova, a funkcija vraća broj letova na kojima je leteo maksimalan broj putnika.



function brojMax($letovi)
{
    $max = 0;
    $broj = 0;

    foreach ($letovi as $putnik) {
        if ($putnik > $max) {
            $max = $putnik;
        }
    }

    foreach ($letovi as $putnik) {
        if ($max == $putnik) {
            $broj++;
        }
    }
    return $broj;
}
echo "<br>";
echo brojMax($destinacije);

//II nacin

function brojmax1($letovi)
{
    $maxPutnika =  maxBrojPutnika($letovi);   //pozvana f-ja iz drugog zaatka
    $broj = 0;
    foreach ($letovi as  $putnik) {
        if ($putnik == $maxPutnika) {
            $broj++;
        }
    }
    return $broj;
}

echo "<hr>";
echo brojmax1($destinacije);
echo "<hr>";


//4) Napisati funkciju prosek($letovi) kojoj se prosleđuje niz letova, a funkcija vraća prosečan broj putnika po letu sa niškog aerodroma tog dana.

function prosek($letovi)
{
    $sum = 0;
    $brojac = 0;
    $prosek = 0;

    foreach ($letovi as $putnik) {
        $sum += $putnik;
        $brojac++;              //za brojac moze i count($letovi);
    }

    if ($brojac > 0) {
        $prosek = $sum / $brojac;
        $prosek = round($prosek, 0);
    }

    return $prosek;
}
echo "<hr>";
echo prosek($destinacije);
echo "<hr>";

//5) Dan je bio isplativ za niški aerodrom ukoliko je u većini letova broj putnika bio veći od zadate granice. Napisati funkciju isplativ($letovi, $granica) kojoj se prosleđuju niz letova, kao i granica, a funkcija ispituje da li je dan bio isplativ (vraća true ako jeste i false ako nije).

function isplativ($letovi, $granica)
{
    $granica;
    $broj = 0;  //br za granicu
    $brojLetova = 0;  //ukupan broj letova

    foreach ($letovi as  $putnici) {
        if ($putnici > $granica) {
            $broj++;     //izbrojali koliko ima letova sa vise putika od granice
        }
    }

    foreach ($letovi as $putnici) {
        $brojLetova++;
    }

    if ($broj >= ($brojLetova / 2)) {
        return true;
    } else {
        return false;
    }
}

if (isplativ($destinacije, 70)) {
    echo "<br>Dan je isplativ";
} else {
    echo "<br>Dan nije isplativ";
}


//II nacin



//6)Dan je alarmantan za niški aerodrom ukoliko postoji neki let u kojem je broj putnika bio manji od zadate granice. Napisati funkciju alarmantan($letovi, $granica) kojoj se prosleđuju niz letova, kao i granica, a funkcija ispituje da li je dan bio alarmantan (vraća true ukoliko je postojao let u kojem je broj putnika bio manji od granice, i false ako nije).

function alarmantan($letovi, $granica)
{
    foreach ($letovi as $grad => $putnici) {
        if ($putnici < $granica) {
            return true;
        } else {
            return false;
        }
    }
}

if (alarmantan($destinacije, 70)) {
    echo "<br>Dan je bio alarmantan";
} else {
    echo "<br>Dan nije bio alarmantan";
}

//7Napisati funkciju dobreDestinacije($letovi) kojoj se prosleđuje niz letova, a funkcija ispisuje letove sa natprosečnim brojem putnika.

function dobreDestinacije($letovi)
{
    $broj = 0;
    $sum = 0;


    foreach ($letovi as $grad => $putnici) {
        $sum += $putnici;
        $broj++;
    }
    $prosek = $sum / $broj;
    foreach ($letovi as $grad => $putnici) {
        if ($putnici >= $prosek) {
            echo "<br>Natrposecan broj putnika na liniji: $grad-$putnici; ";
        }
    }
}
//ii NACIN ISKORISTITI FJU PROSEK U FUNKCIJI

function dobreDestinacije2($letovi)
{
    $prosek = prosek($letovi);
    foreach ($letovi as $grad => $putnici) {
        if ($putnici >= $prosek) {
            echo "<br>Natrposecan broj putnika na liniji: $grad-$putnici; ";
        }
    }
}
echo dobreDestinacije($destinacije);
echo "<hr>";
echo dobreDestinacije2($destinacije);
////////////////////////////////////////////////////////////////////////////////zadatak II
//8) Kreirati niz $letovi, pri čemu je svaki element tog niza jedan asocijativni niz. Svaki od tih asocijativnih niza mora od ključeva da ima “dest” (destinaciju), “country” (zemlju te destinacije), kao i “time” (vreme sletanja).

$letovi = [

    array(
        "dest" => "Rim",   //1
        "country" => "Italija",
        "time" => "16:55"
    ),

    array(
        "dest" => "Pariz",
        "country" => "Francuska",
        "time" => "01:23"
    ),

    array(
        "dest" => "Milano",  //2
        "country" => "Italija",
        "time" => "08:08"
    ),

    array(
        "dest" => "Venecija",  //2
        "country" => "Italija",
        "time" => "10:00"
    ),

    array(
        "dest" => "Berlin",  //2
        "country" => "Nemacka",
        "time" => "13:00"
    )
];
// echo "<h1>Vreme je </h1>";
// $vreme = str_replace(":", ".", ($letovi[1]["time"]));
// $vreme = (int)str_replace(":", ".", ($letovi[4]["time"]));
// var_dump($vreme);
// echo "<hr>";
// var_dump($letovi);
// echo "<hr>";
// echo $letovi[0]["dest"];


//9 Napisati funkciju brojLetovaZaZemlju($letovi, $zemlja) kojoj se prosleđuju niz letova, kao i zemlja, a funkcija vraća broj letova do date zemlje.


function brojLetovaZaZemlju($letovi, $zemlja)
{
    $brojac = 0;
    for ($i = 0; $i < count($letovi); $i++) {
        if ($letovi[$i]["country"] == $zemlja) {
            $brojac++;
        }
    }
    return $brojac;
}

$zemlja = "Italija";
echo "<hr>Broj letova za $zemlja<br>";
echo brojLetovaZaZemlju($letovi, $zemlja);

//10)Napisati funkciju visePrePodne($letovi) kojoj se prosleđuje niz letova, a određuje da li je bilo više letova pre podne ili posle podne. Ukoliko je bilo više letova pre podne, vratiti true, a u suportnom, vratiti false.

function visePrePodne($letovi)
{
    $prePodne = 0;
    $poslePodne = 0;
    for ($i = 0; $i < count($letovi); $i++) {
        $sati = strtotime($letovi[$i]["time"]);
        if (date('H', $sati) <= 12) {
            $prePodne++;
        } else {
            $poslePodne++;
        }
    }
    if ($prePodne > $poslePodne) {
        
        echo "<br>Prepodne ima vise letova - $prePodne";
    } else {
        echo "<br>Poslepodne ima vise letova - $poslePodne";
    }
}
echo "<br>Letovi: " . visePrePodne($letovi);

//11)Napisati funkciju ispisLetovaDoSada($letovi) kojoj se prosleđuje niz letova, kao i zemlja, a koja ispisuje sve letove koji su poleteli do trenutnog vremena.

//12Neke zemlje su označene kao crvene, jer je u njima nepovoljna epidemiološka situacija. Napisati funkciju rizicniLetovi($letovi, $crvenaZona) kojoj se prosleđuju niz letova, kao i niz zemalja, a koja ispisuje u paragrafima čiji je tekst obojen crvenom bojom, a u svakom paragrafu ispisati informacije o onim letovima koji kao destinaciju imaju zemlju iz crvene zone.

///////////////////////////////////
//Formirati asocijativni niz koji od ključeva i vrednosti sadrži:
//Datum (string u formatu YYYY/MM/DD),
//Kiša (true/false),
//Sunce (true/false),
//Oblačno (true/false),
//Vrednosti temperature (Niz temperatura tog dana).


$dan = [
    "datum" => "2023/05/16",
    "kisa" => true,
    "sunce" => true,
    "oblacno" => false,
    "temperature" => array(5, 8, 13, 17, 12, 9, 6)
];

//Napisati funkciju koja određuje i vraća prosečnu temperaturu izmerenu tog dana.

function prosecnaTemp($dan)
{
    $temperature = $dan["temperature"];
    $suma = 0;
    foreach ($temperature as $temp) {
        $suma += $temp;
    }
    $prosek = $suma / count($temperature);
    return $prosek;
}
echo "<br>Prosecna temperatura za" . $dan['datum'] . "je" . prosecnaTemp($dan);

//16
//Napisati funkciju koja prebrojava i vraća koliko merenja je bilo sa natprosečnom temperaturom.

function brojNatprosecnogMerenja($dan)
{
    $prosek = prosecnaTemp($dan);
    $brojac = 0;
    $temperature = $dan["temperature"];

    foreach ($temperature as $temp) {
        if ($temp > $prosek) {
            $brojac++;
        }
    }
    return $brojac;
}

echo "<br>Broj merenja sa nadprosecnom temperaturnom za dan" . $dan['datum'] . "je" . brojNatprosecnogMerenja($dan);

//17Napisati funkciju koja prebrojava i vraća koliko merenja je bilo sa maksimalnom temperaturom.


//18 Napisati funkciju koja prima dva parametra koji predstavljaju TRI temperature dan i dva broja koji predstavljaju temperature. Potrebno je da metoda vrati broj merenja u toku dana čija je vrednost između ove dve zadate temperature (ne uključujući te dve vrednosti).

function brojMerenjaIzmedju($dan, $min, $max)
{
    $temperature = $dan["temperature"];  //niz brojeva
    $brojac = 0;

    foreach ($temperature as  $temp) {
        if ($temp > $min && $temp < $max) {
            $brojac++;
        }
    }
    return $brojac;
}

$v1 = 7;
$v2 = 15;

echo "<br>Broj merenja  na dan" . $dan['datum'] . "iz,edju vrednosti $v1 i $v2 je " . brojMerenjaIzmedju($dan, $v1, $v2);
