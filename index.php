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

// CLASSE GIOCHI
class Giochi {}

// ISTANZE PRODOTTO
$guinzaglio = new Prodotto('Guinzaglio', '20 euro', $cane);
$erba_gatta = new Prodotto('Erba Gatta', '10 euro', $gatto);

// var_dump($guinzaglio);
echo $guinzaglio->infoProdotto();
echo '<hr>';
echo $erba_gatta->infoProdotto();



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