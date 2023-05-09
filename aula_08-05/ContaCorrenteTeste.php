<?php
require_once "ContaCorrente.php";

$cc1 = new ContaCorrente("João", "370", "35220", 1000);
$cc2 = new ContaCorrente("Pedro", "570", "50287");

echo "Conta criada com sucesso";

echo "<br>";

echo $cc1->__toString();
echo "<br>";
echo $cc2->__toString();


echo "<pre>";
var_dump($cc1);

echo "<br>";

echo "<pre>";
var_dump($cc2);