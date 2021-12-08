@extends('layouts.registration')

@section('title', 'Criar conta')

@section('title-form', 'Cadastro')

@section('content-form', 'Faça seu cadastro, entre na plataforma e divirta-se lendo e criando livros para outros usuários.')

@section('input')
    <input type="text" name="txtName" id="txtName" placeholder="Nome">
    <input type="email" name="txtEmail" id="txtEmail" placeholder="Email">
    <input type="password" name="txtPassword" id="txtPassword" placeholder="Senha">
    <input type="text" name="txtGenero" id="txtGenero" placeholder="Gênero favorito">

@endsection

@section('path-back-link', '/')

@section('back-link', 'Já possuo cadastro')
