
@extends('layout/layout')
@section('content')
<div class="row pt-5">
  <div class="col">
      <div class="card align-items-center">
        <img style="width: 200px" src="{{$fumetto->thumb}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{$fumetto["title"]}}</h5>
          <p class="card-text">{{$fumetto["description"]}}</p>
        </div>
      </div>
    </div>
</div>
@endsection

