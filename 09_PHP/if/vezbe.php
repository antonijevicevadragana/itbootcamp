<?php 

//zadatak 8

$day = date("l");
//echo $day;

switch ($day) {
    case "Sunday":
        echo "Vikend je";
        break;
    case "Saturday":
        echo "Vikedn je";
    break;
    default:
    echo "Radni je dan";
}



// zadatak 9

$time = date("H");
// echo $time;

if ($time < 12) {
    echo "<p>Dobro jutro</p>";
} 
elseif ( $time < 18) {echo "<p>Dobra dan</p>";}
else {
    echo "<p>Dobro vece</p>";
}

//zadatak 10
$date = date("Y/m/d");
// echo $date;
// $date2 = mktime(2023,07, 14);
$date2=mktime(11,11,11,6,28,2023); //mktime prvo sati, minuti, sekunde, mesec, dan, godina - tako se unosi
$dateD= date("Y/m/d",$date2);
echo $dateD;

if ($date < $dateD) {
    echo "<p>Prvi datum je raniji</p>";
} else {
    echo "<p>Drugi datum je raniji</p>";
}

//zadatak 11
$time = date("H:i");
if ($time <= "17:00") {
   echo "<p>Firma je otvorena</p>";
} else {
    echo "<p>Firma je zatvorena</p>";
}

//echo $time;

// echo $time;


echo "<hr>";

//RESENJE II NACIN - Stefanova resenja
//zadatak8

$dan = date("w"); // dani od 0-6
if ($dan == 0) {echo "<p>Vikend</p>";}
elseif ($dan ==6) {echo "<p>Vikend</p>";}
else {echo "<p>Radni dan</p>";}


//zadatak 10
//prvi datum
$d1=21;
$m1=4;
$g1=2023;
//drugi datum
$d2=18;
$m2=7;
$g2 =1980;

if($g1<$g2) {echo "<p>raniji datum je $d1.$m1.$g1</p>";}
elseif ($g2 < $g1) {echo "<p>raniji datum je $d2.$m2.$g2</p>";}
elseif($m1<$m2){echo "<p>raniji datum je $d1.$m1.$g1</p>";}
elseif ($m2<$m1){echo "<p>raniji datum je $d2.$m2.$g2</p>";}
elseif($d1<$d2){echo "<p>raniji datum je $d1.$m1.$g1</p>";}
elseif($d2<$d1){echo "<p>raniji datum je $d2.$m2.$g2</p>";}
else {echo "<p>Dva datuma su indeticna</p>";}


//zadatak 11
$sati = date("H");
if($sati < 9 ){echo "<p>Firma ne radi</p>";}
elseif ($sati >= 17){echo "<p>Firma ne radi</p>";}
else {echo "<p>Firma radi</p>";}



//zadatak 12
//prvi lekar
$p1 = 9;
$k1 = 17;

//drugi lekar
$p2=11;
$k2=18;

if ($k1 < $p2) {  //prvi zavrsio pre nego sto je drugi poceo
    echo"<p> NE preklapaju se</p>";
} 
elseif($k2< $p1) {echo"<p> NE Preklapaju se</p>";}  //drugi zavrsio pre nego sto je prvi poceo
else { 
    echo"<p>Preklapaju se</p>";
}
//zadatak 13;
$n =13;

if ($n %2 ==0 ) {
   echo "<p> $n je paran broj</p>";
}
else {echo "<p> $n je neparan broj</p>";}

//zadatak 15

$n1 = 3;
$n2 = 8;

if ($n1>$n2) {
    echo $n1-$n2;  //mozes napraviti medju promenjivu $rez=$n1-$n2; pa onda echo $rez; 
} else {
    echo $n2-$n1;
}

//zadatak 16

if ($n1 <= 0) {
    //echo $n1-1;
    echo "<br>" . $n1-1;
} else {
    //echo $n1+1;
   echo "<br>" . $n1+1;
}

//zadatak 17
$br1 =8;
$br2=7;
$br3 =2;





?>