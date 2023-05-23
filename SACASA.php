<?php

// ZADATAK 1. (NIZOVI BROJEVA)
// Dat je niz celih brojeva u kojima se čuvaju ocene jednog studenta koje je dobio polagajući različite ispite.
//1) Kreirati niz po uslovima zadatka od barem pet elemenata.

$ocene = [10, 10, 9, 9, 9, 10, 10, 10, 10, 10, 10, 10, 10, 9]; //5 desetki  //niz ima 3 i 2 podniza sa 10, treba vratiti 3

// Za sve funkcije iz ovog zadatka, kao parametar se prenosi niz ocena.


//2) Napisati funkciju koja vraća prosečnu ocenu studenta.

function prosek($ocene)
{
    $sum = 0;
    for ($i = 0; $i < count($ocene); $i++) {
        $sum += $ocene[$i];
    }
    return $sum / count($ocene);
}
echo prosek($ocene);

//3) Napisati funkciju koja vraća maksimalnu ocenu koju je student dobio u toku studija.

function maxOcena($ocene)
{
    $max = $ocene[0];
    for ($i = 0; $i < count($ocene); $i++) {
        $trenutna = $ocene[$i];
        if ($trenutna  > $max) {
            $max = $trenutna;
        }
    }
    return $max;
}
echo "<br>";
echo maxOcena($ocene);

//4) Napisati funkciju koja vraća broj predmeta na kojima je dobio maksimalnu ocenu u toku studija.

function BrojPredmeta($ocene)
{
    $brojac = 0;
    $maxOcena = maxOcena($ocene);
    for ($i = 0; $i < count($ocene); $i++) {
        if ($maxOcena == $ocene[$i]) {
            $brojac++;
        }
    }
    return $brojac;
}
echo "<br>";
echo BrojPredmeta($ocene);


// 5)Student je kandidat za studenta generacije ako je na ispitima dobijao samo devetke i desetke, i pri tome broj desetki nije manji od broja devetki. Napisati funkciju koja vraća da li je student kandidat za studenta generacije ili ne.

function StudentGeneracije($ocene)
{
    $brojacDesetke = 0;
    $brojacDevet = 0;
    for ($i = 0; $i < count($ocene); $i++) {
        if ($ocene[$i] >= 9) {
            if ($ocene[$i] == 9) {
                $brojacDevet++;
            } elseif ($ocene[$i] == 10) {
                $brojacDesetke++;
            }
        } else {
            return false;
        }
    }

    if ($brojacDesetke > $brojacDevet) {
        return true;
    }
    return false;
}                                //kandidat ima 8 nikad nije usao u if,odmah je otislo na return false;

if (StudentGeneracije($ocene)) {
    echo "<br>kandidat za djaka generacije";
} else {
    echo "<br>Nije";
}


//6) Napisati funkciju koja vraća maksimalnu dužinu podniza u kojoj je dobijao maksimalnu ocenu (ova dužina može biti jednaka 1). 
// Na primer, za niz [10, 10, 9, 10, 10, 10, 8, 9, 9, 9, 9, 10, 10, 10], funckija treba da vrati 3.
// Na primer, za niz [6, 8, 6, 6, 6, 7, 7, 9, 7, 7, 7, 7], funkcija treba da vrati 1.


function MaxDuzinaPodniza($ocene)
{
    $maxOcena = maxOcena($ocene);
    $brojacNizova = 0;
    $brojac = 0;
    $maxNiz = 0;
    $new = []; //novi niz

    for ($i = 0; $i < count($ocene); $i++) {
        if ($ocene[$i] == $maxOcena) {  //ocena je jednaka max oceni preuzetoj iz fje maxOcena
            $brojac++;                     //kad je tacno brojac se povecava
            if ($i == count($ocene) - 1) {          //proverava zadnji element bez ovoga ga ne broji, ne pravi niz od njega
                $new[$brojacNizova] = $brojac;     //posto ne udje u else jer posle njega nema broja manjeg od
                $brojacNizova++;
            }
        } else {
            if ($brojac > 0) {           //kada ispadne iz if-a odnosno kada je ocena manja od max onda dodaje novi niz cija je  duzina brojac Nizova i resetuje brojac. Zatim dodaje novi brojac Nizova. 
                $new[$brojacNizova] = $brojac;
                $brojac = 0;
                $brojacNizova++;
            }
        }
    }

    for ($i = 0; $i < $brojacNizova; $i++) {    //druga for petlja koja ide do brojaca nizova, u mom primeru ima samo dva niza.
        if ($new[$i] > $maxNiz) {             //proverava da li je novi niz[$i] veci od maxNiz koji je podesen na 0. AKo jeste onda je $max niz vrednost tog novog niza.
            $maxNiz = $new[$i];
        }
    }

    return $maxNiz;  //max niz je 3, jeee dobila sam
}

echo "<br>";
echo MaxDuzinaPodniza($ocene);


///////////////////////////////zadatak 2
// ZADATAK 2. (NIZOVI ASOCIJATIVNIH NIZOVA)
// Za nekog studenta pamtimo informacije o ispitima koje je položio na nekom fakultetu. Za svaki ispit pamtimo sledeće informacije:
// naziv ispita (string),
// datum polaganja (string u formatu YYYY/MM/DD),
// ocena (ceo broj između 6 i 10).
// Za studenta pamtimo niz čiji elementi sadrže date informacije.
//7) Kreirati niz po uslovima zadatka od barem pet elemenata.
//Napisati sve funkcije iz Zadatka 1 i za ovaj zadatak.

$student = [
    array(
        "ispit" => "Biologija",
        "Datum" => "2018/01/23",
        "ocena" => 10
    ),
    array(
        "ispit" => "Geografija",
        "Datum" => "2023/06/27",
        "ocena" => 8
    ),
    array(
        "ispit" => "Spanski",
        "Datum" => "2019/09/05",
        "ocena" => 6
    ),
    array(
        "ispit" => "Menadzment",
        "Datum" => "2023/01/25",
        "ocena" => 10
    ),
    array(
        "ispit" => "Engleski",
        "Datum" => "2023/06/25",
        "ocena" => 10
    )                                     //prosek 7,6
];

//fja prosekocena

function prosekOcena($student)
{
    $sum = 0;

    for ($i = 0; $i < count($student); $i++) {
        $sum += $student[$i]["ocena"];
    }
    return $sum / count($student);
}

echo "<h2>Zadatak 1</h2>";
echo  prosekOcena($student);
//echo $student[0]['ocena'];

//fja  MaxOcena

function MaxOcenaStudenta($student) {
    $max=$student[0]['ocena'];

    for ($i=0; $i <count($student) ; $i++) { 
        if ($student[$i]['ocena'] > $max) {
            $max= $student[$i]['ocena'];
        }
    }
    return $max;
}

echo "<h2> zadatak 2</h2>";
echo MaxOcenaStudenta($student);

//f-ja broj predmeta sa max ocenom

function brPredmetaMaxOcena($student) {
    $max=MaxOcenaStudenta($student);
    $brojac=0;

    for ($i=0; $i <count($student) ; $i++) { 
        if ($student[$i]['ocena'] == $max) {
            $brojac++;
        }
    }
    return $brojac;
}

echo "<h2> zadatak 3</h2>";
echo brPredmetaMaxOcena($student);

//student generacija (ako nema oscenu ispod 9 i ima vise 10ki)

function SudentGeneracijeJe($student) {
    $devet=0;
    $deset=0;
    for ($i=0; $i <count($student) ; $i++) { 
            if ($student[$i]['ocena'] >=9) {
                if ($student[$i]['ocena'] == 9) {
                    $devet++;
                }
                else {
                    $deset++;
                }
            }

            else {
                return false;
            }
    }

    if ($deset > $devet) {
        return true;
    }
    else {
        return false;
    }

}

if (SudentGeneracijeJe($student)) {
    echo"<br>Studen je kandidat za djaka generacije";
}
else {
    echo"<br>Studen NIJE kandidat za djaka generacije";

}

//////fja nadjuzipodnizmax ocene 

function NajduzipodnizMaxOceneStudenta($student) {
    $brojac=0;
    $maxNiz=0;
    $new=[];
    $brojacNizova=0;
    $maxOcena=MaxOcenaStudenta($student);


    for ($i=0; $i <count($student) ; $i++) { 
        if ($student[$i]['ocena'] == $maxOcena) {
            $brojac++;
                if ($i == count($student)-1) {
                    $new[$brojacNizova] = $brojac;
                    $brojacNizova++;
                }
           
        }
        else {
            if ($brojac > 0) {
                $new[$brojacNizova]=$brojac;
                $brojac=0;
                $brojacNizova++;
            }
        }
    }

    for ($i=0; $i <$brojacNizova; $i++) { 
        if ($new[$i] > $maxNiz ) {
            $maxNiz=$new[$i];
        }
    }
    return $maxNiz;
}
echo "<br>";
echo NajduzipodnizMaxOceneStudenta($student);

//Takođe, napisati i sledeće funkcije, za koje se kao parametar prenosi niz položenih ispita.
//8)Napisati funkciju kojoj se prosleđuje i godina kao dodatni parametar, a koja ispisuje predmete koje je polagao date godine.


function PolozenoDateGod($student,$godina) {

    for ($i=0; $i <count($student) ; $i++) { 
        $vreme=strtotime($student[$i]['Datum']);
        if (date('Y', $vreme) == $godina) {
           echo "<br>Predmeti koje je student polozio $godina : " .$student[$i]['ispit'];
        }
    }
}

$godina=2018;
echo"<h2>Zadatak 2-8</h2>";
echo PolozenoDateGod($student,$godina);

//9) Napisati funkciju kojoj se prosleđuje i godina kao dodatni parametar, a koja vraća prosečnu ocenu studenta na ispitima koje je polagao date godine. 

function ProsekpoGod($student, $godina) {
    $sum=0;
    $brojac=0;

    for ($i=0; $i <count($student) ; $i++) { 
        $vreme=strtotime($student[$i]['Datum']);
        if (date('Y', $vreme) == $godina) {
            $sum+=$student[$i]['ocena'];
            $brojac++;
        }
    }
    return $sum/ $brojac;
}
echo"<h2>Zadatak 2-9</h2>";
echo ProsekpoGod($student, $godina);

//10)  Napisati funkciju koja vraća naziv predmeta na kojem je student dobio maksimalnu ocenu. Ukoliko ima više ovakvih predmeta, vratiti onaj koji je najskorije položio.

function MaxocenaStudentaPoGod($student) {
    $maxOcena=MaxOcenaStudenta($student);
    $predmet=0;

    usort($student, function($a, $b) { 
        return strtotime($a['Datum']) - strtotime($b['Datum']); 
      });
   

    for ($i=0; $i <count($student) ; $i++) { 
       //asort($student);
        
        // $vreme=strtotime($student[$i]['Datum']);
       
        if ( $student[$i]['ocena'] ==$maxOcena) {
            
           $predmet=$student[$i]['ispit'];
           
        }
    }
    return $predmet;
}
echo "<h2>Zadatak 2-10</h2>";
echo MaxocenaStudentaPoGod($student);
//11)Napisati funkciju kojoj se prosleđuje i neki string kao dodatni parametar, kao i dva cela broja, a koja vraća broj ispita koje je student položio, a čiji naziv predmeta sadrži dati string, kao i da se ocena nalazi između zadata dva broja.

function Da($student, $n1, $n2, $string) {
    $brojac=0;

    for ($i=0; $i <count($student) ; $i++) { 
        if ( $n1 < $student[$i]['ocena'] && $n2 > $student[$i]['ocena'] ) {
                if (strpos($student[$i]['ispit'], $string) !==false) {
                    $brojac++;
                }
          
        }
    }

    return $brojac;
}

echo "<h2>Zadatak 2-11</h2>";
echo Da($student, 6, 9, 'ija'); //radi 
