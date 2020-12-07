@extends('layouts.sidebar')
@section('crearcategory')
     
<section class="bg-mix">
    <div class="container">
      <div class="card rounded-0">
          <div class="card-body">
            <h2>Crear categoria</h2>
            <form action="{{route('categorias.store')}}" method="POST">
              @csrf
             <div class="row pt-4">
                <div class="col-md-8 pt-2">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control">
                </div>
              </div>
              <div class="row">
                <div class="col-md-8 pt-4">
                  <label>Descripcion</label>
                  <textarea name="descripcion" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
        
              </div>
              <div class="d-flex pt-4">
                <button type="submit" class="btn btn-primary align-self-center">Crear</button>
              </div>
            </form>
          </div>             
      </div>
    </div>
</section>

@endsection   