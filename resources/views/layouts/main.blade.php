<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/css/global.css">
    @yield('link')
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <img class="logo" src="/img/logo.png" alt="Rikaru's"/>

        <nav>
            <li>
                <ul><a class="back-link" href="/">Exposições</a></ul>
                <ul><a class="back-link" href="/my-exhibitions">Minhas Exposições</a></ul>
                <ul>
                    <form action="/logout" method="POST">
                        @csrf
                        <a href="/logout"
                            class="back-link"
                            onclick="event.preventDefault();
                            this.closest('form').submit();">
                            Sair
                        </a>
                    </form>
                </ul>
            </li>
        </nav>
    </header>

    @yield('content')

    <footer>
        <p>Todos os direitos reservados &copy; 2021</p>
        <p>♡ 💕</p>
        <p>By <strong> Rikellme </strong></p>
    </footer>

</body>
</html>
