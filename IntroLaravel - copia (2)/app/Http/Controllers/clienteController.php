<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//importacion de bdd para trabajar y una llamada carbon es para el manejo de las fechas
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Http\Requests\validadorClientes;


class clienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $consultaClientes= DB::table('clientes')->get();
        return view('clientes',compact('consultaClientes'));
        // compact: llevate el resultado de la consulta
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('formulario');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(validadorClientes $request)
    {
        
        DB::table('clientes')->insert([
            "nombre"=>$request->input('txtnombre'),
            "apellido"=>$request->input('txtapellido'),
            "correo"=>$request->input('txtcorreo'),
            "telefono"=>$request->input('txttelefono'),
            "created_at"=>Carbon::now(),
            "updated_at"=>Carbon::now(),

        ]);

        $usuario= $request->input('txtnombre');
        session()->flash('exito','Se guardó el usuario '.$usuario);
        return to_route('rutaform');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
