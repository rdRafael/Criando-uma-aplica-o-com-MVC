<x-layout title="series" :mensagem-sucesso="$mensagemSucesso">
    <a href="{{ route('series.create') }}" class="btn 
    btn-dark mb-2">Adicionar</a>

    <ul class="list-group">
        @foreach ($series as $serie)
        <li class="list-group-item d-flex justify-content-between aling-center">
            <a href="{{ route('seasons.index', $serie->id) }}">{{ $serie->nome }}</a>
            <span class="d-flex ">
                <a href="{{ route('series.edit', $serie->id) }}" class="btn btn-primary btn-sm mr-1s">E</a>
                <form action="{{ route('series.destroy', $serie->id) }}" method="post">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger btn-sm" type="submit">X</button>
                </form>
            </span>
        </li>
        @endforeach
    </ul>
</x-layout>