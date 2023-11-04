<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Directorio;

class directorioController extends Controller
{
    //
    public function index(){
        $directorio = Directorio::all();
        return view('directorio', compact('directorio'));
    }

    public function crear(){
        return view('crearEntrada');
    }

    public function buscar(){
        return view('buscar');
    }

    public function ver($codigoEntrada){
        $contacto = Directorio::find($codigoEntrada);
        return view('vercontactos', compact('directorio'));
    }
    public function delete($codigoEntrada){
        $directorio = Directorio::find($codigoEntrada);
        return view('eliminar', compact('directorio'));
    }

    public function store(Request $request){
        $directorio= new Directorio();
        $directorio->codigoEntrada = $request->input("codigoEntrada");
        $directorio->nombre = $request->input("nombre");
        $directorio->apellido = $request->input("apellido");
        $directorio->correo = $request->input("correo");
        $directorio->telefono = $request->input("telefono");
        $directorio->save();
        
        return redirect('directorio');
    }

    public function buscarContacto(Request $request){
        $directorio= new Directorio();
        $correo = $request->input("correo");
        $directorio = Directorio::where('correo', $correo);
        return view('vercontactos', compact('directorio'));
    }

    public function agragarContacto(){
        return view('agregarcontacto');
    }
}
