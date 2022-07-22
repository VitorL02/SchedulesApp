<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,300&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/style.css">
        <script src="/js/script.js"></script>

        <title>@yield('title')</title>

    </head>
    <body class="antialiased">
            <header> 
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="collapse navbar-collapse" id="navbar">
                        <a href="/" class="navbar-brand">
                            <img src="img/Icon.png" class="logo-image" alt="Logo">SchedulesApp
                        </a>
                        <ul class="navbar-nav list-nav">
                            <li class="nav-item">
                                <a href="/"  class="nav-link">Home</a>
                            </li>
                            @guest
                            <li class="nav-item">
                                <a href="/login" class="nav-link">Login</a>
                            </li>
                            @endguest
                            <li class="nav-item">
                                <a href="/create-schedule" class="nav-link">Criar Agendamento</a>
                            </li>
                            <li class="nav-item">
                                <a href="/#" class="nav-link">Meus Agendamentos</a>
                            </li>
                            @auth
                            <li class="nav-item">
                                <form action="/logout" method="POST">
                                @csrf
                                <a href="/logout" class="nav-link" onclick="event.preventDefault();this.closest('form').submit();">Logout</a>
                                </form>
                            </li>
                            @endauth
                        </ul>
                    </div>
                </nav>
            </header>
                <main>
                <div class="container-fluid">
                    @if(session('msg'))
                        <p class="msg">{{session('msg')}}</p>
                    @endif
                    @yield('content')
                </div>
            </main>    
        <footer>
            <p>SchedulesApp - Salão Arca da Aliança - Agende Seu horario Conosco &copy;</p>
        </footer>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </body>
</html>
