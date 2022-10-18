<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Knowing - @yield('titulo')</title>

        @vite('resources/css/app.css')
    </head>
    <body>
        <header class="bg-gray-100">
            <header class="p-5 border-b bg-white shadow">
                <div class="container mx-auto flex justify-between items-center">
                    <h1 class="text-3xl font-black">
                        Knowing
                    </h1>
                    <!--Nav alineado a la izquierda gracias al justify-between del div dentro del header-->
                    <nav class="flex gap-2 items-center">
                        <a class="font-bold uppercase text-gray-600 text-sm" href="">Login</a>
                        <a class="font-bold uppercase text-gray-600 text-sm" href="">Crear Cuenta</a>
                    </nav>/
                </div>
            </header>
        </header>
        <main class="container mx-auto mt-10">
            <h2 class="font-black text-center text-3xl mb-10">@yield('titulo')</h2>
            @yield('contenido')
        </main>
        <footer class="text-center p-5 text-gray-500 font-bold uppercase">
            Knowing - Todos los derechos reservados {{ now()->year }}<!-- <--this is a helpers-->
        </footer>
    </body>
</html>