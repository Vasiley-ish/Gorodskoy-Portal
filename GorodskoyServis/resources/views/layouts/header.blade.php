
@section("header")
<header>
        <div class="header-content">
            <div class="logo">
        <a href="/"><img src="{{ URL::to('/assets/images/logo.png') }}"></a>
            </div>

        @if(!Auth::user())

        <nav>
            <a href="/">Главная</a>
            <a href="/register">Регистрация</a>
            <a href="/login">Вход</a>
        </nav>

        @endif

        @if(Auth::user())

        <nav>
        <!-- {{Auth::user()->name}} -->
            <ul>
            <li><a href="/">Главная</a></li>
                @if(Auth::user()->name != 'Админ')
                <li> <a href="/userroom">Личный Кабинет</a></li>  
                @endif
                @if(Auth::user()->name == 'Админ')
                <li> <a href="/admin">Личный Кабинет</a></li>  
                @endif          
                <li> <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Выход') }}
                            </a>
                        </form></li>  
           </ul>
        </nav>

        @endif

        </div>
    </header>
@endsection