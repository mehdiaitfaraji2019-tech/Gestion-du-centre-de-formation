######TP7 — CRUD multi-entités PHP / PDO / MySQL#####

Petite application Web de gestion d'un **centre de formation** (formations, étudiants, modules) réalisée en **PHP + PDO + MySQL**.

Un centre propose plusieurs formations. Chaque étudiant est rattaché à une seule formation, et chaque formation contient plusieurs modules.

Phase de conception:

Table de "formations": id, nom, duree_mois 
Table de "etudiants": id, nom, prenom, email, formation_id → formations.id 
Table de modules: id, titre, volume_heures, formation_id → formations.id 

Structure:

tp7-crud/
├── style.css
├── index.php
├── database.sql
├── database/connexion.php
├── formations/ (index, create, edit, delete)
├── etudiants/ (index, create, edit, delete)
└── modules/ (index, create, edit, delete)
