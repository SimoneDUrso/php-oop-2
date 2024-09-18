<?php
// CLASSE PRODOTTO
class Prodotto
{
    public $nome_prodotto;
    public $prezzo;
    public $categoria;

    function __construct($_nome_prodotto, $_prezzo, Categoria $_categoria)
    {
        $this->nome_prodotto = $_nome_prodotto;
        $this->prezzo = $_prezzo;
        $this->categoria = $_categoria;
    }

    public function infoProdotto()
    {

        return $this->nome_prodotto . ' ' . $this->prezzo . ' ' . $this->categoria->tipo_animale . '' . $this->categoria->icona_categoria;
    }
}
// SOTTOCLASSE CATEGORIA
class Categoria
{
    public $tipo_animale;
    public $icona_categoria;

    function __construct($_tipo_animale, $_icona_categoria)
    {
        $this->tipo_animale = $_tipo_animale;
        $this->icona_categoria = $_icona_categoria;
    }
}



// CLASSE CIBO
class Cibo extends Prodotto
{
    public $nome_cibo;

    function __construct($_nome_prodotto, $_prezzo, Categoria $_categoria, $_nome_cibo)
    {
        parent::__construct($_nome_prodotto, $_prezzo, $_categoria); // Chiama il costruttore della classe genitore
        $this->nome_cibo = $_nome_cibo;
    }

    public function infoProdotto()
    {
        return parent::infoProdotto() . ' Cibo: ' . $this->nome_cibo;
    }
}

// CLASSE GIOCHI
class Giochi extends Prodotto
{
    public $tipo_di_gioco;

    function __construct($_nome_prodotto, $_prezzo, Categoria $_categoria, $_tipo_di_gioco)
    {
        parent::__construct($_nome_prodotto, $_prezzo, $_categoria); // Chiama il costruttore della classe genitore
        $this->tipo_di_gioco = $_tipo_di_gioco;
    }

    public function infoProdotto()
    {
        return parent::infoProdotto() . ' Gioco: ' . $this->tipo_di_gioco;
    }
}

// CLASSE CUCCE
class Cucce extends Prodotto
{
    public $dimensione;

    function __construct($_nome_prodotto, $_prezzo, Categoria $_categoria, $_dimensione)
    {
        parent::__construct($_nome_prodotto, $_prezzo, $_categoria); // Chiama il costruttore della classe genitore
        $this->dimensione = $_dimensione;
    }

    public function infoProdotto()
    {
        return parent::infoProdotto() . ' Dimensione: ' . $this->dimensione;
    }
}

// ISTANZE SOTTOCLASSE
$gatto = new Categoria('Gatto', '🐱');
$cane = new Categoria('Cane', '🐶');

// ISTANZE DEI PRODOTTI
$prodotti = [
    new Cibo('Cibo per Cani', '15€', $cane, 'Pollo'),
    new Giochi('Palla per Gatti', '5€', $gatto, 'Plastica'),
    new Cucce('Cuccia Grande', '50€', $cane, 'Grande')
];

// VISUALIZZIAMO A SCHERMO I PRODOTTI

// echo $cibo_cane->infoProdotto();
// echo '<hr>';
// echo $palla_gatto->infoProdotto();
// echo '<hr>';
// echo $cuccia_cane->infoProdotto();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>php-oop-2</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <?php foreach ($prodotti as $prodotto): ?>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card">
                        <div class="card-title">
                            <h2 class="text-center fw-bold">Prodotto: <?php echo $prodotto->nome_prodotto ?></h2>
                        </div>
                        <div class="card-body text-center">
                            <p class="fs-3"><span class="fw-bold">Prezzo Prodotto:</span> <?php echo $prodotto->prezzo ?> </p>
                            <span class="fs-3"><span class="fw-bold">Prodotto per:</span> <?php echo $prodotto->categoria->tipo_animale ?>
                                <span class="fs-3"><?php echo $prodotto->categoria->icona_categoria ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>

</html>