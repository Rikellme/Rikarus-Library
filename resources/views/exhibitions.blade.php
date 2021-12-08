@extends('layouts.cards')

@section('title', 'Exibições')


@section('links')
    <link rel="stylesheet" href="/css/exhibitions.css">
@endsection

@section('main')

    <section class="section-search">
        <div>
            <form action="/" method="GET">
                <h1>Procure pelo Livro desejado</h1>

                <input type="search" name="search" id="search" placeholder="Procurar...">
            </form>
        </div>
    </section>

    <div class="disponible-book">
        @if($search)
            <h3>Buscando por: "{{$search}}"</h3>
        @else
            <h3>Livros Disponíveis</h3>
            <p>Veja Todos os livros disponíveis</p>
        @endif
    </div>

@endsection

@section('conditional-count')
    @if(count($books) == 0 && $search)
        <div class="conditional">
            <h3>Não foi possível encontrar nenhum livro com o nome: "<strong>{{$search}}</strong>".</h3>
        </div>
    @elseif(count($books) == 0)
        <div class="conditional">
            <h3>Nenhum Livro disponível.</h3>
        </div>
    @endif
@endsection

