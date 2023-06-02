-- select sluzi za citanje podataka iz tabele
--SELECT je komanda za čitanje podataka iz tabele je :
-- SELECT column1, column2, columnN FROM table_name;


-- Ukoliko želimo pa pročitamo polja iz svih kolona, koristimo sintaksu:
-- SELECT * FROM table_name;

--citanje podatka iz baze
SELECT * FROM `tasks`;  --citanje svih podataka iz tabele tasks

SELECT `title`, `start_date`, `due_date` FROM `tasks`;  --citanje samo pojedinih redova

SELECT `name`, `age`, `address` FROM `customers`;

--dohvati sva !razlicita! imena koja imaju nasi potrosaci

SELECT DISTINCT `name` FROM `customers`; --samo one sa razlicitim imenima
SELECT DISTINCT `name`, `age`, `address` FROM `customers`;
SELECT DISTINCT `id`, `name` FROM `customers`;   --razlicite i id i ime
SELECT DISTINCT `salary` FROM `customers`;   -- razlicite plate

WHERE -- FILTIRANJE PODATAKA




SELECT * FROM `customers` WHERE `state` = 'Srbija'; --KLIJENTE KOJI DOLAZE IZ SRB


SELECT * FROM `customers` WHERE `salary` = 500; --klijenti koji imaju platu jednaku od 500.

SELECT * FROM `customers` WHERE `salary` >= 500; --klijenti koji imaju platu vecu jednaku od 500.

SELECT * FROM `tasks` WHERE `active` >= 500; --klijenti koji imaju platu vecu jednaku od 500.

SELECT `task_id`, `title`, `description`  FROM `tasks` WHERE `status` = 1; --

--svi koji su prioritetni a nisu zavrseni. 
SELECT `task_id`, `title`, `description`  FROM `tasks` WHERE `priority`!=0
AND `due_date` IS NOT NULL;   -- kod null ide is not null

-- Iz tabele customers, pročitati sve klijente:
-- Čija je plata između 300 i 800,

SELECT `name`, `address`, `state`, `salary` FROM `customers` WHERE `salary` BETWEEN 300 AND 800;

--cija je plata jednaka 500, 600, ili 700
SELECT `name`, `address`, `state`, `salary` FROM `customers` WHERE `salary` = 500 OR `salary`= 600 OR `salary`= 700;

SELECT `name`, `address`, `state`, `salary` FROM `customers`
WHERE `salary` IN (500,600,700);

--one korisnike cije je ime ana, bojana ili vuk
SELECT `name`, `address`, `state`, `salary` FROM `customers`
WHERE `name` IN ('Ana', 'Bojana', 'Vuk');


--cije ime pocinje na slovo B
SELECT `name`, `address`, `state`, `salary` FROM `customers`
WHERE `name` LIKE 'B%';


--cije ime sadrzi slovo j 
SELECT `name`, `address`, `state`, `salary` FROM `customers`
WHERE `name` LIKE '%J%';


-- Koji su iz Srbije, Rumunije ili Bugarske,

SELECT `name`, `address`, `state`, `salary` FROM `customers`
WHERE `state` IN ('Srbija', 'Rumunija', 'Bugarska');

-- Koju potiču iz zemlje koja počinje na slovo “S”.
SELECT `name`, `address`, `state`, `salary` FROM `customers`
WHERE `state` LIKE 'S%';  -- moze 's%k$j%'

-- Iz tabele tasks, pročitati sve zadatke:
-- Čiji id pripada skupu {1, 4, 8, 12},

SELECT * FROM `tasks` WHERE `task_id` IN (1,4,8,12);
-- Čiji je početak veći od 2019-01-01,

SELECT * FROM `tasks` WHERE `start_date` > '2019-01-01';
-- Čiji je status različit od neaktivan.

SELECT * FROM `tasks` WHERE `status` != 0;

-- limiranje broja rezultata
SELECT * FROM `customers` LIMIT 2;

SELECT * FROM `customers` WHERE `name` LIKE 'B%' LIMIT 1; --prvi cije ime pocinje na slovo b

-- prkazi prva dva korisnika koji imaju dvocifren broj poseta

SELECT * FROM `customers` WHERE `number_of_visits` BETWEEN 10 AND 99 LIMIT 2; 

-- SORTIRANJE PODATAKA
SELECT * FROM `customers` ORDER BY `name`;

--svi korisnici po godinama od najstarijih ka najmladjim
SELECT * FROM `customers` ORDER BY `age` DESC;


--svi korisnici po godinama od najmladjih ka najstarijim i po broju poseta od visig ka manjim
SELECT * FROM `customers` ORDER BY `age` ASC, `number_of_visits` DESC;

--prikazi prva dva korisnika sa najvecim brojme poseta , a ciji je broj poseta dvocifren
--odredi korisnike sa dvocifrenim brojem poseta i prikazi prva dva sa najvecim br poseta

SELECT * FROM `customers` 
WHERE `number_of_visits` BETWEEN 10 AND 99 
ORDER BY `number_of_visits` DESC 
LIMIT 2;

--prikazi korisnika koji ima najmanju platu koja je u opsegu izmedju 300 i 500
--ako ima vise ovakvih korisnika prikazati onog cije je ime prvo u leksikografskom poretku

SELECT * FROM `customers` 
WHERE `salary` BETWEEN 300 AND 500
ORDER BY `salary`, `name`
LIMIT 1;

-- WHERE klauzula može se kombinovati 
-- sa AND, OR i NOT operatorima.
-- Iz tabele customers, pročitati sve klijente:
-- Koji su iz Srbije a plata je 600,
-- Čije ime počinje na S ili imaju manje od 30god.

SELECT * FROM `customers` 
WHERE `state` = 'Srbija'
AND`salary` = 600;


SELECT * FROM `customers` 
WHERE `name`LIKE 'S%' 
OR `age` < 30;



-- Iz tabele tasks, pročitati sve zadatke:
-- Čiji je status različit od aktivan i prioritet visok,
-- Čiji datum nije veći od 2019-01-01.

SELECT * FROM `tasks`
WHERE `status` !=1 
AND `priority`> 0;

SELECT * FROM `tasks`
WHERE NOT `start_date` > '2019-01-01';
--drugi nacin
SELECT * FROM `tasks`
WHERE  `start_date` <= '2019-01-01';


--fje kod selekta

--prebrojati koliko ima kupaca izmedju 30 i 40godi
SELECT COUNT(`age`) FROM `customers` WHERE `AGE` BETWEEN 30 AND 40;  -- MOZE COUNT(*)

SELECT COUNT(*) FROM `customers` WHERE `AGE` BETWEEN 30 AND 40;  

--ISTO TO SAMO SA PREIMENOVANJEM POLJA

SELECT COUNT(`AGE`) AS 'BROJ_KUPACA'     --KADA SE DODA AS ONDA SE MENJA NAZIV TABELE
 FROM `customers` 
WHERE `AGE` BETWEEN 30 AND 40; 

-- ODREDITI PROSECAN BROJ POSETA KUPACA

SELECT AVG(`NUMBER_OF_VISITS`) AS "PROSECAN BROJ POSETA"
FROM `customers`;

--ODREDITI PROSECNU PLATU KUPACA IZ SRBIJE


SELECT AVG(`SALARY`) AS "PROSECANA PLATA SRBIJA"
FROM `customers` WHERE `state` = "Srbija";

-- odrediti broj razlicitih imena kupaca


SELECT  COUNT(DISTINCT`name`)  AS "BROJ_RAZLICITIH_IMENA" FROM `customers`;

-- odrediti broj razlicitih DRZAVA kupaca

SELECT  COUNT(DISTINCT`STATE`)  AS "BROJ_RAZLICITIH_DRZAVA" FROM `customers`;

--ODREIDTI ime osobe koja ima najmanju platu
--ako ima vise taksvih ispistai bilo koju osobu
SELECT `NAME`
FROM `customers`
WHERE `SALARY` =(SELECT MIN(`SALARY`) FROM `customers`) LIMIT 1;



SELECT `NAME`
FROM `customers`
ORDER BY `SALARY`
LIMIT 1;

--ISPISATI IMENA SVIH NADPROSECNO STARIH OSOBA U LEKSIKOGRAFSKOM OBLIKU
SELECT `NAME`
FROM `customers`
WHERE `AGE` > (SELECT AVG(`AGE`) FROM `customers`)
ORDER BY `NAME`;

--ISPISTAI IMENA SVIH OSOBA IZ SRBIJE SA NADPROSECNOM PLATOM

SELECT `NAME`
FROM `customers`
WHERE `SALARY` > (SELECT AVG(`SALARY`) FROM `customers` WHERE `STATE` = 'SRBIJA')
AND `state` = 'SRBIJA';



