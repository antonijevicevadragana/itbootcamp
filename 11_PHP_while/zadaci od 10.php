<?php

//ovo je sum svih i panih na kvadrati i neparnih  na kubni

$n = 5;
$m = 7;
$sum = 0;


while ($n <= $m) {
    if ($n % 2 == 0) {
        $sum += $n * $n;
    }
    if ($n % 2 != 0) {
        $sum += $n * $n * $n;
    }
    $n++;
}
echo "<p>$sum</p>";

//10 Odrediti sumu kvadrata parnih i sumu kubova neparnih brojeva od n do m

$n = $i = 1;   //$n smo dali vrednost $i
$m = 10;
$parni = 0;
$neparni = 0;

while ($i <= $m) {
    if ($i % 2 == 0) {
        $parni = ($i * $i) + $parni; //$i**2  to bi znacilo $i na kvadrat
    } else {
        $neparni = ($i * $i * $i) + $neparni; // $i na kub je $i**3
    }
    $i++;
}
echo "<p>Suma parnih je $parni suma neparnih je $neparni</p>";

//11 Odrediti sa koliko brojeva je deljiv uneti broj k
$k = 18;

$n = 1;
$counter = 0;
$pom = $k;

while ($n <= $k) {
    if ($k % $n == 0) {
        $counter++;
    }
    $n++;
}
echo "<p>Broj $pom je deljiv sa $counter brojeva<p>";

//12. Odrediti da li je prirodan broj N prost. Broj je prost samo ako je deljiv sa 1 i sa samim sobom.
$n = 5; //za ovaj broj proveravamo da li je prost
$i = 1;
$counter = 0;

while ($i <= $n) {

    if ($n % $i == 0) {
        $counter++;
    }
    $i++;
}
if ($counter > 2 || $n <= 1) {
    echo "<p>Broj $n nije prost</p>";
} else {
    echo "<p>Broj $n je prost</p>";
}
//II nacin

$k = 7;
$i = 2;
$prost = true; //pretpostavka da je broj prost
while ($i < $k) {  //moze i $i <= sqrt($k) - po teoremi kad do korena nije broj deljiv ni jednim onda je prost.
    if ($k % $i == 0) {
        $prost = false;
        break;
    }
    $i++;
}
if ($prost == true) {
    echo "<p>Broj $k jeste prost</p>";
} else {
    echo "<p>Broj $k nije prost</p>";
}


//13 Množiti sve brojeve od 20 ka 1, sve dok proizvod ne predje 10.000. Prikazati konacan rezultat crvenom bojom a poslednje pomnozeni broj - zelenom.

$i = 20;
$proizvod = 1;


while ($i >= 0) {
    $proizvod *= $i;

    if ($proizvod >= 10000) {
        break;
    }
    $i--;
}


echo "<p>Konacan rezultat je <span style='color:red;'> $proizvod </span>, a poslednji pomnozen broj je <span style='color:green;'>$i</span> </p>";

//14 14) Uneti 2 broja. Ukoliko je prvi broj manji od drugog broja, množiti prvi broj samim sobom, sve dok rezultat ne bude veći od drugog unetog broja. U suprotnom na ekranu ispisati “GREŠKA”.

$n = 2;
$m = 7;


$n = 2;
$m = 7;
$pomocno =2; //zato sto nam treba da se mnozi samo sa sobom
$pro = 1;


while ($n <= $m) {
    $pro *= $pomocno; //ovde je *pomocno zato sto se mnozi samo sa sobom
    $n++;

    if ($pro >= $m) {
        break;
    }
}

if ($pro <= $m) {
    echo "<p>$pro</p>";
} else {
    echo "<p>Greska</p>";
}

echo "$pro";

//

$n = 2;
$m = 7;
$pomocna =$n;
$proizvod = 1;

while ($n <= $m && $proizvod <= $m) {
    $proizvod = $proizvod * $pomocna;
    $n++;

}

if ($proizvod >= $m) {
    echo "<p>Greska</p>";
} else {
    echo "<p>Proizvod je $proizvod</p>";
}