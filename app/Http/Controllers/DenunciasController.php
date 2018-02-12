<?php

namespace App\Http\Controllers;
use App\Denuncia;
use Illuminate\Http\Request;

class DenunciasController extends Controller
{
    public function mostrarDenuncias()
    {
        
        return view('denuncias.index', array('arrayDenuncias'=> Denuncia::all() ));
	}

    public function mostrarDenunciasPorUsuario($id) // id de la denuncia
    {
        return view('denuncias.denunciasUser' /*, array('denuncia'=>Movie::findOrFail($id+1), 'id'=>$id)*/);
    }

    
    public function crearDenuncias()
    {
        return view('denuncias.crear');
    }

    public function editarDenuncias($id)
    {
        return view('denuncias.editar' /*, array(Movie::findOrFail($id+1),'id'=>$id)*/);
    }

    public function store(Request $request)
    {
        //Falta guardar el archivo
        $denuncia = new Denuncia;
        $denuncia->titulo = $request->input('titulo'); 
        $denuncia->descripcion = $request->input('descripcion'); 
        $denuncia->imagen = $request->input('imagen');   
        $denuncia->localizacion = $request->input('localizacion');    
        $denuncia->atendidoPor = $request->input('atendidoPor'); 
        $denuncia->fecha = $request->input('fecha');
        $denuncia->user_id = $request->input('id_user');            
        $denuncia->save();
    }
}