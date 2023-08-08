<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function listarSeries(){
        $series = [
            "Lost",
            "Grey's Anatomy",
            "Agents of Shield"
        ];

        $html = "<ul>";

        foreach($series as $serie){
            $html .= "<li>$serie</li>";
        }

        $html = "</ul>";

        return $html;

    }
}
