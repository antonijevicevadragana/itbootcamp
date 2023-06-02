<?php

require_once "student.php";
require_once "budzetskiStudent.php";
require_once "samofinansirajuciStudent.php";

$b1=new budzetskiStudent("Mika Mikic", 180, 8.3);
$b2=new budzetskiStudent("Mara Maric", 75, 8.1);

$s1=new SamofinansirajuciStudent("Pera Peric", 180, 8.3, 36);

$studenti =[$b1, $b2, $s1];
foreach ($studenti as $student) {
    $student->cenaPrijaveIspita();
}


?>