CREATE DATABASE feladat;

USE feladat;

CREATE TABLE megye(
    id INT AUTO_INCREMENT PRIMARY KEY,
    megye_nev VARCHAR(255) NOT NULL
);

INSERT INTO
    megye(megye_nev)
VALUES
    ('Pest'),
    ('Csongrád'),
    ('Bács - Kiskun'),
    ('Békés'),
    ('Hajdú - Bihar'),
    ('Szabolcs - Szatmár - Bereg'),
    ('Borsod - Abaúj - Zemplén'),
    ('Nógrád'),
    ('Heves'),
    ('Jász - Nagykun - Szolnok'),
    ('Fejér'),
    ('Somogy'),
    ('Tolna'),
    ('Komárom - Esztergom'),
    ('Veszprém'),
    ('Baranya'),
    ('Zala'),
    ('Vas'),
    ('Győr - Moson - Sopron');

CREATE TABLE varos(id INT AUTO_INCREMENT PRIMARY KEY, megye_id INT, varos_nev VARCHAR(255));

CREATE TABLE users(id INT AUTO_INCREMENT PRIMARY KEY, email VARCHAR(255), username VARCHAR(255));