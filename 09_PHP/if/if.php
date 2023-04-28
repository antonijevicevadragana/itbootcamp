<?php
$a = 0;
$b = 5;  
$c =10;                 

if ($a == $b) {
    echo "<p>$a je $b </p>";
}

// echo '<p>Nastavljam dalje</p>';

if ($a != $b) {  
    echo "<p>$a je razlicito od $b</p>";
}

if ($a <= $b) {
    echo "<p>$a je manje ili jednako od b</p>";
}

echo "Nastavljamo sa if ista vrednosti po vrednosti i tipu";

$br1 =3;
$br2="3";

if ($br1 == $br2) {
    echo "<p> $br1 jedanko je po vrednosti  sa $br2</p>";
}


if ($br1 === $br2) {
    echo "<p> $br1 jedanko je po vrednosti i tipu sa $br2</p>";
}

//if else

$a=3;
$b=5;

if ($a>$b) {
    echo "<p> $a je vece od $b</p>";
} else {
    echo "<p> $a je manje ili jednako od $b</p>";
}

echo "Nastavljamo ponovo dalje";

//vezbanja
$a =19.35;

$b = -3.14;


if ($a > $b) {
    echo "<p>Veci je broj $a </p>";
}

else echo "<p>Veci je broj $a </5>";


//tenary operator
echo "<p>Veci  broj" . (($a > $b)? $a :$b) ."</p>";

$dobaDana = date ("a");
if ($dobaDana == "am") {
    echo "<p>Pre podne </p>";
}
else {
    echo "<p>Posle podne </p>";
}

//alternativno
$dobaDana = date ("a");
if ($dobaDana == "pm") {
    echo "<p>Posle podne </p>";
}
else {
    echo "<p>Pre podne </p>";
}

//zadatk 3

$pol = "M";

if ($pol == "M") {
    echo "<p> <img src='img/m.png' alt='muski pol'> </p>";
}

else {
    echo "<p> <img src='img/f.png' alt='zenski pol'> </p>";
}

//zadatka 2

$temperatura = 17.2;

if ($temperatura >=0) {
    echo "<p>Temperatura je u plusu </p>";
} else {
    echo "<p>Temperatura je u minusu </p>";
}

//zadatak 5 

$trenutnaGodina= date("Y");
$godinaRodjenja = 1991;
$razlika = $trenutnaGodina -$godinaRodjenja;
//echo "$razlika";

if ( $razlika >= 18) {
    echo "<p>Osoba je punoletna</p>";
} else {
    echo "<p>Osoba nije punoletna</p>";
}

//zadatak 6
// $n1 =3;
// $n2=1;
// $n3=4;

// if ($n1 > $n2 && $n1> $n3) {
//     echo "<p>Broj $n1 je najveci</p>";
// }
// elseif ($n1 > $n2) {
//     echo "<p>Broj $n1 je drugi po velicini </p>";
    
// }
// else
// {
//     echo "<p>Broj $n1 je najmanji</p>";  
// }


// if ($n2>$n3 && $n2>$n1) {
//     echo "<p>Broj $n2 je najveci</p>";
// }
// elseif ($n2 > $n3) {
//     echo "<p>Broj $n2 je drugi po velicini </p>";
    
// } else {
//     echo "<p>Broj $n2 je najmanji</p>";  
// }


// if ($n3>$n1 && $n3>$n2) {
//     echo "<p>Broj $n3 je najveci</p>";
// }
// elseif ($n3 > $n2) {
//     echo "<p>Broj $n3 je drugi po velicini </p>";
    
// } else {
//     echo "<p>Broj $n3 je najmanji</p>";  
// }



$a=9;
$b=-6;
$c=6;

if ($a > $b) {
   $pom =$a;
   $a= $b;
   $b =$pom;
}
//nakon ovog ifa $ a je sigurno manja od $b

if ($a >$c) {
    $pom =$a;
    $a =$c;
    $c =$pom;
} //nakon ovog ifa u a je sigurno najmanja vrednost od zadate tri

if ($b>$c) {
    $pom = $b;
    $b = $c;
    $c =$pom;
}
//Nakon ovog if vazi a<= b <=c

echo "<p>$a <= $b<= $c</p> ";

// if else elseif









?>