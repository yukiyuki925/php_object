<?php
require_once('SimpleCalc.php');

$calc = new SimpleCalc();

// $calc->number = 10;
$calc->setNumber(10);

$calc->add(20);
$calc->add(30);
$calc->show();
echo $calc->getNumber() . PHP_EOL;
?>