<?php
require_once '../database/connexion.php';
$formations = $pdo->query("SELECT * FROM formations ORDER BY id")->fetchAll();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formations</title>
    <link rel="stylesheet" href="/tp7-crud/style.css">
</head>
<body>
    <div class="container">
        <h1>Formations</h1>
        <div class="nav">
            <a href="../index.php">← Accueil</a>
            <a href="create.php" class="btn-add">+ Ajouter</a>
        </div>
        <table>
            <thead>
                <tr><th>ID</th><th>Nom</th><th>Durée (mois)</th><th>Actions</th></tr>
            </thead>
            <tbody>
            <?php foreach ($formations as $f): ?>
                <tr>
                    <td><?= $f['id'] ?></td>
                    <td><?= htmlspecialchars($f['nom']) ?></td>
                    <td><?= $f['duree_mois'] ?></td>
                    <td>
                        <a href="edit.php?id=<?= $f['id'] ?>" class="edit">Modifier</a>
                        <a href="delete.php?id=<?= $f['id'] ?>" class="delete"
                           onclick="return confirm('Supprimer cette formation ?')">Supprimer</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>