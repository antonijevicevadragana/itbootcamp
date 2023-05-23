<?php

// ZADATAK 1. (NIZOVI BROJEVA)
// Dat je niz celih brojeva u kojima se čuvaju ocene jednog studenta koje je dobio polagajući različite ispite.
//1) Kreirati niz po uslovima zadatka od barem pet elemenata.

$ocene = [10, 10, 9, 9, 9, 6, 10, 10, 10, 10, 10, 10, 10, 10, 9]; //5 desetki  //niz ima 3 i 2 podniza sa 10, treba vratiti 3

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


function studentGeneracije11($ocene){
    $devet = 0;
    $deset = 0;
    for($i = 0; $i < count($ocene); $i++){
        if($ocene[$i] < 9){
            return false;
        }
        else{
            if($ocene[$i] == 9){
                $devet++;
            }
            else{
                $deset++;
            }
        }
    }
    if($deset > $devet){
        return true;
    }
    else{
        return false;
    }
}
echo "<hr>";

if (studentGeneracije11($ocene)) {
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
//Takođe, napisati i sledeće funkcije, za koje se kao parametar prenosi niz položenih ispita.
echo"<hr><hr>";
$student = [
    array(
        "ispit" => "Biologija",
        "Datum" => "2018/01/23",
        "ocena" => 6
    ),
    array(
        "ispit" => "Geografija",
        "Datum" => "2020/06/27",
        "ocena" => 10                        
    ),
    array(
        "ispit" => "Spanski",
        "Datum" => "2023/09/05",
        "ocena" => 10
    ),
    array(
        "ispit" => "Menadzment",
        "Datum" => "2019/01/25",
        "ocena" => 10                
    ),
    array(
        "ispit" => "Engleski",
        "Datum" => "2020/06/25",
        "ocena" => 9
    )
];

//maxOcenu
 
function maxOcenaStudent($student) {
    $max=$student[0]['ocena'];

    for ($i=0; $i <count($student) ; $i++) { 
        if ($student[$i]['ocena'] > $max) {
            $max= $student[$i]['ocena'];
        }
    }
    return $max;
}
echo"<br>Max ocena studenta je:";
echo maxOcenaStudent($student);

//student generacije //vise 10 od 9 i nema ocene ispod 9

function StudentGeneracije1($student) {
    $devet=0;
    $deset=0;

    for ($i=0; $i <count($student) ; $i++) { 
        if ($student[$i]['ocena'] >= 9) {
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

if (StudentGeneracije1($student)) {
    echo"<br>Student je kandidat za djaka generacije";
}

else {
    echo"<br>Student NIJE kandidat za djaka generacije";

}
//8)Napisati funkciju kojoj se prosleđuje i godina kao dodatni parametar, a koja ispisuje predmete koje je polagao date godine.


function PolozeniIspiti($student, $godina) {
    for ($i=0; $i <count($student) ; $i++) { 
        $datum=strtotime($student[$i]['Datum']);
        if (date('Y', $datum) == $godina) {
            echo "<br>Student je $godina godine polozio" .$student[$i]['ispit'];
        }
    }
}
echo"<br>";
echo "<br> Zadatak 8";
$godina=2018;
echo PolozeniIspiti($student, $godina);

//9) Napisati funkciju kojoj se prosleđuje i godina kao dodatni parametar, a koja vraća prosečnu ocenu studenta na ispitima koje je polagao date godine. 

function ProsekOcena($student, $godina) {
$sum=0;
$brojac=0;
    for ($i=0; $i <count($student) ; $i++) { 
        $datum=strtotime($student[$i]['Datum']);
        if (date('Y', $datum) == $godina) {
            $sum+=$student[$i]['ocena'];
            $brojac++;
        }
    }

    if ($brojac>0) {
        return $sum/$brojac;
    }
    else{
        return 0;
    }
    
}
$godina=2018;
echo"<br>";
echo "<br>Zadatak 9, Godina $godina prosecna ocena studenta je ";
echo ProsekOcena($student, $godina);

//10)  Napisati funkciju koja vraća naziv predmeta na kojem je student dobio maksimalnu ocenu. Ukoliko ima više ovakvih predmeta, vratiti onaj koji je najskorije položio.

function ispitMaxOcena($student) {   
    $max=maxOcenaStudent($student);
    $maxDatum= strtotime($student[0]['Datum']);
    $naziv="";
                                                            
                                                                    

    for ($i=0; $i <count($student) ; $i++) {
        $datum=strtotime($student[$i]['Datum']);
        if ($student[$i]['ocena'] == $max && $datum >= $maxDatum) {      //kad je ocena max trazimo max datum
                $maxDatum= $datum; 
                 $naziv= $student[$i]['ispit']; 
        }                                                   
    }
    return $naziv;
   // print_r($student);                                                        
}
echo"<br>";
echo "<br>Zadatak 10, Max ocena studenta je iz predmeta: ";
echo ispitMaxOcena($student); 

//11)Napisati funkciju kojoj se prosleđuje i neki string kao dodatni parametar, kao i dva cela broja, a koja vraća broj ispita koje je student položio, a čiji naziv predmeta sadrži dati string, kao i da se ocena nalazi između zadata dva broja.
