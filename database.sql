CREATE DATABASE tp7_crud;

USE tp7_crud;

CREATE TABLE formations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    duree_mois INT NOT NULL
);

CREATE TABLE etudiants (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50) NOT NULL,
    prenom VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    formation_id INT NOT NULL,
    CONSTRAINT fk_etudiants_formation
        FOREIGN KEY (formation_id) REFERENCES formations(id)
        
);

CREATE TABLE modules (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titre VARCHAR(100) NOT NULL,
    volume_heures INT NOT NULL,
    formation_id INT NOT NULL,
    CONSTRAINT fk_modules_formation
        FOREIGN KEY (formation_id) REFERENCES formations(id)
        ON DELETE RESTRICT
        ON UPDATE CASCADE
);


INSERT INTO formations (nom, duree_mois) VALUES
('Développement Web Full Stack', 9),
('DevOps', 6),
('Data Science', 12);


INSERT INTO etudiants (nom, prenom, email, formation_id) VALUES
('Alami', 'Yassine', 'yassine.alami@mail.com', 1),
('Bennani', 'Sara', 'sara.bennani@mail.com', 1),
('Chraibi', 'Omar', 'omar.chraibi@mail.com', 2),
('Daoudi', 'Imane', 'imane.daoudi@mail.com', 3);

INSERT INTO modules (titre, volume_heures, formation_id) VALUES
('PHP & PDO', 40, 1),
('MySQL', 30, 1),
('HTML / CSS', 35, 1),
('Docker', 25, 2),
('CI/CD', 20, 2),
('Python & Pandas', 45, 3),
('Machine Learning', 50, 3);