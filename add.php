<?php
include __DIR__ . "/includes/start.php";

// echo "<pre>" . print_r($_SERVER, true) . "</pre>";
$book_id = $_REQUEST["id"] ?? 0;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $titolo = $_POST["titolo"];
    $autore = $_POST["autore"];
    $anno = $_POST["anno_pubblicazione"];
    $genere = $_POST["genere"];

    if ($_POST["id"] != 0) {
        // echo "<pre>" . print_r($_POST, true) . "</pre>";


        $stmt = $pdo->prepare("UPDATE libri SET titolo = :titolo , autore = :autore, anno_pubblicazione = :anno_pubblicazione, genere = :genere WHERE id = :id");
        $stmt->execute([
            'titolo' => $titolo,
            'autore' => $autore,
            'anno_pubblicazione' => $anno,
            'genere' => $genere,
            'id' => $book_id,
        ]);
        
    } else {
        
        $stmt = $pdo->prepare("INSERT INTO libri (titolo, autore, anno_pubblicazione, genere) VALUES (:titolo, :autore, :anno_pubblicazione, :genere)");
        $stmt->execute([
            'titolo' => $titolo,
            'autore' => $autore,
            'anno_pubblicazione' => $anno,
            'genere' => $genere,
            
        ]);
        
        
    };
    header("Location: /u3-w1-php/u4-w1-d5-challenge/");
}
?>

<div class="row">
    <div class="col-6">
        <h3 class="mb-3"><?= isset($_REQUEST["id"]) ? "Modifica libro" : "Aggiungi libro" ?></h3>
        <form action="" method="POST" novalidate>
            <div class="row">
                <div class="col-6">
                    <input type="hidden" name="id" value="<?= $book_id ?>">
                    <label for="titolo" class="form-label">Titolo</label>
                    <input type="text" class="form-control" name="titolo" id="titolo" aria-describedby="basic-addon3 basic-addon4" required>
                </div>
                <div class="col-6">
                    <label for="autore" class="form-label">Autore</label>
                    <input type="text" class="form-control" name="autore" id="autore" aria-describedby="basic-addon3 basic-addon4" required>
                </div>
                <div class="col-6">
                    <label for="anno" class="form-label">Anno di pubblicazione</label>
                    <input type="number" class="form-control" name="anno_pubblicazione" id="anno" aria-describedby="basic-addon3 basic-addon4" required>
                </div>
                <div class="col-6">
                    <label for="genere" class="form-label">Genere</label>
                    <input type="text" class="form-control" name="genere" id="genere" aria-describedby="basic-addon3 basic-addon4" required>
                </div>
                <div class="d-flex justify-content-center"><button class="btn <?= isset($_REQUEST["id"]) ? "btn-success" : "btn-primary" ?> mt-3"><?= isset($_REQUEST["id"]) ? "Modifica" : "Aggiungi" ?></button></div>
            </div>
        </form>
    </div>
</div>

<?php
include __DIR__ . "/includes/end.php";
?>