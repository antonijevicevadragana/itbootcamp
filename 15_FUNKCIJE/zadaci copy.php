<?php
//Sa niškog aerodroma u toku jednog dana polaze letovi ka različitim gradovima. Dat je asocijativni niz u kojem su ključevi destinacije letova, a vrednosti broj putnika na svakom letu.
//Kreirati niz $letovi po uslovima zadatka.

$letovi = [
    "Rim" => 65,
    "Milano" => 73,
    "Madrid" => 54,
    "Venecija" => 75, //max
    "Zagreb" => 56,
    "Bec" => 54,
    "Podgorica" => 54,
    "Atina" => 75 //max  506/8=63,25
];


//2) Napisati funkciju maxBrojPutnika($letovi) kojoj se prosleđuje niz letova, a funkcija vraća maksimalan broj putnika na nekom od letova.

function maxBrojPutnika($letovi)
{
    $max = 0;

    foreach ($letovi as $dest => $brojPutnika) {
        if ($brojPutnika > $max) {
            $max = $brojPutnika;
        }
    }
    return $max;
}
echo "<h2>Zadatak 2</h2>";
echo maxBrojPutnika($letovi);


//3) Napisati funkciju brojMax($letovi) kojoj se prosleđuje niz letova, a funkcija vraća broj letova na kojima je leteo maksimalan broj putnika.

function brojMax($letovi)
{
    $broj = 0;
    $max = maxBrojPutnika($letovi);
    foreach ($letovi as $brojPutnika) {
        if ($brojPutnika == $max) {
            $broj++;
        }
    }
    return $broj;
}


echo "<h2>Zadatak 3</h2>";
echo brojMax($letovi);

//4) Napisati funkciju prosek($letovi) kojoj se prosleđuje niz letova, a funkcija vraća prosečan broj putnika po letu sa niškog aerodroma tog dana.

function prosek($letovi)
{
    $sum = 0;
    $brojac = 0;
    $prosek = 0;

    foreach ($letovi as $brojPutnika) {
        $sum += $brojPutnika;
        $brojac++;
    }
    $prosek = $sum / $brojac;
    return $prosek;
}

echo "<h2>Zadatak 4</h2>";
echo prosek($letovi);

//5) Dan je bio isplativ za niški aerodrom ukoliko je u većini letova broj putnika bio veći od zadate granice. Napisati funkciju isplativ($letovi, $granica) kojoj se prosleđuju niz letova, kao i granica, a funkcija ispituje da li je dan bio isplativ (vraća true ako jeste i false ako nije).

function isplativ($letovi, $granica)
{
    $brojIznad = 0;
    $brojIspod = 0;
    foreach ($letovi as $brojPutnika) {
        if ($brojPutnika > $granica) {
            $brojIznad++;
        } else {
            $brojIspod++;
        }
    }

    foreach ($letovi as $brojPutnika) {
        if ($brojIznad > $brojIspod) {
            return true;
        } else {
            return false;
        }
    }
}

echo "<h2>Zadatak 5</h2>";
if (isplativ($letovi, 53)) {
    echo "dan je isplativ";
} else {
    echo "dan nije isplativ";
}


//6)Dan je alarmantan za niški aerodrom ukoliko postoji neki let u kojem je broj putnika bio manji od zadate granice. Napisati funkciju alarmantan($letovi, $granica) kojoj se prosleđuju niz letova, kao i granica, a funkcija ispituje da li je dan bio alarmantan (vraća true ukoliko je postojao let u kojem je broj putnika bio manji od granice, i false ako nije).

function alarmantan($letovi, $granica)
{
    $broj = 0;
    foreach ($letovi as $brojPutnika) {
        if ($brojPutnika < $granica) {
            return true;                          //ovde moze true,zato sto cim naidje na nekog ispod granice vraca true i izlazi
        }
    }
    return false;
}

echo "<h2>Zadatak 6</h2>";
if (alarmantan($letovi, 54)) {
    echo "dan je alarmantan";
} else {
    echo "dan nije alarmantan";
}

//7Napisati funkciju dobreDestinacije($letovi) kojoj se prosleđuje niz letova, a funkcija ispisuje letove sa natprosečnim brojem putnika.
function dobreDestinacije($letovi)
{
    $prosek = prosek($letovi);
    foreach ($letovi as $let => $brojPutnika) {
        if ($brojPutnika > $prosek) {
            echo "Detinacija sa natprosecnim brojem putnika je $let - $brojPutnika <br>";
        }
    }
}
echo "<h2>Zadatak 7</h2>";
echo dobreDestinacije($letovi);


////////////////////////////////////////////////////////////////////////////////zadatak II
//8) Kreirati niz $letovi, pri čemu je svaki element tog niza jedan asocijativni niz. Svaki od tih asocijativnih niza mora od ključeva da ima “dest” (destinaciju), “country” (zemlju te destinacije), kao i “time” (vreme sletanja).
//ispisati niz funkcijom ispisNiza($letovi)
echo "<h2>Zadatak 8</h2>";

$letovi = [
    array(
        "dest" => "Rim",
        "country" => "Italija",
        "time" => "06:45"
    ),

    array(
        "dest" => "Rim",
        "country" => "Italija",
        "time" => "07:15"
    ),

    array(
        "dest" => "Madrid",
        "country" => "Spanija",
        "time" => "13:00"
    ),
    array(
        "dest" => "Moskva",
        "country" => "Rusija",
        "time" => "15:30"
    ),

    array(
        "dest" => "Venceija",
        "country" => "Italija",
        "time" => "20:30"
    )
];


function ispisNiza($letovi)
{
    for ($i = 0; $i < count($letovi); $i++) {
        $destinacija = $letovi[$i]["dest"];
        $zemlja = $letovi[$i]["country"];
        $vreme = $letovi[$i]["time"];

        echo "Destinacija je -$destinacija, drzava - $zemlja i vreme sletanja je $vreme<br>";
    }
}

echo ispisNiza($letovi);


//9 Napisati funkciju brojLetovaZaZemlju($letovi, $zemlja) kojoj se prosleđuju niz letova, kao i zemlja, a funkcija vraća broj letova do date zemlje.
echo "<h2>Zadatak 9</h2>";

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

echo brojLetovaZaZemlju($letovi, "Rusija");

/////

function brojLetovaZaZemlju2($letovi, $zemlja)
{
    $brojac = 0;
    foreach ($letovi as $let) {
        $destinacija = $let["country"];

        if ($destinacija == $zemlja) {
            $brojac++;
        }
    }
    return $brojac;
}
echo "<br>Foreach petjom <br>";
echo brojLetovaZaZemlju2($letovi, "Rusija");

//10)Napisati funkciju visePrePodne($letovi) kojoj se prosleđuje niz letova, a određuje da li je bilo više letova pre podne ili posle podne. Ukoliko je bilo više letova pre podne, vratiti true, a u suportnom, vratiti false.
echo "<h2>Zadatak 10</h2>";

function visePrePodne($letovi)
{
    $prepodne = 0;
    $popodne = 0;

    for ($i = 0; $i < count($letovi); $i++) {
        $sati = strtotime($letovi[$i]["time"]);

        if (date("H", $sati) < 12) {
            $prepodne++;
        } else {
            $popodne++;
        }
    }

    if ($prepodne > $popodne) {
        return true;
    } else {
        return false;
    }
}


//provera
if (visePrePodne($letovi)) {
    echo "Vise je letova prepodne";
} else {
    echo "Vise je letova popodne";
}


//foreach petljom
function visePrePodne2($letovi)
{
    $prepodne = 0;
    $popodne = 0;

    foreach ($letovi as $let) {
        $sati = $let['time'];
        $sati = strtotime($sati);

        if (date('H', $sati) < 12) {
            $prepodne++;
        } else {
            $popodne++;
        }
    }
    return $prepodne . "a popodne" . $popodne;
}
echo "<br>foreach<br>";
echo visePrePodne2($letovi);

//11)Napisati funkciju ispisLetovaDoSada($letovi) kojoj se prosleđuje niz letova, kao i zemlja, a koja ispisuje sve letove koji su poleteli do trenutnog vremena.
echo "<h2>Zadatak 11</h2>";

function ispisLetovaDoSada($letovi)
{
    $trenutnoVreme = date('H:i');
    for ($i = 0; $i < count($letovi); $i++) {
        $sati = strtotime($letovi[$i]["time"]);

        if (date("H:i", $sati) < $trenutnoVreme) {
            echo " Do  $trenutnoVreme je poletelo letova za " . $letovi[$i]["dest"] . '-' . $letovi[$i]['time'];
        }
    }
}

echo ispisLetovaDoSada($letovi);

//foreach petljom
function ispisLetovaDoSada2($letovi)
{
    $trenutnoVreme = date("H:i");

    foreach ($letovi as $let) {
        $vreme = $let["time"];
        $vreme = strtotime($vreme);

        if (date("H:i", $vreme) < $trenutnoVreme) {
            echo "Poleteli su letovi za: <br>";
            echo $let["dest"] . ' u ' . $let["time"];
        }
    }
}

echo "foreach petljom <br>";
echo ispisLetovaDoSada2($letovi);

//12) Neke zemlje su označene kao crvene, jer je u njima nepovoljna epidemiološka situacija. Napisati funkciju rizicniLetovi($letovi, $crvenaZona) kojoj se prosleđuju niz letova, kao i niz zemalja, a koja ispisuje u paragrafima čiji je tekst obojen crvenom bojom, a u svakom paragrafu ispisati informacije o onim letovima koji kao destinaciju imaju zemlju iz crvene zone.
echo "<h2>Zadatak 12</h2>";


function  rizicniLetovi($letovi, $crvenaZona)
{
    for ($i = 0; $i < count($letovi); $i++) {
        for ($j = 0; $j < count($crvenaZona); $j++) {
            if ($letovi[$i]["country"] == $crvenaZona[$j]) {
                echo "<p style='color:red;'>Let je u crvenoj zoni " .
                    $letovi[$i]["dest"] . ' - ' . $letovi[$i]["country"] . " - " . $letovi[$i]["time"] . "</p>";
            }
        }
    }
}

$crvenaZona = ["Italija", "Nemacka"];
echo rizicniLetovi($letovi, $crvenaZona);

//foreac
function  rizicniLetovi2($letovi, $crvenaZona)
{
    foreach ($letovi as $let) {
        $destinacija = $let["country"];

        foreach ($crvenaZona as $zemlja) {
            if ($destinacija == $zemlja) {
                echo "<p style='color:red'> Let u crvneoj zoni je: $destinacija - " . $let["country"] . " - " . $let["time"] . "</p>";
            }
        }
    }
}


echo "foreach <br>";
echo rizicniLetovi2($letovi, $crvenaZona);

//13) Neka destinacija je tražena ukoliko postoji više letova u toku dana za tu destinaciju. Napisati funkciju trazeneDestinacije($letovi) kojoj se prosleđuje niz letova, a koja ispisuje sve tražene destinacije (ukoliko postoje). 
echo "<h2>Zadatak 13</h2>";

function trazeneDestinacije($letovi)
{
    // $polasci = array("Rim" => 2, "Madrid" => 1, "Moskva" => 1, Venecija"=>1);
    $polasci = array();
    foreach ($letovi as $let)
    {
        $destinacija = $let["dest"]; // $destinacija = "Rim"
        $postojiLet = false;
        foreach ($polasci as $d => $br)
        {
            if ($d == $destinacija)
            {
                $postojiLet = true;
                $polasci[$destinacija]++;
            }
        }
        if ($postojiLet == false)
        {
            $polasci[$destinacija] = 1;
        }
        // $polasci = ("Rim" => 2, "Madrid" => 1, "Moskva" => 1, Venecija"=>1)
    }

    foreach ($polasci as $d => $br)
    {
        if ($br > 1)
        {
            echo "<p>$d je trazena destinacija</p>";
        }
    }
}

echo trazeneDestinacije($letovi);
    echo "<hr>";


function trazeneDestinacije2($letovi) {
    foreach ($letovi as $let) {
        $destinacija[] = $let["dest"];  //napravis novi array koji kupi samo destinacije
    }

    $nizBrojeva=array_count_values($destinacija);  //$nizBrojeva je funkcija na prethodno napravljene destinacije
    foreach ($nizBrojeva as $dest => $broj) {
       if ($broj >1) {
        echo "<p>trazena destinacija je" . $dest .  "</p>";
       }
    }

    //print_r($nizBrojeva) ;
}
   
echo  trazeneDestinacije2($letovi) ;  //vraca Rim=>2, Madrid =>1, Moskava=>1, Venenija=>1


//14)Napisati funkciju prosecanBrojLetovaZaZemlju($letovi) kojoj se prosleđuje niz letova, a koja vraća prosečan broj letova ka nekoj zemlji.
echo "<h2>Zadatak 14</h2>";

function prosecanBrojLetovaZaZemlju($letovi, $zemlja) {
    $broj=0;
    for ($i=0; $i <count($letovi) ; $i++) { 
        $destinacija = $letovi[$i]["country"];
        if ($destinacija == $zemlja) {
            $broj++;
        }

        
    }
    return $broj/count($letovi);
}

echo prosecanBrojLetovaZaZemlju($letovi, "Italija");

///////////////////////////////////
// Formirati asocijativni niz koji od ključeva i vrednosti sadrži:
//Datum (string u formatu YYYY/MM/DD),
//Kiša (true/false),
//Sunce (true/false),
//Oblačno (true/false),
//Vrednosti temperature (Niz temperatura tog dana).

$dan = [
    "Datum" => "20.05.2023",
    "Kisa" => true,
    "Sunce" => false,
    "Oblacno" => true,
    "temperatura" => array(-2, 5, 8, 19, 23, 10, 23, 2)
];



//15)Napisati funkciju koja određuje i vraća prosečnu temperaturu izmerenu tog dana.

function prosekTemp($dan) {
    $tempeatura = $dan['temperatura'];
    $suma=0;
    foreach ($tempeatura as $temp) {
        $suma+=$temp;
    }
    return $suma/count($tempeatura);

}

echo "<h2>Zadatak 15</h2>";
echo prosekTemp($dan);

//16
//Napisati funkciju koja prebrojava i vraća koliko merenja je bilo sa natprosečnom temperaturom.

function natrposecnaTemp($dan) {
    $prosek = prosekTemp($dan);
    $tempeatura =$dan["temperatura"];
    $brojac=0;

    foreach ($tempeatura as $temp) {
        if ($temp > $prosek) {
            $brojac++;
        }
    }
    return $brojac;
}
echo "<h2>Zadatak 16</h2>";
echo natrposecnaTemp($dan);

//for

function natrposecnaTemp2($dan) {
    $temperatura= $dan["temperatura"];
    $prosek=prosekTemp($dan);
  $broj=0;
    for ($i=0; $i <count($temperatura) ; $i++) { 
        if ($temperatura[$i] > $prosek) {
            $broj++;
        }
    }
    return $broj;
}
echo "<br> for petljom <br>";
echo natrposecnaTemp($dan);

//17Napisati funkciju koja prebrojava i vraća koliko merenja je bilo sa maksimalnom temperaturom.

function MaxTemp($dan) {
    $max=0;
    $temperatura = $dan["temperatura"];
    $broj=0;
  
    foreach ($temperatura as $temp) {
        if ($temp > $max) {
            $max =$temp;
            
        }
    }
    foreach ($temperatura as $temp) {
        if ($max == $temp) {
            $broj++;
        }
    }
    return $broj;
}

echo "<h2>Zadatak 17</h2>";
echo MaxTemp($dan);


//18 Napisati funkciju koja prima dva parametra koji predstavljaju TRI temperature dan i dva broja koji predstavljaju temperature. Potrebno je da metoda vrati broj merenja u toku dana čija je vrednost između ove dve zadate temperature (ne uključujući te dve vrednosti).
echo "<h2>Zadatak 16</h2>";



//19)Napisati funkciju natprosecnoTopao($dan) kojoj se prosleđuje dan, a koja vraća true ukoliko je u većini dana temperatura bila iznad proseka. U suprotnom vraća false.



//20)Za dan se smatra da je leden ukoliko nijedna temperatura izmerena tog dana nije iznosila iznad 0 stepeni. Napisati funkciju leden($dan) kojoj se prosleđuje dan, a koja vraća true ukoliko je dan bio leden, u suprotnom vraća false.



//21)Za dan se smatra da je tropski ukoliko nijedna temperatura izmerena tog dana nije iznosila ispod 24 stepena. Napisati funkciju tropski($dan) kojoj se prosleđuje dan, a koja vraća true ukoliko je dan bio tropski, u suprotnom vraća false.

//22) Dan je nepovoljan ako je razlika između neka dva uzastopna merenja veća od 8 stepeni. Napisati funkciju nepovoljan($dan) kojoj se prosleđuje dan, a koja vraća true ukoliko je dan bio nepovoljan, u suprotnom vraća false.



//23) Za dan se kaže da je neuobičajen ako je bilo kiše i ispod -5 stepeni, ili bilo oblačno i iznad 25 stepeni, ili je bilo i kišovito i oblačno i sunčano. Napisati funkciju neuobicajen($dan) kojoj se prosleđuje dan, a koja vraća true ukoliko je dan bio neuobičajen, u suprotnom vraća false.