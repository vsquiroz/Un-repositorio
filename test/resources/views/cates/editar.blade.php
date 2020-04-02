@extends('layouts.app')

@section('content')
    <form action="/categorias/{{ $cate->id }}" enctype="multipart/form-data" method="post">
        @csrf
        @method('PATCH')

        <div class="container mt-4">
            <div class="row">
                <div class="col-lg-5 mx-auto">
                    <div class="col-lg-10 container">
                        <div class="lead">
                            <h4>Editar categoría</h4>
                        </div>

                        <div class="form-group">
                            <label for="nom" class="">Nombre</label>
                            
                            <div class="">
                                    <input id="nom" type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ old('nom') ?? $cate->nom }}" autocomplete="nom" autofocus>

                                    @error('nom')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="genero" class="">Tipo de genero</label>
                            
                            <div class="">
                                    <input id="genero" type="text" class="form-control @error('genero') is-invalid @enderror" name="genero" value="{{ old('genero') ?? $cate->genero }}" autocomplete="genero" autofocus>

                                    @error('genero')
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