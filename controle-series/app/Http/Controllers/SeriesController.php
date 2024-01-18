<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Foreach_;

class SeriesController extends Controller
{
    public function index(): View
    {
        $series = [
            'Punisher',
            'Lost',
            'Grey\'s Anatomy',
        ];

        // $html = '<ul>';
        // foreach ($series as $serie) {
        //     $html .= "<li>$serie</li>";
        // }
        // $html .= '</ul>';

        // echo $html;

        return view('series.index')->with('series', $series);

    }
}
