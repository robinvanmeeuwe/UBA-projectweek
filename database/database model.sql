drop database IF EXISTS librairy;
create database librairy;
use librairy;

CREATE TABLE Book (
 BookID int(10) NOT NULL AUTO_INCREMENT,
 Barcode varchar(50),
 Name varchar(100),
 Description text,
 Availability bool,
 PRIMARY KEY (BookID), INDEX (BookID))
 ENGINE = InnoDB;
 
CREATE TABLE Reservations (
ReservationsID int(10) NOT NULL AUTO_INCREMENT, 
DateStart date NOT NULL, 
DateEnd date NOT NULL, 
PRIMARY KEY (ReservationsID), 
INDEX (ReservationsID)) 
ENGINE = InnoDB;

CREATE TABLE Reservationrule (
BookID int(10) NOT NULL, 
ReservationID int(10) NOT NULL , 
ReservationruleID int(10) AUTO_INCREMENT, 
PRIMARY KEY (ReservationruleID), 
FOREIGN KEY (ReservationID) REFERENCES Reservations(ReservationsID),
FOREIGN KEY (BookID) REFERENCES book(BookID),
INDEX (ReservationruleID))
ENGINE = InnoDB;

INSERT INTO `book` (`barcode`, `Name`, `Description`, `Availability`) VALUES ('9783540642398' , 
'elements of mathamatics: communative algebra',  
"This is the softcover reprint of the English translation of 1972 (available from Springer since 1989) of the first 7 chapters of Bourbaki's 'Algebre commutative'. It provides a very complete treatment of commutative algebra, enabling the reader to go further and study algebraic or arithmetic geometry. The first 3 chapters treat in succession the concepts of flatness, localization and completions (in the general setting of graduations and filtrations). Chapter 4 studies associated prime ideals and the primary decomposition. Chapter 5 deals with integers, integral closures and finitely generated algebras over a field (including the Nullstellensatz). Chapter 6 studies valuation (of any rank), and the last chapter focuses on divisors (Krull, Dedekind, or factorial domains) with a final section on modules over integrally closed Noetherian domains, not usually found in textbooks. Useful exercises appear at the ends of the chapters."
, true);
INSERT INTO `book` (`barcode`, `Name`, `Description`, `Availability`) VALUES ('9783642310454',
"space filling curves",
"The present book provides an introduction to using space-filling curves (SFC) as tools in scientific computing. Special focus is laid on the representation of SFC and on resulting algorithms. For example, grammar-based techniques are introduced for traversals of Cartesian and octree-type meshes, and arithmetisation of SFC is explained to compute SFC mappings and indexings. The locality properties of SFC are discussed in detail, together with their importance for algorithms. Templates for parallelisation and cache-efficient algorithms are presented to reflect the most important applications of SFC in scientific computing. Special attention is also given to the interplay of adaptive mesh refinement and SFC, including the structured refinement of triangular and tetrahedral grids. For each topic, a short overview is given on the most important publications and recent research activities.",
true);

INSERT INTO `book` (`barcode`, `Name`, `Description`, `Availability`) VALUES ('9780199699339',
"quantum field theory for the gifted amateur",
"Quantum field theory is arguably the most far-reaching and beautiful physical theory ever constructed, with aspects more stringently tested and verified to greater precision than any other theory in physics. Unfortunately, the subject has gained a notorious reputation for difficulty, with forbidding looking mathematics and a peculiar diagrammatic language described in an array of unforgiving, weighty textbooks aimed firmly at aspiring professionals. However, quantum field theory is too important, too beautiful, and too engaging to be restricted to the professionals. This book on quantum field theory is designed to be different. It is written by experimental physicists and aims to provide the interested amateur with a bridge from undergraduate physics to quantum field theory. The imagined reader is a gifted amateur, possessing a curious and adaptable mind, looking to be told an entertaining and intellectually stimulating story, but who will not feel patronised if a few mathematical niceties are spelled out in detail. Using numerous worked examples, diagrams, and careful physically motivated explanations, this book will smooth the path towards understanding the radically different and revolutionary view of the physical world that quantum field theory provides, and which all physicists should have the opportunity to experience.",
true);

INSERT INTO `Reservations` (`DateStart`, `DateEnd`) VALUES ('2020-12-11', '2021-4-2');
INSERT INTO `Reservations` (`DateStart`, `DateEnd`) VALUES ('2020-10-11', '2020-12-11');
INSERT INTO `Reservations` (`DateStart`, `DateEnd`) VALUES ('2021-4-2', '2021-4-4');

INSERT INTO `Reservations` (`DateStart`, `DateEnd`) VALUES ('2020-12-4', '2021-4-3');
INSERT INTO `Reservations` (`DateStart`, `DateEnd`) VALUES ('2020-9-26', '2020-12-4');
INSERT INTO `Reservations` (`DateStart`, `DateEnd`) VALUES ('2021-4-3', '2021-6-27');

INSERT INTO `Reservations` (`DateStart`, `DateEnd`) VALUES ('2020-12-4', '2021-3-2');
INSERT INTO `Reservations` (`DateStart`, `DateEnd`) VALUES ('2020-10-13', '2020-12-4');
INSERT INTO `Reservations` (`DateStart`, `DateEnd`) VALUES ('2021-3-2', '2021-5-7');

INSERT INTO `Reservationrule` (`ReservationID`, `BookID`) VALUES (1 , 1);
INSERT INTO `Reservationrule` (`ReservationID`, `BookID`) VALUES (2 , 1);
INSERT INTO `Reservationrule` (`ReservationID`, `BookID`) VALUES (3 ,1);

INSERT INTO `Reservationrule` (`ReservationID`, `BookID`) VALUES (4 , 2);
INSERT INTO `Reservationrule` (`ReservationID`, `BookID`) VALUES (5 , 2);
INSERT INTO `Reservationrule` (`ReservationID`, `BookID`) VALUES (6 , 2);

INSERT INTO `Reservationrule` (`ReservationID`, `BookID`) VALUES (7 , 3);
INSERT INTO `Reservationrule` (`ReservationID`, `BookID`) VALUES (8 , 3);
INSERT INTO `Reservationrule` (`ReservationID`, `BookID`) VALUES (9 , 3);

SELECT * from `Book` as b,`Reservations` as r,`Reservationrule` as rr where 
b.bookid = 1 and b.bookid = rr.bookid and rr.reservationid = r.reservationsid;
select * from `book`
