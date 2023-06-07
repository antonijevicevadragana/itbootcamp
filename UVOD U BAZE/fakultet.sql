CREATE DATABASE `fakultet` CHARACTER SET utf16 COLLATE utf16_slovenian_ci;

CREATE TABLE `predmeti` (
`id` INT PRIMARY KEY,
`naziv` VARCHAR(50) NOT NULL,
`smer`VARCHAR(50) NOT NULL
)ENGINE=INNODB;

CREATE TABLE `studenti` (
    `index` VARCHAR(20) PRIMARY KEY,
    `ime` VARCHAR(50) NOT NULL,
    `prezime` VARCHAR(50) NOT NULL
)ENGINE=INNODB;

CREATE TABLE `ispiti`(
    `id` INT PRIMARY KEY,
    `datum` DATE NOT NULL,
    `ocena` TINYINT(2)
)ENGINE=INNODB;

CREATE TABLE `nastavnici` (
    `id` INT PRIMARY KEY,
    `ime`VARCHAR(50) NOT NULL,
    `prezime` VARCHAR(50) NOT NULL
)ENGINE=INNODB;

--n m veza studenti i ispiti
-- tabelu ispiti sirimo stranim kljucevima
-- student_indeks
-- predmet_id
-- nastavnik_id (edited)

ALTER TABLE `ispiti`
ADD
`student_indeks`VARCHAR(20) NOT NULL,
ADD
`predmet_id` INT NOT NULL;

--dodavanje stranih kljuceva u tabeli ispiti
ALTER TABLE `ispiti`
ADD CONSTRAINT `ispiti_studentIndex_fk`
FOREIGN KEY (`student_indeks`)
REFERENCES `studenti`(`index`)
ON UPDATE CASCADE,

ADD CONSTRAINT `ispiti_predmet_fk`
FOREIGN KEY (`predmet_id`)
REFERENCES `predmeti`(`id`)
ON UPDATE CASCADE;


ALTER TABLE `ispiti`
ADD
`nastavnik_id` INT NOT NULL;

--dodavanje stranog kljuca u tabeli ispiti na nastavnik_id
ALTER TABLE `ispiti`
ADD CONSTRAINT `ispiti_nastavnik_fk`
FOREIGN KEY (`nastavnik_id`)
REFERENCES `nastavnici`(`id`)
ON UPDATE CASCADE;

--popunjavanje tabele u file fakultet.sql

--select

-- Napisati sve ispite koje su održani na fakultetu (ispisati ime i prezime studenta koji polaze ispit, naziv predmeta, ime i prezime profesora, datum polaganja, kao i ocenu koju je dobio).

SELECT * FROM `ispiti` 
LEFT JOIN `studenti` ON `ispiti`.`student_indeks`=`studenti`.`index` --podaci iz tabele studenti su prosireni sa podacima iz tabele studenti vezani za index
LIMIT 1;

SELECT * FROM `ispiti` 
LEFT JOIN `studenti` ON `ispiti`.`student_indeks`=`studenti`.`index` 
LEFT JOIN `predmeti` ON `ispiti`.`predmet_id`=`predmeti`.`id`



SELECT * FROM `ispiti` 
LEFT JOIN `studenti` ON `ispiti`.`student_indeks`=`studenti`.`index` 
LEFT JOIN `predmeti` ON `ispiti`.`predmet_id`=`predmeti`.`id`
LEFT JOIN `nastavnici` ON `ispiti`.`nastavnik_id`=`nastavnici`.`id`;

--ovo je konacan rezultat
SELECT 
CONCAT(`studenti`.`ime`, " ", `studenti`. `prezime`)AS `student`,
`predmeti`.`naziv`,
CONCAT(`nastavnici`.`ime`, " ", `nastavnici`. `prezime`)AS `nastavnik`,
`ispiti`.`datum`,
`ispiti`.`ocena`
FROM `ispiti` 
LEFT JOIN `studenti` ON `ispiti`.`student_indeks`=`studenti`.`index` 
LEFT JOIN `predmeti` ON `ispiti`.`predmet_id`=`predmeti`.`id`
LEFT JOIN `nastavnici` ON `ispiti`.`nastavnik_id`=`nastavnici`.`id`;


SELECT 
CONCAT(`studenti`.`ime`, " ", `studenti`. `prezime`)AS `student`,
`predmeti`.`naziv`,
CONCAT(`nastavnici`.`ime`, " ", `nastavnici`. `prezime`)AS `nastavnik`,
`ispiti`.`datum`,
`ispiti`.`ocena`
FROM `ispiti` 
LEFT JOIN `studenti` ON `ispiti`.`student_indeks`=`studenti`.`index` AND `studenti`.`ime` LIKE "M%"
LEFT JOIN `predmeti` ON `ispiti`.`predmet_id`=`predmeti`.`id`
LEFT JOIN `nastavnici` ON `ispiti`.`nastavnik_id`=`nastavnici`.`id`;

--studenti lepis na ispit, pa onda predmet lepis na ispit, pa nastavnici lepits na ispit

--------------------------------------------
-- Uraditi prethodni zadatak, samo ispisati one ispite koji su se polagali u tekućoj godini.
SELECT 
CONCAT(`studenti`.`ime`, " ", `studenti`. `prezime`)AS `student`,
`predmeti`.`naziv`,
CONCAT(`nastavnici`.`ime`, " ", `nastavnici`. `prezime`)AS `nastavnik`,
`ispiti`.`datum`,
`ispiti`.`ocena`
FROM `ispiti` 
LEFT JOIN `studenti` ON `ispiti`.`student_indeks`=`studenti`.`index` 
LEFT JOIN `predmeti` ON `ispiti`.`predmet_id`=`predmeti`.`id`
LEFT JOIN `nastavnici` ON `ispiti`.`nastavnik_id`=`nastavnici`.`id`
WHERE `ispiti`.`datum`="2023-05-15";

--3) Za dato ime i prezime studenta, ispisati sve ispite koje je polagao dati student.

SELECT 
CONCAT(`studenti`.`ime`, " ", `studenti`. `prezime`)AS `student`,
`predmeti`.`naziv`,
CONCAT(`nastavnici`.`ime`, " ", `nastavnici`. `prezime`)AS `nastavnik`,
`ispiti`.`datum`,
`ispiti`.`ocena`
FROM `ispiti` 
LEFT JOIN `studenti` ON `ispiti`.`student_indeks`=`studenti`.`index` 
LEFT JOIN `predmeti` ON `ispiti`.`predmet_id`=`predmeti`.`id`
LEFT JOIN `nastavnici` ON `ispiti`.`nastavnik_id`=`nastavnici`.`id`
WHERE `studenti`.`ime` ="Nikola" AND `studenti`.`prezime` ="Devic";


-- Uraditi zadatak 3) tako da se ispišu samo takvi ispiti na kojima je ocena veća od 8.

SELECT 
CONCAT(`studenti`.`ime`, " ", `studenti`. `prezime`)AS `student`,
`predmeti`.`naziv`,
CONCAT(`nastavnici`.`ime`, " ", `nastavnici`. `prezime`)AS `nastavnik`,
`ispiti`.`datum`,
`ispiti`.`ocena`
FROM `ispiti` 
LEFT JOIN `studenti` ON `ispiti`.`student_indeks`=`studenti`.`index` 
LEFT JOIN `predmeti` ON `ispiti`.`predmet_id`=`predmeti`.`id`
LEFT JOIN `nastavnici` ON `ispiti`.`nastavnik_id`=`nastavnici`.`id`
WHERE `studenti`.`ime` ="Nikola" AND `studenti`.`prezime` ="Devic" 
AND `ispiti`.`ocena` >8;

-- Za dato ime i prezime studenta, odrediti njegovu prosečnu ocenu.

SELECT AVG(`ispiti`.`ocena`)
FROM `ispiti` 
LEFT JOIN `studenti` ON `ispiti`.`student_indeks`=`studenti`.`index` 
LEFT JOIN `predmeti` ON `ispiti`.`predmet_id`=`predmeti`.`id`
LEFT JOIN `nastavnici` ON `ispiti`.`nastavnik_id`=`nastavnici`.`id`
WHERE `studenti`.`ime` ="Nikola" AND `studenti`.`prezime` ="Devic" AND `ispiti`.`ocena`>5 ;


-- AND `ispiti`.`ocena` >8;

-- Za dat naziv predmeta odrediti maksimalnu ocenu na nekom ispitu iz tog predmeta.

SELECT 
MAX(`ocena`) AS `maksimalna ocena iz CSS`
FROM `ispiti`
LEFT JOIN `predmeti` ON `ispiti`.`predmet_id`=`predmeti`.`id`
WHERE `predmeti`.`naziv` = "CSS";

--sumu ocena iz odredjenog predmeta

SELECT SUM(`ocena`)
FROM `ispiti`
LEFT JOIN  `predmeti` ON `ispiti`.`predmet_id` = `predmeti`.`id`
WHERE `predmeti`.`naziv` ="CSS";

SELECT `ocena` FROM `ispiti`
LEFT JOIN `predmeti` ON `ispiti`.`predmet_id` = `predmeti`.`id`
WHERE `predmeti`.`naziv` = "CSS";  -- ovo su sve ocene iz tog predmeta izlistane



-- Za datu godinu odrediti prosečnu ocenu svih ispita koji su se polagali u toj godini.


SELECT AVG(`ocena`) AS `prosecna ocena svih ispita na dan 2023-06-05`
FROM `ispiti`
LEFT JOIN `predmeti` ON `ispiti`.`predmet_id` = `predmeti`.`id`
WHERE `ispiti`.`ocena` > 5 AND `ispiti`.`datum` = "2023-06-05";


