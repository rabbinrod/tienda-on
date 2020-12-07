@extends('layouts.sidebar')

@section('content')

<div id="content">
  <section class="p-y3">
    <div class="container">
      <div class="row">
        <div class="col-lg-9">
          <h1 class="font-weight-bold mb-0">Bienvenido Supervisor</h1>
          <p class="lead text-muted">Revisa la última información</p>
        </div>
        <div class="col-lg-3 d-flex">
           <a href="{{route('categorias.create')}}" type="button" class="btn btn-primary w-100 align-self-center"> Nueva categoria</a>
        </div>
      </div>
    </div>
  </section>
  <section class="bg-mix">
    <div class="container">
      <div class="card rounded-0">
        <div class="card-body">
            <h4>Categorias</h4>
            <div class="row">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($categorias as $categoria)
                  
                  <tr>
                    <td scope="row">{{$categoria->id}}</td>
                    <td>{{$categoria->name}}</td>
                    <td>
                      <a href="{{route('categorias.show', $categoria->id)}}" type="button" class="btn btn-info">Ver</a>
                      <a href="{{route('categorias.edit', $categoria)}}" type="button" class="btn btn-warning">Editar</a>
                      <form action="{{route('categorias.destroy', $categoria->id)}}" method="POST">
                      @csrf
                      @method('delete')
                      <button onclick="alert('Esta seguro?')" type="submit" class="btn btn-danger">Borrar</button>
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
</div>
@endsection