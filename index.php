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

$gatto = new Categoria('Gatto', '🐱');
$cane = new Categoria('Cane', '🐶');

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

// ISTANZE DELLE SOTTOCLASSI
$cibo_cane = new Cibo('Cibo per Cani -', '15€ -', $cane, 'Pollo');
$gioco_gatto = new Giochi('Palla per Gatti -', '5€ -', $gatto, 'Plastica');
$cuccia_cane = new Cucce('Cuccia Grande -', '50€ -', $cane, 'Grande');

// ISTANZE PRODOTTO
$guinzaglio = new Prodotto('Guinzaglio', '20€', $cane);
$erba_gatta = new Prodotto('Erba Gatta', '10€', $gatto);

// var_dump($guinzaglio);
echo $cibo_cane->infoProdotto();
echo '<hr>';
echo $gioco_gatto->infoProdotto();
echo '<hr>';
echo $cuccia_cane->infoProdotto();



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>