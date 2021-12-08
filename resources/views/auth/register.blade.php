<x-guest-layout>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/css/global.css">
        <link rel="stylesheet" href="/css/registration.css">

        <title>Criar conta</title>
    </head>
    <body>
        <main>
            <div class="content">
                <div class="group-info">
                    <img src="/img/login.png" alt="Rikaru's Library">

                    <h1>Cadastro</h1>

                    <p>Faça seu cadastro, entre na plataforma e divirta-se lendo e criando livros para outros usuários.</p>

                </div>

                <x-jet-validation-errors class="mb-4" />
                <form action="{{route('register')}}" name="frm-login" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="text" name="name" id="name" placeholder="Nome" :value="name" required autofocus autocomplete="name">
                    <input type="email" name="email" id="email" placeholder="Email" :value="email">
                    <input type="password" name="password" id="password" placeholder="Senha" required autocomplete="new-password">
                    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirme a Senha" required autocomplete="new-password">

                    <button class="button">Cadastrar</button>

                    <a href="/" class="back-link">
                    <img src="/img/arrow-left.svg" alt="" /> Já possuo cadastro </a>

                </form>
            </div>
        </main>

    </body>
    </html>

</x-guest-layout>
