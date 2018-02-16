<?php

namespace App\Http\Controllers;
use App\Noticia;

use Illuminate\Http\Request;

class NoticiasController extends Controller
{
   public function mostrarNoticias()
    {
         
       return view('noticias.index', array('arrayNoticias'=> Noticia::all() ));
	}

    public function crearNoticias()
    {
        return view('noticias.crear');
    }

    public function store(Request $request)
    {
        //Falta guardar el archivo
        $n = new Noticia;
        $n->titulo = $request->input('titulo'); 
        $n->descripcion = $request->input('descripcion'); 
        $n = $request->file('imagen');
        $n->imagen = $archivo->getClientOriginalName();        
        $n->fecha = $request->input('fecha');
        $n->user_id = $request->input('id_user');            
        $n->save();
        Storage::disk('local')->put($n->imagen,  \File::get($archivo));
        return view('noticias.crear');
    }

    
}
