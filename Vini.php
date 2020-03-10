<?php
class Vini {

  public $cantina;
  public $annata;
  public $denominazione;
  public $vitigni;
  public $alcol;
  public $formato;
  public $consumoIdeale;
  public $tipologia;
  public $abbinamenti;

  public function __construct($_cantina){
    $this->formato = '0,75l';

    if(empty($_cantina)){

      echo 'non hai inserito la cantina';
    }

    $this->$cantina = $_cantina;
  }
}



$barbera = new Vini('Cascina la Barbatella');
$barbera->annata = '2016';
$barbera->tipologia = 'Rosso';
$barbera ->alcol = '14%';

var_dump($barbera);

$gewurztrminer = new VINI('Elena Walch');
$gewurztrminer->tipologia = 'Bianco';
$gewurztrminer->annata = '2018';
$gewurztrminer->consumoIdeale = '2019/2022';
$gewurztrminer->alcol = '15%';
var_dump($gewurztrminer);

?>
