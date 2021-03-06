@extends("layouts.servis-layout")
@extends("layouts.header")

@section("title")
    Личный кабинет - создать заявку
@endsection

@section("content")

<h1>Личный кабинет</h1>

<div class="room-navigation">
<a  href="/userroom">Мои заявки</a>
<a class="choosed" href="#">Подать заявку</a>
</div>

<h2>Новая заявка</h2>

<div class="formspace">
    <form method="POST"  enctype="multipart/form-data" action="/user-create-form/submit">
         @csrf

         <ul>
             <li>
                 <label for="name">Название</label>
                 <input type="text" name="title" id="title" placeholder="Название заметки" required minlength="5" maxlength="64">
             </li>

             <li>
                 <label for="type">Категория</label>
                 <select name="type" id="type" placeholder="Название заметки"  required >
                    @foreach($cats as $cat)
                        <option>{{$cat->category}}</option>
                    @endforeach
                 </select>
             </li>

             <li>
                 <label for="discription">Описание</label>
                 <textarea id="discription" name="discription" placeholder="Описание..." required minlength="10" ></textarea>
             </li>

              <li>
                 <label for="beforeImage">Фото</label>
                  <input type="file" name="beforeImage" id="beforeImage" placeholder="File" required  accept=".jpg, .jpeg, .png">
             </li>

             <li>
                <button>Отправить</button>
             </li>
         </ul>
    </form>
</div>




@endsection