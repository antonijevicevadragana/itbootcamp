<?php
$pol ="z";
$godine =24;

if($pol == "m") 
{
    if($godine>=18) {echo "<p>Musko punoletno</p>";}
    else {echo "<p>Musko  maloletno</p>";}
}

else {
    if($godine >=18){echo "<p>Zensko punoletno</p>";}
    else  {echo "<p>Zensko  maloletno</p>";}
}





//zadatak

$pol = 'z';
$godine =24;

if($pol == "m" && $godine >=18) {
    echo"Musko punoletno";
}

elseif ($pol == "m" && $godine <18)
 {echo"Musko nije punoletno";}

 elseif($pol == "z" && $godine >=18) {
    echo"Zensko punoletno";
}
else {echo"Zensko nije punoletno";}

//17

$a=5;
$b=9;
$c=-3;

$max=$a;
if ($b > $max) {
    $max = $b;
}
if($c > $max) {$max=$c;

}

$min = $a;
if ($b <$min) {$min = $b;}
if ($c <$min) {$min =$c;}











?>