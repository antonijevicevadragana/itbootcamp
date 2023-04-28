<?php

//1. Ispisati brojeve od 1 do 20.


for ($i=1; $i <=20 ; $i++) { 
    echo "$i ";
}


//Ispisati brojeve od 20 do 1.

for ($i=20; $i >=1 ; $i--) { 
    echo "$i ";
}


//3 Ispisati parne brojeve od 1 do 20. *
echo "<br>";
echo "<hr>";
for ($i=2; $i <=20 ; $i+=2) { 
    echo "$i ";
}
echo "<br>";

//II nacin

for ($i=1; $i <=20 ; $i++) { 
    if ($i %2 == 0) {
       echo "$i ";
    }
}
echo "<br>";
//4 spisati dvostruku vrednost brojeva  od 5 do 15. *
$pom=0;
for ($i=5; $i <=15 ; $i++) { 
    $pom = $i*2;
    echo "$pom ";
}
echo "<br>";
//5Odrediti sumu brojeva od 1 do 100. 
$sum=0;
$pom = $i;
for ($i=1; $i <=100 ; $i++) { 
    $sum +=$i;
    
}

echo "suma brojeva od 1 do 100 je $sum";
echo "<br>";
//6 Odrediti sumu brojeva od 1 do $n. 

$n=100;
$sum = 0;
for ($i=1; $i <=$n ; $i++) { 
    $sum = $sum +$i;
}
echo "suma brojeva od 1 do $n je $sum";
echo "<br>";
//7 Odrediti sumu brojeva od $n do $m.

$sum=0;
$n=$i=2;
$m=6;

for ($i=$n; $i <=$m ; $i++) { 
    $sum+=$i;
}
echo "Suma brojeva od $n do $m je $sum";
/////////////////////////////////////
//10.Preuzeti sa interneta tri slike i imenovati ih 1, 2 i 3. For petljom prikazati naizmenično te tri slike $n puta (na ekranu treba biti ukupno $n sličica). *


/* 
1%3=1=1.jpg;
2%3=2=2.jpg;
3%3=0==3.jpg
*/
$n=7;

for ($i=1; $i <= $n; $i++) { 

    if($i % 3 == 1) {
        echo "<img src='slike/1.jpg' width='70;' height='70;'>";
    }
    
    elseif ($i% 3 == 2) {
        echo "<img src='slike/2.jpg' width='70;' height='70;'>";
    }

    else { echo "<img src='slike/3.jpg' width='70;' height='70;'>";
    }
    
}
echo "<hr>";
//II nacin
$n =7;
for ($i=1; $i < $n ; $i++) { 

    $ost =$i%3;
    if($ost == 0) {
        $ost =3;
    }

    echo "<img src='slike/$ost.jpg' width='70;' height='70;'>";
}

//III nacin switch (% 3 je case)
echo "<hr>";

//Da je zadatak glasio da treba n puta da ispisete  slike 1.jpg, 2.jpg i 3jpg

$n =4;
for ($i=1; $i <=$n ; $i++) { 
    for ($j=1; $j <=3 ; $j++) { 
        echo "<img src='slike/$j.jpg' width='70;' height='70;'>"; 
        
    }
    echo "<br>"; //da bi 3 slicice bile u jednom redu
}

//for petlja u for petlji mora imati drugacije brojace. Ne mogu imati isti brojac. $i $j

//$j je da ne remetimo $i. $i ide od 1 do4, a $j ide od 1 do 3. Kad je i=1 onda prolazi kroz j i to 1,2,3 pa se onda startuje od pocetka

//Sahovska tabla 64 polja, 8*8,  boji se u bela/crna naizmenicno (belo ili crno bojiti div)

//11 Sabrati sve brojeve deljive sa 9 u intervalu od 1 do 30. *

$n = 30;
$sum=0;
for ($i=1; $i <= $n ; $i++) { 
    
        if ($i % 9 == 0) {
            $sum+=$i;
        }
}
echo "<p>Zbir brojeva od 1 do 30 deljivih sa 9 je $sum</p>";

//12 Odrediti proizvod svih brojeva deljivih sa 11 u intervalu od 20 do 100. *

$n =100;
$proizvod =1;
for ($i=20; $i <=$n; $i++) { 
        if ($i % 11 == 0) {
           $proizvod *=$i;
        }
}
$proizvod = number_format($proizvod,2, ",", ".");
echo "<p>Proizvod jsvih brojeva u intervalu od 20 do 100 deljivih sa 11 je $proizvod</p>";


//14Ispisati aritmetičku sredinu brojeva od $n do $m.
$n =5;
$m=9;
$sum=0;
$br=0;  //brojac 

for ($i=5; $i <= 9; $i++) { 
    $sum+=$i;
    $br++;
}
echo "<p>Zbir brojeva od $n do $m je $sum dok je broj brojeva $br</p>";
$aritmetickaSredina = $sum/$br;
echo "<hr>";
echo "Aritmeticka sredina je $aritmetickaSredina ";

//15 Prebrojati koliko brojeva od $n do $m je pozitivno, a koliko njih je negativno. *

$n = $i = -20;
$m =100;
$brojacP =0;
$brojacN=0;
for ($i=$n; $i < $m ; $i++) { 
    if ($i < 0 ) {
        $brojacP++;
       
    }
    else {
        $brojacN++;
    }
}

echo "<p>Pozitivnih brojeva ima $brojacP, a negativnih $brojacN</p>";

//16 Prebrojati koliko je brojeva od 5 do 50 koji su deljivi sa 3 ili sa 5. *

$i =5;
$n =50;
$brojac = 0;

for ($i=5; $i <+ $n ; $i++) { 
    if ($i % 3 == 0 || $i % 5 == 0) {
        $brojac++;
    }
}

echo "<p>U intervalu od 5 do 50 ima $brojac brojeva koji su deljivi sa 3 ili 5</p>";

//17 Prebrojati i izračunati sumu brojeva od n do m kojima je poslednja cifra 4 i parni su. *
$n =$i =20;
$m=30;
$sum= 0;
$brojac=0;

for ($i=$n; $i <= $m ; $i++) { 
    $poslednjaCifra = $i %10;

    if ($poslednjaCifra == 4 || $poslednjaCifra %2 == 0) {
        $brojac++;
        $sum+=$i;
    }
}

echo "<p>Suma je $sum, a takvih brojeva ima $brojac </p>";

//18 Ispisati brojeve od $n do $m, koji su deljivi sa $a.
$n =$i=15;
$m=32;
$a=5;
for ($i=$n; $i <=$m ; $i++) { 
    if($i % $a == 0) {
        echo "<p>Brojevi od $n do $m deljivi sa $a su $i</p>";
    }
}

// 2 nacin 
$n=$i=14;
$m =32;
$a=5;

$start = ceil($n/$a) *$a;  //da se dobije prvi broj deljiv sa 5 a to je 15
$end = floor($m/$a) *$a; //da se dobije poslednji broj deljiv sa 5 a to je 30
for ($i=$start; $i <= $end; $i+=$a) { 
    echo "<br>$i";            //ovde ide samo echo posto se samo prebroje ovi brojevi nema if
}


//19 Ispisati brojeve od $n do $m koji nisu deljivi sa $a. *

$n =$i =20;
$m=30;
$a=2;

for ($i=$n; $i <=$m ; $i++) { 
   if ($i % $a != 00 ) {
    echo "<p>Brojevi od $n do $m koji nisu deljivi sa $a su $i</p>";
   }
}


echo "<hr>";
//20 Odrediti sumu brojeva od $n do $m koji  nisu deljivi brojem $a. *

$n =$i =20;
$m=30;
$a=2;
$sum=0;

for ($i=$n; $i <=$m ; $i++) { 
   if ($i % $a != 00 ) {
    $sum+=$i;
   }
}
echo "<hr>";
echo "$sum";

//21 Odrediti proizvod brojeva od $n do $m koji su deljivi brojem $a, a nisu brojem $b.

$n=14;
$m=32;
$a=5;
$b=10;
$proizvod =1;

for ($i=$n; $i <= $m; $i++) { 
    if($i % $a==0 && $i % $b !=0) {
        $proizvod*=$i;
    }
}
echo "<br>Proizvod je $proizvod";

//II nacin
$n=14;
$m=32;
$a=5;
$b=10;
$proizvod =1;
$start = ceil($n/$a) *$a;  //da se dobije prvi broj deljiv sa 5 a to je 15
$end = floor($m/$a) *$a; //da se dobije poslednji broj deljiv sa 5 a to je 30
for ($i=$start; $i <= $end; $i+=$a) { 
   if($i % $b == 0) {
    continue;
   }
    $proizvod *=$i;
}
echo "<br>Proizvod je $proizvod";



?>