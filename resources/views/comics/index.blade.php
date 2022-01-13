@extends('layout/layout')

@section('content')
<div class="row row-cols-2 row-cols-md-6 g-4 pt-5">
     

  @foreach ($fumetti as $key =>  $fumetto)

  <div class="col" >
      <div class="card">
        <a style="text-decoration: none" href="comics/{{$fumetto->id}}">
        <img src="{{$fumetto->thumb}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{$fumetto["title"]}}</h5>
          <p style="color: black" class="card-text box-text">{{$fumetto["description"]}}</p>
          <div class="d-flex">
            <a href="comics/{{$fumetto->id}}/edit">Modifica</a>
          </div>
        </div>
      </a>
      </div>
    </div>

  @endforeach

</div>
@endsection

