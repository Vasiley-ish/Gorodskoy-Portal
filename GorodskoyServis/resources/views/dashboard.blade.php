@extends("layouts.servis-layout")
@extends("layouts.header")

@section("title")
    Главная
@endsection

@section("content")

<h1>Выполненные заявки</h1>

<div class="orange-box">
    <h2>всего выполнено заявок: 5
    </h2>
</div>

<div class="blocks">
  
    @foreach($data as $el)
    <div class="card">
        <div class="card-content">
        <img src="{{ URL::to('/assets/images/plug.jpg') }}">
            <div class="card_text">
                <h2>{{$el->title}}</h2>
                <p>{{$el->discription}}</p>
                <small>{{$el->login}}</small>
                <small>{{$el->created_at}}</small>
            </div>
        </div>
    </div>
 
    @endforeach
</div>



@endsection