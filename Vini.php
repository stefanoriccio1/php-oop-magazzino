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

  public function __construct(){
    $this->formato = '0,75l';
  }
}



$barbera = new Vini();
$barbera->annata = '2016';
$barbera->tipologia = 'Rosso';
$barbera ->alcol = '14%';
var_dump($barbera);



?>
