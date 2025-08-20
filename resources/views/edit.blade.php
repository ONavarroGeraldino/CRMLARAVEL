@extends('layouts.main-template')

@section('content')
<main class="content">
    <h1>Editar Usuario</h1>

    <form action="{{ route('usuarios.update', $usuario->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Nombre:</label>
        <input type="text" id="name" name="name" value="{{ old('name', $usuario->name) }}" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ old('email', $usuario->email) }}" required>

        

        <button type="submit">Guardar cambios</button>
    </form>
</main>
@endsection
