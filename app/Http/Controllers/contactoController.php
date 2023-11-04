<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacto;

class contactoController extends Controller
{
    //
    public function store(Request $request){
        $directorio= new Contacto();
        $directorio->codigoEntrada = $request->input("codigoEntrada");
        $directorio->nombre = $request->input("nombre");
        $directorio->apellido = $request->input("apellido");
        $directorio->correo = $request->input("correo");
        $directorio->telefono = $request->input("telefono");
        $directorio->save();
        
        return redirect('directorio');
    }
}
