<?php 

$broj = 30;

if ($broj <= 10) {
    echo "<p>Broj prve desetice</p>";
} 
elseif ($broj <=20) {
    echo "<p>Broj druge desetice</p>";

}
else {
    echo "<p>Broj je veci od dvadeset</p>";

}
//alternativno

if ($broj >20) {
    echo "<p>Broj je veci od dvadeset</p>";

} 
elseif( $broj >10) {
    echo "<p>Broj druge desetice</p>";

}
else {
    echo "<p>Broj prve desetice</p>";

}

//zadatak 7
$poeni =73;

if ($poeni <=50) {
    echo "<p>Student je pao ispit</p>";
    
} elseif ($poeni <= 60) {
    echo "<p>Ocena 6</p>";

}
 elseif ($poeni <= 70) {
    echo "<p>Ocena 7</p>";

}
elseif ($poeni <= 80) {
    echo "<p>Ocena 8</p>";

}

elseif ($poeni <= 90) {
    echo "<p>Ocena 9</p>";

}

else {
    echo "<p>Ocena 10</p>";

}

//zadatak 8 

$day = date("l");






?>