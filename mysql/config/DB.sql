create database woody;
use woody;

CREATE TABLE Jouets
(
Id int not null auto_increment,
NOM VARCHAR(50) not null,
PRIMARY KEY (Id)
);

CREATE USER 'root'@'%' IDENTIFIED BY '';

GRANT ALL PRIVILEGES ON * . * TO 'root'@'%';


FLUSH PRIVILEGES;
