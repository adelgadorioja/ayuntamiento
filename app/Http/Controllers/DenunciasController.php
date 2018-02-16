<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Denuncia;
use Illuminate\Http\Request;
use Storage;

class DenunciasController extends Controller
{
    public function mostrarDenuncias()
    {
        
        return view('denuncias.index', array('arrayDenuncias'=> Denuncia::all() ));
	}

    public function mostrarDenunciasPorUsuario() // id de la denuncia
    {
        $id = Auth::user()->id;        
        return view('denuncias.denunciasUser', array('arrayDenuncias'=> Denuncia::where('user_id', $id)->get() ));
    }

    
    public function crearDenuncias()
    {
        return view('denuncias.crear');
    }

    public function editarDenuncias($id)
    {
        return view('denuncias.editar', array('denuncia' => Denuncia::where('id_denuncia','=',$id)->first()));
    }

    public function responderDenuncias(Request $request)
    {
        $denuncia = Denuncia::where('id_denuncia','=', $request->input('idDenuncia'))->first();
        $denuncia->respuesta = $request->input('respuesta');
        $denuncia->update();
    }

    public function store(Request $request)
    {
        //Falta guardar el archivo
        $denuncia = new Denuncia;
        $denuncia->titulo = $request->input('titulo'); 
        $denuncia->descripcion = $request->input('descripcion'); 
        $archivo = $request->file('imagen');
        $denuncia->imagen = $archivo->getClientOriginalName(); 
        $denuncia->localizacion = $request->input('localizacion');    
        $denuncia->atendidoPor = $request->input('atendidoPor'); 
        $denuncia->fecha = $request->input('fecha');
        $denuncia->user_id = $request->input('id_user');            
        $denuncia->save();
        Storage::disk('local')->put($denuncia->imagen,  \File::get($archivo));
        return view('denuncias.crear');
    }
}