@extends("layouts.servis-layout")
@extends("layouts.header")

@section("title")
    Личный кабинет - создать заявку
@endsection

@section("content")

<h1>Личный кабинет</h1>

<div class="room-navigation">
<a href="/admin"> {{ __('назад') }} </a>
</div>


<div class="formspace">
    <form method="POST" action="disprove_application">
         @csrf

         <ul>
             <li>
                 <label for="disprove_reason">Подтверждающее изображение</label>
                 <input type="text" name="disprove_reason" id="disprove_reason" placeholder="Причина отклонения" required minlength="2">
             </li>

             <li>
                <button class="bad">Подтвердить отклонение</button>
             </li>
         </ul>
    </form>
</div>




@endsection