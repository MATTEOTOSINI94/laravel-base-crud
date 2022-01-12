@extends('layout/layout')
@section('content')
    

        <form class="pt-5" action="{{route("comics.store")}}" method="post">
            @csrf

         
            @if (!empty($errors->all()))
            <div class="alert alert-danger" role="alert">
                @foreach ($errors->all() as $item)
                    <strong>{{$item}}</strong>
                @endforeach
                </div>
            @endif
          
        
            <div class="mb-3">
              <label  class="form-label">Titolo</label>
              <input type="text" class="form-control" name="title" >
            </div>

            <div class="mb-3">
                <label  class="form-label">Descrizione</label>
                <input style=" height:150px" type="text" class="form-control" name="description" >
        
            </div>

            <div class="mb-3">
                <label  class="form-label">Prezzo</label>
                <input type="text" class="form-control" name="price" >
            </div>
            <div class="mb-3">
                <label  class="form-label">Serie</label>
                <input type="text" class="form-control" name="series" >
            </div>

            <div class="mb-3">
                <label  class="form-label">Immagine</label>
                <input type="text" class="form-control" name="thumb" >
            </div>

            <div class="mb-3">
                <label  class="form-label">Tipo</label>
                <input type="text" class="form-control" name="type" >
            </div>
    
        
            <div class="text-center">
              <button class="btn btn-secondary" type="reset ">Reset</button>
              <button class="btn btn-primary" type="submit">Crea</button>
            </div>
        
          </form>
 @endsection