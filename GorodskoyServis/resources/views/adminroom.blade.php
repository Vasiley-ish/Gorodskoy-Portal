@extends("layouts.servis-layout")
@extends("layouts.header")

@section("title")
    Личный кабинет - заявки
@endsection

@section("content")

<h1>Кабинет администратора</h1>

<div class="room-navigation">
<a class="choosed" href="#">Новые заявки</a>
<a href="/admin/category_mod">Модерация категорий</a>
</div>

@foreach($data as $el)
    <div class="card admin">
        
            <div class="card_text admin">
                <h2>{{$el->title}}</h2>
                <h3>{{$el->category}}</h3>
                <p>{{$el->discription}}</p>
                <small>{{$el->login}}</small> <br>
                <small>{{$el->created_at}}</small>
                    <div class="elemints-in-row">
                        <a href="{{route('approve', $el->id)}}"><button class="btn good" >Решить</button></a>
                        <a href="{{route('disprove', $el->id)}}"><button class="btn bad" >Отклонить</button></a>
                    </div>
           
        </div>
    </div>
@endforeach

</div>



@endsection