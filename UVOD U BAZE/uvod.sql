-- komanda za kreiranje baze podataka:
--CREATE DATABASE test_druga;
CREATE DATABASE test_druga CHARACTER SET utf16 COLLATE utf16_slovenian_ci;
--komanda za brisanje baze podataka

DROP DATABASE test_druga;

--komanda za odabir baze podatka;

USE test_baza;

--zadatak skola
--kreiraj bazu skola
CREATE DATABASE skola	CHARACTER SET utf16 COLLATE utf16_slovenian_ci;

USE skola;

--kreiranje tabele studenti

CREATE TABLE studenti(
   ime VARCHAR(50),
   prezime VARCHAR(50)
);

--kreiranje tabele customers

CREATE TABLE customers(
   id INT NOT NULL,
   name VARCHAR(20) NOT NULL,
   age TINYINT NOT NULL,
   address CHAR(25),
   salary DECIMAL(18, 2) DEFAULT 500
);
--kreiraj tablu  tasks 
CREATE TABLE tasks (
    task_id INT UNIQUE,
    title VARCHAR(255) NOT NULL,
    start_date DATE,
    due_date DATE,
    status TINYINT NOT NULL,
    description TEXT
); 

--kreiranje tabele customers sa primarnim kljucem
-- ne moze posto vec postoji tabela, u samoj tabeli kliknuti na kljucic
-- CREATE TABLE customers(
--    id INT NOT NULL,
--    name VARCHAR(20) NOT NULL,
--    age TINYINT NOT NULL,
--    address CHAR(25),
--    salary DECIMAL(18, 2) DEFAULT 500,
--    PRIMARY KEY(id)
-- );

--dodavanje primatnog kljuca u tablu castomers
ALTER TABLE `customers` ADD PRIMARY KEY(`id`); 
ALTER TABLE `tasks` ADD PRIMARY KEY(`task_id`); 

--dodavanje jos jedne kolone u tabeli
ALTER TABLE tasks 
ADD title VARCHAR(255) NOT NULL;

--zadatak 20 slide

ALTER TABLE customers
ADD active BOOLEAN;

ALTER TABLE customers
ADD state VARCHAR(90);

ALTER TABLE customers
ADD number_of_visits TINYINT;

ALTER TABLE tasks
ADD priority  TINYINT NOT NULL;

--brisanje tabele
DROP TABLE studenti;


-- dodavanje novih redova u tablei bez navodjenja reda. onda se ide istim redosledom kao u tabeli (id, ime, godine...)
INSERT INTO customers
VALUES (1, "Ana", 25, "Bubanjskih heroja 48", 600, 1, "Srbija", 37);


INSERT INTO customers(name, id, age, active, state, number_of_visits)
VALUES 
("Bojana", 2, 39, 0, "Srbija", 16),
("Dejan", 3, 31, 0, "Crna Gora", 3);


INSERT INTO customers
VALUES (4, "Ana", 25, "Bubanjskih heroja 48", 600, 1, "Srbija", 37);

--dodavanje redova u taskovima

INSERT INTO tasks (task_id,title, start_date, due_date, status, description, priority)
VALUES 
(1, "Čas iz ITbootcampa", "2023-06-02", "2023-06-02", 1, "Čas iz baze podataka",1),
(2, "Šetnja", "2023-06-01", "2023-06-01", 1, "Lagana šetnja",0),
(3, "Uradi domaći zadatak", "2023-06-03",  NULL ,1,  "Domaci zadatka iz SQLa",1);

INSERT INTO `tasks`
VALUES
(4, "Uciti my sql", "2023-06-02","2023-06-10", 1, "Sql", 1 ),
(5, "Uciti klase", "2023-06-02","2023-06-10", 1, "klase", 1 );
