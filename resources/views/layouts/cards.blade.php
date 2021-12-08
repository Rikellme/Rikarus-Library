@extends('layouts.main')

@section('link')
    <link rel="stylesheet" href="/css/cards.css">
    @yield('links')
@endsection

@section('content')

    @yield('main')
    @foreach($books as $book)

    <section class="content">
        <div class="group-books">
            <div class="one-book">
                <div class="group-information">
                    <div class="img-information">
                        <img src="/img/events/{{$book->image}}" alt="" />
                        <div class="group-datas">
                            <label>Livro: <p>{{$book->name}}</p></label>

                            <label>Autor: <p>{{$book->author}}</p></label>
                        </div>
                    </div>
                    <form action="/book/delete/{{$book->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="delete-book"><a href="/book/delete/{{$book->id}}">X</a></button>
                    </form>
                </div>
                <div class="synopsis">
                    <label>Sinopse: <p>{{$book->synopsi}}</p></label>
                </div>
                <a class="button" href="/book/{{$book->id}}">Ler Mais</a>
            </div>
        </div>
    </section>

    @endforeach
    @yield('conditional-count')
@endsection
