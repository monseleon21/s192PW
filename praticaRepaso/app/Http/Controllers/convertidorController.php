<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConvertidorController extends Controller
{
    public function convert(Request $request)
    {
        $cantidad = $request->input('cantidad');
        $conversion = $request->input('conversion');
        $resultado = '';
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
                $resultado = "No se pusieron datos.";
        }

      
        return view('repaso1', ['resultado' =>$resultado]);
    }
}

