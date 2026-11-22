######TP7 — PHP / PDO / MySQL######

Petite application Web de gestion d'un **centre de formation** (formations, étudiants, modules) réalisée en **PHP + PDO + MySQL**.

Un centre propose plusieurs formations. Chaque étudiant est rattaché à une seule formation, et chaque formation contient plusieurs modules.

**Phase de conception:

Table de "formations": id, nom, duree_mois 

Table de "etudiants": id, nom, prenom, email, formation_id → formations.id 

Table de modules: id, titre, volume_heures, formation_id → formations.id 

<img width="3200" height="1800" alt="schema_formations_etudiants_modules" src="https://github.com/user-attachments/assets/2cfcafcd-0813-43ea-8871-66eab24afd7a" />


**Structure:

tp7-crud/
├── style.css
├── index.php
├── database.sql
├── database/connexion.php
├── formations/ (index, create, edit, delete)
├── etudiants/ (index, create, edit, delete)
└── modules/ (index, create, edit, delete)







**Tests: 
## Ajout d'un enregistrement

| | |
|:---:|:---:|
| <img src="https://github.com/user-attachments/assets/1e4252f8-402d-4365-a706-2deb0a74398c" width="100%"/> | <img src="https://github.com/user-attachments/assets/4915e7db-50b8-46c2-a134-462a07565e57" width="100%"/> |
| <img src="https://github.com/user-attachments/assets/97a68083-6b9e-44b7-837c-2a7cab62b1a0" width="100%"/> | |

## Modification d'un enregistrement

| | |
|:---:|:---:|
| <img src="https://github.com/user-attachments/assets/5f664ef6-48cd-4412-b15c-e73496a50b33" width="100%"/> | <img src="https://github.com/user-attachments/assets/f40862e1-2ff8-4c11-aab5-08335a7ed032" width="100%"/> |
| <img src="https://github.com/user-attachments/assets/e53d9abd-bc7f-4520-ab17-bad73f840c1e" width="100%"/> | <img src="https://github.com/user-attachments/assets/28ef88f3-77c9-4378-b4d9-50510f21be0d" width="100%"/> |

## Suppression d'un enregistrement

| | |
|:---:|:---:|
| <img src="https://github.com/user-attachments/assets/2fbff783-4518-42cb-ad2d-909928092ba1" width="100%"/> | |
| <img src="https://github.com/user-attachments/assets/3fbc4bc3-f23f-430f-8d92-94b802606f7e" width="100%"/> | |






