@extends('layouts.sidebar')

@section('produ')
    
<section class="bg-mix">
    <div class="container">
      <div class="card rounded-0">
          <div class="card-body">
            <h2>Crear producto</h2>
            <form action="{{route('productos.store')}}" method="POST">
              @csrf
             <div class="row">
                <div class="col">
                    <label>Nombre</label>
                    <input type="text" name="name" class="form-control">
                </div>

                <div class="col">
                    <label>Cantidad</label>
                    <input type="text" name="cantidad" class="form-control">
                </div>

                <div class="col">
                    <label>Categoria</label>
                    <input type="text" name="categoria" class="form-control">
                </div>

                <div class="col">
                    <label>Precio</label>
                    <input type="text" name="precio" class="form-control">
                </div>

                <br>
             </div>
             <div class="col-md-4">
              <label>Consignado</label>
              <input type="text" name="consencionado" class="form-control">
            </div>
             <div class="col-md-4 pt-5">
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFileLang" lang="es" name="imagen">
                <label class="custom-file-label" for="customFileLang"></label>
              </div>
            </div>

            <div class="d-flex pt-4" >
              <button type="submit" class="btn btn-primary align-self-center">Guardar</button>
            </div>
              </form>
          </div>
        
        </div>
      </div>
    </div>
  </section>

 @endsection