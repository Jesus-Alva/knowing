<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(!auth()->attempt($request->only('email','password'), $request->remember))
        {
            return back()->with('mensaje', 'Credenciales Incorrectas');
        }
        /*3.-Para redireccionar a la pagina del usuario, el parametro de user que se recibe
        en controllador de la sesion, se debe de asignar al username de la base de datos 
        , ['user' => auth()->user()->username])*/
        return redirect()->route('posts.index', ['user' => auth()->user()->username]);
    }
}
