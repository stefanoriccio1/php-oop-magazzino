<?php
require_once 'classes/Vino.php';
require_once 'classes/Liquore.php';

$barbera = new Vino('Cascina la Barbatella');
$barbera->annata = '2016';
$barbera->tipologia = 'Rosso';
$barbera ->alcol = '14%';


$gewurztrminer = new Vino('Elena Walch');
$gewurztrminer->tipologia = 'Bianco';
$gewurztrminer->annata = 2018;
$gewurztrminer->ultimoConsumo = 2022;
$gewurztrminer->alcol = '15%';
echo $gewurztrminer->consumoIdeale() . 'anni ';

$limoncello = new Liquore('Villa Massa');
$limoncello->alcol = '30°';
$limoncello->temperaturaServizio = '3°';
echo $limoncello->getAlcol();
echo $limoncello->temperaturaServizio;


?>
