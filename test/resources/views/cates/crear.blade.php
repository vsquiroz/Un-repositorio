@extends('layouts.app')


@section('content')
<form action="/cate" enctype="multipart/form-data" method="post">
        @csrf

        <div class="container mt-4">
            <div class="row">
                <div class="col-lg-5 mx-auto">
                    <div class="col-lg-10 container">
                        <div class="lead">
                            <h4>Crear nueva categoría</h4>
                        </div>

                        <div class="form-group">
                            <label for="nom" class="">Nombre</label>
                            
                            <div class="">
                                    <input id="nom" type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ old('nom') }}" autocomplete="nom" autofocus>

                                    @error('nom')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="imagen" class="">Imagen</label>
                            <input type="file" class="form-control-file" id="imagen" name="imagen">

                                    @error('imagen')
                                        <strong>{{ $message }}</strong>
                                    @enderror
                        </div>
                        <div class="form-group">
                            <label for="genero" class="">Tipo de genero</label>
                            
                            <div class="">
                                    <input id="genero" type="genero" class="form-control @error('genero') is-invalid @enderror" name="genero" value="{{ old('genero') }}" autocomplete="genero" autofocus>

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