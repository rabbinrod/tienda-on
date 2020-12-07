@extends('layouts.sidebar')
@section('user')
    
<div id="content">
    <section class="p-y3">
      <div class="container">
        <div class="row">
          <div class="col-lg-9">
            <h1 class="font-weight-bold mb-0">Bienvenido Supervisor</h1>
            <p class="lead text-muted">Revisa la última información</p>
          </div>
          <div class="col-lg-3 d-flex">
             <a type="button" href="{{route('users.create')}}" class="btn btn-primary w-100 align-self-center">Alta usuario</a>
          </div>
        </div>
      </div>
    </section>
    <section class="bg-mix">
      <div class="container">
        <div class="card rounded-0">
          <div class="card-body">
              <h4>Usuarios</h4>
              <div class="row">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">Name</th>
                      <th scope="col">E-mail</th>
                      <th scope="col">Rol</th>
                      <th scope="col">Permisos</th>
                      <th scope="col">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach ($users as $user)                                  
                    <tr>
                      <td scope="row">{{$user->id}}</td>
                      <td>{{$user->name}}</td>
                      <td>{{$user->email}}</td>
                      <td>Rol</td>
                      <td>Permisos</td>
                      <td>
                        <a type="button" class="btn btn-info" href="{{route('users.show', $user->id)}}">Ver</a>
                        <a type="button" class="btn btn-warning">Editar</a>
                        <button type="button" class="btn btn-danger">Borrar</button>
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