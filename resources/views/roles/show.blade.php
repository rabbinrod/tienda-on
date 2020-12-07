@extends('layouts.sidebar')

@section('name')
<div id="content">
    <section class="p-y3">
      <div class="container">
        <div class="row">
          <div class="col-lg-9">
            <h1 class="font-weight-bold mb-0">Supervisor</h1>
            <p class="lead text-muted">Ver role</p>
          </div>
        </div>
      </div>
    </section>
    <section class="bg-mix">
      <div class="container">
        <div class="card rounded-0">
            <div class="card-body">
               <div class="row">
                  <div class="col">
                      <label>Name</label>
                      <input type="text" class="form-control" value="{{$role->name}}">
                  </div>
                  <div class="col">
                    <label>Slug</label>
                    <input type="text" class="form-control" value="{{$role->slug}}">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-5 pt-4">
                    <label>Permissions</label>
                    <input type="email" class="form-control" value="permission"> 
                  </div>

                </div>
                <div class="d-flex pt-4">
                  <button type="button" class="btn btn-primary align-self-center">Atras</button>
                </div>

            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
    
@endsection