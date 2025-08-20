@extends('layouts.main-template')

@section('content')
<link rel="stylesheet" href="{{ asset('css/reportes.css') }}">
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Reporte de Usuarios</h1>

    <table class="table-auto w-full border-collapse border border-gray-300">
        <thead>
            <tr class="bg-gray-200">
                <th class="border border-gray-300 px-4 py-2">Nombre</th>
                <th class="border border-gray-300 px-4 py-2">Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach($usuarios as $usuario)
            <tr>
                <td class="border border-gray-300 px-4 py-2">{{ $usuario['name'] }}</td>
                <td class="border border-gray-300 px-4 py-2">{{ $usuario['email'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('reporte.pdf') }}" class="mt-4 inline-block bg-blue-500 text-white px-4 py-2 rounded">
        Descargar PDF
    </a>
</div>
@endsection