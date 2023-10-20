-- STORY 1
CREATE DATABASE CodingFactoryDB;
USE CodingFactoryDB;

CREATE TABLE utilisateur (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    email VARCHAR(255) UNIQUE NOT NULL,
    mot_de_passe CHAR(255) NOT NULL,
    pseudo VARCHAR(30) NOT NULL,
    date_inscription DATETIME DEFAULT NOW(),
    derniere_connexion DATETIME DEFAULT NOW(),
    PRIMARY KEY (id)
);


CREATE TABLE score (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    id_joueur INT,
    id_jeu INT,
    difficulte_partie VARCHAR(255),
    score_partie INT,
    date_partie DATETIME DEFAULT NOW(),
    FOREIGN KEY (id_joueur) REFERENCES utilisateur(id),
    FOREIGN KEY (id_jeu) REFERENCES jeu(id),
    PRIMARY KEY (id)
);

CREATE TABLE message (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    id_jeu INT,
    id_expediteur INT,
    message TEXT,
    date_message DATETIME DEFAULT NOW(),
    FOREIGN KEY (id_jeu) REFERENCES jeu(id),
    FOREIGN KEY (id_expediteur) REFERENCES utilisateur(id),
    PRIMARY KEY (id)
);

CREATE TABLE jeu (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    nom_jeu VARCHAR(255) UNIQUE NOT NULL,
    PRIMARY KEY (id)
);


-- STORY 2
INSERT INTO Utilisateurs (email, mot_de_passe, pseudo)
VALUES
    ('jeanjacques@outlook.com', 'imtheboss', 'theJJ'),
    ('pierre-andre@gmail.com', 'ppandre01', 'whattheddawgdoin'),
    ('quiutiliseencoreyahoo@yahoo.com', 'maybe-nono', 'mdpqualitatif'),
    ('yourfbiagent@gmail.com', 'icanseeyou', 'canyouseeme?');
----------

-- STORY 3
INSERT INTO Utilisateurs (email, mot_de_passe, pseudo)
VALUES ('newuser@sample.com', 'password', 'newuser');
----------

-- STORY 2
INSERT INTO Scores (id_joueur, id_jeu, difficulte_partie)
VALUES 
    --- CHANGEMENTS EFFECTUÉS : (facile, moyen, difficile) = (1,2,3) ---
    (1, 1, '1', 80),
    (1, 1, '2', 120),
    (1, 1, '2', 50),
    (1, 1, '3', 110),
    (1, 1, '1', 20),

    (2, 1, '2', 100),
    (2, 1, '1', 10),
    (2, 1, '3', 50),
    (2, 1, '2', 90),
    (2, 1, '3', 0),

    (3, 1, '1', 10),
    (3, 1, '1', 20),
    (3, 1, '2', 50),
    (3, 1, '2', 80),
    (3, 1, '3', 100),

    (4, 1, '2', 120),
    (4, 1, '2', 110),
    (4, 1, '3', 90),
    (4, 1, '3', 20),
    (4, 1, '1', 0),

    (5, 1, '1', 1),
    (5, 1, '1', 5),
    (5, 1, '1', 78),
    (5, 1, '1', 23),
    (5, 1, '1', 0);


INSERT INTO Messages (id_jeu, id_expediteur, message)
VALUES 
    (1, 1, 'coucou les gens'),
    (1, 1, 'ca gaze ou pas'),
    (1, 1, 'oh ce flop'),
    (1, 2, 'oui oui oui'),
    (1, 2, 'ce jeu est enorme comme Jamy'),
    (1, 2, 'DINGUE'),
    (1, 3, 'c est pas le quartier qui me quitte c est moi qui quitte le quartier'),
    (1, 3, 'cqfd'),
    (1, 3, 'je te termine en 1v1 sur Minecraft'),
    (1, 4, 'ahah trop marrant le caca'),
    (1, 4, 'ca quoicoufloppe ou pas ?'),
    (1, 4, 'les fameux chevaliers d apagnan'),
    (1, 5, 'mhhhh Charal'),
    (1, 5, 'oh eh oh eh capitaine abandonne'),
    (1, 5, 'hisse et oh'),
    (1, 1, 'abandonne'),
    (1, 2, 'abracadabra'),
    (1, 3, 'poudre de perlinpinpin'),
    (1, 4, 'non non non'),
    (1, 5, 'yes'),
    (1, 1, 'abandonne pas'),
    (1, 2, 'abracadabra mais non'),
    (1, 3, 'poudre de perlinpinpin genre macron quoi'),
    (1, 4, 'non non non non et non pas de patate a midi'),
    (1, 5, 'yes or no');


-- STORY 4
UPDATE Utilisateurs
SET email = "nouvel_email@gmail.com", mot_de_passe = "nouveau_mdp"
WHERE id = 1;


--STORY 5 
SELECT * FROM Utilisateurs
WHERE email="email" AND mot_de_passe="mdp";


--STORY 6
INSERT INTO Jeux (nom_jeu)
VALUES ("The Power Of Memory");

-- STORY 7
SELECT U.pseudo, J.nom_jeu, S.difficulte_partie, S.score_partie FROM Utilisateurs AS U
INNER JOIN Scores AS S 
    ON U.id = S.id_joueur
INNER JOIN Jeux AS J 
    ON S.id_jeu = J.id
ORDER BY J.nom_jeu, S.difficulte_partie, S.score_partie ASC;

-- STORY 8
SELECT U.pseudo, J.nom_jeu, S.difficulte_partie, S.score_partie FROM Utilisateurs AS U
INNER JOIN Scores AS S 
    ON U.id = S.id_joueur
INNER JOIN Jeux AS J 
    ON S.id_jeu = J.id
WHERE S.difficulte_partie = "1", J.nom_jeu = "The Power Of Memory", U.pseudo = "imtheboss"
ORDER BY J.nom_jeu, S.difficulte_partie, S.score_partie ASC;


--STORY 9 -- ajouter select
INSERT INTO Scores (id_joueur,id_jeu, difficulte_partie, score_partie)
VALUES (5, 1, '1', 199999999999);

UPDATE Scores
SET score_partie = 1, date_partie = NOW()
WHERE id = 1;


-- STORY 10
INSERT INTO Messages (id_jeu, id_expediteur, message)
VALUES (1, 1, "Coucou");

---STORY 11
SELECT M.message, U.pseudo, M.date_message, M.id_expediteur = 1 AS isSender
FROM Messages AS M
INNER JOIN Utilisateurs AS U
  ON M.id_expediteur = U.id
WHERE M.date_message >= NOW() - INTERVAL 1 DAY;


-- STORY 12

SELECT U.pseudo, S.id_jeu, S.difficulte_partie, S.score_partie, S.date_partie FROM Utilisateurs AS U
INNER JOIN Scores AS S
  ON U.id = S.id_joueur
WHERE U.pseudo LIKE "%e%";
