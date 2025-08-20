<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRM</title>
    @stack('styles')
    @stack('scripts')
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/lista.css') }}">

   
</head>
<body>
    <x-header />  <!-- Componente en lugar de include -->
    <main>
        @yield('content')
    </main>
</body>
</html>
