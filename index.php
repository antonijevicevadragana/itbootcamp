<?php
//zdravo  5 puta

$i=0;
while ($i <5) {
    echo"<p>Zdravo</p>";
    $i++;
    
}

// ispis brojeva od 0 do 4 (manje od 5,a ne jednako 5)
$i=0;
while ($i <5) {
    echo"<p>$i</p>";
    $i++;
    
}

//1. ispisati br. od 1 do 20:
//a) sve u istom redu i b)svaki u novom redu
//a
$i=1;
while ($i <= 20) {
    echo "$i ";
    $i++;
}
//b
$i=1;
while ($i <= 20) {
    echo "<p>$i </p>";
    $i++;
}

echo $i;

// 2. ispisati brojeve od 20 do 1

$i=20;
while ($i>=1) {
    echo "<p>$i </p>";
    $i--;
}
echo $i;

// $i je sad 0; zato sto je izaslo iz petlje, mora da bude 0 da bi izaslo iz petlje

//4. kreirati n paragrafa sa proizvoljnim tekstom i naizmenicno ih obojiti u 3 razlicite boje

$n=5;
$i =1;

while ($i <= $n) {
    if($i%3==0) {
        echo "<p style='color:red'>Hello $i</p>";
    }
    elseif ($i%3==1) {
        echo "<p style='color:blue'>Hello $i</p>";
    }
    else {echo "<p style='color:orange'>Hello $i</p>";}
  
   $i++;
}
//alternativno
$n=5;
$i =1;

while ($i <= $n) {
    if($i%3==0) {
        $boja ="purple";
    }
    elseif ($i%3==1) {
        $boja="lime";
    }
    else {$boja="magenta";}
  
    echo "<p style='color:$boja'>Hello $i</p>";
   $i++;
}

//3.nacin
$n=5;
$i =1;

while ($i <= $n) {
    $boja="magenta";
    if($i%3==0) {
        $boja ="purple";
    }
    elseif ($i%3==1) {
        $boja="lime";
    }
   
  
    echo "<p style='color:$boja'>Hello $i</p>";
   $i++;
}



//3. ispisati parne brojeve od 1 do 20

$i=0;
while ($i <= 20) {
    echo "<p>$i</p>";
    $i+=2;
}




//5.kreirati n proizvoljnih slika i staviti im naizmenicno dva okvira

$n=5;
$i=1;

while ($i <= $n) {
    if($i %2 == 0) {echo "<img src='lale.jpg' style='border:2px solid blue'>";}
    else {echo "<img src='lale.jpg' style='border:2px solid red'>";}
    
    $i++;
}

// 5dodatno n paragrafa savaki u random boju

$n=5;
$i=1;

while ($i <= $n) {
    $r =rand(0,255);
    $g =rand(0,255);
    $b =rand(0,255);

    $color = "rgb({$r},{$g},{$b})";
    echo "<p style='color:$color;'> Neki text</p>";
    $i++;
}

//6.Odrediti sumu brojeva od 1 do 100

$i=1;
$sum=0;
while ($i <= 100) {
    
    $sum=$sum+$i;  //$sum+=$i;
    $i++;
}
echo $sum;

//7.Odrediti sumu brojeva od 1 do n *

$i =1;
$n=5;
$sum=0;

while ($i<= $n) {
    $sum = $sum+$i;
    $i++;
}
echo "<p>Suma je $sum</p>";

//8 Odrediti sumu brojeva od n do m 
$n=1;
$m =3;
$sum = 0;

while ($n <= $m) {
    $sum = $sum+$n;
    $n++;
}
echo "<p>Suma je $sum</p>";

//9 Odrediti proizvod brojeva od n do m
$n=5;
$m=7;
$proizvod=1;

while ($n <= $m) {
   $proizvod *= $n;
   $n++;
}
echo $proizvod;
//10 Odrediti sumu kvadrata parnih i sumu kubova neparnih brojeva od n do m

$n=5;
$m=7;
$sum =0;

while ($n <= $m) {
    if($n %2 == 0) {$sum+= $n*$n;}
    if ($n %2 != 0) {$sum+=$n*$n*$n;}
    $n++;
}
echo "<p>$sum</p>";

//11 Odrediti sa koliko brojeva je deljiv uneti broj k

$k =18;
while ($k == $k) {

}















?>