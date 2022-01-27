@extends("layouts.servis-layout")
@extends("layouts.header")

@section("title")
    Модерация заявок
@endsection

@section("content")

<h1>Категории заявок</h1>

<div class="room-navigation">
<a  href="/admin">Новые заявки</a>
<a class="choosed" href="#">Модерация категорий</a>
</div>
<div class="blocks">
  
    @foreach($cats as $el)
    <div class="delete_category_el">
      <p class="delete_category">{{$el->category}}</p>
      <a href="{{route('delete_category', $el->id, $el->category)}}"><button class="delete_category bad">Удалить</button></a>
    </div>
    @endforeach
</div>
 

<form method="post" action="/admin/category_add">
@csrf
    <div class="formspace">
        <ul>
            <li>
                <input type="text" id="category" name="category" placeholder="Новая категория" required> 
               <button class="btn good">Новая категория</button>
            </li>
        </ul>
    </div>
</form>




@endsection