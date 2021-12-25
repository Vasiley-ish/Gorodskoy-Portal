
@section("header")
<header>
        <div class="header-content">

        <a href="/"><img src="{{ URL::to('/assets/images/logo.png') }}"></a>

        @if(!Auth::user()->name)
        <nav>
            <a href="/">Главная</a>
            <a href="/register">Регистрация</a>
            <a href="/login">Вход</a>
        </nav>
        @endif

        @if(Auth::user()->name)
        <nav>
            <a href="/">Главная</a>
           {{Auth::user()->name}}
        </nav>
        @endif



        </div>
    </header>
@endsection