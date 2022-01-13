
@extends('layout/layout')
@section('content')


@if(session("msg") != null)
<div class="alert alert-success" role="alert">
  <strong>{{session("msg")}}</strong>
</div>

    
@endif
<div class="row pt-5 pb-5">
  <div class="col">
      <div class="card align-items-center">
        <img style="width: 200px" src="{{$fumetto->thumb}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{$fumetto["title"]}}</h5>
          <p class="card-text">{{$fumetto["description"]}}</p>
          <div class="d-flex style-btn pt-2">
            <a style="text-decoration: none" href="/comics/{{$fumetto->id}}/edit">Modifica</a>

            <form class="form-find" action="{{route('comics.destroy', $fumetto->id)}}" method="POST">
              @csrf
              @method("delete")


              <button  class="btn-form-style" type="submit"><span>Elimina</span></button>
            </form>
        </div>
      </div>
    </div>
</div>
@endsection

