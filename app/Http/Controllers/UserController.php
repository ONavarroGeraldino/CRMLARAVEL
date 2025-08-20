<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    // Mostrar todos los usuarios
  public function index()
    {
        // Obtiene todos los usuarios
        $usuarios = User::all();

        // Retorna la vista con los usuarios
        return view('usuarios', compact('usuarios'));
    }
    public function edit($id)
    {
        $usuario = User::findOrFail($id);
        return view('edit', compact('usuario'));
    }

    // Actualizar usuario
    public function update(Request $request, $id)
    {
        $usuario = User::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
        ]);

        $usuario->update($request->all());

        return redirect()->route('usuarios')->with('success', 'Usuario actualizado correctamente.');
    }

    // Eliminar usuario
    public function destroy($id)
    {
        $usuario = User::findOrFail($id);
        $usuario->delete();

        return redirect()->route('usuarios')->with('success', 'Usuario eliminado correctamente.');
    }
}