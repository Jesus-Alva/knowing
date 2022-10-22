<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /*2.-Para usar route model binding, la function tiene que recibir un parametro*/
    public function index(User $user)
    {
        return view('layouts.dashboard', [
            'user'=>$user
        ]);
    }
}
