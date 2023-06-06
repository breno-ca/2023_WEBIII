<?php

use Controllers\VendaController;

require_once "autoload.php";

$vendaController = new VendaController();

$vendaController->index();
