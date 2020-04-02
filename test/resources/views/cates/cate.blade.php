@extends('layouts.app')

@section('content')
    <section class="">
        <div class="text-right col-lg-11 mt-4">
            <button type="button" class="btn btn-info" onclick="window.location.href = '/cate/crear'">+ Agregar categoría</button>
        </div>
        <div class="row col-lg-11 mx-auto mt-4">
            @foreach($user->cates as $cate)
                <div class="col-lg-3">
                    <a href="/productos/{{ $cate->id }}"><img src="/storage/{{ $cate->imagen }}" class="img-fluid" alt="Responsive image"></a>
                    <div>
                        <br>
                        <div class="mb-4">
                            <h4>Categoria: {{ $cate->nom}}</h4>
                            <p>Genero: {{ $cate->genero }}</p>
                            
                        </div>

                        <button type="button" class="btn btn-outline-info" onclick="window.location.href = '/categorias/{{ $cate->id }}/edit'">Editar</button>
                    </div>
                </div>
            @endforeach
        </div>

    </section>
@endsection
