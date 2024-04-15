<?php

include __DIR__ . "/includes/db.php";

$stmt = $pdo->prepare("DELETE FROM libri WHERE id = ?");
$stmt->execute([$_GET["id"]]);

header("Location: /u3-w1-php/u4-w1-d5-challenge/");
