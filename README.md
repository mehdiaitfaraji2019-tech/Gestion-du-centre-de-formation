######TP7 — CRUD multi-entités PHP / PDO / MySQL#####

Petite application Web de gestion d'un **centre de formation** (formations, étudiants, modules) réalisée en **PHP + PDO + MySQL**.

Un centre propose plusieurs formations. Chaque étudiant est rattaché à une seule formation, et chaque formation contient plusieurs modules.

Phase de conception:

Table de "formations": id, nom, duree_mois 
Table de "etudiants": id, nom, prenom, email, formation_id → formations.id 
Table de modules: id, titre, volume_heures, formation_id → formations.id 
<img width="3200" height="1800" alt="schema_formations_etudiants_modules" src="https://github.com/user-attachments/assets/2cfcafcd-0813-43ea-8871-66eab24afd7a" />


Structure:

tp7-crud/
├── style.css
├── index.php
├── database.sql
├── database/connexion.php
├── formations/ (index, create, edit, delete)
├── etudiants/ (index, create, edit, delete)
└── modules/ (index, create, edit, delete)







Tests: 
**Ajout d'un enregistrement:
| | |
|:---:|:---:|
| <img src="https://github.com/user-attachments/assets/1e4252f8-402d-4365-a706-2deb0a74398c" width="100%"/> | <img src="https://github.com/user-attachments/assets/4915e7db-50b8-46c2-a134-462a07565e57" width="100%"/> |
| <img src="https://github.com/user-attachments/assets/97a68083-6b9e-44b7-837c-2a7cab62b1a0" width="100%"/> | |


