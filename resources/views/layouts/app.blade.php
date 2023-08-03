<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Inicio - VinZu 1.0 - @yield('titulo')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- Add Tailwind CSS link here -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="flex flex-col min-h-screen bg-gray-300">
    <!-- Header Section -->
    <header class="p-4 border-b shadow bg-blue-800 text-white">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold text-center">
                VinZu 1.0
            </h1>
            <!-- Uncomment this section if you want to add login and register links back -->
            <!-- <nav class="space-x-4">
                <a class="text-white text-sm font-bold uppercase text-decoration-none" href="/login">Iniciar
                    Sesión</a>
                <a class="text-white text-sm font-bold uppercase text-decoration-none" href="/register">Crear
                    Cuenta</a>
            </nav> -->
        </div>
    </header>

    <!-- Main Content Section -->
    <main class="container flex-1 py-8">
        @yield('contenido')
    </main>

    <!-- Footer Section -->
    <footer class="container text-center p-5 text-sm-right font-bold text-gray-600">
        Vinzu 1.0 - Todos los Derechos Reservados
        {{ now()->year }}
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>
