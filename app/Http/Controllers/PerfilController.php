<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PerfilController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('perfil.index');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'username' => ['required','unique:users,username,'.auth()->user()->id, 'min:3','max:20', 
            'not_in:puto,PUTO,puta,PUTA,put@,perra,perro,pendejo,pendeja,Pendejo']
        ]);

        if($request->imagen){
            $imagen = $request->file('imagen');

            $nombreImagen = Str::uuid() . "." . $imagen->extension();
    
            $imagenServidor = Image::make($imagen);
    
            $imagenServidor->fit(1000,1000);
            //procesar imagen antes de que se borre
            $imagenPath = public_path('perfiles') . '/' . $nombreImagen;
            $imagenServidor->save($imagenPath);
        }
        //Guardar cambios
        $usuario = User::find(auth()->user()->id);

        $usuario->username = $request->username;
        $usuario->imagen = $nombreImagen ?? auth()->user()->imagen ?? null;

        $usuario->save();

        //redireccionar al usuario

        return redirect()->route('posts.index', $usuario->username);
    }

}
