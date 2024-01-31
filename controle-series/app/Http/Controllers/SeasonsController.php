<?php

namespace App\Http\Controllers;

use App\Models\Series;
use Illuminate\Http\Request;

class SeasonsController extends Controller
{
    public function index(Series $series)
    {
        $seasons = $series->season()->with(relations:'episodes')->get();

        return view (view: 'seasons.index')->with('seasons', $seasons)->with('series', $series);
    }
}
