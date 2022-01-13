@extends('layout/layout')

@section('content')
@if(session("msg") != null)
<div class="alert alert-success" role="alert">
  <strong>{{session("msg")}}</strong>
</div>    
@endif
<div class="row row-cols-2 row-cols-md-6 g-4 pt-5">
  @foreach ($fumetti as  $fumetto)

  <div class="col" >
      <div class="card">
        <a style="text-decoration: none" href="/comics/{{$fumetto->id}}">
        <img src="{{$fumetto->thumb}}" class="card-img-top" alt="...">
        <div class="card-body box-card-style">
          <h5 class="card-title">{{$fumetto["title"]}}</h5>
          <p style="color: black" class="card-text box-text">{{$fumetto["description"]}}</p>
        </a>
          <div class="d-flex style-btn pt-2">
            <a style="text-decoration: none" href="comics/{{$fumetto->id}}/edit">Modifica</a>

            <form class="form-find" action="{{route('comics.destroy', $fumetto->id)}}" method="POST">
              @csrf
              @method("delete")


              <button  style="background: transparent " class="border-0" type="submit"><span style="color: red">Elimina</span></button>
            </form>

         
          </div>
        </div>
      
      </div>
    </div>

  @endforeach
  <script >
    const formsLa = document.querySelectorAll(".form-find")
  
    formsLa.forEach(element => {  
      element.addEventListener("submit", (e) =>{
      e.preventDefault();
     const result = confirm(
       "Sei sicuro di voler eliminare questo fumetto?"
     );
  
     console.log(result);
      if(result){
        element.submit();
      }
  
      })
    });
  </script>
</div>
@endsection



