<?php

require "AIOrequire.php";

$nome = "Garrafa térmica p/ chimarrão";
$descricao = "Garrafa inox 1,8L";

$produto = new Produto();
$produto->nome = $nome;
$produto->descricao = $descricao;
$resultado = $produto->inserir();

echo ($resultado) ? "OK" : "Error";