<?php

namespace App\Http\Controllers;

use App\Http\Requests\SeriresFormRequest;
use App\Models\Series;
use App\Repositories\SeriesRepository;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SeriesController extends Controller
{

    public function __construct(private SeriesRepository $repository)
    {
        
    }
    public function index(Request $request): View
    {
       if ( Auth::check() ) {
        throw  new AuthenticationException();
       }
        $series = Series::all();
        $mensagemSucesso = $request->session()->get(key: 'mensagem.sucesso');
        // $request->session()->forget('mensagem.sucesso');

        return view('series.index')->with('series', $series)->with('mensagemSucesso', $mensagemSucesso);
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(SeriresFormRequest $request)
    {
        $serie = $this->repository->add($request);

        return to_route('series.index')->with('mensagem.sucesso', "Série {$serie->nome} adicionada com sucesso");
    }

    public function destroy(Series $series, Request $request)
    {
        $series->delete();

        return to_route('series.index')->with('mensagem.sucesso', "Série {$series->nome} removida com sucesso");
    }

    public function edit(Series $series)
    {
        return view('series.edit')->with('serie', $series);
    }

    public function update(Series $series, Request $request)
    {
        $series->fill($request->all());
        $series->update();

        return to_route('series.index')->with('mensagem.sucesso', "Série {$series->nome} atualizada com sucesso");
    }
}
