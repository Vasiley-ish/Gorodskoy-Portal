@extends("layouts.servis-layout")
@extends("layouts.header")

@section("title")
    Личный кабинет - заявки
@endsection

@section("content")

<h1>Личный кабинет</h1>

<div class="room-navigation">
<a class="choosed" href="">Мои заявки</a>
<a href="/user-create-form">Подать заявку</a>
</div>

<h2>Заявки {{Auth::user()->name}}</h2>
<div class="blocks">
    
    <div class="card">
        <div class="card-content">
        	<p class="solved">Решено</p>
        <img src="{{ URL::to('/assets/images/plug.jpg') }}">
            <div class="card_text">
                <h2>Название</h2>
                <p>Описание lorem35 lorem35 lorem35 lorem35 lorem35 lorem35 lorem35 lorem35 
                    lorem35 lorem35 lorem35</p>
                <small>15.08.2021</small>
            </div>
        </div>
    </div>

</div>



@endsection