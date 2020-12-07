@extends('layouts.sidebar')

@section('content')

<section class="p-y3">
    <div class="container">
      <div class="row">
        <div class="col-lg-9">
          <h1 class="font-weight-bold mb-0">Lista de roles</h1>
          <p class="lead text-muted"></p>
        </div>
        <div class="col-lg-3 d-flex">
           <a type="button" href="{{route('roles.create')}}" class="btn btn-primary w-100 align-self-center"> Nuevo rol</a>
        </div>
      </div>
    </div>
  </section>
  <section class="bg-mix">
    <div class="container">
      <div class="card rounded-0">
        <div class="card-body">
            <h4>Roles</h4>
            <div class="row">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Permissions</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($roles as $role)
                  <tr>
                    <td scope="row">{{$role->id}}</td>
                    <td>{{$role->name}}</td>
                    <td>{{$role->slug}}</td>
                    <td>Permisos</td>
                    <td>
                      <a type="button" href="{{route('roles.show', $role->id)}}" class="btn btn-primary">Ver</a>
                      <a type="button" href="{{route('roles.edit',  $role->id)}}" class="btn btn-warning">Editar</a>
                      <form action="{{route('roles.destroy', $role->id)}}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" onclick="alert('Estas seguro?')" class="btn btn-danger">Borrar</button>
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
