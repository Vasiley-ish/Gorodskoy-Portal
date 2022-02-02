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
            <input type="radio" id="new" name="color" />
            <label for="new">Новая</label>
            <input type="radio" id="disp" name="color"/>
            <label for="disp">Отклонена</label>
            <input type="radio" id="solv" name="color"/>
            <label for="solv">Решена</label>
            <input type="radio" id="reset" name="color"/>
            <label for="reset">Все</label>
            @foreach($data as $el)
                @if($el->login == Auth::user()->name)
                @if($el->status == 'Новая')
                    <div class="card new">
                @endif
                @if($el->status == 'Решена')
                    <div class="card solv">
                @endif
                @if($el->status == 'Отклонена')
                    <div class="card disp">
                @endif
                        <div class="card-content">
                            @if($el->status == 'Новая')
                            <p class="new-card">
                            @endif
                            @if($el->status == 'Решена')
                            <p class="solved">
                            @endif
                            @if($el->status == 'Отклонена')
                            <p class="fucked">
                            @endif
                            {{$el->status}}</p>
                        <img src="{{ URL::to('/assets/images/plug.jpg') }}">
                            <div class="card_text">
                                <h2>{{$el->title}}</h2>
                                <h3>{{$el->category}}</h3>
                                <p>{{$el->discription}}</p>
                                <small>{{$el->created_at}}</small>
                            </div>
                        @if($el->status != 'Решена')
                        <form method="post" action="{{route('delete', $el->id)}}">
                            @csrf
                        <button action="submit" class="bad show_confirm">Удалить</button>
                        </form>
                        @endif
                        </div>
                    </div>
                @endif
            @endforeach
        </div>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script type="text/javascript">
 
     $('.show_confirm').click(function(event) {
          var form =  $(this).closest("form");
          var name = $(this).data("name");
          event.preventDefault();
          swal({
              title: `Уверены, что хотите удалить заявку?`,
              text: "Заявка {{$el->title}} будет безвозвратно удалена",
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