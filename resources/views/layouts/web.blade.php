<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos de Programación Web</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<main>
    <header class="shadow-lg">
        <div class="bg-blue-900 py-2.5">
            <nav class="bg-blue-850 py-2">
                <a href="{{route('home')}}">
                    <img src="{{asset('images/platzi.png')}}"
                         class="h-8 mx-auto">
                </a>
            </nav>
        </div>
    </header>
    <div class="container mx-auto py-4">
        @yield('content')
    </div>

    <footer class="py-2 text-center">
        @auth()
            <a href="{{url('dashboard')}}" class="text-sm text-gray-700 underline">Dashboard</a>
        @else
            <a href="{{url('login')}}" class="text-sm text-gray-700 underline">Login</a>
            <a href="{{url('register')}}" class="text-sm text-gray-700 underline ml-4">Registro</a>
        @endif
    </footer>
</main>
</body>
</html>
