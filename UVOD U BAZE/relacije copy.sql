-- 

CREATE DATABASE `drustvena_mreza` CHARACTER SET utf16 COLLATE utf16_slovenian_ci;

CREATE TABLE `korisnici`(
   `id` INT PRIMARY KEY,
   `korisnicko_ime` VARCHAR(45),
   `lozinka` VARCHAR(45)
);

CREATE TABLE `profili`(
   `id` INT PRIMARY KEY,
   `adresa` VARCHAR(45),
   `telefon` VARCHAR(45),
   `korisnik_id` INT 
);

--dodavanje stranog kljuca

ALTER TABLE `profili`
ADD
-- ADD CONSTRAINT `profil_korisnik_fk`
FOREIGN KEY (`korisnik_id`)  -- u je kako se zove to polje u profilima
REFERENCES `korisnici`(`id`); -- pokazuje na tabelu korisnici na koju stavljamo kljuc

-- strani kljuc se nije dodao --
--dodati ENGINE

ALTER TABLE `profili` ENGINE=INNODB;
ALTER TABLE `korisnici` ENGINE=INNODB;

-- ponoviti dodavanje kljuca ako nije bilo engine INNOB ako jest onda ne treba!

ALTER TABLE `profili`
ADD
-- ADD CONSTRAINT `profil_korisnik_fk`
FOREIGN KEY (`korisnik_id`)  -- u je kako se zove to polje u profilima
REFERENCES `korisnici`(`id`); -- pokazuje na tabelu korisnici na koju stavljamo kljuc

-- dodavanje unique da bi bilo 1 na 1
ALTER TABLE `profili` ADD UNIQUE(`korisnik_id`);


INSERT INTO `korisnici` (`id`,`korisnicko_ime`,`lozinka`) 
VALUES 
(1, "pera_peric", "1234"),
(2, "mika_mikic", "12345"),
(5, "nikola_nikolic", "1212");


INSERT INTO `profili` (`id`,`korisnik_id`,`adresa`) 
VALUES 
(1, 5, "Adresa korisnika id=5"),
(10, 2, "Adresa korisnika id=2");


INSERT INTO `profili` (`id`,`korisnik_id`,`adresa`) 
VALUES 
(2, 1, "Adresa korisnika id=1");  


INSERT INTO `profili` (`id`,`korisnik_id`,`adresa`) 
VALUES 
(3, 2, "Nova adresa id=2");   -- nece se izvrsiti zato sto je ovo 1 na 1 relacija

--pravilo brisanja posto nije ubaceno. Kad se obrise podatak gde je sekundarni kljuc onda tek moze da se obrise korisnika gde je primarni kljuc (sekundarni iz profili)



----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
-------------------1 prema N----dosta koriscena veza
--ne stavlja se unique na sekundarni kljuc


CREATE TABLE `objave` (
    `id` INT PRIMARY KEY,
    `naslov_objave` VARCHAR(45) NOT NULL 
) ENGINE=INNODB;

CREATE TABLE `komentari` (
    `id` INT PRIMARY KEY,
    `tekst_komentara` VARCHAR(255) NOT NULL,  
    `objave_id` INT NOT NULL
) ENGINE=INNODB;

--dodavanje stranog kljuca

ALTER TABLE `komentari`
ADD CONSTRAINT `komentari_objava_fk` 
FOREIGN KEY (`objave_id`)  -- u je kako se zove to polje u profilima
REFERENCES `objave`(`id`)
ON DELETE CASCADE ON UPDATE CASCADE;


--popunjavanje tabele

INSERT INTO `objave` (`id`,`naslov_objave`)
VALUES
(1, "Moja prva objava"),
(2, "Moja prva objava"),
(3, "Moja treca objava");

INSERT INTO `komentari` (`id`,`objave_id`,`tekst_komentara`)
VALUES
(101, 1, "Komentar 1 za objavu 1"),
(102, 1, "Komentar 2 za objavu 1"),
(103, 3, "Komentar 1 za objavu 3");

INSERT INTO `komentari` (`id`,`objave_id`,`tekst_komentara`)
VALUES
(104, 100, "Komentar 1 za objavu 1"); -- ne postoji objava sa id 100 zato ovo nece proci


-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
--n prema m

--table objave imamo

CREATE TABLE `kategorije` (
    `id` INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    `naziv` VARCHAR(45) NOT NULL
    )ENGINE=INNODB;

    INSERT INTO `kategorije` (`id`, `naziv`) 
    VALUES
    (1, "Ekonomija"),
    (null, "Crna Hronika");

    INSERT INTO `kategorije` (`naziv`)
    VALUES
    ("Ljubav"),
    ("Drustvo");

     INSERT INTO `kategorije` (`naziv`)
    VALUES
    ("Zdravlje");

CREATE TABLE `kategorije_has_objave` (
    `kategorija_id` INT NOT NULL,
    `objava_id` INT NOT NULL
);

-- ALTER TABLE `kategorije_has_objave`
-- ADD CONSTRAINT `kat_obj_kategorija_fk`
-- FOREIGN KEY (`kategorija_id`)   -- red u katgoriji 
-- REFERENCES `kategorije`(`id`)
-- ON DELETE NO ACTION ON UPDATE CASCADE,
-- ADD CONSTRAINT `kat_obj_objava_fk`
-- FOREIGN KEY (`objava_id`)   -- red u katgoriji 
-- REFERENCES `objave`(`id`)
-- ON DELETE CASCADE ON UPDATE CASCADE;

CREATE TABLE `kategorije_has_objave` (
    `kategorija_id` INT(10) UNSIGNED  not null,
    `objava_id` int not null
) ENGINE=INNODB;

ALTER TABLE `kategorije_has_objave`
ADD CONSTRAINT `kat_obj_kategorija_fk`
FOREIGN KEY (`kategorija_id`) -- ovako ce se zvati kljuc/red u tabeli
REFERENCES `kategorije`(`id`)-- tabela kategorije a iz te tabele red je id
ON DELETE NO ACTION ON UPDATE CASCADE,
ADD CONSTRAINT `kat_obj_objava_fk`
FOREIGN KEY (`objava_id`) -- ovako ce se zvati red/kljuc u tabeli
REFERENCES `objave`(`id`)  -- tabela objava a iz te tabele red je id!
ON DELETE CASCADE ON UPDATE CASCADE;

-- kljucevi moraju da imaju iste tipove podataka!!!
--posto nisu istog tipa moraju se promeniti tipovi 

ALTER TABLE `kategorije` CHANGE `id` `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT;  --ovako se menja

INSERT INTO `kategorije_has_objave`(`kategorija_id`,`objava_id`)
VALUES
(1,1),
(5,1),
(2,2),
(4,2),
(1,3);
