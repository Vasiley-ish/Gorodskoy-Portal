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
    
@foreach($data as $el)
    <div class="card">
        <div class="card-content">

            @if($el->status == 'Новая')
        	<p class="new">{{$el->status}}</p>
            @endif
            @if($el->status == 'Решена')
        	<p class="solved">{{$el->status}}</p>
            @endif
            @if($el->status == 'Отклонена')
        	<p class="fucked">{{$el->status}}</p>
            @endif

          

        <img src="{{ URL::to('/assets/images/plug.jpg') }}">
            <div class="card_text">
                <h2>{{$el->title}}</h2>
                <p>{{$el->discription}}</p>
                <small>{{$el->created_at}}</small>
            </div>
        </div>
    </div>
@endforeach

</div>



@endsection