<?php
require_once '../database/connexion.php';
$id = (int) ($_GET['id'] ?? 0);
$formations = $pdo->query("SELECT id, nom FROM formations ORDER BY nom")->fetchAll();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $stmt = $pdo->prepare("UPDATE etudiants SET nom = ?, prenom = ?, email = ?, formation_id = ? WHERE id = ?");
    $stmt->execute([$_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['formation_id'], $id]);
    header('Location: index.php');
    exit;
}

$stmt = $pdo->prepare("SELECT * FROM etudiants WHERE id = ?");
$stmt->execute([$id]);
$e = $stmt->fetch();
if (!$e) { die("Étudiant introuvable"); }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier étudiant</title>
    <link rel="stylesheet" href="/tp7-crud/style.css">
</head>
<body>
    <div class="container">
        <h1>Modifier un étudiant</h1>
        <form method="post">
            <label>Nom
                <input type="text" name="nom" value="<?= htmlspecialchars($e['nom']) ?>" required>
            </label>
            <label>Prénom
                <input type="text" name="prenom" value="<?= htmlspecialchars($e['prenom']) ?>" required>
            </label>
            <label>Email
                <input type="email" name="email" value="<?= htmlspecialchars($e['email']) ?>" required>
            </label>
            <label>Formation
                <select name="formation_id" required>
                    <?php foreach ($formations as $f): ?>
                        <option value="<?= $f['id'] ?>" <?= $f['id'] == $e['formation_id'] ? 'selected' : '' ?>>
                            <?= htmlspecialchars($f['nom']) ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </label>
            <button type="submit">Enregistrer</button>
        </form>
        <a href="index.php" class="back-link">← Retour à la liste</a>
    </div>
</body>
</html>