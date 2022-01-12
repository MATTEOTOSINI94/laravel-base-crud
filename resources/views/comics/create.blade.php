@extends('layout/layout')
@section('content')
    

        <form class="pt-5" action="{{route("comics.store")}}" method="post">
            @csrf
           
        
            <div class="mb-3">
              <label  class="form-label">Nome</label>
              <input type="text" class="form-control" name="title" >
        
            
            </div>

            <div class="mb-3">
                <label  class="form-label">Descrizione</label>
                <input type="text" class="form-control" name="description" >
        
            </div>

            <div class="mb-3">
                <label  class="form-label">Price</label>
                <input type="text" class="form-control" name="price" >
            </div>
            <div class="mb-3">
                <label  class="form-label">Serie</label>
                <input type="text" class="form-control" name="series" >
            </div>

            <div class="mb-3">
                <label  class="form-label">immagine</label>
                <input type="text" class="form-control" name="thumb" >
            </div>

            <div class="mb-3">
                <label  class="form-label">tipo</label>
                <input type="text" class="form-control" name="type" >
            </div>
    
        
            <div>
              <button class="btn btn-secondary" type="reset ">Reset</button>
              <button class="btn btn-success" type="submit">Crea</button>
            </div>
        
          </form>
 @endsection