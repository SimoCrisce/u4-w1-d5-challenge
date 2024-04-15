<?php
include __DIR__ . "/db.php";

$stmt = $pdo->query("SELECT * FROM libri");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libreria</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-primary mb-4" data-bs-theme="dark">
    <div class="container">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-link <?= $_SERVER["REQUEST_URI"] === "/u3-w1-php/u4-w1-d5-challenge/" ? "active" : "" ?>" href="/u3-w1-php/u4-w1-d5-challenge/">Home</a>
            <a class="nav-link <?= $_SERVER["REQUEST_URI"] === "/u3-w1-php/u4-w1-d5-challenge/add.php" ? "active" : "" ?>" href="/u3-w1-php/u4-w1-d5-challenge/add.php">Aggiungi</a>
        </div>
        </div>
    </div>
    </nav>
    <div class="container">
