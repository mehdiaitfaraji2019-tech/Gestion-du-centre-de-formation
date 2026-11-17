<?php
require_once '../database/connexion.php';
$id = (int) ($_GET['id'] ?? 0);
$stmt = $pdo->prepare("DELETE FROM modules WHERE id = ?");
$stmt->execute([$id]);
header('Location: index.php');
exit;