
@section("header")
<header>
        <div class="header-content">

        <a href="/"><img src="{{ URL::to('/assets/images/logo.png') }}"></a>

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
                <li> <a href="#">Личный Кабинет</a></li>  
                        <ul>
                           
                            <li><a href="#">Оставить заявку</a> </li>
                        </ul>     
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