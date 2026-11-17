<?php
require_once '../database/connexion.php';
$formations = $pdo->query("SELECT id, nom FROM formations ORDER BY nom")->fetchAll();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $stmt = $pdo->prepare("INSERT INTO etudiants (nom, prenom, email, formation_id) VALUES (?, ?, ?, ?)");
    $stmt->execute([$_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['formation_id']]);
    header('Location: index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter étudiant</title>
    <link rel="stylesheet" href="/tp7-crud/style.css">
</head>
<body>
    <div class="container">
        <h1>Ajouter un étudiant</h1>
        <form method="post">
            <label>Nom
                <input type="text" name="nom" required>
            </label>
            <label>Prénom
                <input type="text" name="prenom" required>
            </label>
            <label>Email
                <input type="email" name="email" required>
            </label>
            <label>Formation
                <select name="formation_id" required>
                    <?php foreach ($formations as $f): ?>
                        <option value="<?= $f['id'] ?>"><?= htmlspecialchars($f['nom']) ?></option>
                    <?php endforeach; ?>
                </select>
            </label>
            <button type="submit">Enregistrer</button>
        </form>
        <a href="index.php" class="back-link">← Retour à la liste</a>
    </div>
</body>
</html>