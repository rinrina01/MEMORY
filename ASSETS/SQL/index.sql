CREATE TABLE utilisateur (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    email VARCHAR(255) UNIQUE NOT NULL,
    mot_de_passe CHAR(64) NOT NULL,
    pseudo VARCHAR(255) NOT NULL,
    date_inscription DATETIME,
    derniere_connexion DATETIME,
    PRIMARTY KEY (id)
);


CREATE TABLE score (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    id_joueur INT,
    id_jeu INT,
    difficulte_partie VARCHAR(255),
    score_partie INT,
    date_partie DATETIME,
    FOREIGN KEY (id_joueur) REFERENCES utilisateur(id),
    FOREIGN KEY (id_jeu) REFERENCES jeu(id),
    PRIMARTY KEY (id)
);

CREATE TABLE message (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    id_jeu INT,
    id_expediteur INT,
    message TEXT,
    date_message DATETIME,
    FOREIGN KEY (id_jeu) REFERENCES jeu(id),
    FOREIGN KEY (id_expediteur) REFERENCES utilisateur(id),
    PRIMARTY KEY (id)
);

CREATE TABLE jeu (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    nom_jeu VARCHAR(255) UNIQUE NOT NULL,
    PRIMARTY KEY (id)
);

INSERT INTO jeu (nom_jeu) VALUES ('Power Of Memory');