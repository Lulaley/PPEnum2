drop database filelec;
create database filelec;
use filelec;

create table client
(
idC int (5) not null auto_increment,
PrenomC varchar(25),
NomC varchar (25),
NomSoc varchar(25),
MailC varchar(25),
mdpC varchar(12), 
AdrC varchar (25) not null,
Ville varchar (25) not null,
CP varchar (5) not null,
Pays varchar (25) not null,
TypeC enum ('Particulier', 'Professionnel') not null,
primary key (idC)
);

create table commande
(
numC int(8) not null,
DHC datetime not null,
DLS date not null,
Etat varchar (25) not null,
idC int (5) not null,
primary key (numC),
foreign key (idC) references client (idC)
);

create table facture
(
idF int (5) not null,
DHF datetime not null,
idC int (5) not null,
numC int (8) not null,
primary key (idF),
foreign key (idC) references client (idC),
foreign key (numC) references commande (numC)
);

create table bonFabrication 
(
idB int(4) not null auto_increment,
primary key (idB)
);

create table usine
(
idU int (2) not null,
NomU varchar (25) not null,
AdrU varchar (25) not null,
primary key (idU)
);

create table type
(
idT int(4) not null,
Libelle enum("Vitre", "Retro") not null,
primary key (idT)
);

create table equipement
(
idE int (8) not null,
QteE int (5) not null,
NomE varchar (25) not null,
Descr varchar (25) not null,
Prix int (7) not null,
DateCrea date not null,
idB int (4) not null,
idT int(4) not null,
primary key (idE),
foreign key (idB) references bonFabrication (idB),
foreign key (idT) references type (idT)
);

create table depot
(
idD int (4) not null,
NomD varchar (50) not null,
AdrD varchar (50) not null,
VilleD varchar (50) not null,
CPD int (5) not null,
PaysD varchar (25) not null,
idC int(5) not null,
primary key (idD),
foreign key (idC) references client (idC)
);

create table ligneCommande 
(
QteC int (5) not null,
idC int (5) not null,
idE int (8) not null,
primary key (idC, idE),
foreign key (idC) references client (idC),
foreign key (idE) references equipement (idE)
);

create table ligneFabrication
(
QteF int (5) not null,
idE int (5) not null,
idB int (4) not null,
primary key (idE, idB),
foreign key (idE) references equipement (idE),
foreign key (idB) references bonFabrication (idB)
);

create table ligneFacture
(
QteFac int (5) not null,
idE int (8) not null,
idF int (5) not null,
primary key (idE, idF),
foreign key (idE) references equipement (idE),
foreign key (idF) references facture (idF)
);

insert into client values
	(1, null, null, "Cabestan", "Cabestan@Cabestan","123", "8 quai", "Caen", "14000", "France", "Professionnel"),
	(2, "Maxence", "Pinto", null,"Pinto.maxence1@gmail.com", "123", "15 avenue de la grande charmille du parc", "Sainte genevievre des bois", "91700", "France", "Particulier");

insert into commande values
	(1, "1997-10-13 15:48", "1997-10-27", "en cours", 1),
	(2, "1997-10-27 13:37", "1997-11-03", "livrer", 2);

insert into facture values
	(1, "1997-10-13 15:50", 1, 1),
	(2, "1997-10-27 13:39", 2, 1);

insert into bonFabrication values
	(1),
	(2);

insert into usine values 
	(1, "ParFrab", "45 avenue le courbe"),
	(2, "RetroFrab", "58 avenue le courbe");

insert into type values
	(1, "Vitre"),
	(2, "Retro");

insert into equipement values
	(1, "500", "Parebrise", "Pour voitures citroen", "275", "1997-07-05", 1, 1),
	(2, "900", "Retroviseur", "Pour motos rodster", "50", "1997-07-15", 2, 2);

insert into depot values
	(1, "Cabestan Stock", "27 rue de l'avignon", "Caen", "59000", "France", 1),
	(2, "Maxence&Co", "15 avenue de la grande charmille du parc", "Sainte genevievre des bois", "91700", "France", 2);

insert into ligneCommande values
	(1, 1, 1),
	(2, 2, 2);

insert into ligneFabrication values
	(100, 1, 1),
	(250, 2, 2);

insert into ligneFacture values
	(1, 1, 1),
	(2, 2, 2);