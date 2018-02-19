<?php

namespace App\Http\Controllers;
use App\Noticia;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Storage;

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
        $noticia = new Noticia;
        $noticia->titulo = $request->input('titulo'); 
        $noticia->descripcion = $request->input('descripcion'); 
        $archivo = $request->file('imagen');
        $noticia->imagen = $archivo->getClientOriginalName();        
        $noticia->fecha = $request->input('fecha');
        $noticia->user_id = $request->input('id_user');            
        $noticia->save();
        Storage::disk('local')->put($noticia->imagen,  \File::get($archivo));
        return view('noticias.crear');
    }    
}
