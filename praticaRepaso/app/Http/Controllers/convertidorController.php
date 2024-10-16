<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConvertidorController extends Controller
{
    public function convert(Request $request)
    {
        // Obtén el valor ingresado y el tipo de conversión
        $cantidad = $request->input('cantidad');
        $conversion = $request->input('conversion');

        // Inicializa la variable de resultado
        $resultado = '';

        // Lógica de conversión
        switch ($conversion) {
            case 'mb-gb':
                $resultado = $cantidad . " MB son " . ($cantidad / 1024) . " GB";
                break;
            case 'gb-mb':
                $resultado = $cantidad . " GB son " . ($cantidad * 1024) . " MB";
                break;
            case 'gb-tb':
                $resultado = $cantidad . " GB son " . ($cantidad / 1024) . " TB";
                break;
            case 'tb-gb':
                $resultado = $cantidad . " TB son " . ($cantidad * 1024) . " GB";
                break;
            default:
                $resultado = "Conversión no válida.";
        }

        // Retorna la vista con el resultado
        return view('repaso1', ['resultado' => $resultado]);
    }
}

