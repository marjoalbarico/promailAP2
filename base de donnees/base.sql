
--ALBARICO MARJORIE
--SIO 1B
--PROJET AP S2 : PROMAIL

-------------------------

--Structure de la table "CONTACT"
CREATE TABLE contact(
	email varchar(50),
	pwd varchar(50) NOT NULL,
	nom varchar(50) NOT NULL,
	prenom varchar(50) NOT NULL,
	dateNaissance Date NOT NULL,
	telephonePortable varchar(10) NOT NULL,
	constraint pk_contact PRIMARY KEY (email)
	);

--contenu de la table CONTACT
insert into contact values
	("toto.toto@gmail.com", "helloWorldLOL", "TOTO", "Toto", '2000-01_01', "0612345678"),
	("tata.tata@gmail.com", "monMOTdePASSE", "TATA", "Tata", '1999-02-02', "0761111111"),
	("thuy@gmail.com", "!!tjrscovid2021", "FRAN", "Thuy", '1998-08-08', "0777777777"),
	("priya@yahoo.com", "WESHwesh", "PATEL", "Priya", '2001-09-09', "0612313211");

-------------------------

--Structure de la table "USER" , j'ai nommé users car "user" ne marche pas
CREATE TABLE users(
	email varchar(50),
	pwd varchar(50) NOT NULL,
	nom varchar(50) NOT NULL,
	prenom varchar(50) NOT NULL,
	dateNaissance Date NOT NULL,
	telephonePortable varchar(12) NOT NULL, --"+33"+numero portable
	constraint pk_user PRIMARY KEY (email)
	);

--contenu de la table "USER"
insert into users values
	("mazikeen.b@promail.com", "meilleurNom!", "BRUH", "Mazikeen", '2001-01-07', "0777162615"),
	("dupontines@promail.com", "!jeSaisPasMoi", "DUPONT", "Ines", '2001-03-03', "0715251872"),
	("yixuanpat@promail.com", "2021COVIDalala", "PAT", "Yixuan", '2002-01-09', "0612121212");

-------------------------

--Structure de la table "LISTE"
CREATE TABLE liste(
	idListe int AUTO_INCREMENT,
	nomListe varchar (30) NOT NULL ,
	constraint pk_liste PRIMARY KEY (idListe)
);

--contenu de la table LISTE
insert into liste values
	(1, "amis");

----------------------

--Strcuture de la table "GROUPER"
CREATE TABLE grouper(
	emailContact varchar(50),
	idListe int,
	constraint pk_grouper PRIMARY KEY (emailContact,idListe),
	constraint fk_grouper_contact FOREIGN KEY (emailContact) REFERENCES contact(email),
	constraint fk_grouper_liste FOREIGN KEY (idListe) REFERENCES liste(idListe)
);

--contenu de la table grouper
insert into grouper values
	("thuy@gmail.com", 1),
	("priya@yahoo.com", 1);

-------------------------


--Strucuture de la table "FAITPARTIE"
CREATE TABLE faitpartie(
	emailUser varchar(50),
	idListe int,
	constraint pk_faitpartie PRIMARY KEY (emailUser,idListe),
	constraint fk_faitpartie_user FOREIGN KEY (emailUser) REFERENCES users(email),
	constraint fk_faitpartie_liste FOREIGN KEY (idListe) REFERENCES liste(idListe)
);

--contenu de la table faitpartie
insert into faitpartie values
	("dupontines@promail.com", 1),
	("yixuanpat@promail.com", 1);

--------------------

--Structure de la table "MESSAGE"
CREATE TABLE message(
	idMessage int AUTO_INCREMENT,
	contenu varchar(2000) NOT NULL,
	dateheureMessage DateTime,
	objet varchar(100),
	emailContact varchar(50),
	emailUser varchar(50),
	constraint pk_message PRIMARY KEY (idMessage),
	constraint fk_message_contact FOREIGN KEY (emailContact) REFERENCES contact(email),
	constraint fk_message_user FOREIGN KEY (emailUser) REFERENCES users(email)
);

-------------------------

--Structure de la table "ENVOYER"
CREATE TABLE envoyer(
	emailContact varchar(50),
	idMessage int,
	constraint pk_envoyer PRIMARY KEY (emailContact,idMessage),
	constraint fk_envoyer_contact FOREIGN KEY (emailContact) REFERENCES contact(email),
	constraint fk_envoyer_message FOREIGN KEY (idMessage) REFERENCES message(idMessage)
);

------------------------

--Structure de la table "POSSEDER"
CREATE TABLE posseder(
	emailUser varchar(50),
	emailContact varchar(50),
	constraint pk_posseder PRIMARY KEY (emailUser,emailContact),
	constraint fk_posseder_user FOREIGN KEY (emailUser) REFERENCES users(email),
	constraint fk_posseder_contact FOREIGN KEY (emailContact) REFERENCES contact(email)
);

--contenu de la table POSSEDER
insert into posseder values
	("mazikeen.b@promail.com", "toto.toto@gmail.com"),
	("mazikeen.b@promail.com", "tata.tata@gmail.com"),
	("dupontines@promail.com", "thuy@gmail.com"),
	("yixuanpat@promail.com", "toto.toto@gmail.com"),
	("yixuanpat@promail.com", "priya@yahoo.com");




















