<x-layout title="create">

    <form action="{{ route('series.store') }}" method="post">
        @csrf

        <div class="row mb-3">
            <div class="col-8">
                <label for="nome" class="form-label">Nome:</label>
                <input type="text" name="nome" id="nome" value="{{ old('nome') }}" autofocus class="form-control">
            </div>

            <div class="col-2">
                <label for="seasonsQty" class="form-label">N° Temporadas:</label>
                <input type="text" name="seasonsQty" id="seasonsQty" value="{{ old('seasonsQty') }}" class="form-control">
            </div>

            <div class="col-2">
                <label for="episodesPerSeason" class="form-label">Eps / Temporada:</label>
                <input type="text" name="episodesPerSeason" id="episodesPerSeason" value="{{ old('episodesPerSeason') }}" class="form-control">
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</x-layout>
