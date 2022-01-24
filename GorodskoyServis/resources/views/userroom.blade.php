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
@if( Auth::user()->name == 'Админ')
<a href="/admin">Модерация заявок</a>
@endif
</div>

<h2>Заявки {{Auth::user()->name}}</h2>
<div class="blocks">
    
@foreach($data as $el)
@if($el->login == Auth::user()->name)
    <div class="card">
        <div class="card-content">

            @if($el->status == 'Новая')
        	<p class="new">
            @endif
            @if($el->status == 'Решена')
        	<p class="solved">
            @endif
            @if($el->status == 'Отклонена')
        	<p class="fucked">
            @endif
            {{$el->status}}</p>
          

        <img src="{{ URL::to('/assets/images/plug.jpg') }}">
            <div class="card_text">
                <h2>{{$el->title}}</h2>
                <p>{{$el->discription}}</p>
                <small>{{$el->created_at}}</small>
            </div>
        </div>
    </div>
    @endif
@endforeach

</div>



@endsection