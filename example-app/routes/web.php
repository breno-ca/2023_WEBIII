<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SeriesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ola', function () {
    return "Olá Mundo!";
});

Route::get('/soma', function() {
    $a = 100;
    $b = 200;
    $soma = $a + $b;
    return "A soma é {$soma}";
});

Route::get('/soma/{v1}/{v2}', function($v1, $v2) {
    $soma = $v1 + $v2;
    return "A soma é {$soma}";
});

/*Param2 agora é opcional opcional */
Route::get('/adicionar-produto/{param1}/{param2?}', function($p1, $p2 = null) {
    $texto = "O parâmetro 1 da URL é {$p1}<br>";
    $texto .= "O parâmetro 2 da URL é {$p2}";
    return $texto;
});

Route::get('/listarSeries', [SeriesController::class, 'listarSeries']);
Route::get('/home', HomeController::class);

//Exercício
//Criar 2 novas rotas para o HomeController. Você vai definir o 
//nome dos métodos (ações) e vai definir o retorno desses métodos.

/*
Route::get('/listarSeries', function() {
    $series = [
        "Lost",
        "Grey's Anatomy",
        "Agents of SHIELDS"
    ];

    $html = "<ul>";
    foreach($series as $serie) {
        $html .= "<li>$serie</li>";
    }
    $html .= "</ul>";

    return $html;
});*/

