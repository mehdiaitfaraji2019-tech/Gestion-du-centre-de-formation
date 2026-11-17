<?php
require_once '../database/connexion.php';
$id = (int) ($_GET['id'] ?? 0);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $stmt = $pdo->prepare("UPDATE formations SET nom = ?, duree_mois = ? WHERE id = ?");
    $stmt->execute([$_POST['nom'], $_POST['duree_mois'], $id]);
    header('Location: index.php');
    exit;
}

$stmt = $pdo->prepare("SELECT * FROM formations WHERE id = ?");
$stmt->execute([$id]);
$f = $stmt->fetch();
if (!$f) { die("Formation introuvable"); }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier formation</title>
    <link rel="stylesheet" href="/tp7-crud/style.css">
</head>
<body>
    <div class="container">
        <h1>Modifier une formation</h1>
        <form method="post">
            <label>Nom
                <input type="text" name="nom" value="<?= htmlspecialchars($f['nom']) ?>" required>
            </label>
            <label>Durée (mois)
                <input type="number" name="duree_mois" value="<?= $f['duree_mois'] ?>" min="1" required>
            </label>
            <button type="submit">Enregistrer</button>
        </form>
        <a href="index.php" class="back-link">← Retour à la liste</a>
    </div>
</body>
</html>