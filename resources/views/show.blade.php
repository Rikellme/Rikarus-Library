@extends('layouts.main')

@section('link')
    <link rel="stylesheet" href="/css/show.css">
@endsection

@section('title', $book->name)

@section('content')

        <div class="title">
            <h1>{{$book->name}}</h1>
        </div>

        <div class="content">
            <div class="image">
                <img src="/img/events/{{$book->image}}" alt="">
            </div>

            <div class="informations">
                <h2>Resumo</h2>
                <p>{{$book->resume}}</p>
            </div>
        </div>




@endsection
