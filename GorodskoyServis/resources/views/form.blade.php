@extends("layouts.servis-layout")
@extends("layouts.header")

@section("title")
    Личный кабинет - создать заявку
@endsection

@section("content")

<h1>Личный кабинет</h1>

<div class="room-navigation">
<a  href="/userroom">Мои заявки</a>
<a class="choosed" href="">Подать заявку</a>
</div>

<h2>Новая заявка</h2>

<div class="formspace">
    <form method="POST" action="">
         @csrf

         <ul>
             <li>
                 <label for="name">Название</label>
                 <input type="text" name="name" id="name" placeholder="Название заметки" required="true" minlength="5">
             </li>

             <li>
                 <label for="type">Категория</label>
                 <select name="type" id="type" placeholder="Категория заметки" required="true">
                    <option value="Ремонт дорог">Ремонт дорог</option>
                    <option value="Ремонт дорог">Уборка мусора</option>
                 </select>
             </li>

             <li>
                 <label for="discription">Описание</label>
                 <textarea id="discription" name="discription" placeholder="Описание..." required="true" minlength="15"></textarea>
             </li>

              <li>
                 <label for="file">Фото</label>
                  <input type="file" name="file" id="file" placeholder="Файл" required="true">
             </li>

             <li>
                <button>Отправить</button>
             </li>
         </ul>
    </form>
</div>




@endsection