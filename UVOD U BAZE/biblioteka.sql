
CREATE DATABASE `biblioteka` CHARACTER SET utf16 COLLATE utf16_slovenian_ci;

CREATE TABLE `clanovi` (
`id` INT PRIMARY KEY,  -- moze AUTO_increment
`ime` VARCHAR(45) NOT NULL,
`prezime` VARCHAR(45) NOT NULL,
`adresa`VARCHAR(45),
`telefon` VARCHAR(20) NOT NULL
)ENGINE=INNODB;

CREATE TABLE `knjige` (
`id` INT PRIMARY KEY,
`naziv`VARCHAR(45) NOT NULL,
`pisac`VARCHAR(45) NOT NULL -- ovo ce se brisati
)ENGINE=INNODB;

CREATE TABLE `zanr`(
`id` INT PRIMARY KEY,
`naziv` VARCHAR(45) NOT NULL
)ENGINE=INNODB;

CREATE TABLE `zaduzenja` (
    `id`INT PRIMARY KEY,
    `datum` DATE NOT NULL,
    `vratio` BOOLEAN NOT NULL DEFAULT "0"
)ENGINE=INNODB;

CREATE TABLE `pisac` (
    `id` INT PRIMARY KEY,
    `ime` VARCHAR(45) NOT NULL,
    `prezime` VARCHAR(45) NOT NULL,
    `bio`VARCHAR(255), -- bolje text bez duzine
    `god_rodj`YEAR
)ENGINE=INNODB;

--brisanje pisca iz knjige
ALTER TABLE `knjige`
DROP `pisac`;

--pravljenje tabela za n m relacije

CREATE TABLE `knjige_has_zanr` (
`id_knjige` INT NOT NULL,
`id_zanr` INT NOT NULL
)ENGINE=INNODB;

-- dodavanje stranog kljuca u tabelu knjige_has_zanr
ALTER TABLE `knjige_has_zanr`
ADD CONSTRAINT `knjige_zanr_knjige_fk`
FOREIGN KEY (`id_knjige`) -- naziv polja
REFERENCES `knjige`(`id`) -- odnosi se na table(polje)
ON UPDATE CASCADE,   -- on delete cascade, on update cascade

ADD CONSTRAINT `knjige_zanr_zanr_fk`
FOREIGN KEY (`id_zanr`) -- naziv polja
REFERENCES `zanr`(`id`) -- odnosi se na table(polje)
ON UPDATE CASCADE;              --on delete  no action on update cascade
                            -- no action brani brisanje podatka dok god postoji strani kljuc na taj podatak

-- dodavanje redova u tabelu zaduzenja (treba dodati id_knjiga i id_clanovi)
ALTER TABLE `zaduzenja`
ADD 
`knjiga_id` INT NOT NULL,
ADD
`clanovi_id` INT NOT NULL;

--dodavanje stranih kljuceva u tabeli zaduzenja

ALTER TABLE `zaduzenja`
ADD CONSTRAINT `zaduzenja_knjiga_fk`
FOREIGN KEY (`knjiga_id`)
REFERENCES `knjige`(`id`)
ON UPDATE CASCADE,
ADD CONSTRAINT `zaduzenja_clanovi_fk`
FOREIGN KEY (`clanovi_id`)
REFERENCES `clanovi`(`id`)
ON UPDATE CASCADE;

-- dodavanje tabele pisac_has_knjiga

CREATE TABLE `pisac_has_knjiga`(
    `pisac_id` INT NOT NULL,
    `knjiga_id` INT NOT NULL
);

--dodavanje stranih kljuceva u tabelu pisac_has_knjiga
ALTER TABLE `pisac_has_knjiga`
ADD CONSTRAINT `pisac_pisac_fk`
FOREIGN KEY (`pisac_id`)
REFERENCES `pisac`(`id`)
ON UPDATE CASCADE, --on delite no action 
ADD CONSTRAINT `zpisac_knjiga_fk`
FOREIGN KEY (`knjiga_id`)
REFERENCES `knjige`(`id`)
ON UPDATE CASCADE; -- on delete cascade 

-- dodavanje info u tabelama
-- clanovi

INSERT INTO `clanovi`(`id`,`ime`,`prezime`,`telefon`) 
VALUES
(1, "Mika", "Mikic","060-111-111"),
(2, "Pera", "Peric","061-000-111"),
(3, "Mara", "Maric","062-000-222"),
(4, "Stana", "Stanic","063-000-333");

INSERT INTO `knjige`
VALUES
(1, "Hajdi"),                    -- ako je autoincrement umesto broja id ide null (null, "hajdi")
(2, "Orkanski visovi"),
(3, "Poslednji Romanovi-put patnje"),
(4, "Ubistvo u orjent expresu"),
(5, "Smrt na Nilu"),
(6, "Ana Karenjina");

INSERT INTO `zanr`
VALUES 
(1, "istorijski"),
(2, "kriminalisticki"),
(3, "decija literatura"),
(4, "tragedija"),
(5, "ljubavni"),
(6, "horor"),
(7, "drama"),
(8, "komedija");

INSERT INTO `zaduzenja`(`id`,`datum`,`vratio`,`clanovi_id`,`knjiga_id` )
VALUES
(1, "2022-12-30", 0, 1, 2), -- Mika uzeo Orkanski Visovi
(2, "2023-01-10", 1, 2, 1), -- Pera uzeo Hajdi
(3, "2023-01-23", 0, 3, 1), --  Mara uzela Hajdi
(4, "2023-02-20", 1, 3, 4), --  Mara uzela Orjent
(5, "2023-02-20", 0, 4, 6) --  Stana uzela Anu K

--`pisac`

INSERT INTO `pisac` (`id`, `ime`,`prezime`, `god_rodj` )
VALUES
(1, "Emili"," Bront",1818 ),
(2, "Ljubinka ","Milincic"1952)
(3, "Agata ","Kristi", 1890)
(4, "Lav", "Tolstoj", 1828)
(5, "Johana", "Spiri", 1827);

--`pisac_has_knjiga`

INSERT INTO `pisac_has_knjiga` (`pisac_id`,`knjiga_id` )
VALUES
(1, 2),
(2, 3),
(3, 4),
(3, 5),
(5,1);


--`knjige_has_zanr`

INSERT INTO `knjige_has_zanr`(`id_knjige`,`id_zanr`)
VALUES
(1,3),
(2,5),
(2,4),
(2,8)
(3,4),
(3,1),
(4,2),
(5,2),
(6,4),
(6,5);