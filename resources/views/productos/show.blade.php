@extends('layouts.sidebar')

@section('produ')
    
<section class="bg-mix">
    <div class="container">
      <div class="card rounded-0">
          <div class="card-body">
            <h2>Ver producto</h2>
            
             <div class="row">
                <div class="col">
                    <label>Nombre</label>
                    <input type="text" class="form-control" value="{{$producto->name}}">
                </div>


                <div class="col">
                    <label>Cantidad</label>
                    <input type="text" class="form-control" value="{{$producto->cantidad}}">
                </div>

                <div class="col">
                    <label>Categoria</label>
                    <input type="text" class="form-control" value="{{$producto->categoria}}" >
                </div>

                <div class="col">
                    <label>Precio</label>
                    <input type="text" class="form-control" value="{{$producto->precio}}">
                </div>

                <br>

          </div>
        
        </div>
      </div>
    </div>
  </section>

 @endsection