<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConfiguracionController extends Controller
{
    public function perfil()
    {
        return view('configuracion.perfil');
    }

    public function password()
    {
        return view('configuracion.password');
    }

    public function preferencias()
    {
        return view('configuracion.preferencias');
    }

    public function seguridad()
    {
        return view('configuracion.seguridad');
    }

    public function administracion()
    {
        return view('configuracion.administracion');
    }

    public function soporte()
    {
        return view('configuracion.soporte');
    }
}
