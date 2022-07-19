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

        <title>@yield('title')</title>

    </head>
    <body class="antialiased">
            <header> 
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="collapse navbar-collapse" id="navbar">
                        <a href="" class="navbar-brand">
                            <img src="img/Icon.png" class="logo-image" alt="Logo">SchedulesApp
                        </a>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="/"  class="nav-link">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="/create-schedule" class="nav-link">Criar Agendamento</a>
                            </li>
                            <li class="nav-item">
                                <a href="/dashboard" class="nav-link">Meus Agendamentos</a>
                            </li>
                            <li class="nav-item">
                                <a href="/login" class="nav-link">Login</a>
                            </li>
                            <li class="nav-item">
                                <a href="/logout" class="nav-link">Logout</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
                <main>
                <div class="container-fluid">
                    @yield('content')
                </div>
            </main>    
        <footer>
            <p>SchedulesApp - Salão Arca da Aliança - Agende Seu horario Conosco &copy;</p>
        </footer>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</html>