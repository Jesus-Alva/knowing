@extends('layouts.app')

@section('titulo')
    Registrate en Knowing
@endsection

@section('contenido')
    <div class="md:flex justify-center md:justify-center md:gap-10 md:items-center">
        <div class="md:w-4/12  p-5">
            <img class="rounded-xl shadow-xl" src="{{asset('img/login-knowing.jpg')}}" alt="Imagen registro de usuarios">
        </div>
        <div class="md:w-6/12 bg-white p-6 rounded-lg shadow-lg">
            <form>
                <div class="mb-5">
                    <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">
                        Nombre
                    </label>
                    <input type="text" 
                        id="name" 
                        name="name" 
                        placeholder="Tu Nombre" 
                        class="border p-3 w-full rounded-lg">
                </div>
                <div class="mb-5">
                    <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">
                        Username
                    </label>
                    <input type="text" 
                        id="username" 
                        name="username" 
                        placeholder="Tu Nombre de Usuario" 
                        class="border p-3 w-full rounded-lg">
                </div>
                <div class="mb-5">
                    <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">
                        Email
                    </label>
                    <input type="text" 
                        id="email" 
                        name="email" 
                        placeholder="Tu Email de Registro" 
                        class="border p-3 w-full rounded-lg">
                </div>
                <div class="mb-5">
                    <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">
                        Email
                    </label>
                    <input type="password" 
                        id="password" 
                        name="password" 
                        placeholder="Password de Registro" 
                        class="border p-3 w-full rounded-lg">
                </div>
                <div class="mb-5">
                    <label for="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold">
                        Email
                    </label>
                    <input type="password" 
                        id="password_confirmation" 
                        name="password_confirmation" 
                        placeholder="Password de Confirmación" 
                        class="border p-3 w-full rounded-lg">
                </div>
                <input type="submit" value="Crear cuenta"
                class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">
            </form>
        </div>
    </div>
@endsection