CREATE DATABASE tutor;

USE tutor;

SELECT * FROM USER

CREATE TABLE USER(
id_user INT PRIMARY KEY AUTO_INCREMENT,
nama VARCHAR(64) NOT NULL,
usia INT NOT NULL,
username VARCHAR(64) NOT NULL,
PASSWORD VARCHAR(64) NOT NULL,
no_hp DOUBLE NOT NULL,
jenis_kelamin VARCHAR(64) NOT NULL
);
INSERT INTO USER(nama,jenis_kelamin,username,no_hp,PASSWORD,id_user,usia) VALUES('','jimy','20','jimy','jimy',0812231231,'Laki-laki');