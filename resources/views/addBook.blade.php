@extends('layouts.registration')

@section('title', 'Cadastrar Livro')

@section('title-form', 'Cadastrar Livro')

@section('content-form', 'Cadastre aqui um novo livro, para que outras pessoas possam lê-lo sempre que quiser.')

@section('action-form', '/addbook/publish')

@section('input')

    <input type="text" name="txtLivro" id="txtLivro" placeholder="Nome do Livro">
    <input type="text" name="txtGenero" id="txtGenero" placeholder="Gênero">
    <textarea name="txtSynopsis" id="txtSynopsis" placeholder="Sinopse"></textarea>
    <textarea name="txtResume" id="txtResume" placeholder="Resumo"></textarea>

    <div class="dataImage">
        <label for="image">&#187; Selecionar Imagem &#187;</label>
        <input required type="file" id="image" name="image">
    </div>
@endsection

@section('path-back-link', '/my-exhibitions')

@section('back-link', 'Voltar')
