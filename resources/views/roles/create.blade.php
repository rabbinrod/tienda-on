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
        </div>
      </div>
    </section>
    <section class="bg-mix">
      <div class="container">
        <div class="card rounded-0">
            <div class="card-body">
              <form action="{{route('roles.store')}}" method="POST">
                @csrf
               <div class="row">
                 <div class="col">
                      <label>Name</label>
                      <input type="text" class="form-control" name="name">
                  </div>
                  <div class="col">
                    <label>Slug</label>
                    <input type="text" class="form-control" name="slug">
                  </div>
                </div>
                <div class="row">
                  <div class="col pt-4">
                    <label>Permissions</label>
                    <input type="text" data-role="tagsinput" class="form-control" name="permission"> 
                  </div>
                </div>
                <div class="d-flex pt-4">
                  <button type="submit" class="btn btn-primary align-self-center">Guardar</button>
                </div>
            </div>
          </form>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection

@section('css_role')
      <link rel="stylesheet" href="../css/bootstrap-tagsinput.css">
@endsection

@section('js_role')
      <script src="../js/bootstrap-tagsinput.js"></script>
@endsection