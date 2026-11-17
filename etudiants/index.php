<?php
require_once '../database/connexion.php';
$sql = "SELECT e.*, f.nom AS formation_nom
        FROM etudiants e
        JOIN formations f ON e.formation_id = f.id
        ORDER BY e.id";
$etudiants = $pdo->query($sql)->fetchAll();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Étudiants</title>
    <link rel="stylesheet" href="/tp7-crud/style.css">
</head>
<body>
    <div class="container">
        <h1>Étudiants</h1>
        <div class="nav">
            <a href="../index.php">← Accueil</a>
            <a href="create.php" class="btn-add">+ Ajouter</a>
        </div>
        <table>
            <thead>
                <tr><th>ID</th><th>Nom</th><th>Prénom</th><th>Email</th><th>Formation</th><th>Actions</th></tr>
            </thead>
            <tbody>
            <?php foreach ($etudiants as $e): ?>
                <tr>
                    <td><?= $e['id'] ?></td>
                    <td><?= htmlspecialchars($e['nom']) ?></td>
                    <td><?= htmlspecialchars($e['prenom']) ?></td>
                    <td><?= htmlspecialchars($e['email']) ?></td>
                    <td><?= htmlspecialchars($e['formation_nom']) ?></td>
                    <td>
                        <a href="edit.php?id=<?= $e['id'] ?>" class="edit">Modifier</a>
                        <a href="delete.php?id=<?= $e['id'] ?>" class="delete"
                           onclick="return confirm('Supprimer cet étudiant ?')">Supprimer</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>