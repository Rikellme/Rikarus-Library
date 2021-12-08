<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/global.css">
    <link rel="stylesheet" href="/css/registration.css">

    <title>@yield('title')</title>
</head>
<body>
    <main>
        <div class="content">
            <div class="group-info">
                <img src="/img/login.png" alt="Rikaru's Library">

                <h1>@yield('title-form')</h1>

                <p>@yield('content-form')</p>

            </div>

            <form action="@yield('action-form')" name="frm-login" method="POST" enctype="multipart/form-data">
                @csrf
                @yield('input')

                <button class="button">Cadastrar</button>

                <a href="@yield('path-back-link')" class="back-link">
                <img src="/img/arrow-left.svg" alt="" /> @yield('back-link') </a>

            </form>
        </div>
    </main>

</body>
</html>
