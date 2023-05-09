<?php

$CitatMot= [
    "Citati M-1",
    "Citati M-2",
    "Citati M-3",
    "Citati M-4",
    "Citati M-5",
];

$AutoriMot = [
    "Autor M-1",
    "Autor M-2",
    "Autor M-3",
    "Autor M-4",
    "Autor M-5",
];

$Motiv = [
$CitatMot[0] => $AutoriMot[0],
$CitatMot[1] => $AutoriMot[1],
$CitatMot[2] => $AutoriMot[2],
$CitatMot[3] => $AutoriMot[3],
$CitatMot[4] => $AutoriMot[04],
];


foreach ($Motiv as $citat => $autor) {
echo "<p>" . $citat . $autor ."</p>";//
}

echo '<hr>';

//$randomValue = array_rand($Motiv(['$itat', '$autor']));
//echo $randomValue;
/////////////////////////array_rand(array_flip(['value_1', 'value_2']))

echo array_rand($Motiv);
echo '<hr>';
$r=0;

foreach ($Motiv as $citat => $autor) {

  $r= array_rand($Motiv);

}
print_r($r);
echo '<hr>';echo '<hr>';echo '<hr>';

$keys = array_keys($Motiv);
$random = $keys[array_rand($keys,1)];
Echo $random . "autor je" . $Motiv[$random];





?>

