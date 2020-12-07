@extends('layouts.sidebar')

@section('name')
    
<section class="bg-mix">
    <div class="container">
      <div class="card rounded-0">
          <div class="card-body">
             <div class="row">
                <div class="col">
                    <label>Name</label>
                    <input type="text" class="form-control" value="{{$user->name}}">
                </div>
                <div class="col">
                  <label>Password</label>
                  <input type="password" class="form-control" value="{{$user->password}}">
                </div>
              </div>
              <div class="row">
                <div class="col-md-5 pt-4">
                  <label>E-Mail</label>
                  <input type="email" class="form-control" value="{{$user->email}}"> 
                </div>
                <div class="col-md-5 pt-4">
                  <label>Rol</label>
                  <input type="text" value="cliente" class="form-control" value="Rol"> 
                </div>

              </div>
              <div class="d-flex pt-4">
                <button type="button" class="btn btn-primary align-self-center">Guardar</button>
              </div>

          </div>
        </div>
      </div>
    </div>
  </section>
  @endsection