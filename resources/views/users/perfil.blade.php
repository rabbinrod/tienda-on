@extends('layouts.sidebar')

@section('name')
    
<section class="bg-mix">
    <div class="container">
      <div class="card rounded-0">
          <div class="card-body">
             <div class="row">
                <div class="col">
                    <label>Name</label>
                    <input type="text" value="Supervisor" class="form-control">
                </div>
                <div class="col">
                  <label>Password</label>
                  <input type="password" value="password" class="form-control">
                </div>
              </div>
              <div class="row">
                <div class="col-md-5 pt-4">
                  <label>E-Mail</label>
                  <input type="email" value="super@shop.com" class="form-control"> 
                </div>
                <div class="col-md-5 pt-4">
                  <label>Rol</label>
                  <input type="text" value="supervisor" class="form-control"> 
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