<?php
require_once "ContaCorrente.php";

$cc1 = new ContaCorrente("João", "370", "35220", 1000);
$cc2 = new ContaCorrente("Pedro", "570", "50287", 1200);

echo "Conta criada com sucesso";

echo "<br>";

echo $cc1->__toString();
echo "<br>";
echo $cc2->__toString();
echo "<br>";

$cc1->transferir(100, $cc2);

echo $cc1->getSaldo();
echo "<br>";
echo $cc2->getSaldo();
echo "<br>";
