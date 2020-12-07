@extends('layouts.sidebar')

@section('ucontent')

<section class="bg-mix">
    <div class="container">
        <h3>Alta Usuario</h3>
      <div class="card rounded-0">
          <div class="card-body">
             <div class="row">
                <form action="{{route('users.store')}}" method="POST">
                    @csrf
                <div class="col">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="col">
                  <label>Password</label>
                  <input type="password" name="password" class="form-control">
                </div>
              </div>
              <div class="row">
                <div class="col-md-5 pt-4">
                  <label>E-Mail</label>
                  <input type="email" name="email" class="form-control"> 
                </div>
              </div>
              <div class="d-flex pt-4">
                <button type="submit" class="btn btn-primary align-self-center">Enviar</button>
              </div>
              </form>
          </div>
        </div>
      </div>
    </div>
  </section>
    
@endsection


