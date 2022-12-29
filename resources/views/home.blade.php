@extends('layouts.app')

@section('titulo')
    Publicaciones
@endsection

@section('contenido')
    
    <x-listar-post :posts="$posts"/>
    <div class="m-0">
        {{ $posts->links() }}
    </div>

@endsection
