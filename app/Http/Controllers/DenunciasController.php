<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DenunciasController extends Controller
{
    public function getIndex()
    {
        return view('layouts.denuncias');
	}

    public function mostrarDenuncias($id) // id de la denuncia
    {
        return view('denuncias.mostrar' /*, array('denuncia'=>Movie::findOrFail($id+1), 'id'=>$id)*/);
    }

    
    public function crearDenuncias()
    {
        return view('denuncias.crear');
    }

    public function editarDenuncias($id)
    {
        return view('denuncias.editar' /*, array(Movie::findOrFail($id+1),'id'=>$id)*/);
    }
}
