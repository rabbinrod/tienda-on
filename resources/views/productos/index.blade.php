@extends('layouts.sidebar')

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.bootstrap4.min.css">
@endsection

@section('pro')

<div id="content">
    <section class="p-y3">
      <div class="container">
        <div class="row">
          <div class="col-lg-9">
            <h1 class="font-weight-bold mb-0">Bienvenido Encargado</h1>
            <p class="lead text-muted">Revisa la última información</p>
          </div>
          <div class="col-lg-3 d-flex">
             <a href="{{route('productos.create')}}" type="button" class="btn btn-primary w-100 align-self-center"> Nuevo producto</a>
          </div>
        </div>
      </div>
    </section>
    
<section class="bg-mix">
    <div class="container">
      <div class="card rounded-0">
          <div class="card-body">
            <table class="table table-striped" id="products" >
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Name</th>                  
                  <th scope="col">Cantidad</th>
                  <th scope="col">Categoria</th>
                  <th scope="col">Precio</th>
                  <th scope="col">Actions</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($productos as $producto)
            
                <tr>
                  <td scope="row">{{$producto->id}}</td>
                  <td>{{$producto->name}}</td>
                  <td>{{$producto->cantidad}}</td>
                  <td>{{$producto->categoria}}</td>
                  <td>{{$producto->precio}}</td>
                  <td>
                    <a type="button" href="{{route('productos.show', $producto->id)}}" class="btn btn-primary">Ver</a>
                    <a type="button" href="{{route('productos.edit', $producto)}}" class="btn btn-warning">Editar</a>
                    <form action="{{route('productos.destroy', $producto->id)}}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" onclick="alert('Estas seguro?')" class="btn btn-danger">Eliminar</button>
                    </form>
                  </td>
                </tr>
                
              </tbody>
              @endforeach
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.6/js/responsive.bootstrap4.min.js"></script>
    <script>
       $('#products').DataTable();
    </script>
@endsection

