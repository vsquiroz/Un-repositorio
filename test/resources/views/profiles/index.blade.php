@extends('layouts.app')

@section('content')
    <section class="">
        <div class="text-right col-lg-11 mt-4">
            <button type="button" class="btn btn-info" onclick="window.location.href = '/p/create'">+ Agregar producto</button>
        </div>

        <div class="row col-lg-11 mx-auto mt-4">
            @foreach($user->posts as $post)
                <div class="col-lg-3">
                    <a href="/p/{{ $post->id }}"><img src="/storage/{{ $post->image }}" class="img-fluid" alt="Responsive image"></a>
                    <div>
                        <br>
                        <div class="mb-4">
                            <h4>{{ $post->nombre}}</h4>
                            <p>{{ $post->descripcion }}. Precio: <a href="#">{{ $post->precio }}</a></p>
                            
                        </div>

                        <button type="button" class="btn btn-outline-info" onclick="window.location.href = '/p/{{ $user->id }}/edit'">Editar</button>
                    </div>
                </div>
            @endforeach

            
        </div>

    </section>
@endsection
