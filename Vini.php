<?php
class Vini {

  public $annata;
  public $denominazione;
  public $vitigni;
  public $alcol;
  public $formato;
  public $consumoIdeale;
  public $tipologia;
  public $abbinamenti;
}

$barbera = new Vini();
$barbera->tipologia = "Rosso";
var_dump($barbera);

?>
