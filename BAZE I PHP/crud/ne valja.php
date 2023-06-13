<?php

require_once "connection.php";

$upit = "CREATE TABLE IF NOT EXISTS`studenti` (
`id` INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
`ime` VARCHAR(50) NOT NULL,
`prezime` VARCHAR(100) NOT NULL,
`email` VARCHAR(100),
`broj_telefona` VARCHAR(20)
);";

$upit2 ="INSERT INTO `studenti` VALUES 
(null,'Dragana', 'Antonjevic', 'antonijevicd.1991@gmail.com', '069719230')";

$upit3="SELECT * FROM `studenti`;";

// ovako se poziva upit ili samo $conn->query($upit2);
if ($conn->query($upit2)) {                        
    echo "Uspesno napravljena tabela studenti";
 }
 else {
     echo "doslo je do greske: ". $conn->connect_error;
 }


 //samo za selekt upite
//mora da se napravi nova var u koju stavjamo query pa se onda poziva.

$r=$conn->query($upit3); 
// ovako se hvata red po red fetch_assoc()
if ($r->num_rows > 0) {
    while ($row = $r->fetch_assoc()) {
        echo "<p>id =". $row['id']. "ime: " . $row['ime']. "</p>";
    }
}
else {
    echo "Nema rezultata za ovaj select" . $upit3;
}
 
// unutar while petlje hvatamo sve redove sa fetch_all


// II nacin 
$r2 = $conn->query($upit3);
$arr = $r2-> fetch_all(MYSQLI_ASSOC);
if (count($arr)> 0) {
foreach($arr as $row) {
    echo "<p>id =". $row['id']. "ime: " . $row['ime']. "</p>";
}
} else {
    echo "Nema rezultata za ovaj select" . $upit3;
}



//novi upit kojim dodajemo 

// CREATE TABLE `db update` (
//     `id` INT(10)  UNSIGNED PRIMARY KEY,
//     `opis` VARCHAR(50) NOT NULL,
//     );

$upiti=[];

$upiti[] = [
    'id' => 1,
    'upit' => "CREATE TABLE IF NOT EXISTS `studenti` (
            `id` INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            `ime` VARCHAR(50) not null,
            `prezime` VARCHAR(100) not null,
            `email` VARCHAR (100),
            `broj_telefona` VARCHAR(20)
            );",
    'opis' => 'Dodavanje tabele studenti'
];
// $upiti[] = [
//     'id' => 1,
//     'upit' => "INSERT INTO `studenti` VALUES (null,'Dragana', 'Antonjevic', 'antonijevicd.1991@gmail.com', '069719230')",
//     'opis' => 'Insert u tabelu studenti'
// ];
$upiti[] = [
    'id' => 2,
    'upit' => "INSERT INTO `studenti` VALUES (null, 'Elizabeta', 'Markus', 'elizabeta.markus@gmail.com','0649191125')",
    'opis' => 'Insert u tabelu studenti'
];
$upiti[] = [
    'id' => 3,
    'upit' => "INSERT INTO `studenti` VALUES (null, 'Stefan', 'Stanimirovic', null, null)",
    'opis' => 'Insert u tabelu studenti'
];


// $izvrseni=$conn->query("SELECT * FROM `db_update`;");
// $arr= $izvrseni->fetch_all($izvrseni);
// $ids=[];

// foreach ($arr as $value) {
//     $ids[]=$value['id'];
// }


$izvrseni = $conn->query("SELECT id FROM `db_update`;");
$arr = $izvrseni->fetch_all(MYSQLI_ASSOC);
$ids = [];
foreach ($arr as $value) {
    $ids[]=$value['id'];
}
if(count($upiti)==count($ids)){
    echo "SVI UPITI SU VEC IZVRSENI";
}



// foreach ($upiti as $u) {
//   $r =  $conn->query($u['upit']);
//   if ($r) {
//     //uspesno izvrsen
//     $r2 = $conn->query("INSERT INTO db_update update VALUES (".$u['id'].", '".$u['opis']."')");

//   }
//   echo "Upit sa id= :".$u['id']. "je uspesno izvrsen";

//   else {
//     "Doslo do greske: " . $conn->error;
//     break;
//   }
// }


























?>