<?php
require_once '../database/connexion.php';
$id = (int) ($_GET['id'] ?? 0);

try {
    $stmt = $pdo->prepare("DELETE FROM formations WHERE id = ?");
    $stmt->execute([$id]);
    header('Location: index.php');
    exit;
} catch (PDOException $e) {
    // Suppression bloquée par les FK
    $message = "Impossible de supprimer : des étudiants ou modules sont liés à cette formation.";
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Suppression impossible</title>
    <link rel="stylesheet" href="/tp7-crud/style.css">
</head>
<body>
    <div class="container">
        <h1>Suppression impossible</h1>
        <div class="message-error"><?= htmlspecialchars($message) ?></div>
        <a href="index.php" class="back-link">← Retour à la liste</a>
    </div>
</body>
</html>