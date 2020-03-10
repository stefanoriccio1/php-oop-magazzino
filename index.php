<?php
include 'classes/Vino.php';

$barbera = new Vino('Cascina la Barbatella');
$barbera->annata = '2016';
$barbera->tipologia = 'Rosso';
$barbera ->alcol = '14%';


$gewurztrminer = new Vino('Elena Walch');
$gewurztrminer->tipologia = 'Bianco';
$gewurztrminer->annata = 2018;
$gewurztrminer->ultimoConsumo = 2022;
$gewurztrminer->alcol = '15%';
echo $gewurztrminer->consumoIdeale() . 'anni';


?>
