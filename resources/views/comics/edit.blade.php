@extends('layout/layout')

@section('content')
      

        <h4 class="pt-3">Modifica fumetto {{$fumetto->title}}</h4>

        <form class="pt-5" action="{{route("comics.update", $fumetto->id)}}" method="post">
            @csrf
            @method("PUT")

         
            @if (!empty($errors->all()))
            <div class="alert alert-danger" role="alert">
                @foreach ($errors->all() as $item)
                    <strong>{{$item}}</strong>
                @endforeach
                </div>
            @endif
          
        
            <div class="mb-3">
              <label  class="form-label">Titolo</label>
              <input type="text" class="form-control" name="title" 
              value = {{$fumetto->title}}>
            </div>

            <div class="mb-3">
                <label  class="form-label">Descrizione</label>
                <input style=" height:150px" type="text" class="form-control" name="description"
                value = "{{$fumetto->description}}"> 
                
            </div>

            <div class="mb-3">
                <label  class="form-label">Prezzo</label>
                <input type="text" class="form-control" name="price"
                value = {{$fumetto->price}}>
            </div>
            <div class="mb-3">
                <label  class="form-label">Serie</label>
                <input type="text" class="form-control" name="series"
                value = "{{$fumetto->series}}">
            </div>

            <div class="mb-3">
                <label  class="form-label">Immagine</label>
                <input type="url" class="form-control" name="thumb"
                value = "{{$fumetto->thumb}}">
            </div>

            <div class="mb-3">
                <label  class="form-label">Tipo</label>
                <input type="text" class="form-control" name="type"
                value = "{{$fumetto->type}}">
            </div>
    
        
            <div class="text-center">
              <button class="btn btn-secondary" type="reset ">Reset</button>
              <button class="btn btn-primary" type="submit">Crea</button>
            </div>
        
          </form>
 @endsection