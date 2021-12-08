@extends('layouts.cards')

@section('title', 'Perfil')
@section('links')
    <link rel="stylesheet" href="/css/my-exhibitions.css">
@endsection

@section('main')

    <section>
        <h1>Meus Livros</h1>

        <a href="/addbook" class="back-link">+ Adicionar Livro</a>
    </section>

@endsection

@section('conditional-count')
    @if(count($books) == 0)
        <div class="conditional">
            <h3>Nenhum Livro cadastrado até o momento.</h3>
        </div>
    @endif
@endsection

