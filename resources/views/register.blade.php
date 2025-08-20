<!DOCTYPE html>
<html>
<head>
    <title>Registro</title>
    <link rel="stylesheet" href="{{ asset('css/inicio.css') }}">
</head>
<body>
    <div class="container">
        <h2>Registro</h2>
        <form method="POST" action="{{ url('/register') }}">
            @csrf
            <div>
                <label>Nombre:</label>
                <input type="text" name="name" value="{{ old('name') }}" required>
            </div>
            <div>
                <label>Email:</label>
                <input type="email" name="email" value="{{ old('email') }}" required>
            </div>
            <div>
                <label>Password:</label>
                <input type="password" name="password" required>
            </div>
            <div>
                <label>Confirmar Password:</label>
                <input type="password" name="password_confirmation" required>
            </div>
            <button type="submit">Registrar</button>
        </form>

        @if($errors->any())
            <div class="errors">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <p>¿Ya tienes cuenta? <a href="{{ url('/login') }}">Login</a></p>
    </div>
</body>
</html>
