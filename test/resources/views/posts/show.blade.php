@extends('layouts.app')

@section('content')
    <section class="container col-lg-8">
        <div class="row">
            <div class="col-lg-8">
                <a href="#"><img src="/storage/{{ $post->image }}" class="img-fluid" alt="Responsive image" width="700px"></a>
            </div>
            <div class="col-lg-4">
                <div>
                    <p class="">
                        {{ $post->precio}}$
                    </p>
                </div>
                <div>
                    <h4>{{ $post->nombre }}</h4>
                </div>
                <br>
                <!-- Parte de las tallas -->
                <p>Selecciona la tallá</p>
                <div class="btn-group" role="group" aria-label="Basic example">
                    
                    <button type="button" class="btn btn-outline-dark">XS</button>
                    <button type="button" class="btn btn-outline-dark">S</button>
                    <button type="button" class="btn btn-outline-dark">M</button>
                    <button type="button" class="btn btn-outline-dark">L</button>
                    <button type="button" class="btn btn-outline-dark">XL</button>
                </div>
                <div class="mt-4">
                    <button type="button" class="btn btn-info btn-lg btn-block" onclick="window.location.href = 'carrito.html'">Añadir al carrito</button>
                </div>
                <br>
                <div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
                    <strong>Stock</strong> limitado en la tallá seleccionada.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <br>
                <div>
                    <p>{{ $post->descripcion }}</p>
                </div>
            </div>
        </div>
    </section>
@endsection