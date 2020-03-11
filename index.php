<?php
require_once 'classes/Vino.php';
require_once 'classes/Liquore.php';

$barbera = new Vino('Cascina la Barbatella');
$barbera->annata = '2016';
$barbera->tipologia = 'Rosso';
$barbera ->alcol = '14%';

var_dump($barbera);


$gewurztraminer = new Vino('Elena Walch');
$gewurztraminer->tipologia = 'Bianco';
$gewurztraminer->annata = 2018;
$gewurztraminer->ultimoConsumo = 2022;
$gewurztraminer->alcol = '15%';
var_dump($gewurztraminer);
echo $gewurztraminer->consumoIdeale() . 'anni ';

$limoncello = new Liquore('Villa Massa');
$limoncello->alcol = '30°';
$limoncello->temperaturaServizio = '3°';
var_dump($limoncello);
echo $limoncello->getAlcol();
echo $limoncello->temperaturaServizio;

var_dump(get_class_methods(new Liquore('Villa Massa')));
?>
