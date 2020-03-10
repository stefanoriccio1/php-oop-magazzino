<?php
include 'classes/Vino.php';

$barbera = new Vini('Cascina la Barbatella');
$barbera->annata = '2016';
$barbera->tipologia = 'Rosso';
$barbera ->alcol = '14%';


$gewurztrminer = new VINI('Elena Walch');
$gewurztrminer->tipologia = 'Bianco';
$gewurztrminer->annata = 2018;
$gewurztrminer->ultimoConsumo = 2022;
$gewurztrminer->alcol = '15%';
echo $gewurztrminer->consumoIdeale() . 'anni';



$listaVini = [
  $barbera,
  $gewurztrminer
];

foreach ($listaVini as $vino) {
  //echo $vino->annata . '   ';
}
?>
