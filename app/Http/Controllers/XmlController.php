<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Response;

class XmlController extends Controller
{
    public function index()
    {
        // Ruta al archivo XML
        $xmlPath = public_path('sitemap.xml'); // Cambia esto a la ubicación de tu archivo XML

        // Verifica si el archivo existe
        if (file_exists($xmlPath)) {
            // Retorna el archivo XML como una respuesta
            return Response::file($xmlPath, ['Content-Type' => 'application/xml']);
        } else {
            // En caso de que el archivo no exista, puedes devolver una respuesta de error
            return response('Archivo XML no encontrado', 404);
        }
    }
}
