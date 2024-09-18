<?php
class Prodotto
{
    public $nome_prodotto;
    public $prezzo;
    public $categoria;

    function __construct($_nome_prodotto, $_prezzo, $_categoria)
    {
        $this->nome_prodotto = $_nome_prodotto;
        $this->prezzo = $_prezzo;
        $this->categoria = $_categoria;
    }

    public function infoProdotti()
    {

        return $this->nome_prodotto . ' ' . $this->prezzo . ' ' . $this->categoria;
    }
}

$guinzaglio = new Prodotto('Guinzaglio', '20 euro', 'Cani');
var_dump($guinzaglio);
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