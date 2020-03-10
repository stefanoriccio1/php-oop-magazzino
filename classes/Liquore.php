<?php
require_once 'Vino.php';

class Liquore extends Vino{

public $temperaturaServizio;

}

$limoncello = new Liquore('Villa Massa');
$limoncello->alcol = '30°';
$limoncello->temperaturaServizio = '3°';
?>
