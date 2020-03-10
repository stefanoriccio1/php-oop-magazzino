<?php
class Vini {

  public $cantina;
  public $annata;
  public $denominazione;
  public $vitigni;
  public $alcol;
  public $formato;
  public $ultimoConsumo;
  public $tipologia;
  public $abbinamenti;
  public $vitaVino;

  //obbligo ad inserire cantina e setto formato
  public function __construct($_cantina){
    $this->formato = '0,75l';

    if(empty($_cantina)){

      echo 'non hai inserito la cantina';
    }

    $this->$cantina = $_cantina;
  }


  //funzione per calcolare gli anni di vita dei vini
  public function consumoIdeale(){

  if(empty($this->ultimoConsumo)|| empty($this->annata)){
    die('non hai riempito tutti i campi necessari');
  }
   return $this->ultimoConsumo - $this->annata;
  }


}



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
