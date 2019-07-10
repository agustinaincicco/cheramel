@extends('layouts.app')
@section('content')
<section id="get-started" class="padd-section text-center">
        <div class="container">
          <div class="section-title text-center">
    
            <h2>Administrador de productos</h2>
            <p class="separator">Cheramel Design</p>
            <hr>
          </div>
        </div>
    
        <div class="container">
          <div class="row justify-content-center">
    
            <div class="col-md-6 col-lg-4">
              <div class="feature-block">
    
                <img src="images/agregar.jpg" alt="img" class="img-fluid">
                <h4></h4>
                <p></p>
                <a class="btn btn-warning" href="{{url("products/create")}}">Agregar Producto</a>
    
              </div>
            </div>
    
            <div class="col-md-6 col-lg-4">
              <div class="feature-block">
    
                <img src="images/editar.jpg" alt="img" class="img-fluid">
                <h4></h4>
                <p></p>
                <a class="btn btn-warning" href="{{url("products/edit")}}">Editar Producto</a>
    
              </div>
            </div>
    
          </div>
        </div>
    <br>
      </section>
@endsection