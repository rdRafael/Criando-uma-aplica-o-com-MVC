<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Schema\ColumnDefinition;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SeriesController extends Controller
{
    public function index(): View
    {
        $series = Serie::query()->orderBy('nome')->get();
        // $series = [
        //     'Punisher',
        //     'Lost',
        //     'Grey\'s Anatomy',
        // ];


        // $html = '<ul>';
        // foreach ($series as $serie) {
        //     $html .= "<li>$serie</li>";
        // }
        // $html .= '</ul>';

        // echo $html;

        return view('series.index')->with('series', $series);

    }

    public function create()
    {
        return view('series.create');
    }

    public function store(Request $request)
    {
        //  $nomeSeries = ['nome' => $request->input(key: 'nome')];
         $nomeSeries = $request->input(key: 'nome');

        // // dd($nomeSeries);

        // Serie::create($nomeSeries);

        if(DB::insert('insert into series (nome) values (?)', [$nomeSeries])){
            return redirect(to: '/series');
        } else {
            return 'algo deu errado!';
        }
        
    }
}
