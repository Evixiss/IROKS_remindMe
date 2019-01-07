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
