<?php
require_once '../database/connexion.php';
$sql = "SELECT m.*, f.nom AS formation_nom
        FROM modules m
        JOIN formations f ON m.formation_id = f.id
        ORDER BY m.id";
$modules = $pdo->query($sql)->fetchAll();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modules</title>
    <link rel="stylesheet" href="/tp7-crud/style.css">
</head>
<body>
    <div class="container">
        <h1>Modules</h1>
        <div class="nav">
            <a href="../index.php">← Accueil</a>
            <a href="create.php" class="btn-add">+ Ajouter</a>
        </div>
        <table>
            <thead>
                <tr><th>ID</th><th>Titre</th><th>Volume (h)</th><th>Formation</th><th>Actions</th></tr>
            </thead>
            <tbody>
            <?php foreach ($modules as $m): ?>
                <tr>
                    <td><?= $m['id'] ?></td>
                    <td><?= htmlspecialchars($m['titre']) ?></td>
                    <td><?= $m['volume_heures'] ?></td>
                    <td><?= htmlspecialchars($m['formation_nom']) ?></td>
                    <td>
                        <a href="edit.php?id=<?= $m['id'] ?>" class="edit">Modifier</a>
                        <a href="delete.php?id=<?= $m['id'] ?>" class="delete"
                           onclick="return confirm('Supprimer ce module ?')">Supprimer</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>