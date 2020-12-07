@extends('layouts.sidebar')

@section('ucontent')

<section class="bg-mix">
    <div class="container">
      <div class="card rounded-0">
          <form action="{{route('roles.update', $role)}}" method="POST">
                @csrf
                @method('put')
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <label>Name</label>
                            <input type="text" class="form-control" name="name" value="{{$role->name}}">
                        </div>
                        <div class="col">
                            <label>Slug</label>
                            <input type="text" class="form-control" name="slug" value="{{$role->slug}}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5 pt-4">
                            <label>Permissions</label>
                            <input type="text" data-role="tagsinput" class="form-control" value="permision"> 
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
@endsection

@section('css_role')
      <link rel="stylesheet" href="../css/bootstrap-tagsinput.css">
@endsection

@section('js_role')
      <script src="../js/bootstrap-tagsinput.js"></script>
@endsection