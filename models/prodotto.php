<?php

// CLASSE PRODOTTO
class Prodotto
{
    public $nome_prodotto;
    public $prezzo;
    public $categoria;

    function __construct($_nome_prodotto, $_prezzo, Categoria $_categoria)
    {
        // Aggiungo il try Catch per l'attributo prezzo della classe prodotto
        try {
            if (!is_numeric($_prezzo) || $_prezzo < 0) {
                throw new Exception("Prezzo non valido");
            }

            $this->prezzo = $_prezzo . "€";
        } catch (Exception $e) {

            // Se c'è un errore, il prezzo sarà il messaggio di errore
            $this->prezzo = $e->getMessage();
        }

        $this->nome_prodotto = $_nome_prodotto;
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
        parent::__construct($_nome_prodotto, $_prezzo, $_categoria);
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
        parent::__construct($_nome_prodotto, $_prezzo, $_categoria);
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
        parent::__construct($_nome_prodotto, $_prezzo, $_categoria);
        $this->dimensione = $_dimensione;
    }

    public function infoProdotto()
    {
        return parent::infoProdotto() . ' Dimensione: ' . $this->dimensione;
    }
}
