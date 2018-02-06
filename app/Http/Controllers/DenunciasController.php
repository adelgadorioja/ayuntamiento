<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DenunciasController extends Controller
{
    public function getIndex()
    {
        return view('denuncia.index');
	}

    public function mostrarDenuncias($id) // id de la denuncia
    {
        return view('denuncia.mostrar' /*, array('denuncia'=>Movie::findOrFail($id+1), 'id'=>$id)*/);
    }

    
    public function crearDenuncias()
    {
        return view('denuncia.crear');
    }

    public function editarDenuncias($id)
    {
        return view('denuncia.editar' /*, array(Movie::findOrFail($id+1),'id'=>$id)*/);
    }
}
