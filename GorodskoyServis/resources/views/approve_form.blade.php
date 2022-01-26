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
    <form method="POST" action="approve_application">
         @csrf
         <h3>Решить заявку {{$data->title}}</h3>
         <ul>
             <li>
                 <label for="after_photo">Подтверждающее изображение</label>
                 <input type="file" name="after_photo" id="after_photo" required  accept=".jpg, .jpeg, .png">
             </li>

             <li>
                    <a href="{{route('admin', $data->id)}}"><button>Подтвердить решение</button></a>
             </li>
         </ul>
    </form>
</div>




@endsection