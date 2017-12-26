DROP DATABASE IF EXISTS HomeWork8;
CREATE DATABASE HomeWork8;





CREATE TABLE people (
  personID        INT            NOT NULL   AUTO_INCREMENT,
  firstName         VARCHAR(60)    NOT NULL,
  lastName          VARCHAR(60)    NOT NULL,
  age     INT                      NOT NULL,
	state         VARCHAR(60)    NOT NULL,
  PRIMARY KEY (personID)
  
);

INSERT INTO people (personID, firstName, lastName, age, state) VALUES
(1, 'Linus', 'Torvalds', 35,'NJ '),
(2, 'Bill', 'Gates', 55,'CA '),
(3, 'Alisa', 'Worderville', 15,'CO '),
(4, 'Richard', 'Stallman', 45,'CT '),
(5, 'Woody', 'Allen', 85,'DE '),
(6, 'Grace', 'Hopper', 25,'FL '),
(7, 'James', 'Gosling', 65,'AL '),
(8, 'John', 'Backus', 95,'AK '),
(9, 'Brian', 'Kernighan', 75,'ID '),
(10, 'Ken', 'Thomson', 39,'IN '),
(11, 'Dennis', 'Ritchie', 51,'KS '),
(12, 'James', 'Bond', 33,'AZ '),
(13, 'Doug', 'Cutting', 65,'CA '),
(14, 'John', 'Carmack', 21,'LA '),
(15, 'Jeff', 'Dean', 24,'ME '),
(16, 'Donald', 'Knuth', 31,'MI '),
(17, 'Demi', 'Moore', 27,'NE '),
(18, 'Albert', 'Einctein', 48,'RI '),
(19, 'James', 'Cameron', 17,'OK '),
(20, 'Halle', 'Berry', 28,'NY ');

-- Create a user named mgs_user
GRANT SELECT, INSERT, UPDATE, DELETE
ON *
TO mgs_user@localhost
IDENTIFIED BY 'pa55word';