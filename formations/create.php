<?php
require_once '../database/connexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $stmt = $pdo->prepare("INSERT INTO formations (nom, duree_mois) VALUES (?, ?)");
    $stmt->execute([$_POST['nom'], $_POST['duree_mois']]);
    header('Location: index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter formation</title>
    <link rel="stylesheet" href="/tp7-crud/style.css">
</head>
<body>
    <div class="container">
        <h1>Ajouter une formation</h1>
        <form method="post">
            <label>Nom
                <input type="text" name="nom" required>
            </label>
            <label>Durée (mois)
                <input type="number" name="duree_mois" min="1" required>
            </label>
            <button type="submit">Enregistrer</button>
        </form>
        <a href="index.php" class="back-link">← Retour à la liste</a>
    </div>
</body>
</html>