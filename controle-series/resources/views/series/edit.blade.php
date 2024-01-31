<x-layout title="Editar serie '{{ $serie->nome }}'">
    <x-series.form :action="route('series.update', $serie->id)" :nome="$serie->nome" :update="true" button="Editar" />
</x-layout>