@extends("layouts.servis-layout")
@extends("layouts.header")

@section("title")
    Главная
@endsection

@section("content")

<h1>Выполненные заявки</h1>

<!-- <div class="orange-box">
    <h2>всего выполнено заявок: 5</h2>
</div> -->

<div class="solved_counter">
@php
    $solved = 0;
    foreach ($data as $value) {
        if ($value->status == "Решена") {
            $solved++;
        };
    };
@endphp

<h2 class="solved">Заявок решено: {{ $solved }} </h2>
</div>

@php
    $count = 0;
@endphp

<div class="blocks">
  
@foreach($data as $el)

@php
    if ($count == 4) {
        break;
    }
    $count++;
@endphp

    <div class="card">
        <div class="card-content">
        <img src="{{ URL::to('/assets/images/'.$el->imageafter)}}">
        <img class="on_top" src="{{ URL::to('/assets/images/beforeImages/'.$el->image)}}">
            <div class="card_text">
                <h2>{{$el->title}}</h2>
                <h3>{{$el->category}}</h3>
                <!-- <p>{{$el->discription}}</p> -->
                <small>{{$el->login}}</small>
                <small>{{$el->created_at}}</small>
            </div>
        </div>
    </div>
 
    @endforeach
    <script>
        var audio = new Audio('storage\sounds\levelup.mp3');
        $(document).ready(function(){
            setInterval(function(){
                $(".solved_counter").load(location.href + " .solved");
                console.log("refreshed");
            }, 5000);
        });
    </script>
</div>



@endsection