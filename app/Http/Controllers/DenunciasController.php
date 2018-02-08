<?php

namespace App\Http\Controllers;
use App\Denuncia;
use Illuminate\Http\Request;

class DenunciasController extends Controller
{
    public function mostrarDenuncias()
    {
        
        return view('denuncias.index'/*, array('arrayDenuncias'=> Denuncias::all() )*/);
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
        $c = new Denuncias;
        if ($request->has('titulo')){    //...  
            $c->titulo = $request->input('titulo'); 
            $c->descripcion = $request->input('descripcion'); 
            $c->imagen = $request->input('imagen');   
            $c->localizacion = $request->textarea('localizacion');    
            $c->atendidoPor = $request->input('atendidoPor'); 
            $c->fecha = $request->input('fecha');
            $c->user_id = $request->input('id_user');            
            $c->save();   
            {{}};        
        }       
    }
}
