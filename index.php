<?php
// CLASSE PRODOTTO
include __DIR__ . '/models/data.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>php-oop-2</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <?php foreach ($prodotti as $prodotto) { ?>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card">
                        <div class="card-title">
                            <h2 class="text-center fw-bold">Prodotto: <?php echo $prodotto->nome_prodotto ?></h2>
                        </div>
                        <div class="card-body text-center">
                            <p class="fs-3"><span class="fw-bold">Prezzo Prodotto:</span> <?php echo $prodotto->prezzo ?> </p>
                            <span class="fs-3"><span class="fw-bold">Prodotto per:</span> <?php echo $prodotto->categoria->tipo_animale ?>
                                <span class="fs-3"><?php echo $prodotto->categoria->icona_categoria ?></span>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</body>

</html>