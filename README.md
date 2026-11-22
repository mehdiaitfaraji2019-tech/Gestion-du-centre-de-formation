######TP7 — PHP / PDO / MySQL######

Petite application Web de gestion d'un **centre de formation** (formations, étudiants, modules) réalisée en **PHP + PDO + MySQL**.

Un centre propose plusieurs formations. Chaque étudiant est rattaché à une seule formation, et chaque formation contient plusieurs modules.

**Phase de conception:

Table de "formations": id, nom, duree_mois 

Table de "etudiants": id, nom, prenom, email, formation_id → formations.id 

Table de modules: id, titre, volume_heures, formation_id → formations.id 

**Les types SQL :

INT AUTO_INCREMENT PRIMARY KEY pour les identifiants ;

VARCHAR pour les chaînes de caractères (noms, titres, email) ;

INT pour les valeurs numériques (durée, volume horaire) ;


<img width="810" height="162" alt="image" src="https://github.com/user-attachments/assets/27eff0d8-1c02-419c-b913-56be1f32de91" />



**Structure:

tp7-crud/
├── style.css
├── index.php
├── database.sql
├── database/connexion.php
├── formations/ (index, create, edit, delete)
├── etudiants/ (index, create, edit, delete)
└── modules/ (index, create, edit, delete)

L'organisation du projet suit une séparation par entité : chaque dossier (formations/, etudiants/, modules/) contient les quatre fichiers CRUD (index.php, create.php, edit.php, delete.php). La connexion à la base est centralisée dans database/connexion.php et incluse dans chaque page via require_once, évitant ainsi la duplication de code. Enfin, le fichier style.css à la racine du projet regroupe l'ensemble des règles de mise en forme (mise en page, tableaux, formulaires, boutons), ce qui garantit une interface cohérente et homogène sur toutes les pages, tout en séparant la présentation de la logique PHP.

**Tests: 
## Ajout d'un enregistrement
Le formulaire envoie les données en POST et l'utilisation de prepare()/execute() protège contre les injections SQL.

| | |
|:---:|:---:|
| <img src="https://github.com/user-attachments/assets/1e4252f8-402d-4365-a706-2deb0a74398c" width="100%"/> | <img src="https://github.com/user-attachments/assets/4915e7db-50b8-46c2-a134-462a07565e57" width="100%"/> |
| <img src="https://github.com/user-attachments/assets/97a68083-6b9e-44b7-837c-2a7cab62b1a0" width="100%"/> | |

Le formulaire d'ajout permet de saisir les données d'un étudiant et de choisir sa formation via une liste déroulante et à après la validation, le nouvel enregistrement apparaît immédiatement dans le tableau HTML, avec le nom de la formation affiché grâce à la jointure. La vérification dans phpMyAdmin confirme la persistance en base avec la clé étrangère formation_id correctement renseignée.

## Modification d'un enregistrement

| <img width="833" height="188" alt="image" src="https://github.com/user-attachments/assets/5a4310ef-a841-4dfc-a4e3-7f086aaced9d" />
| <img width="598" height="562" alt="image" src="https://github.com/user-attachments/assets/a273be13-c2ac-43c4-9627-9c98cc85a3f6" />
|
|:---:|:---:|
| <img width="874" height="534" alt="Capture d&#39;écran 2026-11-22 172712" src="https://github.com/user-attachments/assets/0ebe52b6-27bc-46a9-b1e5-87e4da0f5b8c" />
| <img width="824" height="222" alt="Capture d&#39;écran 2026-11-22 172720" src="https://github.com/user-attachments/assets/da6b5a6f-05ab-4eac-b33b-8e4a03c6c7cc" />
 |
La remplissation du formulaire de modification qui est avec des valeurs existantes et après la validation, la liste affiche les nouvelles valeurs mises à jour. La vérification dans phpMyAdmin confirme que la modification a bien été enregistrée dans la table (l'exécution correcte de la requête UPDATE avec clause WHERE).

## Suppression d'un enregistrement

| | |
|:---:|:---:|
| <img src="https://github.com/user-attachments/assets/2fbff783-4518-42cb-ad2d-909928092ba1" width="100%"/> | |
| <img src="https://github.com/user-attachments/assets/3fbc4bc3-f23f-430f-8d92-94b802606f7e" width="100%"/> | |

Après validation, la ligne disparaît du tableau HTML et la vérification dans phpMyAdmin confirme que l'enregistrement a bien été retiré de la base de données (l'exécution correcte de la requête DELETE avec clause WHERE).
