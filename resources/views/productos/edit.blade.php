@extends('layouts.sidebar')

@section('produc')
    
<section class="bg-mix">
    <div class="container">
      <div class="card rounded-0">
          <div class="card-body">
            <h2>Editar producto</h2>
            <form action="{{route('productos.update', $producto)}}" method="POST">
              @csrf
              @method('put')
             <div class="row">
                <div class="col">
                    <label>Nombre</label>
                    <input type="text" name="name" class="form-control" value="{{$producto->name}}">
                </div>


                <div class="col">
                    <label>Cantidad</label>
                    <input type="text" name="cantidad" class="form-control" value="{{$producto->cantidad}}">
                </div>

                <div class="col">
                    <label>Categoria</label>
                    <input type="text" name="categoria" class="form-control" value="{{$producto->categoria}}">
                </div>

                <div class="col">
                    <label>Precio</label>
                    <input type="text" name="precio" class="form-control" value="{{$producto->precio}}">
                </div>

                <br>
       
                <div class="d-flex pt-4" >
                  <button type="submit" class="btn btn-primary align-self-center">Actualizar</button>
                </div>
              </form>
          </div>
        
        </div>
      </div>
    </div>
  </section>

 @endsection