DROP TABLE IF EXISTS Uporabniki;
create table Uporabniki (
id int auto_increment,
ime varchar(50),
priimek varchar(50),
email varchar(50),
geslo varchar(50),
primary key(id)
);
insert into Uporabniki (ime,priimek,email,geslo) values
('Primoz', 'Stopar', 'p', 's'),
('Nejc', 'Vnuk', 'n', 'v'),
('test', 'test', '1', '1'),
('ime','priimek','email','geslo');


DROP TABLE IF EXISTS Seznami;
create table Seznami (
id int auto_increment,
tk_idUporabnik int,
nazivSeznama varchar(50),
primary key(id)
);

DROP TABLE IF EXISTS Elementi;
CREATE TABLE Elementi (
id int auto_increment,
nazivElementa varchar(40),
primary key(id)
);

DROP TABLE IF EXISTS Seznami_Elementi;
CREATE TABLE Seznami_Elementi(
id int auto_increment,
tk_seznam int NOT NULL,
tk_element int NOT NULL,
primary key(id)
);
