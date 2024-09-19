<?php
include 'prodotto.php';

// ISTANZE CATEGORIA
$gatto = new Categoria('Gatto', '🐱');
$cane = new Categoria('Cane', '🐶');

// ISTANZE DEI PRODOTTI
$prodotti = [
    new Cibo('Cibo per Cani', 15, $cane, 'Pollo'),
    new Giochi('Palla per Gatti', 5, $gatto, 'Plastica'),
    new Cucce('Cuccia Grande', 50, $cane, 'Grande')
];
