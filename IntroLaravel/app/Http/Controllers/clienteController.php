<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//importacion de bdd para trabajar y una llamada carbon es para el manejo de las fechas
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Http\Requests\validadorClientes;


class ClienteController extends Controller
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
    public function edit($id)
    {
$cliente = DB::table('clientes')->where('id', $id)->first();
if(!cliente){
    return redirect()->route('clientes.index')->with('error','cliente no se encontro');
    }
    return view('editar', compact('cliente'));
}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'txtnombre'=>'required|string|max:255',
            'txtapellido'=>'required|string|max:255',
            'txtcorreo'=>'required|email',
            'txttelefono'=>'required|string|max:15',
        ]);
        DB::table('clientes')->where('id',$id)->update([
            'nombre'=>$request->input('txtnombre'),
            'apellido'=>$request->input('txtapellido'),
            'correo'=>$request->input('txtcorreo'),
            'telefono'=>$request->input('txttelefono'),
            'updated_at'=> Carbon::now(),
        ]);
      return redirect()->route('clientes.index')->with('exito','Cliente actualizado');
      //posoblemente no es index y es inicio
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $cliente = DB::table('cliente')->where('id', $id)->first();
        if (!$cliente){
return redirect()->route('clientes.index')->with('error','cliente no enviado');
        }        
        DB::table('clientes')->where('id',$id)->delete();
        return redirect()->route('clientes.index')->with('exito','Cliente eliminado');
        }
}
