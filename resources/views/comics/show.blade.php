
@extends('layout/layout')
@section('content')


@dump(session("msg"))

@if(session("msg") != null)
<div class="alert alert-success" role="alert">
  <strong>{{session("msg")}}</strong>
</div>
@else
    
@endif
<div class="row pt-5">
  <div class="col">
      <div class="card align-items-center">
        <img style="width: 200px" src="{{$fumetto->thumb}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{$fumetto["title"]}}</h5>
          <p class="card-text">{{$fumetto["description"]}}</p>
          <div class="d-flex">
            <a href="">Modifica</a>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection

