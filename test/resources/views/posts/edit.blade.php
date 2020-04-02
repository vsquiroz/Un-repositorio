@extends('layouts.app')

@section('content')
    <form action="/p/{{ $post->id }}" enctype="multipart/form-data" method="post">
        @csrf
        @method('PATCH')

        <div class="container mt-4">
            <div class="row">
                <div class="col-lg-5 mx-auto">
                    <div class="col-lg-10 container">
                        <div class="lead">
                            <h4>Editar producto</h4>
                        </div>

                        <div class="form-group">
                            <label for="nombre" class="">Nombre</label>
                            
                            <div class="">
                                    <input id="nombre" type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{ old('nombre') ?? $post->nombre }}" autocomplete="nombre" autofocus>

                                    @error('nombre')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                        </div>
                        <!--
                        <div class="form-group">
                            <label for="image" class="">Imagen</label>
                            <input type="file" class="form-control-file" id="image" name="image">

                                    @error('image')
                                        <strong>{{ $message }}</strong>
                                    @enderror
                        </div>
                        -->
                        <div class="form-group">
                            <label for="precio" class="">Precio</label>
                            
                            <div class="">
                                    <input id="precio" type="precio" class="form-control @error('precio') is-invalid @enderror" name="precio" value="{{ old('precio') ?? $post->precio }}" autocomplete="precio" autofocus>

                                    @error('precio')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="descripcion" class="">Descripción</label>
                            
                            <div class="">
                                    <input id="descripcion" type="text" class="form-control @error('descripcion') is-invalid @enderror" name="descripcion" value="{{ old('descripcion') ?? $post->descripcion }}" autocomplete="descripcion" autofocus>

                                    @error('descripcion')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-5">
                <div class="text-center">
                    <button class="btn btn-outline-info">Guardar cambios</button>
                </div>                        
            </div>
        </div>
    </form>
@endsection