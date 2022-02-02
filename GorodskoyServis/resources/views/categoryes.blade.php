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
    <form method="post" action="{{route('delete_category', [$el->id, $el->category])}}">
@csrf
    <div class="delete_category_el">
      <p class="delete_category">{{$el->category}}</p>
      <button action="submit" class="delete_category bad show_confirm">Удалить</button>
    </div>
    </form>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script type="text/javascript">
 
     $('.show_confirm').click(function(event) {
          var form =  $(this).closest("form");
          var name = $(this).data("name");
          event.preventDefault();
          swal({
              title: `Уверены, что хотите удалить категорию {{$el->category}}?`,
              text: "Все связанные с ней заявки будут удалены",
              icon: "warning",
              buttons: true,
              dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              form.submit();
            }
          });
      });
  
</script>



@endsection