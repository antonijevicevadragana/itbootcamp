<?php

// ZADATAK 1. (NIZOVI BROJEVA)
// Dat je niz celih brojeva u kojima se čuvaju ocene jednog studenta koje je dobio polagajući različite ispite.
//1) Kreirati niz po uslovima zadatka od barem pet elemenata.

$ocene = [10,10,9,9,9,10,10,10,10,10,10,10,10,9]; //5 desetki  //niz ima 3 i 2 podniza sa 10, treba vratiti 3

// Za sve funkcije iz ovog zadatka, kao parametar se prenosi niz ocena.


//2) Napisati funkciju koja vraća prosečnu ocenu studenta.

function prosek($ocene) {
    $sum=0;
    for ($i=0; $i <count($ocene) ; $i++) { 
       $sum+=$ocene[$i];
    }
    return $sum/count($ocene);
}
echo prosek($ocene);

//3) Napisati funkciju koja vraća maksimalnu ocenu koju je student dobio u toku studija.

function maxOcena($ocene) {
    $max=$ocene[0];
    for ($i=0; $i <count($ocene) ; $i++) { 
        $trenutna = $ocene[$i];
        if ($trenutna  > $max) {
            $max= $trenutna; 
        }
    }
    return $max;
}
echo "<br>";
echo maxOcena($ocene);

//4) Napisati funkciju koja vraća broj predmeta na kojima je dobio maksimalnu ocenu u toku studija.

function BrojPredmeta($ocene) {
    $brojac=0;
    $maxOcena = maxOcena($ocene);
    for ($i=0; $i <count($ocene) ; $i++) { 
        if ($maxOcena == $ocene[$i]) {
            $brojac++;
        }
    }
    return $brojac;
}
echo "<br>";
echo BrojPredmeta($ocene);


// 5)Student je kandidat za studenta generacije ako je na ispitima dobijao samo devetke i desetke, i pri tome broj desetki nije manji od broja devetki. Napisati funkciju koja vraća da li je student kandidat za studenta generacije ili ne.

function StudentGeneracije($ocene) {
    $brojacDesetke=0;
    $brojacDevet=0;
    for ($i=0; $i <count($ocene) ; $i++) { 
        if ($ocene[$i] >=9) {
                if ($ocene[$i] == 9) {
                    $brojacDevet++;
                }
                elseif ($ocene[$i] == 10) {
                    $brojacDesetke++;
                }
        } 

        else {
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
}
else {
    echo "<br>Nije";
}


//6) Napisati funkciju koja vraća maksimalnu dužinu podniza u kojoj je dobijao maksimalnu ocenu (ova dužina može biti jednaka 1). 
// Na primer, za niz [10, 10, 9, 10, 10, 10, 8, 9, 9, 9, 9, 10, 10, 10], funckija treba da vrati 3.
// Na primer, za niz [6, 8, 6, 6, 6, 7, 7, 9, 7, 7, 7, 7], funkcija treba da vrati 1.


    function MaxDuzinaPodniza($ocene) {
        $maxOcena= maxOcena($ocene);
        $brojacNizova=0;
        $brojac=0;
        $maxNiz=0;
        $new=[]; //novi niz

        for ($i=0; $i <count($ocene) ; $i++) { 
            if ($ocene[$i] == $maxOcena) {  //ocena je jednaka max oceni preuzetoj iz fje maxOcena
                $brojac++;                     //kad je tacno brojac se povecava
                    if ($i == count($ocene)-1) {          //proverava zadnji element bez ovoga ga ne broji, ne pravi niz od njega
                        $new[$brojacNizova] = $brojac;
                        $brojacNizova++;
                    }
               
            }

            else {
                if ($brojac > 0) {           //kada ispadne iz if-a odnosno kada je ocena manja od max onda dodaje novi niz cija je duzina brojac Nizova i resetuje brojac. Zatim dodaje novi brojac Nizova. 
                    $new[$brojacNizova] = $brojac;
                    $brojac=0;
                    $brojacNizova++;
                }
            }
        }

       for ($i=0; $i <$brojacNizova ; $i++) {    //druga for petlja koja ide do brojaca nizova, u mom primeru ima samo dva niza.
            if ($new[$i] > $maxNiz) {             //proverava da li je novi niz[$i] veci od maxNiz koji je podesen na 0. AKo jeste onda je $max niz vrednost tog novog niza.
                $maxNiz =$new[$i];
            }
       }

       return $maxNiz;  //max niz je 3, jeee dobila sam
    }

    echo "<br>";
    echo MaxDuzinaPodniza($ocene);

    
?>

