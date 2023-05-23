<?php

$brojStrana=[500,200,330, 400, 120];
$cena = [5000, 3500, 1200, 900, 600];



// //prolazak 
// for ($i=0; $i <count($brojStrana) ; $i++) { 
    
// }
// $i=0;
// while ($i < count($brojStrana)) {
//    $i++;
// }

// //uzmimanje vrednosti el
// $br=$brojStrana[0];

function Maxprosek($cena, $brojStrana) {
    $max=$cena[0]/$brojStrana[0];

    for ($i=0; $i <count($brojStrana) ; $i++) { 
        $t=$cena[$i]/$brojStrana[$i];
        if ($max < $t) {
            $max=$t;
        }
    }
    return $max;
}



$brojStranaA=['knjiga1' => 500, "knjiga2"=>200, "knjiga"=>330, "knjiga"=>400, "knjiga"=>120];
$cenaA=['knjiga1' => 5000, "knjiga2"=>3500, "knjiga"=>1200, "knjiga"=>900, "knjiga"=>600];


function maxProsekA($brojStranaA, $cenaA){
    $max=0;
    foreach ($brojStranaA as $key => $value) {
        $t=$cenaA[$key]/$value;
        if ($max < $t) {
            $max=$t;
        }
    }
    return $max;
}


$nizKnjiga=[
    ["brojStrana" =>500, 
           "cena"=>5000],

    ["brojStrana" =>200, 
            "cena"=>3500],

    ["brojStrana" =>330, 
           "cena"=>1200],

    ["brojStrana" =>400, 
            "cena"=>900],

    ["brojStrana" =>120, 
           "cena"=>600],
];

function maxProsekNizA($nizKnjiga) {
    $max=0;
    for ($i=0; $i <count($nizKnjiga) ; $i++) { 
        $t=$nizKnjiga[$i]['cena']/ $nizKnjiga[$i]['brojStrana'];
    }
}


$dan=['temperatura'=>[8, 5, 15, -2, 0]];
for ($i=0; $i  <$dan['temperatura'] ; $i++) { 
    $t=$dan['temperatura'][$i];
}












?>