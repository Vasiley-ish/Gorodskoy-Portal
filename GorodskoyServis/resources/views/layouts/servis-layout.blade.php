<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\..\css\app.css">
    <title>@yield('title')</title>
</head>

<body>
    
<!-- ---------------------------------- -->
<header>
        <div class="header-content">

        <img src="{{ URL::to('/assets/images/logo.png') }}">

        <nav>
            <a href="#">Главная</a>
            <a href="#">Регистрация</a>
            <a href="#">Вход</a>
        </nav>

        </div>
    </header>
<!-- ---------------------------------- -->
    <main>
        <div class="content">
            @yield('content')
        </div>
    </main>


<!-- ---------------------------------- -->

<footer></footer>

<!-- ---------------------------------- -->
</body>

</html>