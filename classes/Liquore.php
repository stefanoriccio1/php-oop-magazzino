<?php
require_once 'Vino.php';
require_once __DIR__ . '/../traits/GetConsegna.php';

class Liquore extends Vino{

public $temperaturaServizio;

use GetConsegna;

}

$limoncello = new Liquore('Villa Massa');
$limoncello->alcol = '30°';
$limoncello->temperaturaServizio = '3°';
?>
