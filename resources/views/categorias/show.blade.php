@extends('layouts.sidebar')

@section('category')
    
<section class="bg-mix">
    <div class="container">
      <div class="card rounded-0">
        <h2>Ver categoria</h2>
          <div class="card-body">
             <div class="row">
                <div class="col-md-8 pt-sm-4">
                    <label>Name</label>
                    <input type="text" class="form-control" value="{{$categoria->name}}">
                </div>
              </div>
              <div class="row">
                <div class="col-md-8 pt-4">
                  <label>Descripcion</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3">{{$categoria->descripcion}}</textarea>
                </div>
        
              </div>
          </div>             
      </div>
    </div>
</section>

@endsection