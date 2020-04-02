<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Post;

class PostsController extends Controller
{
    public function _construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        $data =  request()->validate([
            'nombre' => 'required',
            'image' => ['required', 'image'],
            'precio' => 'required',
            'descripcion' => 'required',
        ]);

        $imagePath = request('image')->store('uploads', 'public');

        $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200, 1000);
        $image->save();

        auth()->user()->posts()->create([
            'nombre' => $data['nombre'],
            'image' => $imagePath,
            'precio' => $data['precio'],
            'descripcion' => $data['descripcion'],
        ]);

        return redirect('/productos/' . auth()->user()->id);
    }

    public function show(\App\Post $post) 
    {
        return view('posts.show', compact('post'));
    }

    public function edit(\App\Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Post $post)
    {
        $data = request()->validate([
            'nombre' => 'required',
            'image' => '',
            'precio' => 'required',
            'descripcion' => '',
        ]);
        
        $post->update($data);

        return redirect("/productos/1");
    }
}
