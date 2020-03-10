<?php
require_once __DIR__ . '/../traits/GetConsegna.php';

class Vino {

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
  public $prezzo;

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

  //funzione per prendere grado alcolico
  public function getAlcol(){

    return $this->alcol;
  }

 use GetConsegna;
}

?>
