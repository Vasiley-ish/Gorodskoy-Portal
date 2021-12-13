@extends("layouts.servis-layout")


@section("title")
    Главная
@endsection

@section("content")

<h1>Выполненные заявки</h1>

<div class="orange-box">
    <h2>всего выполнено заявок: 16</h2>
</div>

<div class="blocks">
    
    <div class="card">
        <div class="card-content">
        <img src="{{ URL::to('/assets/images/plug.jpg') }}">
            <div class="card_text">
                <h2>Название</h2>
                <p>Описание lorem35 lorem35 lorem35 lorem35 lorem35 lorem35 lorem35 lorem35 
                    lorem35 lorem35 lorem35</p>
                <small>15.08.2021</small>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-content">
        <img src="{{ URL::to('/assets/images/plug.jpg') }}">
            <div class="card_text">
                <h2>Название</h2>
                <p>Описание lorem35 lorem35 lorem35 lorem35 lorem35 lorem35 lorem35 lorem35 
                    lorem35 lorem35 lorem35</p>
                <small>15.08.2021</small>
            </div>
        </div>
    </div>


    <div class="card">
        <div class="card-content">
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