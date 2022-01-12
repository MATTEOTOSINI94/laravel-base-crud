@extends('layout/layout')

@section('content')
<div class="row row-cols-2 row-cols-md-6 g-4 pt-5">
     

  @foreach ($fumetti as $key =>  $fumetto)
  <a style="text-decoration: none" href="comics/{{$key+1}}">
  <div class="col" >
      <div class="card">
        <img src="{{$fumetto->thumb}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{$fumetto["title"]}}</h5>
          <p style="color: black" class="card-text box-text">{{$fumetto["description"]}}</p>
        </div>
      </div>
    </div>
  </a>
  @endforeach

</div>
@endsection

