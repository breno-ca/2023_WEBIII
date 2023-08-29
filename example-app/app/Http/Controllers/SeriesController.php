<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{

    public function create(){
        return view('series.create');
    }



    public function listarSeries()
    {
        $series = [
            "Lost",
            "Grey's Anatomy",
            "Agents of SHIELDS"
        ];

        //Chamando a view e passando uma variável
        //Versão compacta
        return view('series.index', compact('series'));

        //Versão original
        //return view('series.index', ['series' => $series]);

        /*
        $html = "<ul>";
        foreach($series as $serie) {
            $html .= "<li>$serie</li>";
        }
        $html .= "</ul>";*/
        //return $html;
    }
}
