/* Story 1 */

CREATE DATABASE services_db CHARACTER SET 'utf8';

USE services_db;

/* Story 1*/

CREATE TABLE utilisateurs (
  id                INT UNSIGNED NOT NULL AUTO_INCREMENT,
  pseudo            VARCHAR(40) UNIQUE NOT NULL,
  email             VARCHAR(90) UNIQUE NOT NULL,
  mot_de_passe      VARCHAR(191) NOT NULL,
  adresse           VARCHAR(80) DEFAULT NULL,
  code_postal       VARCHAR(80) DEFAULT NULL,
  ville             VARCHAR(80) DEFAULT NULL,
  pays              VARCHAR(80) DEFAULT NULL,
  portable          VARCHAR(30) DEFAULT NULL,
  fixe              VARCHAR(30) DEFAULT NULL,
  date_inscription  DATETIME DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY(id)
) ENGINE = INNODB;

CREATE TABLE services (
  id                INT UNSIGNED NOT NULL AUTO_INCREMENT,
  id_utilisateur    INT UNSIGNED NOT NULL,
  nom               VARCHAR(80) NOT NULL,
  description       VARCHAR(80) NOT NULL,
  adresse           VARCHAR(80) NOT NULL,
  code_postal       VARCHAR(80) NOT NULL,
  ville             VARCHAR(80) NOT NULL,
  pays              VARCHAR(80) NOT NULL,
  date_service      DATETIME NOT NULL,
  informations      TEXT DEFAULT NULL,
  PRIMARY KEY(id),
  FOREIGN KEY (id_utilisateur)  REFERENCES utilisateurs(id) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = INNODB;

CREATE TABLE services_utilisateurs (
  id                INT UNSIGNED NOT NULL AUTO_INCREMENT,
  id_service        INT UNSIGNED NOT NULL,
  id_utilisateur    INT UNSIGNED NOT NULL,
  date_inscription  DATETIME NOT NULL,
  PRIMARY KEY(id),
  FOREIGN KEY (id_service)      REFERENCES services(id) ON DELETE CASCADE ON UPDATE CASCADE,
  FOREIGN KEY (id_utilisateur)  REFERENCES utilisateurs(id) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = INNODB;

CREATE TABLE messages (
  id              INT UNSIGNED NOT NULL AUTO_INCREMENT,
  id_expediteur   INT UNSIGNED NOT NULL,
  id_receveur     INT UNSIGNED NOT NULL,
  contenu         TEXT,
  date_envoie     DATETIME NOT NULL,
  PRIMARY KEY(id),
  FOREIGN KEY (id_expediteur)   REFERENCES utilisateurs(id) ON DELETE CASCADE ON UPDATE CASCADE,
  FOREIGN KEY (id_receveur)     REFERENCES utilisateurs(id) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = INNODB;

/* Story 2 n'existe pas */

/* Story 3 */

INSERT INTO utilisateurs (pseudo, email, mot_de_passe, date_inscription)
VALUES ('Pseudo1', 'hello@free.fr', '123456', NOW());

INSERT INTO utilisateurs (pseudo, email, mot_de_passe, adresse, code_postal, ville, pays, portable, fixe, date_inscription)
VALUES
('Pseudo2', 'hello2@free.fr', '123456', '2 rue du lac', '75019', 'Paris', 'France', '0602030405', '0102030405', NOW()),
('Pseudo3', 'hello3@free.fr', '123456', '2 rue du lac', '75019', 'Paris', 'France', '0602030405', '0102030405', NOW()),
('Pseudo4', 'hello4@free.fr', '123456', '2 rue du lac', '75019', 'Paris', 'France', '0602030405', '0102030405', NOW()),
('Pseudo5', 'hello5@free.fr', '123456', '2 rue du lac', '75019', 'Paris', 'France', '0602030405', '0102030405', NOW()),
('Pseudo6', 'hello6@free.fr', '123456', '2 rue du lac', '75019', 'Paris', 'France', '0602030405', '0102030405', NOW()),
('Pseudo7', 'hello7@free.fr', '123456', '2 rue du lac', '75019', 'Paris', 'France', '0602030405', '0102030405', NOW()),
('Pseudo8', 'hello8@free.fr', '123456', '2 rue du lac', '75019', 'Paris', 'France', '0602030405', '0102030405', NOW()),
('Pseudo9', 'hello9@free.fr', '123456', '2 rue du lac', '75019', 'Paris', 'France', '0602030405', '0102030405', NOW()),
('Pseudo10', 'hello10@free.fr', '123456', '2 rue du lac', '75019', 'Paris', 'France', '0602030405', '0102030405', NOW()),
('Pseudo11', 'hello11@free.fr', '123456', '2 rue du lac', '75019', 'Paris', 'France', '0602030405', '0102030405', NOW());

/* Story 4 */

UPDATE utilisateurs set adresse = '2 rue du lac', code_postal = '75019', ville = 'Paris', pays = 'France', portable = '0602030405', fixe = '0102030405'
WHERE id = 1;

/* Story 5 */

INSERT INTO services (id_utilisateur, nom, description, adresse, code_postal, ville, pays, date_service)
VALUES
(1, 'Laver ma vaisselle', 'rendez-vous en forme !', '56 boulevard du champs', '75001', 'Paris', 'France', '2019-11-28 15:01'),
(7, 'Laver ma voiture', 'rendez-vous en forme !', '56 boulevard du champs', '75001', 'Paris', 'France', '2019-11-18 13:01'),
(5, 'Peindre mes murs', 'rendez-vous en forme !', '56 boulevard du champs', '75001', 'Paris', 'France', '2019-11-18 15:01'),
(4, 'Chasser les pokemons', 'rendez-vous en forme !', '56 boulevard du champs', '75001', 'Paris', 'France', '2019-11-16 15:01'),
(3, 'Monter mon lave vaisselle', 'rendez-vous en forme !', '56 boulevard du champs', '75001', 'Paris', 'France', '2019-11-13 15:01'),
(3, 'Repasser mes chemises', 'rendez-vous en forme !', '56 boulevard du champs', '75001', 'Paris', 'France', '2019-11-12 12:01'),
(9, 'M''aider à trouver une idée de service', 'rendez-vous en forme !', '56 boulevard du champs', '75001', 'Paris', 'France', '2019-11-09 15:01'),
(11, 'Sortir mes chiens', 'rendez-vous en forme !', '56 boulevard du champs', '75001', 'Paris', 'France', '2019-11-02 11:01'),
(1, 'Dire bonjour à mes chats', 'rendez-vous en forme !', '56 boulevard du champs', '75001', 'Paris', 'France', '2019-11-25 12:22'),
(7, 'Aller se promener', 'rendez-vous en forme !', '56 boulevard du champs', '75001', 'Paris', 'France', '2019-11-01 09:01');

/* Story 6 */

INSERT INTO services_utilisateurs (id_service, id_utilisateur, date_inscription)
VALUES
(1, 5, '2019-11-15 11:18'),
(2, 6, '2019-11-15 11:18'),
(3, 8, '2019-11-15 11:18'),
(4, 2, '2019-11-15 11:18'),
(5, 4, '2019-11-15 11:18'),
(6, 9, '2019-11-15 11:18'),
(7, 10, '2019-11-15 11:18'),
(8, 11, '2019-11-15 11:18'),
(3, 8, '2019-11-15 11:18'),
(10, 3, '2019-11-15 11:18'),
(6, 2, '2019-11-15 11:18'),
(7, 10, '2019-11-15 11:18');


/* Story 7 */
INSERT INTO messages (id_expediteur, id_receveur, contenu, date_envoie)
VALUES 
      (2,4, 'Bonjour', '2023-10-18 09:48:10'),
      (2,4, 'Bonjour !', '2023-10-18 09:48:40'),
      (2,4, 'azerty', '2023-10-18 09:49:10'),
      (2,4, 'ytreza', '2023-10-18 09:50:10'),
      (2,4, 'fyeufeqrqezf', '2023-10-18 09:51:10'),
      (2,4, 'dcfvgbhjnkl', '2023-10-18 09:52:10'),
      (2,4, 'rtyui', '2023-10-18 09:54:10'),
      (2,4, 'fghjk', '2023-10-18 09:55:10'),
      (2,4, 'rtyui', '2023-10-18 09:56:10'),
      (2,4, 'fghjk', '2023-10-18 09:57:10'),
      (2,4, 'rtyui', '2023-10-18 09:58:10'),
      (2,4, 'fghjk', '2023-10-18 09:59:10'),
      (2,4, 'rtyui', '2023-10-18 10:00:10'),
      (2,4, 'fghjk', '2023-10-18 10:01:10'),
      (2,4, 'fghjk', '2023-10-18 10:02:10'),
      (2,4, 'fghjk', '2023-10-18 10:03:10'),
      (2,4, 'fghjk', '2023-10-18 10:04:10'),
      (2,4, 'fghjk', '2023-10-18 10:05:10'),
      (2,4, 'fghjk', '2023-10-18 10:06:10'),
      (2,4, 'fghjk', '2023-10-18 10:07:10'),
      (2,4, 'fghjk', '2023-10-18 10:08:10'),
      (2,4, 'fghjk', '2023-10-18 10:09:10'),
      (2,4, 'fghjk', '2023-10-18 10:10:10'),
      (2,4, 'fghjk', '2023-10-18 10:11:10'),
      (2,4, 'fghjk', '2023-10-18 10:12:10');

/* Story 8 */
SELECT U.pseudo, M.contenu, M.date_envoie FROM messages AS m
INNER JOIN utilisateurs AS U
  ON M.id_expediteur = U.id
WHERE M.id_expediteur = 2
ORDER BY M.date_envoie DESC;

/* Story 9 */
SELECT U.pseudo, U2.pseudo, M.contenu, M.date_envoie FROM messages AS M
INNER JOIN utilisateurs AS U
  ON M.id_expediteur = U.id
INNER JOIN utilisateurs AS U2
  ON M.id_receveur = U2.id
WHERE M.id_expediteur = 2 AND M.id_receveur = 4 OR M.id_expediteur = 4 AND M.id_receveur = 2
ORDER BY M.date_envoie DESC;

/* Story 10 */
SELECT U.id AS utilisateur_expediteur ,S.nom, S.code_postal, S.date_service, S.ville, S.pays,  U2.id AS utilisateurs_receveur
FROM services AS S
LEFT JOIN utilisateurs AS U
ON S.id_utilisateur = U.id 
LEFT JOIN services_utilisateurs AS SU
ON S.id = SU.id_service 
LEFT JOIN utilisateurs AS U2
ON SU.id_utilisateur = U2.id
WHERE S.date_service >= NOW() 
AND U2.id IS NULL
ORDER BY S.date_service DESC, S.Ville ASC;

/* Story 11 */
SELECT s.*, u1.pseudo AS pseudo_createur, u1.portable, u2.pseudo AS inscrit_service
FROM services AS s;

INNER JOIN services_utilisateurs AS su
ON s.id = su.id_service;

INNER JOIN
utilisateurs AS u1 ON s.id_utilisateur = u1.id
INNER JOIN
utilisateurs AS u2 ON su.id_utilisateur = u2.id;

/* Story 12 */
DELETE FROM services 
WHERE id = 1;

DELETE FROM services_utilisateurs
WHERE id_service = 1;

/* Story 13 */
DELETE FROM services_utilisateurs
WHERE id_service = 1;

/* Story 14 */
DELETE FROM utilisateurs
WHERE id = 1;

/* Story 15 */
DELETE FROM messages
WHERE id = 1;

/* Story 16 */
SELECT S.id_utilisateur,S.nom,S.description,S.adresse,S.code_postal,S.ville,S.pays,S.date_service,S.informations ,U.pseudo,U.email,U.mot_de_passe,U.adresse,U.code_postal,U.ville, U.pays,U.portable,U.fixe,U.date_inscription, (SELECT COUNT(SU.id_service) FROM services_utilisateurs AS SU WHERE SU.id_utilisateur = 5) AS nombre
FROM services AS S
INNER JOIN utilisateurs AS U
  ON S.id_utilisateur = U.id
INNER JOIN services_utilisateurs AS SU
  ON S.id = SU.id_service
WHERE SU.id_utilisateur = 5
ORDER BY S.date_service DESC, S.ville ASC;

/* Story 17 */
SELECT S.id_utilisateur,S.nom,S.description,S.adresse,S.code_postal,S.ville,S.pays,S.date_service,S.informations ,U.pseudo,U.email,U.mot_de_passe,U.adresse,U.code_postal,U.ville, U.pays,U.portable,U.fixe,U.date_inscription, (SELECT COUNT(SU.id_service) FROM services_utilisateurs AS SU WHERE SU.id_utilisateur = 5) AS nombre
FROM services AS S
INNER JOIN utilisateurs AS U
  ON S.id_utilisateur = U.id
INNER JOIN services_utilisateurs AS SU
  ON S.id = SU.id_service
WHERE SU.id_utilisateur = 5
ORDER BY S.date_service ASC
LIMIT 1;

/* Story 18 */
SELECT M.*, (SELECT U.pseudo FROM utilisateurs AS U WHERE U.id = 4 ) AS pseudo_utilisateur, 
(SELECT COUNT(SU.id) 
 FROM services_utilisateurs AS SU  
 LEFT JOIN services AS S 
 ON SU.id_service = S.id  
 WHERE SU.id_utilisateur = 4 
 AND M.mois = MONTH(S.date_service)
) AS total_participation
  FROM
    (
     SELECT 1 AS mois
     UNION
     SELECT 2  
     UNION
     SELECT 3  
     UNION
     SELECT 4  
     UNION
     SELECT 5
     UNION
     SELECT 6 
     UNION
     SELECT 7  
     UNION
     SELECT 8  
     UNION
     SELECT 9  
     UNION
     SELECT 10  
     UNION
     SELECT 11  
     UNION
     SELECT 12  
      )AS M;
