<?php

namespace Controllers;

use Models\ItemVenda;
use Models\Venda;


class VendaController
{
    public function index()
    {
        $venda = new Venda();
        $venda->codigo = 123;
        $venda->data = date('d/m/Y');
        echo "<h1>
                Venda código: {$venda->codigo} -
                Data: {$venda->data}
              </h1>";

        $itemVenda = new ItemVenda();
        $itemVenda->item = "Computador AMD";
        echo "<h1>Item de venda: {$itemVenda->item}</h1>";
    }
}
