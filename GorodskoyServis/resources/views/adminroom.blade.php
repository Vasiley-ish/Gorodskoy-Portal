@extends("layouts.servis-layout")
@extends("layouts.header")

@section("title")
    Личный кабинет - заявки
@endsection

@section("content")

<h1>Кабинет администратора</h1>

<div class="room-navigation">
<a class="choosed" href="#">Новые заявки</a>
<a href="#">Отклоненные заявки</a>
<a href="#">Модерация категорий</a>
</div>

@foreach($data as $el)
    <div class="card admin">
        
            <div class="card_text admin">
                <h2>{{$el->title}}</h2>
                <p>{{$el->discription}}</p>
                <small>{{$el->login}}</small>
                <small>{{$el->created_at}}</small>
                    <div class="room-navigation">
                        <a href="{{route('aprove', $el->id)}}"><button class="btn good" action="">Решить</button></a>
                        <a href="{{route('disprove', $el->id)}}"><button class="btn bad" >Отклонить</button></a>
                    </div>
           
        </div>
    </div>
@endforeach

</div>



@endsection