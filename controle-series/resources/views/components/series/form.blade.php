<form action="{{ $action }}" method="post">
    @csrf

    @if ($update)
        @method('PUT')
    @endif

    <div class="mb-3">
        <label for="nome" class="form-label">Nome:</label>
        <input type="text" name="nome" id="nome"
            @isset($nome) value="{{ $nome }}" @endisset class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">{{ $button }}</button>
</form>
