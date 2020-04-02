<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class CateController extends Controller
{
    public function index($user)
    {
        $user = User::findOrFail($user);

        return view('cates.cate', [
            'user' => $user,
        ]);
    }

    public function _construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('cates.crear');
    }

    public function store()
    {
        $data = request()->validate([
            'nom' => 'required',
            'genero' => 'required',
            'imagen' => ['required', 'image'],
        ]);

        $imagePath = request('imagen')->store('uploads', 'public');

        $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200, 1000);
        $image->save();

        auth()->user()->cates()->create([
            'nom' => $data['nom'],
            'genero' => $data['genero'],
            'imagen' => $imagePath,
        ]);

        return redirect('/categorias/' . auth()->user()->id);
    }

    public function edit(\App\Cate $cate)
    {
        return view('cates.editar', compact('cate'));
    }

    public function update(\App\Cate $cate)
    {
        $data = request()->validate([
            'nom' => 'required',
            'genero' => 'required',
            'descripcion' => '',
        ]);
        
        $cate->update($data);

        return redirect("/categorias/1");
    }
}
