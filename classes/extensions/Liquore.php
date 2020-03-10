<?php
require '../vino.php';

class Liquore extends Vino{

public $temperaturaServizio;

}

$limoncello = new Liquore('Villa Massa');
$limoncello->alcol = '30°';
$limoncello->temperaturaServizio = '3°';
echo $limoncello->temperaturaServizio;
?>
