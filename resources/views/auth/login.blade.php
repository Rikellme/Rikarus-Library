<x-guest-layout>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/css/global.css">
    <link rel="stylesheet" href="/css/logon.css">
    <title>Login</title>
</head>
<body>
    <div class="content">
        <section>
            <img class="logo" src="/img/login.png" alt="Imagem do Login">

            <h1>Faça seu Login:</h1>

            <x-jet-validation-errors class="mb-4" />
            <form action="{{route('login')}}" method="POST">
                @csrf
                <input type="email" name="email" id="email"
                placeholder="Email" :value="old('email')" required autofocus styles="outline: none; background='#000'">

                <input type="password" name="password" id="password"
                placeholder="******" required autocomplete="current-pasword">

                <div class="divisor">
                    <button class="button" type="submit">Enviar</button>

                    <a href="/register"
                    class="back-link">Cadastrar-se
                    <img src="/img/log-in.svg" alt="">
                </a>

                </div>
            </form>
        </section>

        <div class="image">
            <img src="/img/undraw_book_lover_mkck.svg" alt="">
        </div>
    </div>
</body>
</html>

</x-guest-layout>
