<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF; // Para usar DOMPDF
use App\Models\User; // Importar el modelo User

class ReporteController extends Controller
{
    // Muestra la vista del reporte en HTML
    public function index()
    {
        // Obtener todos los usuarios de la base de datos
        $usuarios = User::all();

        return view('reportes', compact('usuarios'));
    }

    // Genera el PDF del reporte
    public function generarPDF()
    {
        // Obtener todos los usuarios de la base de datos
        $usuarios = User::all();

        // Cargar la vista del PDF
        $pdf = PDF::loadView('reportes.pdf', compact('usuarios'));

        // Descargar el archivo PDF
        return $pdf->download('reporte_usuarios.pdf');
    }
}
